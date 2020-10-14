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

class IndexController extends Controller
{
    public function index(){
        $page = new PageModel();
        return view('admin.index', ['page' => $page->where('caption', '=', 'sweatshirt')->get()]);
    }

    public function viewPage(){
        $page = new PageModel();
        return view('admin.view', ['data' => $page->where('caption', '=', 'sweatshirt')->get()]);
    }

    public function insert(Request $request){
        $this->validate($request, [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption' => 'required|min:5|max:64',
            'main_content'=>'required|min:5|max:64',
            'price'=>'required|min:7|max:10'
        ]);
        $page = new PageModel();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        //$page->getByAlias('index');
        $page->image = $imageName;
        $page->caption = $request->get('caption');
        $page->main_content = $request->get('main_content');
        $page->price = $request->get('price');
        $page->parent_code=2;
        $page->save();
        return back()->with('success', 'Product was added to page!');
    }

    public function updateNote($id){
        $page = new PageModel();
        return view('admin.update-note', ['data' => $page->find($id)]);
    }

    public function updateNoteSubmit($id, Request $request){
        $this->validate($request, [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption' => 'required|min:5|max:64',
            'main_content'=>'required|min:5|max:64',
            'price'=>'required|min:7|max:10'
        ]);

        $page = PageModel::find($id);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $page->image = $imageName;
        $page->caption = $request->get('caption');
        $page->main_content = $request->get('main_content');
        $page->price = $request->get('price');
        $page->parent_code=2;
        $page->save();
        return redirect()->route('admin-index')->with('success',
            'Product was updated');
    }

    public function deleteNote($id){
        PageModel::find($id)->delete();
        return redirect()->route('admin-index')->with('success',
            'Product was deleted');
    }
}
