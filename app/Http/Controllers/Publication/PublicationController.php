<?php

namespace App\Http\Controllers\Publication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Traits\File;

class PublicationController extends Controller
{
    use File;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Publication::latest()->paginate(12);

        return view('dashboard.resources.publication.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.resources.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->file = $request->file('photo');
        Publication::create([
        'title' => $request->title,
        'photo' => $this->saveFile('publication'),
        'link' => $request->link,
      ]);

        return redirect()->route('dashboard.publication.index')->with('status', 'Publication has added!');
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
        $data = Publication::find($id);
        return view('dashboard.resources.publication.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $infographic = Publication::find($id);
        $data = [
          'title' => $request->title,
          'link' => $request->link
        ];

        if ($request->file('photo')) {
            $this->deleteFile($infographic->photo);
            $this->file = $request->file('photo');
            $data = array_merge($data, [
              'photo' => $this->saveFile('publication')
            ]);
        }

        $infographic->update($data);

        return redirect()->route('dashboard.publication.index')->with('status', 'Publication has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = Publication::find($id);
        if ($publication->photo) {
            $this->deleteFile($publication->photo);
        }

        $publication->delete();
        return redirect()->route('dashboard.publication.index')->with('status', 'Infographic '.$publication->title.' has deleted!');
    }
}
