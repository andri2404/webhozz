<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{
    //

    public function laravel(){
        $nama = " Andri Ekayani";
        $pelajaran = ["Matematika","Biologi","Kimia"];
        $alamat = ["bekasi","bogor","jakarta","tangerang"];
        return view ('biodata',['nama' => $nama,'matkul'=>$pelajaran,'alamat'=>$alamat]);
         
    }
}
