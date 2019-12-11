<?php namespace App\Http\Controllers;

use App\Http\Requests\GalleryStoreRequest;
use App\Image;

class Gallery extends Controller
{
    public function __construct()
    {
        $this->middleware('breadcrumbs:gallery.index,gallery');
        $this->middleware('breadcrumbs:gallery.preview')->only('preview');
        $this->middleware('breadcrumbs:gallery.view')->only('view');
        $this->middleware('breadcrumbs:gallery.upload')->only('upload');
    }

    public function index()
    {
        $images = Image::where('user_id', request()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate(25)
            ->withPath(path([self::class, 'index']));

        return view($this->view, ['images' => $images]);
    }

    public function preview(Image $image)
    {
        event(new \App\Events\Stats\GalleryImagePreviewed($image->id));

        return view($this->view, ['image' => $image]);
    }

    public function store(GalleryStoreRequest $request)
    {
        $file = $request->getFile();

        $image = Image::createFromFile($file, $request->user()->id);
        $image->siteThumbnail($file);
        $image->upload($file);
        $image->save();

        event(new \App\Events\Stats\GalleryImageUploaded);

        return [
            'id' => $image->id,
            'status' => 'OK',
            'original' => $image->originalUrl(),
            'thumbnail' => $image->thumbnailUrl(),
        ];
    }

    public function view(Image $image)
    {
        event(new \App\Events\Stats\GalleryImageViewed($image->id));

        return view($this->view, ['image' => $image]);
    }

    public function upload()
    {
        return view($this->view);
    }
}
