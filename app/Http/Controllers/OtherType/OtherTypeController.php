<?php

namespace App\Http\Controllers\OtherType;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OtherType;
use App\Http\Requests\OtherTypeRequest;

class OtherTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = OtherType::latest()->paginate(12);

        return view('dashboard.resources.othertype.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.resources.othertype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtherTypeRequest $request)
    {
        OtherType::create($request->all());

        return redirect()->route('dashboard.othertype.index')->with('status', 'Other Type has added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = OtherType::find($id);

        return view('dashboard.resources.othertype.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OtherTypeRequest $request, $id)
    {
        $data = OtherType::find($id);

        $data->update($request->all());

        return redirect()->route('dashboard.othertype.index')->with('status', 'Other Type has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $other = OtherType::find($id);

        $other->delete();
        return redirect()->route('dashboard.othertype.index')->with('status', 'Other Type '.$other->title.' has deleted!');
    }
}
