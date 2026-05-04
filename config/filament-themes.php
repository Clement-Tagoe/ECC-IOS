<?php

/**
 * Filament Theme Color Palettes
 * -------------------------------------------------------
 * 18 hand-crafted themes organised by family.
 * Each theme defines:
 *   - primary  : main action / accent colour
 *   - sidebar  : background, text, active item background
 *   - topbar   : background, border, text colours
 *   - content  : page background, card background, card border
 *   - badge    : status badge background and text
 *
 * USAGE
 * -------------------------------------------------------
 * 1. Copy the desired theme block into your Panel provider.
 * 2. Register the colours inside the `boot()` method of
 *    a ServiceProvider, or inline in your panel definition.
 *
 * Example (app/Providers/Filament/AdminPanelProvider.php):
 *
 *   use Filament\Support\Colors\Color;
 *   use Filament\Support\Enums\ThemeMode;
 *
 *   public function panel(Panel $panel): Panel
 *   {
 *       return $panel
 *           ->colors([
 *               'primary' => Color::hex('#2E6DA4'),
 *           ])
 *           // For dark themes only:
 *           // ->defaultThemeMode(ThemeMode::Dark)
 *           ;
 *   }
 *
 * Then apply sidebar background via a custom theme CSS file
 * or via the Filament theme Vite plugin.
 * -------------------------------------------------------
 */

