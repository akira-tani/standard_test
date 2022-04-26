<?php

namespace App\Http\Livewire;

use App\Http\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Validation extends Component
{
    public $lastName = '';
    public $firstName = '';
    public $gender = '';
    public $email = '';
    public $postcode = '';
    public $address = '';
    public $building_name = '';
    public $opinion = '';

    public function updated()
    {
        $this->validate(['lastName' => 'required']);
        $this->validate(['firstName' => 'required']);
        $this->validate(['email' => 'required|email']);
        $this->validate(['postcode' => 'required|min:8']);
        $this->validate(['address' => 'required']);
        $this->validate(['opinion' => 'required|max:120']);
    }
    
    public function register()
    {
        $data = $this->validate([
            'lastName' => 'required',
            'firstName' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|min:8',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ]);
        Contact::create([
            'lastName' => $data['lastName'],
            'firstName' => $data['firstName'],
            'gender' => $data['gender'],
            'email' => $data['email'],           
            'postcode' => $data['postcode'],
            'address' => $data['address'],
            'building_name' => $this->building_name,
            'opinion' => $data['opinion'],
        ]);
    }
    public function render()
    {
        return view('livewire.validation');
    }
}
