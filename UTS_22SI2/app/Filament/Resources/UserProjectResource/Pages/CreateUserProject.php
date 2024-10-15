<?php

namespace App\Filament\Resources\UserProjectResource\Pages;

use App\Filament\Resources\UserProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserProject extends CreateRecord
{
    protected static string $resource = UserProjectResource::class;
}
