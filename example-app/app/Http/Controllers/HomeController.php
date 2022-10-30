<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'name' => 'Электричество', 
            'opisanie' => 'Служат для указания мест работы и для безопасного подхода к рабочему месту. Надписи и рамки выполняются буквами сине-белой цветовой гаммой.',
            'name_1' => 'Огонь',
            'opisanie_2' => 'Используется, чтобы обратить внимание на наличие легковоспламеняющихся веществ', 
            'name_3' => 'Радиация',
            'opisanie_3' => 'Международный символ радиации представляет собой трилистник вокруг небольшого центрального круга, представляющего излучение атома.',
            'privet' => 'Привет',
            'img_logo' => 'img/head 1.png',
            'img_1' => 'img/Icon-13.png',
            'img_2' => ' img/Icon-11.png',
            'img_3' => 'img/Icon-26.png',
        ]);
    }
}
