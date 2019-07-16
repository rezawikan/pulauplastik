<?php

namespace App\Http\Controllers\Screenings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HostAScreeningRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\HostAScreeningNotification;

class HostAScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('host-a-screening.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HostAScreeningRequest $request)
    {
        $when = now();

        Notification::route('mail', 'pulauplastik@kopernik.info')->notify((new HostAScreeningNotification($request))->delay($when));

        return redirect('selenggarakan-pemutaran')->with('status', 'Terimakasih telah menghubungi Kami. Selanjutnya, tim kami akan menghubungi Anda segera');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
