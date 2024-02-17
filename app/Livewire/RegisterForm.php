<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component implements HasForms
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
                TextInput::make('name')
                ->label('Name')
                ->required(),
                TextInput::make('email')
                ->label('Email')
                ->unique(table: User::class)
                ->email()
                ->required(),
                TextInput::make('phone')
                ->regex('/^[0-9]{3}[0-9]{3}[-\s\.]?[0-9]{4,8}$/')
                ->label('Phone ex:081212341234')
                ->unique(table: User::class)
                ->required(),
                TextInput::make('password')
                ->label('Password (min:6 characters')
                ->minLength(6)
                ->password()
                ->confirmed()
                ->required(),
                TextInput::make('password_confirmation')
                ->label('Confirm Password')
                ->password()
                ->required(),
            ])
            ->statePath('data');
    }
    
    public function create()
    {
        $data = $this->form->getState();
        $phone = str($data['phone'])->startsWith('0')?str($data['phone'])->replaceFirst('0','62'):$data['phone'];
        try{
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $phone,
                'password' => Hash::make($data['password']),
            ]);
            return redirect()->route('login')->with('message','Silahkan login dengan akun anda');
        }catch(Exception $ex){
            $this->addError('error', $ex->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.register-form');
    }
}
