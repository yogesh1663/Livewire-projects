<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Todo extends Component
{
    #[Validate('required')]
    public $task = '';
    public $lists = [];

    public function handleAddList(){
        $this->validate();
        $this->lists[] = [
            'task'=>$this->task,
            'is_completed' => false
        ];
        $this->reset('task');
    }

    public function handleDone($index){
            $this->lists[$index]['is_completed'] =!$this->lists[$index]['is_completed'];
    }
    public function handleDelete($index){
        unset($this->lists[$index]);
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
