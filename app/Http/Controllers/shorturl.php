<?php

namespace App\Http\Controllers;
use App\Models\link;
use Illuminate\Http\Request;

class shorturl
{
    public function index()
    {
        return view('controller.index');
    }

    public function generators(Request $request)
    {
                    // validation for amount page
            $validated = $request->validate([
                
                'link' => 'required|url',
                'parameter' => 'required|alpha_dash|unique:links,code',
            ]);

            do {
                
                //$randomNumber = rand(10000000, 99999999);
                $exists = Link::where('code', $validated['parameter'])->exists();

            } while ($exists); 


            $shortlink =$request->getSchemeAndHttpHost().'/'.$validated['parameter'];

            $link = new link;
            $link->link = $validated['link'];
            $link->code = $validated['parameter'];
            $link->shortlink = $shortlink;
            $link->save();

            //echo $shortlink;

        return view('controller.viewlink',['shortlink'=> $shortlink]);
    }

    public function link($code)
    {
        $link = Link::where('code', $code)->first();
        if (!$link) 
        {
            abort(404, 'Link not found');
        }
        return redirect()->away($link->link);
        echo $link->link;
    }
}
