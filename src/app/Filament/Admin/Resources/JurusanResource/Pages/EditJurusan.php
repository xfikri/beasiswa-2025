<?php

namespace App\Filament\Admin\Resources\JurusanResource\Pages;

use App\Filament\Admin\Resources\JurusanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJurusan extends EditRecord
{
    protected static string $resource = JurusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
