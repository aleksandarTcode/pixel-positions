<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::with(['employer', 'tags']) // eager loading
            ->where('title', 'LIKE', '%'.request('q').'%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
