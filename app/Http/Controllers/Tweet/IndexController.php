<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\View\Factory;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\View\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Factory $factory)
    {
        $tweets = Tweet::all();
        //dd($tweets);
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
