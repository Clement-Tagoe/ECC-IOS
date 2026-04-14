<x-filament-panels::page>
    @php
        $consoles = $this->getConsoles();

        $statusConfig = [
            'operational' => [
                'label'      => 'Operational',
                'bar'        => 'bg-green-500',
                'badge'      => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
                'icon_color' => 'text-green-500',
                'ring'       => 'ring-green-200 dark:ring-green-800',
                'dot'        => 'bg-green-500',
            ],
            'faulty' => [
                'label'      => 'Faulty',
                'bar'        => 'bg-red-500',
                'badge'      => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200',
                'icon_color' => 'text-red-500',
                'ring'       => 'ring-red-200 dark:ring-red-800',
                'dot'        => 'bg-red-500',
            ],
            'maintenance' => [
                'label'      => 'Maintenance',
                'bar'        => 'bg-yellow-400',
                'badge'      => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200',
                'icon_color' => 'text-yellow-500',
                'ring'       => 'ring-yellow-200 dark:ring-yellow-800',
                'dot'        => 'bg-yellow-400',
            ],
        ];
    @endphp

    {{-- Summary strip --}}
    <div class="mb-6 grid grid-cols-3 gap-4">
        @foreach (['operational' => 'Operational', 'faulty' => 'Faulty', 'maintenance' => 'Maintenance'] as $key => $label)
            @php $count = $consoles->where('status', $key)->count(); @endphp
            <div class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-5 py-4 flex items-center gap-4 shadow-sm">
                <span class="inline-block h-10 w-1.5 rounded-full {{ $statusConfig[$key]['bar'] }}"></span>
                <div>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $count }}</p>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">{{ $label }}</p>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Console cards grid --}}
    @if ($consoles->isEmpty())
        <div class="flex flex-col items-center justify-center py-24 text-gray-400">
            <x-heroicon-o-computer-desktop class="h-14 w-14 mb-3 opacity-40" />
            <p class="text-lg font-medium">No consoles found</p>
            <p class="text-sm mt-1">Add a console to get started.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            @foreach ($consoles as $console)
                @php $cfg = $statusConfig[$console->status->value] ?? $statusConfig['maintenance']; @endphp

                <div class="relative flex flex-col rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-200 ring-1 {{ $cfg['ring'] }}">

                    {{-- Colored status bar at top --}}
                    <div class="h-1.5 w-full {{ $cfg['bar'] }}"></div>

                    <div class="flex flex-col flex-1 p-5">

                        {{-- Header row: icon + name --}}
                        <div class="flex items-start gap-3 mb-4">
                            <div class="flex-shrink-0 rounded-xl bg-gray-100 dark:bg-gray-700 p-2.5">
                                <x-heroicon-o-computer-desktop class="h-6 w-6 {{ $cfg['icon_color'] }}" />
                            </div>
                            <div class="min-w-0">
                                <h3 class="text-base font-semibold text-gray-900 dark:text-white truncate leading-snug">
                                    {{ $console->console_name }}
                                </h3>
                                {{-- <p class="text-xs text-gray-400 dark:text-gray-500 mt-0.5">ID #{{ $console->id }}</p> --}}
                            </div>
                        </div>

                        {{-- Status badge --}}
                        <div class="flex items-center gap-2 mb-3">
                            <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-semibold {{ $cfg['badge'] }}">
                                <span class="inline-block h-1.5 w-1.5 rounded-full {{ $cfg['dot'] }}"></span>
                                {{ $cfg['label'] }}
                            </span>
                        </div>

                        {{-- Assigned To --}}
                        <div class="flex items-center gap-2 mt-auto pt-3 border-t border-gray-100 dark:border-gray-700">
                            <x-heroicon-o-user-circle class="h-4 w-4 text-gray-400 flex-shrink-0" />
                            <span class="text-sm text-gray-600 dark:text-gray-300 truncate">
                                {{ $console->assignee->name ?? 'Unassigned' }}
                            </span>
                        </div>
                    </div>

                    {{-- Edit button --}}
                    {{($this->editAction)(['console' => $console->id])}}
                    {{-- <button class="bg-gray-200 dark:bg-gray-700 px-5 py-2" wire:click="mountAction('edit', { id: {{ $console->id }} })">
                        Edit
                    </button> --}}
                </div>
            @endforeach
        </div>
    @endif

    <x-filament-actions::modals />

</x-filament-panels::page>
