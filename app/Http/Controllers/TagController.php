<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {

        $jobs = $tag->jobs()->with(['employer', 'tags'])->get();

        return view('results', ['jobs' => $jobs]);
    }
}
