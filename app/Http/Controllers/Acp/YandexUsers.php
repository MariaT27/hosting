<?php namespace App\Http\Controllers\Acp;

use App\Domain;
use App\YandexUser as Model;
use Illuminate\Validation\Rule;

class YandexUsers extends CommonController
{
    protected $show_with_count = ['domains'];

    public function index()
    {
        $models = Model::orderBy('account')->paginate();

        return view($this->view, compact('models'));
    }

    public function create()
    {
        $model = $this->createGeneric();

        $domains = Domain::yandexReady()->get();

        return view($this->getView(), compact('domains', 'model'));
    }

    public function edit($id)
    {
        $model = $this->editGeneric($id);

        $domains = Domain::yandexReady($model->id)->get();

        return view($this->getView(), compact('domains', 'model'));
    }

    /**
     * @param  Model|null $model
     * @return array
     */
    protected function rules($model = null)
    {
        return [
            'token' => 'required',
            'account' => [
                'required',
                Rule::unique('yandex_users', 'account')->ignore($model->id ?? null),
            ],
        ];
    }

    protected function storeModel()
    {
        $model = Model::create($this->request->all());

        // Newly specified user domains
        foreach ($this->request->input('domains', []) as $id => $one) {
            $user_domains[] = $id;
        }

        if (!empty($user_domains)) {
            Domain::whereIn('id', $user_domains)
                ->update(['yandex_user_id' => $model->id]);
        }

        return $model;
    }

    /**
     * @param  Model $model
     */
    protected function updateModel($model)
    {
        $token = $this->request->input('token');

        $model->account = $this->request->input('account');

        if ($token) {
            $model->token = $token;
        }

        $model->save();

        // Domains w/out yandex user specified
        foreach ($model->domains as $domain) {
            if (!$this->request->input("domains.{$domain->id}")) {
                $anon_domains[] = $domain->id;
            }
        }

        if (!empty($anon_domains)) {
            Domain::whereIn('id', $anon_domains)
                ->update(['yandex_user_id' => 0]);
        }

        // Newly specified user domains
        foreach ($this->request->input('domains', []) as $id => $one) {
            $user_domains[] = $id;
        }

        if (!empty($user_domains)) {
            Domain::whereIn('id', $user_domains)
                ->update(['yandex_user_id' => $model->id]);
        }
    }
}