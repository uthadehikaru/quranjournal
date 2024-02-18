<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component implements HasForms
{
    use InteractsWithForms;
    
    public ?array $data = [];
    
    public function mount()
    {
        if(Auth::check())
            return redirect()->route('home');
        else
            $this->form->fill();
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),
                TextInput::make('password')
                ->label('Password')
                ->password()
                ->required(),
            ])
            ->statePath('data');
    }
    
    public function create()
    {
        $data = $this->form->getState();
        if(Auth::attempt($data)){
            $user = Auth::user();
            if($user->role=='admin' || $user->role=='superuser')
               return redirect()->route('filament.admin.pages.dashboard');

            return redirect()->route('home');
        }else
            $this->addError('auth','Gagal, pastikan email dan password sesuai');
    }
    
    public function render()
    {
        return view('livewire.login-form');
    }
}
