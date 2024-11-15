<?php

namespace App\Http\Controllers;
use App\Models\catatan;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('verifikasi.ektp');
    }

    public function create_page(){
        return view('template.index');
    }
    

    public function history(){
        $data['catatan'] = catatan::get();
        $data['users'] = 'users';
        return view('history.index')->with($data);
    }

    public function create(Request $request){

        Catatan::create($request->all());
        return redirect('history');
    }
    
}
