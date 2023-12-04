<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
// TweetServiceのインポート
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\TweetSerice  $tweetService
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // TweetServiceのインスタンスを作成
        //$tweetService = new TweetService();
        // つぶやきの一覧を取得
        $tweets = $tweetService->getTweets();
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
