<?php

namespace App\Filament\Admin\Resources\PengunjungResource\Pages;

use App\Filament\Admin\Resources\PengunjungResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengunjung extends EditRecord
{
    protected static string $resource = PengunjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
