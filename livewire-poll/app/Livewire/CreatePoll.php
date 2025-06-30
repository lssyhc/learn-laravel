<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreatePoll extends Component
{
    #[Validate([
        'title' => 'required|min:3|max:255'
    ], message: [
        'title.required' => 'The title is required',
        'title.min' => 'The title must be at least 3 characters long',
        'title.max' => 'The title must be no more than 255 characters long',
    ])]
    public string $title;

    #[Validate([
        'options' => 'required|array|min:1|max:10',
        'options.*' => 'required|min:1|max:255'
    ], message: [
        'options.required' => 'Enter at least 1 option.',
        'options.min' => 'You must have at least one option.',
        'options.max' => 'You cannot enter more than 10 options.',
        'options.*.required' => 'The option name is missing.',
        'options.*.min' => 'The option name must be at least 1 character in length.',
        'options.*.max' => 'The option name must be no more than 255 characters in length.',
    ])]
    public array $options = ['First'];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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

    public function createPoll()
    {
        $this->validate();

        Poll::create(['title' => $this->title])
            ->options()
            ->createMany(
                collect($this->options)
                    ->map(fn($option) => ['name' => $option])
                    ->all()
            );

        $this->reset(['title', 'options']);
        $this->dispatch('pollCreated');
    }
}
