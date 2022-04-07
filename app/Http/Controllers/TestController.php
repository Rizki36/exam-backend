<?php

namespace App\Http\Controllers;

use App\Models\Rectangle;
use App\Models\Triangle;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $triangle = new Triangle(5, 10);
        $rectangle = new Rectangle(5, 10);


        dd($triangle->wide, $rectangle->wide);
    }
}
