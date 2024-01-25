<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
    {
        $this->validate();

        // Logic to handle form submission goes here
        // For example, sending an email, saving to database, etc.

        session()->flash('message', 'Form submitted successfully!');
    }
}
