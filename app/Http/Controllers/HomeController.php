<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing()
    {
        return view('landing', [
            'categories' => Category::all(),
            'donations' => Donation::limit(4)->latest()->get()
        ]);
    }
}
