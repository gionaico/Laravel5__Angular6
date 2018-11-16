<?php

namespace App\Http\Controllers\Api;

use App\Devices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealWorld\Transformers\DeviceTransformer;

class DeviceController extends ApiController
{
    /**
     * UserController constructor.
     *
     * @param DeviceTransformer $transformer
     */
    public function __construct(DeviceTransformer $transformer)
    {
        $this->transformer = $transformer;
    }


    public function index()
    {
        /* return "DeviceController"; */
        $devices = Devices::all();
        return $this->respondWithTransformer($devices);
    }
}
