<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Fiksi',
            'Sejarah',
            'Pengembangan Diri',
            'Teknologi',
            'Sains'
        ];

        return view('categories.index', compact('categories'));
    }
}