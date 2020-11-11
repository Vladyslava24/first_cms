<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    use HasFactory;


    public function render(){
        $page = new PageModel();
        return view('main', ['data' => $page->where('caption', '=', 'main')
            ->orderBy('order_num', 'asc')->get()]);
    }

    public function renderAbout(){
        $page = new PageModel();
        return view('about', ['data' => $page->where('caption', '=', 'about')->get(),
            'page' =>  $page->where('alias_of', '<>', 'NULL')
                            ->where('caption', '=', 'sweatshirt')
                            ->where('content_type', '=', 'ad')->get()]);
    }

    public function renderSweatshirt(){
        $page = new PageModel();
        return view('sweatshirt', ['data' => $page->where('alias_of', '<>', 'NULL')
                                                       ->where('caption', '=', 'sweatshirt')->get()]);
    }
}
