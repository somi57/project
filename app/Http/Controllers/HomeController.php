<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function home()
    {
        $animal=Animal::all();
        return view('home.index',compact('animal'));
    }
}
