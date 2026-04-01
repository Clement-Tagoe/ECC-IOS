<?php

namespace App\Filament\Resources\Tasks\Schemas;

use App\Enums\TaskStatus;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;

class TaskInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Task Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title')
                            ->label('Report Title')
                            ->weight(FontWeight::Bold),
                        
                        TextEntry::make('due_date'),

                        TextEntry::make('status')
                            ->badge(),

                        TextEntry::make('priority')
                            ->badge(),

                        TextEntry::make('completed_at')
                            ->visible(fn (Get $get): bool => in_array($get('status'), [
                                TaskStatus::Completed,
                                TaskStatus::Completed->value,
                            ])),
                            
                        TextEntry::make('collaborators.name')
                            ->label('Collaborators')
                            ->listWithLineBreaks()
                            ->placeholder('No collaborators'),


                        TextEntry::make('description')
                            ->html()
                            ->columnSpanFull(),

                    ]),

                
                ]);
    }
}