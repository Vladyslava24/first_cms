<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function getByAlias($alias){
        return $this->where('alias', $alias)->first();
    }

    public function render(){
        $page = new Page();
        return view('main', ['data' => $page->where('parent_code', '=', '1')->get()]);
    }

    public function renderAbout(){
        $page = new Page();
        return view('about', ['data' => $page->where('parent_code', '=', '2')->get()]);
    }

    public function renderSweatshirt(){
        $page = new Page();
        return view('sweatshirt', ['data' => $page->where('parent_code', '=', '3')->get()]);
    }
}
