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
Route::get('app', function () {
    return view('gdn.check'); //提出用
    // return redirect('https://preaf.jp/pa.do?s=v04031&o=45765&guid=ON'); //トークウィズ - Preaf
    
    // return view('gdn.adult'); //獲得用(5)
    // return view('gdn.luna'); //獲得用(2)
    // return view('gdn.job'); //獲得用(1)
});

// LP確認用
Route::get('cccheck', function () {
    return redirect('https://preaf.jp/pa.do?s=v04031&o=45765&guid=ON'); //トークウィズ - Preaf
    
    // return view('gdn.adult'); //獲得用(5)
    // return view('gdn.omi2'); //獲得用(4)
    // return view('gdn.omiai'); //獲得用(3)
    // return view('gdn.luna'); //獲得用(2)
    // return view('gdn.job'); //獲得用(1)
});