<?php

namespace App\Http\Controllers\Infographic;

use App\Http\Requests\InfographicRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Infographic;
use Illuminate\Support\Facades\Storage;
use App\Traits\File;

class InfographicController extends Controller
{
    use File;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Infographic::latest()->paginate(12);

        return view('dashboard.resources.infographic.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.resources.infographic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfographicRequest $request)
    {
        $photo = null;

        if ($request->file('photo')) {
            $this->file = $request->file('photo');
            $photo = $this->saveFile('infographic');
        }

        Infographic::create([
          'title' => $request->title,
          'photo' => $photo
        ]);

        return redirect()->route('dashboard.infographic.index')->with('status', 'Infographic has added!');
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
        $data = Infographic::find($id);
        return view('dashboard.resources.infographic.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfographicRequest $request, $id)
    {
        $infographic = Infographic::find($id);
        $data = ['title' => $request->title];

        if ($request->file('photo')) {
            $this->deleteFile($infographic->photo);
            $this->file = $request->file('photo');
            $data = array_merge($data, [
              'photo' => $this->saveFile('infographic')
            ]);
        }

        $infographic->update($data);

        return redirect()->route('dashboard.infographic.index')->with('status', 'Infographic has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infographic = Infographic::find($id);
        if ($infographic->photo) {
            $this->deleteFile($infographic->photo);
        }

        $infographic->delete();
        return redirect()->route('dashboard.infographic.index')->with('status', 'Infographic '.$infographic->title.' has deleted!');
    }
}
