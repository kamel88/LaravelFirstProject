<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Note;
class PageController extends Controller
{
    public function show()
    {
        $pages = Page::all();
        return view('pages.show',compact('pages'));
    }
    //////////////Store function///////////
    public function store(Request $request)
    {
        //Page::create($request->all());
        $page = new Page;
        $page->title = $request->title;
        $page->save();
        return back();
    }
    ////////////////OnePage////////////
    public function onepage(Page $page)
    {
        return view('pages.onepage',compact('page'));
    }
    //////////////delete function///////////
    public function delete(Page $page)
    {
        if(count($page->notes))
        {
            return view('pages.deleteall',compact('page'));
        }
        else
        {
            $page->delete();
            return back();
        }
    }

    public function deleteall(Page $page)
    {
        $page->delete();
        $page->notes()->delete();
        return redirect('../../pages');
    }
}