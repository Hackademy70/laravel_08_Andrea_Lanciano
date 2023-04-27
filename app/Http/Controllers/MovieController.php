<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function showForm(){
        return view('/formcreate');
    }

    // add a movie (Route::post)
    public function addMovie(Request $request){

        $movies = Movie::create(
            [
                'user_id' => Auth::user()->id,
                'movieTitle' => $request->input('movieTitle'),
                'movieDescription' => $request->input('movieDescription'),
                'movieDuration' => $request->input('movieDuration'),
                'pegi' => $request->input('pegi'),
                'genre' => $request->input('genre'),
            ]
        );

        return redirect()->route('welcome');
    }
}
