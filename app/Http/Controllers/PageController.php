<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainPage(){
        $page = new Page();
        return ($page->render());
    }

    public function aboutPage(){
        $page = new Page();
        return ($page->renderAbout());
    }

    public function sweatshirtPage(){
        $page = new Page();
        return ($page->renderSweatshirt());
    }
}
