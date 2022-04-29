<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use App\Models\Content;

class ScrapController extends Controller {
  public function index(){
    $data = Content::paginate(4);
    return view('scraper', compact('data'));
  }
}
