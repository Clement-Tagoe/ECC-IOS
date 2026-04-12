<?php

namespace App\Filament\Resources\CameraAudits\Schemas;

use App\Enums\CameraStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CameraAuditForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Camera Audit Details')
                    ->columns(2)
                    ->columnSpanFull()
                     ->schema([
                        Select::make('region_id')
                            ->relationship('region', 'name')
                            ->required(),
                        TextInput::make('camera_name')
                            ->required(),
                        TextInput::make('location'),
                        ToggleButtons::make('status')
                            ->options(CameraStatus::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(CameraStatus::Online),
                        Select::make('observation')
                            ->options([
                                'Blocked_by_trees' => 'Blocked_by_trees',
                                'Blocked_by_billboards' => 'Blocked_by_billboards',
                                'Black_&_white' => 'Black_&_white',
                                'Blur_view' => 'Blur_view',
                                'Black_view' => 'Black_view',
                                'Pink_view' => 'Pink_view',
                                'Repositioning' => 'Repositioning',
                                'PTZ_control_defect' => 'PTZ_control_defect',
                                'Weak_signal' => 'Weak_signal',
                                'Flickering' => 'Flickering',
                            ])
                            ->multiple(),
                        TextInput::make('others'),
                     ])
            ]);
    }
}

                        