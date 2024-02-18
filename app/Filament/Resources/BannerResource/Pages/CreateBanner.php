<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBanner extends CreateRecord
{
    protected static string $resource = BannerResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['group'] = 'banner';
        return $data;
    }
}
