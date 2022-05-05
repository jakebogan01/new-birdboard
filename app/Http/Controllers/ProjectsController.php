<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProjectsController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if(auth()->user()->isNot($project->owner))
        {
            abort(403);
        }

        return view('projects.show', compact('project'));
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function store()
    {
        auth()->user()->projects()->create(
            request()->validate([
                'title' => 'required',
                'description' => 'required',
            ]));

        return redirect(route('projects.index'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('projects.create');
    }
}
