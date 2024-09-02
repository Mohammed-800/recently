<?php

namespace Awcodes\Recently\Tests\Resources\PageResource\Pages;

use Awcodes\Recently\Concerns\IsHistorical;
use Awcodes\Recently\Tests\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    use IsHistorical;

    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
