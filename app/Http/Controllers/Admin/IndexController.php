<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminPage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class IndexController extends Controller
{
    public function index(){
        $page = new AdminPage();
        $page->getByAlias('index');
        return view('admin.index', ['page' => $page->get()]);
    }

    public function viewPage(){
        $page = new AdminPage();
        return view('admin.view', ['data' => $page->get()]);
    }

    public function insert(Request $request){
        $this->validate($request, [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_content'=>'required|min:5|max:64',
            'price'=>'required|min:7|max:10'
        ]);
        $page = new AdminPage();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $page->getByAlias('index');
        $page->image = $imageName;
        $page->main_content = $request->get('main_content');
        $page->price = $request->get('price');
        $page->save();
        return back()->with('success', 'Product was added to page!');
    }

    public function updateNote($id){
        $page = new AdminPage();
        return view('admin.update-note', ['data' => $page->find($id)]);
    }

    public function updateNoteSubmit($id, Request $request){
        $this->validate($request, [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_content'=>'required|min:5|max:64',
            'price'=>'required|min:7|max:10'
        ]);

        $page = AdminPage::find($id);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $page->image = $imageName;
        $page->main_content = $request->get('main_content');
        $page->price = $request->get('price');
        $page->save();
        return redirect()->route('admin-index')->with('success',
            'Product was updated');
    }

    public function deleteNote($id){
        AdminPage::find($id)->delete();
        return redirect()->route('admin-index')->with('success',
            'Product was deleted');
    }
}
