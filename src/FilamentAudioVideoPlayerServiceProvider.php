<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentAudioVideoPlayerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-audio-video-player';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasConfigFile();
    }
}
