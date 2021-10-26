<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    public $comments=[
        [
        'body'=>'This is the body.',
        'created_at'=>'3 mins ago',
        'creator'=>'Showayne'
        ]
    ];
    public $newComment;
    public function addComment ()
    {
       array_unshift( $this->comments,[ 
        'body'=>$this->newComment,
        'created_at'=> Carbon::now(),
        'creator'=>'Showa'
        ]);
    }

   
    public function render()
    {
        return view('livewire.comments');
    }
}
