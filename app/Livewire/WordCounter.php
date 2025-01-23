<?php

namespace App\Livewire;

use Livewire\Component;

class WordCounter extends Component
{
    public $description = '';
    public $words = 0;
    public $characters = 0 ;


    public function updatedDescription(){
        $this->words = str_word_count($this->description);
        $this->characters = strlen($this->description);
    }

    public function handleUppercase(){
        $this->description = strtoupper($this->description);
    }

    public function handleLowercase(){
        $this->description = strtolower($this->description);
    }

    public function handleUcfirst(){
        $this->description = ucfirst($this->description);

    }

    public function handleReset(){
        $this->reset(['description','words','characters']);
    }
    public function render()
    {
        return view('livewire.word-counter')
        ->title('Word Counter');
    }
}
