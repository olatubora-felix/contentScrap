<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Goutte\Client;

class ScrapApi extends Controller
{
    // View the api form
    public function index() {
        return view('index');
    }

    // Store the scraped content
    public function save(Request $request){
        $rules = array(
            "url" => "required",
            "selector" => "required"
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return $validator->errors();
        } else {
            $client = new Client();
            $url = $request->url;
            $page = $client->request("GET", $url);
            $text = $page->filter($request->selector)->text();
            $content = new Content;

            $content->lists = $text;

            
            $result = $content->save();
            return redirect()->route('home');
        }
    }
}
