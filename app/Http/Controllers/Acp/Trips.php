<?php namespace App\Http\Controllers\Acp;

use App\City;
use App\Notifications\TripPublished;
use App\Trip as Model;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;
use Ivacuum\Generic\Controllers\Acp\Controller;

class Trips extends Controller
{
    protected $sort_key = 'date_start';
    protected $sortable_keys = ['date_start', 'views', 'comments_count', 'photos_count'];
    protected $show_with_count = ['comments', 'photos'];

    public function index()
    {
        $status = $this->request->input('status');

        list($sort_key, $sort_dir) = $this->getSortParams();

        $models = Model::with('user')
            ->withCount('comments', 'photos')
            ->forCity($this->request->input('city_id'))
            ->forCountry($this->request->input('country_id'))
            ->unless(is_null($status), function (Builder $query) use ($status) {
                return $query->where('status', $status);
            })
            ->orderBy($sort_key, $sort_dir)
            ->paginate(100);

        return view($this->view, compact('models', 'status'));
    }

    public function notify($id)
    {
        /* @var Model $model */
        $model = $this->getModel($id);

        if ($model->status !== Model::STATUS_PUBLISHED) {
            return back()->with('message', 'Для рассылки уведомлений поездка должна быть опубликована');
        }

        $users = User::forAnnouncement()->get();

        \Notification::send($users, new TripPublished($model));

        return back()->with('message', 'Уведомления разосланы пользователям: '.sizeof($users));
    }

    /**
     * @param  Model|null $model
     * @return array
     */
    protected function rules($model = null)
    {
        return [
            'slug' => [
                'bail',
                'required',
                Rule::unique('artists', 'slug')->ignore($model->id ?? null),
                Rule::unique('cities', 'slug')->ignore($model->id ?? null),
                Rule::unique('gigs', 'slug')->ignore($model->id ?? null),
                Rule::unique('trips', 'slug')->ignore($model->id ?? null),
            ],
            'city_id' => 'required|integer|min:1',
            'title_ru' => is_null($model) ? '' : 'required',
            'title_en' => is_null($model) ? '' : 'required',
            'date_end' => 'required|date',
            'date_start' => 'required|date',
        ];
    }

    protected function storeModel()
    {
        /* @var City $city */
        $city = City::findOrFail($this->request->input('city_id'));

        $data = $this->request->all();
        $data['user_id'] = $this->request->user()->id;
        $data['title_ru'] = $city->title_ru;
        $data['title_en'] = $city->title_en;

        $model = Model::create($data);

        // TODO
        if (\App::isLocal()) {
            $model->createStoryFile();
        }

        return $model;
    }
}
