<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\MovieModel;
use App\Models\TicketpriceModel;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Session;

class MoviesController extends Controller
{
    public function categories()
    {
        $movie = MovieModel::orderBy("created_at", "asc")->paginate(4);
        return view("client.pages.movies", compact('movie'));
    }
    public function movie_details(Request $request)
    {
        $movie_details = MovieModel::where("id", $request->id)->first();
        return view("client.pages.movie-details", compact("movie_details"));
    }
    public function all_movies()
    {
        $all_movies = MovieModel::all();
        return view("client.pages.all_movies", compact("all_movies"));
    }
}
