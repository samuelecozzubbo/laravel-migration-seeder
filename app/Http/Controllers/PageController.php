<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function trainList()
    {
        $trains = Train::whereDate('departure_date', '=', '2024-09-12')->orderBy('departure_time')->get();
        return view('trainList', compact('trains'));
    }
}
