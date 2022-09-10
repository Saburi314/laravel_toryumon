<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Faker\Provider\ar_JO\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Person as Person;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $items = DB::table('people')->get();
        $items = Person::all();

        return view('hello', ['items' => $items]);

        // return view('hello');
    }
}
