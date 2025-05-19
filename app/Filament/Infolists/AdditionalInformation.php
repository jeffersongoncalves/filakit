<?php

namespace App\Filament\Infolists;

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class AdditionalInformation
{
    public static function make(array $dates = ['created_at', 'updated_at'])
    {
        $dates = collect($dates)->map(fn ($date) => TextEntry::make($date)->dateTime())->toArray();

        return Section::make(__('ADDITIONAL INFORMATION'))
            ->description(__('Information on the date of registration and date of modification.'))
            ->columns()
            ->schema($dates);
    }
}
