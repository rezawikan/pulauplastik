<?php

namespace App\Http\Controllers\OtherLang;

use App\Models\OtherLang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherLangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = OtherLang::latest()->paginate(12);

        return view('dashboard.manage.otherlang.index', [ 'datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manage.otherlang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OtherLang::create($request->all());

        return redirect()->route('dashboard.otherlang.index')->with('status', 'Other Lang has added!');
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
        $data = OtherLang::find($id);

        return view('dashboard.manage.otherlang.edit', ['data' => $data]);
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
        $data = OtherLang::find($id);
        
        $data->update($request->all());

        return redirect()->route('dashboard.otherlang.index')->with('status', 'Other Lang has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $other = OtherLang::find($id);

        $other->delete();
        return redirect()->route('dashboard.otherlang.index')->with('status', 'Other Lang '.$other->title.' has deleted!');
    }
}
