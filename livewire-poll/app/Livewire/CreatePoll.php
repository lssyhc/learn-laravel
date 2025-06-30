<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public string $title;
    public array $options = ['First'];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    public function removeOption(int $index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }
}
