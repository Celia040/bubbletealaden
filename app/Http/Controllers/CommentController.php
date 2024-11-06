<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pt = Comment::all()->sortByDesc('updated_at');
        $count = Comment::all()->count();
        $id = auth()->id();
        if($id){
            $userNichtLogged = Comment::all()->whereNotIn('user_id', [$id])->sortByDesc('updated_at');
            $pt = Comment::all()->where('user_id', $id)->sortByDesc('updated_at')->union($userNichtLogged);
        }
        return view('comment.index')->with(['kommentare' => $pt, 'zahl' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $request->validate([
            'titel'=>'required|min:2|max:50',
            'punkte'=>'required|numeric|min:1|max:5|regex:/^\d+(\.\d{1})?$/',
            'kommentar'=> ['required','min:3','max:255']  
        ]);
        $comment = new Comment([
            'titel'=>$request['titel'],
            'punkte'=>$request['punkte'],
            'comment'=>$request['kommentar'],
            'user_id'=>auth()->id(),
        ]);
        $comment->save();
        return redirect('/comment');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('comment.show')->with('comment',$comment);
    }
// ########################################################
    public function showDelete(Comment $comment)
    {
        return view('comment.delete')->with('comment',$comment);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit')->with('comment',$comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $request->validate([
            'titel'=>'required|min:2|max:50',
            'punkte'=>'required|numeric|min:1|max:5|regex:/^\d+(\.\d{1})?$/',
            'kommentar'=> ['required','min:3','max:255']  
        ]);
        $old = $comment->titel;
        $comment->update([
            'titel'=>$request['titel'],
            'punkte'=>$request['punkte'],
            'comment'=>$request['kommentar'],
        ]);
        session()->flash('msg_success', 'Kommentar <b>'.$old.'</b> wurde in <b>'.$comment->titel.'</b> geändert');
        return redirect('/comment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
       $comment->delete();
       return redirect('/comment');
    }
}
