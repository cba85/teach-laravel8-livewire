<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $body;

    public function addPost()
    {
        $this->validate([
            'body' => 'required'
        ]);

        //dd($this->body);
        $post = auth()->user()->posts()->create(['body' => $this->body]);

        $this->emit('postAdded', $post->id);

        $this->body = "";
    }

    public function render()
    {
        return view('livewire.form');
    }
}
