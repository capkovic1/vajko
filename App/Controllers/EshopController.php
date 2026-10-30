<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class EshopController extends BaseController
{
    public function index(Request $request): Response
    {
        $produkty = [
            [
                'name' => 'Tričko Tricking',
                'price' => '19,99 €',
                'rating' => '⭐ 5.0'
            ],
            [
                'name' => 'Tepláky',
                'price' => '39,99 €',
                'rating' => '⭐ 4.8'
            ],
            [
                'name' => 'Mikina Tricking',
                'price' => '49,99 €',
                'rating' => '⭐ 4.9'
            ]

        ];

        return $this->html([
            'produkty' => $produkty
        ]);
    }
}