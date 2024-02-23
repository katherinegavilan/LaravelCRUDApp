<?php

namespace App\Livewire;

use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Component
{
    public $name, $email, $password;

    public function render()
    {
        return view('livewire.register');
    }

    
    public function register(Request $request): RedirectResponse{
        $validated = $request->validate([
            'name' => 'required', 
            'email' => 'required|email',
            'password' => 'required',
        ]);

    // Assign validated values to component properties
    $this->name = $validated['name'];
    $this->email = $validated['email'];
    $this->password = $validated['password'];

    // Create a user in the database
    User::create([
        'name'=> $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
    ]);

    
    return redirect('/login');
    }
}
