<?php

namespace App\Livewire;

use Livewire\Component;

class VerifyForm extends Component
{
    public function resend()
    {
        auth()->user()->sendEmailVerificationNotification();
        $this->setErrorBag(["message"=>"Email terkirim, Silahkan cek kembali email anda"]);
    }

    public function render()
    {
        return view('livewire.verify-form');
    }
}
