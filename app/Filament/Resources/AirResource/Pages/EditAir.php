<?php

namespace App\Filament\Resources\AirResource\Pages;

use App\Filament\Resources\AirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAir extends EditRecord
{
    protected static string $resource = AirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
