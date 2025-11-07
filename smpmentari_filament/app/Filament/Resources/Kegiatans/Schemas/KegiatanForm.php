<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\components\TextInput;
use Filament\Forms\components\DatePicker;
use Filament\Forms\components\Textarea;
use Filament\Forms\components\FileUpload;

class KegiatanForm
{
    public static function build(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('judul')
                ->label('Judul')
                ->required()
                ->maxLength(255),
            DatePicker::make('tanggal')
                ->label('Tanggal')
                ->native(false)
                ->displayFormat('d M Y')
                ->required(),
            TextInput::make('ringkasan')
                ->label('Ringkasan')
                ->maxLength(255),
            Textarea::make('isi')
                ->label('Isi')
                ->rows(6),
            FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('kegiatan')
                ->disk('public')
                ->downloadable()
                ->imageEditor()
        ])->columns(2);
    }
}
