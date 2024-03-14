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
    $comics = config('comics');
    $categories = [
        [
            'name' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'name' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'name' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'name' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'name' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ]
    ];
    $socials = [ 'footer-facebook.png', 'footer-periscope.png', 'footer-pinterest.png', 'footer-twitter.png', 'footer-youtube.png' ];

    return view('pages.home', compact('headerNavLinks', 'footerNavSections', 'comics', 'categories', 'socials'));
});
