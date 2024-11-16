<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ContentController extends Controller
{
    public function update_hero(Request $request)
    {
        if ($request->hasFile('hero_image')) {
            $filePath = $request->file('hero_image')->store('image' . 'public');
            $heroImage = Content::where('hero_image')->first();
            $heroImage->value = $filePath;
            $heroImage->save();
        }

        foreach ($request->all() as $key => $value) {
            $content = Content::where('key', $key)->first();
            if (!empty($content)) {
                if ($key == 'image') {
                    $filePath = $request->file($key)->store('images', 'public');
                    $content->value = $filePath;
                } else {
                    $content->value = $value;
                }
                $content->save();
            }
        }
        Cache::forget('contects');
        return redirect('/');
    }
}
