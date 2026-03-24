<?php

namespace App\Filament\Resources\ValidCases\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ValidCaseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Valid Case Details')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('case_id')
                            ->label('Case ID'),
                        TextEntry::make('reporting_time')
                            ->time(),
                        TextEntry::make('reporting_date')
                            ->date(),
                        TextEntry::make('agency.name'),
                        TextEntry::make('location'),
                        TextEntry::make('region'),
                        TextEntry::make('contact_name'),
                        TextEntry::make('contact_number'),
                        TextEntry::make('case_nature'),
                        TextEntry::make('created_by'),
                    ]),

                Section::make('Description & Feedback')
                    ->schema([
                        TextEntry::make('description')
                            ->html(),
                        TextEntry::make('feedback_comment')
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('HOD Review')
                    ->schema([
                        TextEntry::make('HOD')
                            ->label('HOD')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'Pending Review' => 'warning',
                                'Reviewed' => 'success',
                            }),
                        ]),
                        
                    ]);
    }
}