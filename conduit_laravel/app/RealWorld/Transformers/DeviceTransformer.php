<?php

namespace App\RealWorld\Transformers;

class DeviceTransformer extends Transformer
{
    protected $resourceName = 'device';

    public function transform($data)
    {
            return [
            'name'         => $data['name'],
            'price'         => $data['price'],
            'origin_country'=> $data['origin_country'],
            'brand'         => $data['brand'],
            'model'       => $data['model'],
        ];
    }
}