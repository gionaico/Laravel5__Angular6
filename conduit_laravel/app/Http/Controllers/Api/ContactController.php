<?php

namespace App\Http\Controllers\Api;


use App\RealWorld\Transformers\Transformer;
use Illuminate\Http\Request;

class ContactController extends ApiController
{
    /**
     * FavoriteController constructor.
     *
     * @param ContactTransformer $transformer
     */
    public function __construct(Transformer $transformer)
    {
        $this->transformer = $transformer;

    }

    /**
     * Favorite the article given by its slug and return the article if successful.
     *
     * @param Contact $article
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendEmail(Request $request )
    {
        $array = array('1' => 'uno',
               '2' => 'dos',
               '3' => 'tres');
        return $array;
    }

    
}
