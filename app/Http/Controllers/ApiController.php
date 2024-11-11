<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function listMovies() {
        $movies = Movie::all();
        return response()->json($movies);
    }
}
