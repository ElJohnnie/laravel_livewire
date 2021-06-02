<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tweet;

class ShowTweets extends Component
{

    use WithPagination;

    public $content = '';

    protected $rules = [
        'content' => 'required|min:1|max:255',
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(15);
        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create(){
        //dd($this->content);
        $this->validate();
        /*
        Tweet::create([
            'content' => $this->content,
            'user_id' => 1
        ]);
        */

        //aproveitando bem o eloquent
        auth()->user()->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';
    }
}
