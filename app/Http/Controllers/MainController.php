<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $isim = "Harry";
        $soyisim = "Potter";
        $isimler = ['Burcu', 'Harry', 'Hermonie', 'Ron', 'Sirius'];
        $kullanicilar = [
            ['id'=>1, 'kullanici_adi'=> 'Burcu'],
            ['id'=>2, 'kullanici_adi'=> 'Harry'],
            ['id'=>3, 'kullanici_adi'=> 'Hermonie'],
            ['id'=>3, 'kullanici_adi'=> 'Ron'],
            ['id'=>5, 'kullanici_adi'=> 'Sirius']
        ];
        return view('main', compact('isim','soyisim', 'isimler', 'kullanicilar'));
        //return view('main')->with(['isim'=>$isim, 'soyisim'=>$soyisim,]);
    }

}
