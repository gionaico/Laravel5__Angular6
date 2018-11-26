<?php

namespace App\RealWorld\Transformers;

class DispositivosTransformer extends Transformer
{
    protected $resourceName = 'dispositivos';

    public function transform($data)
    {
            return [
            'name'      => $data['name'],
            'price'     => $data['price'],
            'brand'     => $data['brand'],
            'model'     => $data['model'],
            'slug'      => $data['slug'],
            'origin_country'=> $data['origin_country'],
        ];
    }
}