<x-filament-panels::page>

    {{--
    |--------------------------------------------------------------------------
    | Theme Switcher — Blade View
    | resources/views/filament/pages/theme-switcher.blade.php
    |--------------------------------------------------------------------------
    --}}

    <style>
        /* ── Grid of theme cards ── */
        .ts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        /* ── Category pill filter ── */
        .ts-filters {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem;
            margin-bottom: 1.5rem;
        }
        .ts-pill {
            padding: .35rem 1rem;
            border-radius: 9999px;
            font-size: .8rem;
            font-weight: 500;
            cursor: pointer;
            border: 1.5px solid var(--ts-pill-border, #d1d5db);
            background: transparent;
            color: var(--ts-pill-text, #374151);
            transition: all .15s;
        }
        .ts-pill.active,
        .ts-pill:hover {
            background: rgb(var(--primary-600));
            border-color: rgb(var(--primary-600));
            color: #fff;
        }

        /* ── Individual card ── */
        .ts-card {
            border-radius: .75rem;
            border: 2px solid transparent;
            background: var(--ts-card-bg, #fff);
            box-shadow: 0 1px 3px rgba(0,0,0,.08);
            cursor: pointer;
            overflow: hidden;
            transition: border-color .2s, box-shadow .2s, transform .15s;
        }
        .ts-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,.12);
            transform: translateY(-2px);
        }
        .ts-card.active {
            border-color: rgb(var(--primary-500));
            box-shadow: 0 0 0 3px rgba(var(--primary-500), .2);
        }

        /* ── Mini layout preview inside card ── */
        .ts-preview {
            display: flex;
            height: 90px;
            overflow: hidden;
        }
        .ts-preview-sidebar {
            width: 32px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 6px 0;
            gap: 5px;
        }
        .ts-preview-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }
        .ts-preview-right {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .ts-preview-topbar {
            height: 18px;
            border-bottom: 1px solid;
        }
        .ts-preview-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 4px;
            padding: 5px 6px;
        }
        .ts-preview-row {
            display: flex;
            gap: 4px;
        }
        .ts-preview-card {
            flex: 1;
            border-radius: 3px;
            height: 18px;
            border: 1px solid;
        }
        .ts-preview-line {
            height: 7px;
            border-radius: 2px;
            opacity: .35;
        }

        /* ── Card footer ── */
        .ts-card-footer {
            padding: .6rem .75rem .7rem;
        }
        .ts-card-name {
            font-size: .85rem;
            font-weight: 600;
            color: var(--ts-card-text, #111827);
            margin: 0 0 .1rem;
        }
        .ts-card-sub {
            font-size: .72rem;
            color: var(--ts-card-subtext, #6b7280);
            margin: 0;
        }
        .ts-card-family {
            display: inline-block;
            font-size: .65rem;
            font-weight: 600;
            letter-spacing: .04em;
            text-transform: uppercase;
            padding: .15rem .45rem;
            border-radius: 4px;
            margin-top: .35rem;
        }

        /* ── Active badge ── */
        .ts-active-badge {
            display: flex;
            align-items: center;
            gap: .3rem;
            font-size: .72rem;
            font-weight: 600;
            color: rgb(var(--primary-600));
            margin-top: .4rem;
        }
        .ts-active-badge svg {
            width: 13px; height: 13px;
        }

        /* ── Dark mode card adjustments ── */
        .dark .ts-card {
            --ts-card-bg: #1e2230;
            --ts-card-text: #e8ecf8;
            --ts-card-subtext: #9ca3af;
            --ts-pill-border: #374151;
            --ts-pill-text: #d1d5db;
        }
    </style>

    {{-- Category filter pills --}}
    <div class="ts-filters" x-data="themeSwitcher()">

        <template x-for="cat in categories" :key="cat">
            <button
                class="ts-pill"
                :class="{ active: activeCategory === cat }"
                x-text="cat"
                @click="activeCategory = cat"
            ></button>
        </template>

        {{-- Cards grid --}}
        <div class="ts-grid" style="width:100%; margin-top:.25rem;">
            <template x-for="theme in filteredThemes" :key="theme.key">
                <div
                    class="ts-card"
                    :class="{ active: currentTheme === theme.key }"
                    @click="select(theme.key)"
                >
                    {{-- Mini preview --}}
                    <div class="ts-preview">
                        <div class="ts-preview-sidebar" :style="{ background: theme.sidebar.background }">
                            <div class="ts-preview-dot" :style="{ background: theme.sidebar.active_background }"></div>
                            <div class="ts-preview-dot" :style="{ background: theme.sidebar.text, opacity: .5 }"></div>
                            <div class="ts-preview-dot" :style="{ background: theme.sidebar.text, opacity: .5 }"></div>
                            <div class="ts-preview-dot" :style="{ background: theme.sidebar.text, opacity: .5 }"></div>
                        </div>
                        <div class="ts-preview-right" :style="{ background: theme.content.background }">
                            <div
                                class="ts-preview-topbar"
                                :style="{
                                    background: theme.topbar.background,
                                    borderColor: theme.topbar.border
                                }"
                            ></div>
                            <div class="ts-preview-body">
                                <div class="ts-preview-row">
                                    <div class="ts-preview-card"
                                        :style="{ background: theme.content.card, borderColor: theme.content.card_border }">
                                        <div style="height:4px;border-radius:2px;margin:5px 4px 0;"
                                             :style="{ background: theme.primary }"></div>
                                    </div>
                                    <div class="ts-preview-card"
                                        :style="{ background: theme.content.card, borderColor: theme.content.card_border }">
                                        <div style="height:4px;border-radius:2px;margin:5px 4px 0;"
                                             :style="{ background: theme.primary }"></div>
                                    </div>
                                    <div class="ts-preview-card"
                                        :style="{ background: theme.content.card, borderColor: theme.content.card_border }">
                                        <div style="height:4px;border-radius:2px;margin:5px 4px 0;"
                                             :style="{ background: theme.primary }"></div>
                                    </div>
                                </div>
                                <div class="ts-preview-line" style="width:80%"
                                     :style="{ background: theme.content.table_row }"></div>
                                <div class="ts-preview-line" style="width:60%"
                                     :style="{ background: theme.content.table_row }"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Card footer --}}
                    <div class="ts-card-footer">
                        <p class="ts-card-name" x-text="theme.label"></p>
                        <p class="ts-card-sub" x-text="theme.sub"></p>
                        <span
                            class="ts-card-family"
                            :style="{
                                background: theme.badge.background,
                                color: theme.badge.text
                            }"
                            x-text="theme.family"
                        ></span>
                        <div class="ts-active-badge" x-show="currentTheme === theme.key">
                            <svg viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15 3.293 9.879a1 1 0 111.414-1.414L8.414 12.172l6.879-6.879a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Currently Active
                        </div>
                    </div>
                </div>
            </template>
        </div>

    </div>

    {{-- ── Alpine component ── --}}
    <script>
        function themeSwitcher() {
            return {
                activeCategory: 'All',
                currentTheme: @js($this->activeTheme),
                themes: @js(
                    collect($this->themes)->map(fn($t, $k) => array_merge($t, ['key' => $k]))->values()
                ),

                get categories() {
                    const families = [...new Set(this.themes.map(t => t.family))];
                    return ['All', ...families];
                },

                get filteredThemes() {
                    if (this.activeCategory === 'All') return this.themes;
                    return this.themes.filter(t => t.family === this.activeCategory);
                },

                select(key) {
                    this.currentTheme = key;
                    @this.call('applyTheme', key);
                },
            }
        }
    </script>
</x-filament-panels::page>
