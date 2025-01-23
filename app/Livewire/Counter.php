<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public $num = 1;
    public $errorMsg = '';

    public function handleIncrement(){
        if($this->counter <100){
            $this->errorMsg="";
            return $this->counter += $this->num;
        }else{
            $this->counter = 100;
            $this->errorMsg="Counter is full.";
        }
    }

    public function handleDecrement(){
        if($this->counter<1){
            $this->errorMsg="Counter is empty.";
        }else{
            $this->errorMsg="";
            return $this->counter -= $this->num;

        }
    }

    public function handleReset(){
        $this->errorMsg="";
        $this->reset('counter');
        $this->reset('num');
    }

    public function render()
    {
        return view('livewire.counter')
        ->title('Counter');
    }
}
