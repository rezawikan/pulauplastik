<?php

namespace App\Http\Controllers\Other;

use App\Http\Requests\OtherRequest;
use App\Models\Other;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\File;

class OtherController extends Controller
{
    use File;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Other::latest()->paginate(12);

        return view('dashboard.resources.other.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.resources.other.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtherRequest $request)
    {
        $data = [
          'title' => $request->title,
          'link' => $request->link,
          'other_type_id' => $request->other_type_id
        ];

        if ($request->hasFile('file')) {
            $this->file = $request->file('file');
            $data = array_merge($data, [
                'file' => $this->saveFile('other')
              ]);
        }

        Other::create($data);

        return redirect()->route('dashboard.other.index')->with('status', 'Other has added!');
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
        $data = Other::find($id);
        return view('dashboard.resources.other.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OtherRequest $request, $id)
    {
        $other = Other::find($id);
        $data  = [
          'title' => $request->title,
          'link' => $request->link,
          'other_type_id' => $request->other_type_id
        ];

        if ($request->file('file')) {
            $this->deleteFile($other->file);
            $this->file = $request->file('file');
            $data = array_merge($data, [
            'file' => $this->saveFile('other')
          ]);
        }

        $other->update($data);

        return redirect()->route('dashboard.other.index')->with('status', 'Other has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $other = Other::find($id);
        if ($other->file) {
            $this->deleteFile($other->file);
        }

        $other->delete();
        return redirect()->route('dashboard.other.index')->with('status', 'Other '.$other->title.' has deleted!');
    }
}
