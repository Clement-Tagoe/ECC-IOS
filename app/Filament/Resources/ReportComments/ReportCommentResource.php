<?php

namespace App\Filament\Resources\ReportComments;

use App\Filament\Resources\ReportComments\Pages\CreateReportComment;
use App\Filament\Resources\ReportComments\Pages\EditReportComment;
use App\Filament\Resources\ReportComments\Pages\ListReportComments;
use App\Filament\Resources\ReportComments\Schemas\ReportCommentForm;
use App\Filament\Resources\ReportComments\Tables\ReportCommentsTable;
use App\Models\ReportComment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReportCommentResource extends Resource
{
    protected static ?string $model = ReportComment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'message';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return ReportCommentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReportCommentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReportComments::route('/'),
            'create' => CreateReportComment::route('/create'),
            'edit' => EditReportComment::route('/{record}/edit'),
        ];
    }
}
