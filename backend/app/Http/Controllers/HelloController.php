<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Person as Person;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Person::all();

        $param = [
          'items' => $items, 'user' => $user
        ];

        return view('hello', $param);
    }
}
