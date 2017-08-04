<?php

namespace Rocket\Stories\Http\Controllers\Admin;

use Rocket\Cockpit\Http\Controllers\Controller;
use Rocket\Stories\EloquentStoryRepository as StoryRepository;
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
        return view('stories.admin::stories', $this->data);
    }

    public function createAction(Request $request) 
    {
        if (\Auth::check()) {
            $repository = new StoryRepository();

            $story = new Story();
            $story->title       = $request->title;
            $story->slug        = $request->slug;
            $story->story       = $request->story;
            $story->category_id = 1;// $request->category_id;
            $story->user_id     = \Auth::user()->id;

            $repository->add($story);
        }
    }
}