<?php

namespace Rocket\Stories\Http\Controllers;
use Rocket\Stories\EloquentStoryRepository as StoryRepository;
use Rocket\Stories\EloquentCommentRepository as CommentRepository;
use Rocket\Stories\Comment;
use Rocket\Stories\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    protected $data = [];

    /**
     * Show the admin products.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $stories = new StoryRepository();
        
        $this->data['stories'] = $stories->getAll();
        return view('stories::stories', $this->data);
    }

    public function story($id)
    {
        $repository = new StoryRepository();

        $this->data['story'] = $repository->findById($id);
        return view('stories::story', $this->data);
    }

    public function create()
    {
        return view('stories::create_story', $this->data);
    }

    public function update()
    {

    }

    public function createAction(Request $request) 
    {
        if (\Auth::check()) {
            $repository = new StoryRepository();

            $story = new Story();
            $story->title       = $request->title;
            $story->slug        = str_slug($request->title, '-');
            $story->story       = $request->story;
            $story->category_id = $request->category_id;
            $story->user_id     = \Auth::user()->id;

            $repository->add($story);
        }

        return back();
    }

    public function createCommentAction($id, Request $request) 
    {
        if (\Auth::check()) {
            $repository = new CommentRepository();

            $comment = new Comment();
            $comment->comment   = $request->comment;
            $comment->story_id  = $id;
            $comment->user_id   = \Auth::user()->id;

            $repository->add($comment);
        }

        return back();
    }

    public function voteAction($id, Request $request) 
    {
        if (\Auth::check()) {
            $repository = new StoryRepository();

            $story = $repository->findById($id);
            $story->vote($request['vote']);
        }

        return back();
    }

    public function voteCommentAction($id, Request $request) 
    {
        if (\Auth::check()) {
            $repository = new CommentRepository();

            $comment = $repository->findById($id);
            $comment->votes += $request['vote'];

            $repository->add($comment);
        }

        return back();
    }

    public function updateAction() 
    {
        
    }

    public function deleteAction() 
    {
        
    }
}