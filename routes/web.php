<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// LP獲得用
Route::get('news', function () {
    // return view('gdn.check'); //提出用
    return view('gdn.tjad'); //YouTube - アダルトAndroid(動画)訴求
    // return view('gdn.adultand'); //YouTube - アダルトAndroid訴求
    
    // return view('gdn.jobNew'); //PoPo訴求
    // return redirect('https://a-trade.jp/redirect/anahiro?media=G16531'); //アナザーヒロイン直遷移 - Aトレード
    // return view('gdn.adgame'); //アナヒロ - LP
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16786'); //ワクワクストア直遷移 - fam
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワクLP遷移 - fam
    // return view('gdn.papa'); //ワクワク - パパ活訴求
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16786'); //ワクワク直遷移 - fam
    // return redirect('https://a-trade.jp/redirect/zoo?media=G16531'); //ZOO - Aトレード
    // return view('gdn.adult'); //獲得用(5)
    // return view('gdn.luna'); //獲得用(2)
    // return view('gdn.job'); //獲得用(1)
});

//OS識別→案件遷移 & PoPo訴求
Route::get('os', 'AdController@os');

//ライブでゴーゴー
Route::get('job', 'AdController@job');

// LP確認用
Route::get('cccheck', function () {
    return view('gdn.tjad'); //YouTube - アダルトAndroid(動画)訴求
    // return view('gdn.adultand'); //YouTube - アダルトAndroid訴求
    
    // return view('gdn.jobNew'); //PoPo訴求
    // return redirect('https://a-trade.jp/redirect/anahiro?media=G16531'); //アナザーヒロイン直遷移 - Aトレード
    // return view('gdn.adgame'); //アナヒロ - LP未完成
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16786'); //ワクワクストア直遷移 - fam
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワクLP遷移 - fam
    // return view('gdn.papa'); //ワクワク - パパ活訴求
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16786'); //ワクワク直遷移 - fam
    // return redirect('https://a-trade.jp/redirect/zoo?media=G16531'); //ZOO - Aトレード
    // return view('gdn.adult'); //獲得用(5)
    // return view('gdn.omi2'); //獲得用(4)
    // return view('gdn.omiai'); //獲得用(3)
    // return view('gdn.luna'); //獲得用(2)
    // return view('gdn.job'); //獲得用(1)
});