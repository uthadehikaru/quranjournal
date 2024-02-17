<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $comments = [];

    public $post_id = null;
    
    public ?array $data = [];
    
    public function mount(): void
    {
        $post = Post::find($this->post_id);
        $this->comments = $post->comments;
        $this->form->fill();
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('message')
                ->label('Pesan')
                ->placeholder('Masukkan pesan anda')
                ->required(),
            ])
            ->statePath('data');
    }
    
    public function create(): void
    {
        $comment = $this->form->getState();
        $comment['post_id'] = $this->post_id;
        $comment['user_id'] = Auth::id();
        Comment::create($comment);
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
