<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function contacts() {
        return view('contacts');
    }

    public function about() {
        return view('about');
    }

    public function details($id) {
        $train = Train::find($id);
        if(is_null($train)) {
            abort(404, 'Train not found!');
        }
        return view('details', compact('train'));
    }
}
