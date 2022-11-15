<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skin extends Controller
{
    public function index(){
      $isi = [

        'skinname' => ['Reaver vandal' , 'Prime vandal' , 'Glitchpop vandal'],
        'image' => ['https://cdn-offer-photos.zeusx.com/4038f6d0-5c16-4e99-8b52-cc321ffd7c44.jpg',
        'https://pbs.twimg.com/media/FMfFX-yXoAEmIZ6.jpg:large',
        'https://cdn-offer-photos.zeusx.com/a5cda03e-6e27-4152-9ffc-a96874374cf9.jpg'],

        'price' => ['Rp 150.000', 'Rp 175.000', 'Rp 125.000'],

      ];

        return view('main',$isi);

    }




}
