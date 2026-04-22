<?php

namespace App\Filament\Resources\Reports\Pages;

use App\Filament\Resources\Reports\ReportResource;
use App\Models\Report;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListReports extends ListRecords
{
    protected static string $resource = ReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->icon('heroicon-o-envelope'),
            'inbox' => Tab::make()
                ->icon('heroicon-o-inbox-arrow-down')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('receivers', fn ($q) => $q->where('users.id', Auth::id())))
                ->badge(Report::query()->whereHas('receivers', fn ($q) => $q->where('users.id', Auth::id()))->count()),
            'outbox' => Tab::make()
                ->icon('heroicon-o-inbox-stack')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('user_id', Auth::id()))
                ->badge(Report::query()->where('user_id', Auth::id())->count()),
        ];
    }
}
