<?php

namespace App\Http\Controllers\Upcoming;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Upcoming;

class UpcomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Upcoming::orderBy('date', 'desc')->paginate(12);

        return view('dashboard.upcoming.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.upcoming.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Upcoming::create($request->all());

        return redirect()->route('dashboard.upcoming.index')->with('status', 'Upcoming has added!');
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
        $data = Upcoming::find($id);
        return view('dashboard.upcoming.edit', ['data' => $data]);
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
        $upcoming = Upcoming::find($id);
        $upcoming->update($request->all());

        return redirect()->route('dashboard.upcoming.index')->with('status', 'Upcoming has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upcoming = Upcoming::find($id);

        $upcoming->delete();
        return redirect()->route('dashboard.upcoming.index')->with('status', 'Upcoming '.$upcoming->title.' has deleted!');
    }
}
