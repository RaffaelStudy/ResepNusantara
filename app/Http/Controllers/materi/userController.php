<?php

namespace App\Http\Controllers\materi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index(){

        return view('menu');
    }

    public function dummy(){
        $nama = 'Nurul';
        $data = ['namaOrang' => $nama];
        return view('dummy.latihan', $data);
    }

       public function about(){

        return view('about');
    }

       public function resep(){

        return view('resep');
    }

    public function pecelLele(){

        return view('resep.Pecellele');

        
    }    public function rendang(){

        return view('resep.Rendang');
    }

    public function nasiKuning(){

        return view('resep.NasiKuning');
    }
    
     public function ayamBakar(){

        return view('resep.ayamBakar');
    }

     public function ayamGoreng(){

        return view('resep.ayamGoreng');
    }

     public function orekTempe (){

        return view('resep.orekTempe');
    }

     public function sayurAsem(){

        return view('resep.sayurAsem');
    }

     public function sopAyam(){

        return view('resep.sopAyam');
    }

     public function sotoAyam(){

        return view('resep.sotoAyam');
    }

     public function tempeGoreng(){

        return view('resep.tempeGoreng');
    }

    

}
