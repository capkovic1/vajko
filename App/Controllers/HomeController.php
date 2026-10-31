<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class HomeController
 * Handles actions related to the home page and other public actions.
 */
class HomeController extends BaseController
{
    /**
     * Authorizes controller actions based on the specified action name.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Displays the default home page with workshop data.
     */
    public function index(Request $request): Response
    {
        return $this->home($request);
    }

    public function home(Request $request): Response
    {
        // 1. Pripravíme si dáta, ktoré chceme poslať do HTML šablóny
        $workshopy = [
            ['nazov' => 'Workshop Bratislava', 'cena' => '39,99 €'],
            ['nazov' => 'Workshop Košice', 'cena' => '39,99 €'],
            ['nazov' => 'Workshop Nitra', 'cena' => '39,99 €'],
            ['nazov' => 'Tricking Camp 2024', 'cena' => '149,99 €'],
        ];

        // 2. Pošleme dáta do pohľadu cez metódu $this->html()
        // (BaseController si zvyčajne sám automaticky odvodí názov pohľadu podľa mena akcie, teda Home/index)
        return $this->html([
            'workshopy' => $workshopy
        ]);
    }

    /**
     * Displays the contact page.
     */
    public function eshop(Request $request): Response
    {
        $produkty = [
            [
                'name' => 'Tričko Tricking',
                'price' => '19,99 €',
                'rating' => '⭐ 5.0',
                'image' => 'images/tshirt.png' // Zmenené zo zložitej cesty
            ],
            [
                'name' => 'Tepláky',
                'price' => '39,99 €',
                'rating' => '⭐ 4.8',
                'image' => 'images/tshirt.png'
            ],
            [
                'name' => 'Mikina Tricking',
                'price' => '49,99 €',
                'rating' => '⭐ 4.9',
                'image' => 'images/tshirt.png'
            ]
        ];

        return $this->html([
            'produkty' => $produkty
        ]);
    }
    public function info(Request $request): Response
    {
        return $this->html([
            $request
        ]);
    }
}
