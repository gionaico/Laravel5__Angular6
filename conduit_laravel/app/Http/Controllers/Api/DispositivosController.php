<?php

namespace App\Http\Controllers\Api;

use App\dispositivos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealWorld\Transformers\DispositivosTransformer;

class DispositivosController extends ApiController
{
    
    /**
     * UserController constructor.
     *
     * @param DispositivosTransformer $transformer
     */
    public function __construct(DispositivosTransformer $transformer)
    {
        $this->transformer = $transformer;
    }


    public function index()
    {
        /* $array = array('1' => 'uno',
               '2' => 'dos',
               '3' => 'xcxcx');
        return $array; */
        $dispositivos = dispositivos::all();
        return $this->respondWithTransformer($dispositivos);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(dispositivos $dispositivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(dispositivos $dispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dispositivos $dispositivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(dispositivos $dispositivos)
    {
        //
    }
}
