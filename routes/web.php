<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $headerNavLinks = [
        "Characters",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Collectibles",
        "Videos",
        "Fans",
        "News",
        "Shop"
    ];
    $footerNavSections = [
        [
            "title" => "DC Comics",
            "links" => [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News"
            ]
        ],
        [
            "title" => "Shop",
            "links" => [
                "Shop DC",
                "Shop DC Collectibles"
            ]
        ],
        [
            "title" => "DC",
            "links" => [
                "Terms of Use",
                "Privacy policy (New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ]
        ],
        [
            "title" => "Sites",
            "links" => [
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa",
            ]
        ]
    ];

    return view('pages.home', compact('headerNavLinks', 'footerNavSections'));
});
