<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response($genres, 200);
    }
}
