<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    //
    public function showView(): View
    {
        $data = [
            'value' => 100,
            'cities' => ['New York', 'Los Angeles', 'Chicago'],
            'names' => []jk
        ];
        return view('home', $data);
    }
}
