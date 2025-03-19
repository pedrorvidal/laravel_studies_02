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
            'names' => ['John', 'Jane', 'Doe'],
            'indice' => 1
        ];
        return view('home', $data);
    }
    public function submitForm(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required|min:6',
        ]);
        echo "formulario submetido com sucesso";
    }
}
