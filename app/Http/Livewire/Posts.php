<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $postAdded = false;

    //public $posts;

    protected $listeners = ['postAdded'];
    //protected $listeners = ['postAdded' => 'handlePostAdded'];

    public function postAdded($id)
    {
        //dd('ok');
        //$this->posts->prepend(Post::find($id));
        $this->postAdded = true;
        session()->flash('message', "Post added");
    }

    /*
    public function mount()
    {
        $this->posts = Post::latest()->get();
    }
    */

    public function render()
    {
        /*
        return view('livewire.posts', [
            'posts' => Post::latest()->get()
        ]);
        */

        //return view('livewire.posts');

        return view('livewire.posts', [
            'posts' => Post::latest()->paginate(2)
        ]);
    }
}
