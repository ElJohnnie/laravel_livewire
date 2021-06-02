<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tweet;

class ShowTweets extends Component
{

    public $message = 'Apenas um teste';

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create(){
        //dd($this->messages);

        Tweet::create([
            'content' => $this->message,
            'user_id' => 1
        ]);

        $this->message = '';
    }
}
