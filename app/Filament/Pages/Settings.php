<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];
    
    public function mount()
    {
        $data = Setting::where('group','general')->pluck('value','key')->toArray();
        $this->form->fill($data);
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('video_homepage')
                ->label('Youtube Embed Video Script'),
                RichEditor::make('about')
                ->label('About Us Page'),
            ])
            ->statePath('data');
    }
    
    public function submit()
    {
        $data = $this->form->getState();
        foreach($data as $key=>$value){
            Setting::where('key',$key)->update(['value'=>$value]);
        }
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
}
