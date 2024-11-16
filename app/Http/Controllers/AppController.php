<?php

namespace App\Http\Controllers;

//use Illuminate\Container\Attributes\Auth;
//use Illuminate\Container\Attributes\Cache;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AppController extends Controller
{
    public function index()
    {

        // $data['contents'] = Cache::remember('contents', now()->addDay(3), function () use ($allContents) {
        //     return $contents;
        // });

        $allContents = Content::all();

        $contents = [];
        foreach ($allContents as $content) {
            $contents[$content->key] = $content->value;
        }
        $contents['real_hero_text'] = $contents['hero_text'];
        $contents['hero_text'] = str_replace('{name}', $contents['name'], $contents['hero_text']);
        $contents['hero_text'] = str_replace('{profesion}', $contents['profesion'], $contents['hero_text']);

        $data['contents'] = $contents;
        return view('app', $data);
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->remember_me == 'on';

        //        ($credentials, $remember))

        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['login_failed' => 'Email atau Kata Sandi Salah']);
        }
    }
}
