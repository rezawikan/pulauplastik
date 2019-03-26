<?php

namespace App\Http\Controllers\Media;

use App\Http\Requests\MediaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Traits\File;

class MediaController extends Controller
{
    use File;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Media::latest()->paginate(12);

        return view('dashboard.resources.media.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.resources.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MediaRequest $request)
    {
        $photo = null;

        if ($request->file('photo')) {
            $this->file = $request->file('photo');
            $photo = $this->saveFile('media');
        }

        Media::create([
        'title' => $request->title,
        'photo' => $photo,
        'link' => $request->link,
      ]);

        return redirect()->route('dashboard.media.index')->with('status', 'Media has added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Media::find($id);
        return view('dashboard.resources.media.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MediaRequest $request, $id)
    {
        $infographic = Media::find($id);
        $data = [
          'title' => $request->title,
          'link' => $request->link
        ];

        if ($request->file('photo')) {
            $this->deleteFile($infographic->photo);
            $this->file = $request->file('photo');
            $data = array_merge($data, [
              'photo' => $this->saveFile('media')
            ]);
        }

        $infographic->update($data);

        return redirect()->route('dashboard.media.index')->with('status', 'Media has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::find($id);
        if ($media->photo) {
            $this->deleteFile($media->photo);
        }

        $media->delete();
        return redirect()->route('dashboard.media.index')->with('status', 'Media '.$media->title.' has deleted!');
    }
}
