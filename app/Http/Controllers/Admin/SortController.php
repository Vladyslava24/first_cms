<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminPage;
use App\Models\Page;
use App\Models\PageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class SortController extends Controller
{
    public function sortByDefault(){
        $page = new PageModel();
        return view('sweatshirt', ['data' => $page->where('caption', '=', 'sweatshirt')
            ->orderBy('id', 'asc')->get()]);
    }

    public function sortInReverseOrder(){
        $page = new PageModel();
        return view('sweatshirt', ['data' => $page->where('caption', '=', 'sweatshirt')
            ->orderBy('id', 'desc')->get()]);
    }

    public function sortByCreatedAt(){
        $page = new PageModel();
        return view('sweatshirt', ['data' => $page->where('caption', '=', 'sweatshirt')
            ->orderBy('created_at')->get()]);
    }

    public function sortByUpdatedAt(){
        $page = new PageModel();
        return view('sweatshirt', ['data' => $page->where('caption', '=', 'sweatshirt')
            ->orderBy('updated_at')->get()]);
    }
}
