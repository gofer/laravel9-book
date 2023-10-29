<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
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
        // 1. viewヘルパー関数で呼び出す
        // return view('tweet.index', ['name' => 'laravel']);

        // 2. Facadeで呼び出す
        //return View::make('tweet.index', ['name' => 'laravel']);

        // 3. Factoryをインジェクションして呼び出す
        // return $factory->make('tweet.index', ['name' => 'laravel']);

        // 4. viewヘルパー関数に変数を渡す別の方法
        return view('tweet.index')
            ->with('name', 'laravel')
            ->with('version', '9');
    }
}
