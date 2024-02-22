<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return '<p>Nama : Najwa Azzahra</p>' .
        '<p>NIM : 2241720139</p>';
    }
}
