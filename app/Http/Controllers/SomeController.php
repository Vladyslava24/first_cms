<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function selectPage(){
        $page = new Page();
        //return ($page->render());
        return view('main');
    }
}
