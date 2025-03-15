<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    //
    public function showView(): View
    {
        return view('admin.newPage3', ['value' => 80]);

        //método 1
        // $data = [
        //     'name' => 'John Doe',
        //     'phone' => 393939393,
        // ];
        // return view('admin.newPage3', $data);

        //método 2
        // return view('admin.newPage3', [
        //     'name' => 'John Doe',
        //     'phone' => 393939393,
        // ]);

        //método 3
        // return view('admin.newPage3')->with('name', 'Pedro Vidal')->with('phone', 222222);

        //método 4 - pesquisa se existem as variáveis do compact em outras parte do código, pra pegar seu valor
        // $name = 'Pedro Vidal';
        // $phone = 222222;
        // return view('admin.newPage3', compact('name', 'phone'));
    }
}
