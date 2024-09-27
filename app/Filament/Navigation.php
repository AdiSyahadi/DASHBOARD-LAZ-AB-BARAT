<?php

namespace App\Filament;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;

class Navigation
{
    public static function configure()
    {
        Filament::navigation(function ($builder) {
            $builder
                ->group('Custom Links', [
                    'items' => [
                        [
                            'label' => 'My Custom Link',
                            'icon' => 'heroicon-o-link',
                            'url' => 'https://example.com',
                            'should_open_in_new_tab' => true,
                        ],
                    ],
                ]);
        });
    }
}
