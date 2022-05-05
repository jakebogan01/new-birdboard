<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class CreateProject extends Component
{
    public $title;
    public $description;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    /**
     * @param $propertyTitle
     * @return void
     */
    public function updated($propertyTitle)
    {
        $this->validateOnly($propertyTitle);
    }

    public function submit()
    {
        $this->validate();

        auth()->user()->projects()->create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Project Successfully Created!');

        return redirect()->to(route('projects.index'));
    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.create-project');
    }
}
