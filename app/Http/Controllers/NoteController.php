<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Page;
use App\Note;

class NoteController extends Controller
{
    public function store(Request $request , Page $page)
    {
        $this->validate($request,[
            'text' => 'required | min:5' ],
            [
                'text.required'=>'add something.....','text.min'=>'It is short....'
            ]);

        $note = new Note;
        $note->text = $request->text;
        $page->notes()->save($note);

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit',compact('note'));
    }

    public function update(Request $request , Note $note)
    {
        $note->update($request->all());
        return redirect('pages/'.$note->page_id);
    }

    public function delete(Note $note)
    {
        $note->delete();
        return back();
    }

    //////////////////////////////////////////

    public function test1()
    {
        $info = Page::All();
        return view('notes.test',compact('info'));
    }
}