return [

    // ===========================================================
    //  BLUES
    // ===========================================================

    'ocean-depths' => [
        'label'   => 'Ocean Depths',
        'family'  => 'Blues',
        'dark'    => false,

        'primary'  => '#2E6DA4',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#1E3A5F',
            'text'              => '#E2F0FF',
            'active_text'       => '#FFFFFF',
            'active_background' => '#2E6DA4',
            'dot_active'        => '#7EC8FF',
            'dot_inactive'      => '#7AAACB',
        ],

        'topbar'   => [
            'background' => '#F0F4F8',
            'border'     => '#D5E2EF',
            'text'       => '#1C3250',
            'subtext'    => '#3A5878',
        ],

        'content'  => [
            'background'   => '#F7FAFC',
            'card'         => '#FFFFFF',
            'card_border'  => '#E2EAF1',
            'card_title'   => '#4A6A88',
            'card_value'   => '#1C3250',
            'table_head'   => '#3A5878',
            'table_row'    => '#1C3250',
            'accent'       => '#2E6DA4',
        ],

        'badge'    => [
            'background' => '#DCEEFB',
            'text'       => '#1E3A5F',
        ],
    ],

    'midnight-steel' => [
        'label'   => 'Midnight Steel',
        'family'  => 'Blues',
        'dark'    => false,

        'primary'  => '#3B82F6',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#1A1F2E',
            'text'              => '#C8D8F8',
            'active_text'       => '#FFFFFF',
            'active_background' => '#2D4FA8',
            'dot_active'        => '#93C5FD',
            'dot_inactive'      => '#6B82B8',
        ],

        'topbar'   => [
            'background' => '#F0F2F8',
            'border'     => '#D9E3F7',
            'text'       => '#1A2540',
            'subtext'    => '#3A4A70',
        ],

        'content'  => [
            'background'   => '#F5F7FC',
            'card'         => '#FFFFFF',
            'card_border'  => '#E0E8F5',
            'card_title'   => '#3A4A70',
            'card_value'   => '#1A2540',
            'table_head'   => '#3A4A70',
            'table_row'    => '#1A2540',
            'accent'       => '#3B82F6',
        ],

        'badge'    => [
            'background' => '#DBEAFE',
            'text'       => '#1E3A5F',
        ],
    ],

    'cobalt-ice' => [
        'label'   => 'Cobalt Ice',
        'family'  => 'Blues',
        'dark'    => false,

        'primary'  => '#1565C0',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#0A2342',
            'text'              => '#C8DEFF',
            'active_text'       => '#FFFFFF',
            'active_background' => '#1565C0',
            'dot_active'        => '#90CAF9',
            'dot_inactive'      => '#6699CC',
        ],

        'topbar'   => [
            'background' => '#EAF2FF',
            'border'     => '#C5D8F8',
            'text'       => '#0A2342',
            'subtext'    => '#2A4A80',
        ],

        'content'  => [
            'background'   => '#F4F8FF',
            'card'         => '#FFFFFF',
            'card_border'  => '#D0E4FB',
            'card_title'   => '#2A4A80',
            'card_value'   => '#0A2342',
            'table_head'   => '#2A4A80',
            'table_row'    => '#0A2342',
            'accent'       => '#1565C0',
        ],

        'badge'    => [
            'background' => '#D0E4FB',
            'text'       => '#0A2342',
        ],
    ],

    // ===========================================================
    //  GREENS
    // ===========================================================

    'forest-night' => [
        'label'   => 'Forest Night',
        'family'  => 'Greens',
        'dark'    => false,

        'primary'  => '#2E7D5E',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#1B3A2D',
            'text'              => '#C8F0DE',
            'active_text'       => '#FFFFFF',
            'active_background' => '#2E7D5E',
            'dot_active'        => '#6EE7B7',
            'dot_inactive'      => '#5BA882',
        ],

        'topbar'   => [
            'background' => '#EAF3EE',
            'border'     => '#C8E6D8',
            'text'       => '#1B3A2D',
            'subtext'    => '#2E6050',
        ],

        'content'  => [
            'background'   => '#F4FAF6',
            'card'         => '#FFFFFF',
            'card_border'  => '#D8EEE4',
            'card_title'   => '#2E6050',
            'card_value'   => '#1B3A2D',
            'table_head'   => '#2E6050',
            'table_row'    => '#1B3A2D',
            'accent'       => '#2E7D5E',
        ],

        'badge'    => [
            'background' => '#D0EDDF',
            'text'       => '#1B3A2D',
        ],
    ],

    'jade-canopy' => [
        'label'   => 'Jade Canopy',
        'family'  => 'Greens',
        'dark'    => false,

        'primary'  => '#0B7A5E',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#0D3325',
            'text'              => '#B8F0DC',
            'active_text'       => '#FFFFFF',
            'active_background' => '#0B7A5E',
            'dot_active'        => '#34D399',
            'dot_inactive'      => '#3AAA80',
        ],

        'topbar'   => [
            'background' => '#E6F5F0',
            'border'     => '#B8E4D5',
            'text'       => '#0D3325',
            'subtext'    => '#1A5A44',
        ],

        'content'  => [
            'background'   => '#F2FBF7',
            'card'         => '#FFFFFF',
            'card_border'  => '#C8EAD8',
            'card_title'   => '#1A5A44',
            'card_value'   => '#0D3325',
            'table_head'   => '#1A5A44',
            'table_row'    => '#0D3325',
            'accent'       => '#0B7A5E',
        ],

        'badge'    => [
            'background' => '#C8EAD8',
            'text'       => '#0D3325',
        ],
    ],

    'arctic-slate' => [
        'label'   => 'Arctic Slate',
        'family'  => 'Greens',
        'dark'    => false,

        'primary'  => '#0F9B8E',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#1C2B35',
            'text'              => '#C0EEE8',
            'active_text'       => '#FFFFFF',
            'active_background' => '#0F9B8E',
            'dot_active'        => '#2DD4BF',
            'dot_inactive'      => '#4AADA0',
        ],

        'topbar'   => [
            'background' => '#EDF5F6',
            'border'     => '#C8E8E6',
            'text'       => '#1C2B35',
            'subtext'    => '#2A5058',
        ],

        'content'  => [
            'background'   => '#F3FAFA',
            'card'         => '#FFFFFF',
            'card_border'  => '#D4ECEC',
            'card_title'   => '#2A5058',
            'card_value'   => '#1C2B35',
            'table_head'   => '#2A5058',
            'table_row'    => '#1C2B35',
            'accent'       => '#0F9B8E',
        ],

        'badge'    => [
            'background' => '#CCEFED',
            'text'       => '#1C2B35',
        ],
    ],

    // ===========================================================
    //  PURPLES
    // ===========================================================

    'royal-plum' => [
        'label'   => 'Royal Plum',
        'family'  => 'Purples',
        'dark'    => false,

        'primary'  => '#6B46C1',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#2D1B4E',
            'text'              => '#E0D8FF',
            'active_text'       => '#FFFFFF',
            'active_background' => '#6B46C1',
            'dot_active'        => '#C4B5FD',
            'dot_inactive'      => '#9080CC',
        ],

        'topbar'   => [
            'background' => '#F3F0FF',
            'border'     => '#E2D9F8',
            'text'       => '#2D1B4E',
            'subtext'    => '#4A3580',
        ],

        'content'  => [
            'background'   => '#F8F5FF',
            'card'         => '#FFFFFF',
            'card_border'  => '#E9E2FA',
            'card_title'   => '#4A3580',
            'card_value'   => '#2D1B4E',
            'table_head'   => '#4A3580',
            'table_row'    => '#2D1B4E',
            'accent'       => '#6B46C1',
        ],

        'badge'    => [
            'background' => '#EDE8FA',
            'text'       => '#2D1B4E',
        ],
    ],

    'violet-dusk' => [
        'label'   => 'Violet Dusk',
        'family'  => 'Purples',
        'dark'    => false,

        'primary'  => '#4F46E5',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#1E1B3A',
            'text'              => '#DDD8FF',
            'active_text'       => '#FFFFFF',
            'active_background' => '#4F46E5',
            'dot_active'        => '#A5B4FC',
            'dot_inactive'      => '#7B76C0',
        ],

        'topbar'   => [
            'background' => '#F0EFFF',
            'border'     => '#DDDAFB',
            'text'       => '#1E1B3A',
            'subtext'    => '#3A348A',
        ],

        'content'  => [
            'background'   => '#F7F6FF',
            'card'         => '#FFFFFF',
            'card_border'  => '#E5E3FC',
            'card_title'   => '#3A348A',
            'card_value'   => '#1E1B3A',
            'table_head'   => '#3A348A',
            'table_row'    => '#1E1B3A',
            'accent'       => '#4F46E5',
        ],

        'badge'    => [
            'background' => '#E5E3FC',
            'text'       => '#1E1B3A',
        ],
    ],

    'fuchsia-noir' => [
        'label'   => 'Fuchsia Noir',
        'family'  => 'Purples',
        'dark'    => false,

        'primary'  => '#A21CAF',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#2A0E35',
            'text'              => '#F5CCFF',
            'active_text'       => '#FFFFFF',
            'active_background' => '#A21CAF',
            'dot_active'        => '#E879F9',
            'dot_inactive'      => '#AA58C0',
        ],

        'topbar'   => [
            'background' => '#FDF0FF',
            'border'     => '#F2C8FC',
            'text'       => '#2A0E35',
            'subtext'    => '#702080',
        ],

        'content'  => [
            'background'   => '#FEF6FF',
            'card'         => '#FFFFFF',
            'card_border'  => '#F5D5FC',
            'card_title'   => '#702080',
            'card_value'   => '#2A0E35',
            'table_head'   => '#702080',
            'table_row'    => '#2A0E35',
            'accent'       => '#A21CAF',
        ],

        'badge'    => [
            'background' => '#F5D5FC',
            'text'       => '#2A0E35',
        ],
    ],

    // ===========================================================
    //  WARM
    // ===========================================================

    'ember-dusk' => [
        'label'   => 'Ember Dusk',
        'family'  => 'Warm',
        'dark'    => false,

        'primary'  => '#C4501A',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#2C1810',
            'text'              => '#FFD8BC',
            'active_text'       => '#FFFFFF',
            'active_background' => '#C4501A',
            'dot_active'        => '#FDBA74',
            'dot_inactive'      => '#C08060',
        ],

        'topbar'   => [
            'background' => '#FDF4EE',
            'border'     => '#F5D9C8',
            'text'       => '#2C1810',
            'subtext'    => '#7A3818',
        ],

        'content'  => [
            'background'   => '#FEF8F4',
            'card'         => '#FFFFFF',
            'card_border'  => '#F8E4D4',
            'card_title'   => '#7A3818',
            'card_value'   => '#2C1810',
            'table_head'   => '#7A3818',
            'table_row'    => '#2C1810',
            'accent'       => '#C4501A',
        ],

        'badge'    => [
            'background' => '#FEE9D8',
            'text'       => '#2C1810',
        ],
    ],

    'rose-gold' => [
        'label'   => 'Rose Gold',
        'family'  => 'Warm',
        'dark'    => false,

        'primary'  => '#C2607A',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#2E1A1F',
            'text'              => '#FFD6E0',
            'active_text'       => '#FFFFFF',
            'active_background' => '#C2607A',
            'dot_active'        => '#FDA4AF',
            'dot_inactive'      => '#C07888',
        ],

        'topbar'   => [
            'background' => '#FFF0F3',
            'border'     => '#F8D0DA',
            'text'       => '#2E1A1F',
            'subtext'    => '#803050',
        ],

        'content'  => [
            'background'   => '#FFF7F9',
            'card'         => '#FFFFFF',
            'card_border'  => '#FAD8E2',
            'card_title'   => '#803050',
            'card_value'   => '#2E1A1F',
            'table_head'   => '#803050',
            'table_row'    => '#2E1A1F',
            'accent'       => '#C2607A',
        ],

        'badge'    => [
            'background' => '#FAD8E2',
            'text'       => '#2E1A1F',
        ],
    ],

    'terracotta-sun' => [
        'label'   => 'Terracotta Sun',
        'family'  => 'Warm',
        'dark'    => false,

        'primary'  => '#C0522A',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#3A1A0E',
            'text'              => '#FFD8C0',
            'active_text'       => '#FFFFFF',
            'active_background' => '#C0522A',
            'dot_active'        => '#FCA67A',
            'dot_inactive'      => '#C07850',
        ],

        'topbar'   => [
            'background' => '#FBF2ED',
            'border'     => '#F2D0BD',
            'text'       => '#3A1A0E',
            'subtext'    => '#7A3820',
        ],

        'content'  => [
            'background'   => '#FDF7F3',
            'card'         => '#FFFFFF',
            'card_border'  => '#F4DDD0',
            'card_title'   => '#7A3820',
            'card_value'   => '#3A1A0E',
            'table_head'   => '#7A3820',
            'table_row'    => '#3A1A0E',
            'accent'       => '#C0522A',
        ],

        'badge'    => [
            'background' => '#F4DDD0',
            'text'       => '#3A1A0E',
        ],
    ],

    // ===========================================================
    //  NEUTRALS
    // ===========================================================

    'carbon-pro' => [
        'label'   => 'Carbon Pro',
        'family'  => 'Neutrals',
        'dark'    => false,

        'primary'  => '#2563EB',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#111318',
            'text'              => '#C8D4F0',
            'active_text'       => '#FFFFFF',
            'active_background' => '#2563EB',
            'dot_active'        => '#93C5FD',
            'dot_inactive'      => '#6B82B8',
        ],

        'topbar'   => [
            'background' => '#F1F3F8',
            'border'     => '#D8DFF0',
            'text'       => '#111318',
            'subtext'    => '#2A3560',
        ],

        'content'  => [
            'background'   => '#F5F7FB',
            'card'         => '#FFFFFF',
            'card_border'  => '#DEE4F2',
            'card_title'   => '#2A3560',
            'card_value'   => '#111318',
            'table_head'   => '#2A3560',
            'table_row'    => '#111318',
            'accent'       => '#2563EB',
        ],

        'badge'    => [
            'background' => '#DBEAFE',
            'text'       => '#1E3A5F',
        ],
    ],

    'graphite-warm' => [
        'label'   => 'Graphite Warm',
        'family'  => 'Neutrals',
        'dark'    => false,

        'primary'  => '#B45309',
        'gray'     => '#57534e',

        'sidebar'  => [
            'background'        => '#1F1C18',
            'text'              => '#F0DFC0',
            'active_text'       => '#FFFFFF',
            'active_background' => '#B45309',
            'dot_active'        => '#FCD34D',
            'dot_inactive'      => '#C09060',
        ],

        'topbar'   => [
            'background' => '#FAF6F0',
            'border'     => '#EDE0CE',
            'text'       => '#1F1C18',
            'subtext'    => '#5A3A10',
        ],

        'content'  => [
            'background'   => '#FDFAF5',
            'card'         => '#FFFFFF',
            'card_border'  => '#EFE4D2',
            'card_title'   => '#5A3A10',
            'card_value'   => '#1F1C18',
            'table_head'   => '#5A3A10',
            'table_row'    => '#1F1C18',
            'accent'       => '#B45309',
        ],

        'badge'    => [
            'background' => '#FEF3C7',
            'text'       => '#1F1C18',
        ],
    ],

    'monochrome' => [
        'label'   => 'Monochrome',
        'family'  => 'Neutrals',
        'dark'    => false,

        'primary'  => '#52525B',
        'gray'     => '#71717a',

        'sidebar'  => [
            'background'        => '#18181B',
            'text'              => '#E4E4E7',
            'active_text'       => '#FFFFFF',
            'active_background' => '#52525B',
            'dot_active'        => '#D4D4D8',
            'dot_inactive'      => '#A1A1AA',
        ],

        'topbar'   => [
            'background' => '#F4F4F5',
            'border'     => '#D4D4D8',
            'text'       => '#18181B',
            'subtext'    => '#3F3F46',
        ],

        'content'  => [
            'background'   => '#FAFAFA',
            'card'         => '#FFFFFF',
            'card_border'  => '#E4E4E7',
            'card_title'   => '#3F3F46',
            'card_value'   => '#18181B',
            'table_head'   => '#3F3F46',
            'table_row'    => '#18181B',
            'accent'       => '#52525B',
        ],

        'badge'    => [
            'background' => '#E4E4E7',
            'text'       => '#18181B',
        ],
    ],

    // ===========================================================
    //  DARK MODES
    // ===========================================================

    'full-dark' => [
        'label'   => 'Full Dark',
        'family'  => 'Dark',
        'dark'    => true,  // -> panel()->defaultThemeMode(ThemeMode::Dark)

        'primary'  => '#4F6EF7',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#0F1117',
            'text'              => '#C8D0F0',
            'active_text'       => '#FFFFFF',
            'active_background' => '#4F6EF7',
            'dot_active'        => '#818CF8',
            'dot_inactive'      => '#6070B0',
        ],

        'topbar'   => [
            'background' => '#1E2230',
            'border'     => '#3A4060',
            'text'       => '#E8ECF8',
            'subtext'    => '#A8B4D8',
        ],

        'content'  => [
            'background'   => '#161A28',
            'card'         => '#1E2230',
            'card_border'  => '#3A4060',
            'card_title'   => '#A8B4D8',
            'card_value'   => '#E8ECF8',
            'table_head'   => '#A8B4D8',
            'table_row'    => '#E8ECF8',
            'accent'       => '#4F6EF7',
        ],

        'badge'    => [
            'background' => '#2A2F55',
            'text'       => '#C0CCFF',
        ],
    ],

    'dark-teal' => [
        'label'   => 'Dark Teal',
        'family'  => 'Dark',
        'dark'    => true,

        'primary'  => '#0E9E8E',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#09161A',
            'text'              => '#B0E8E2',
            'active_text'       => '#FFFFFF',
            'active_background' => '#0E9E8E',
            'dot_active'        => '#2DD4BF',
            'dot_inactive'      => '#3A8A82',
        ],

        'topbar'   => [
            'background' => '#1A2A2E',
            'border'     => '#304848',
            'text'       => '#D8F0EE',
            'subtext'    => '#88C8C0',
        ],

        'content'  => [
            'background'   => '#0F1E22',
            'card'         => '#1A2A2E',
            'card_border'  => '#304848',
            'card_title'   => '#88C8C0',
            'card_value'   => '#D8F0EE',
            'table_head'   => '#88C8C0',
            'table_row'    => '#D8F0EE',
            'accent'       => '#0E9E8E',
        ],

        'badge'    => [
            'background' => '#0E3530',
            'text'       => '#40E0D0',
        ],
    ],

    'dark-violet' => [
        'label'   => 'Dark Violet',
        'family'  => 'Dark',
        'dark'    => true,

        'primary'  => '#7C3AED',
        'gray'     => '#64748b',

        'sidebar'  => [
            'background'        => '#0D0C1D',
            'text'              => '#D4C8FF',
            'active_text'       => '#FFFFFF',
            'active_background' => '#7C3AED',
            'dot_active'        => '#A78BFA',
            'dot_inactive'      => '#6B5FA8',
        ],

        'topbar'   => [
            'background' => '#1A1832',
            'border'     => '#302A58',
            'text'       => '#E8E0FF',
            'subtext'    => '#B0A0E8',
        ],

        'content'  => [
            'background'   => '#110F28',
            'card'         => '#1A1832',
            'card_border'  => '#302A58',
            'card_title'   => '#B0A0E8',
            'card_value'   => '#E8E0FF',
            'table_head'   => '#B0A0E8',
            'table_row'    => '#E8E0FF',
            'accent'       => '#7C3AED',
        ],

        'badge'    => [
            'background' => '#2E1F5E',
            'text'       => '#C8B0FF',
        ],
    ],

];