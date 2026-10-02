<?php

namespace App\Filament\Resources\Cities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->directory('cities')
                    ->columnSpan(2)
                    ->required(),
                TextInput::make('name')
                    ->reactive()
                    ->debounce(500)
                    ->required()
                    // otomatis terisi slug jika name kita isi
                    ->afterStateUpdated( function( $state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required(),
            ]);
    }
}