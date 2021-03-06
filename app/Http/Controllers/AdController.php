<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21225'); //チラスタ - fam
            // return redirect('https://a-trade.jp/redirect/connect?media=G16531'); //CONNECT - Aトレード
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21225'); //チラスタ - fam
        // return redirect('https://a-trade.jp/redirect/connect?media=G16531'); //CONNECT - Aトレード
    }
    
    public function job(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://a-trade.jp/redirect/charin?media=G16531'); //チャリン - Aトレード
        }
        return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
    }
}
