<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag): View|Factory|Application
    {
        return view('results', ['jobs' => $tag->jobs]);
    }
}
