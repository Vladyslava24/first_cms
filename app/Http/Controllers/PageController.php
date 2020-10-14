<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainPage(){
        $page = new PageModel();
        return ($page->render());
    }

    public function jacketCategory(){
        $page = new PageModel();
        return view('category', ['data' => $page->where('caption', '=', 'main')
            ->where('order_type', '=', 'jacket')->get()]);
    }

    public function topCategory(){
        $page = new PageModel();
        return view('category', ['data' => $page->where('caption', '=', 'main')
            ->where('order_type', '=', 'top')->get()]);
    }

    public function bottomCategory(){
        $page = new PageModel();
        return view('category', ['data' => $page->where('caption', '=', 'main')
            ->where('order_type', '=', 'bottom')->get()]);
    }

    public function accessoriesCategory(){
        $page = new PageModel();
        return view('category', ['data' => $page->where('caption', '=', 'main')
            ->where('order_type', '=', 'accessories')->get()]);
    }

    public function aboutPage(){
        $page = new PageModel();
        return ($page->renderAbout());
    }

    public function sweatshirtPage(){
        $page = new PageModel();
        return ($page->renderSweatshirt());
    }

    public function orderSweatshirt(){
        $page = new PageModel();
        return view('sweatshirt', ['data' => $page->where('caption', '=', 'sweatshirt')
            ->orderBy('id', 'desc')->get()]);
    }
}
