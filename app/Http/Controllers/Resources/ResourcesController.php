<?php

namespace App\Http\Controllers\Resources;

use App\Models\Infographic;
use App\Models\Publication;
use App\Models\Other;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resources.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function infographic()
    {
        $data = Infographic::latest()->paginate(12);

        return view('infographic.index', [ 'datas' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function publications()
    {
        $data = Publication::latest()->paginate(12);

        return view('publication.index', [ 'datas' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function others(Request $request)
    {
      $type = $request->type;

      $data = Other::when($type, function ($query, $type) {
          return $query->where('other_type_id', $type );
      }, function ($query) {
          return $query->latest();
      })->paginate(15);


        return view('other.index', [ 'datas' => $data]);
    }
}
