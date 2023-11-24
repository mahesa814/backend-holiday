<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleDriveServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        \Storage::extend('google', function ($app, $config) {
            $options = [];
   
            if (!empty($config['teamDriveId'] ?? null)) {
                $options['teamDriveId'] = $config['teamDriveId'];
            }
   
            $client = new \Google\Client();
            $client->setClientId($config['clientId']);
            $client->setClientSecret($config['clientSecret']);
            $client->setAccessType('offline'); // Ensure you have offline access.
            $client->refreshToken($config['refreshToken']);
            // dd($client);
   
            $service = new \Google\Service\Drive($client);
            $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service, $config['folderId'] ?? '/', $options);
        
            $driver  = new \League\Flysystem\Filesystem($adapter);
   
            return new \Illuminate\Filesystem\FilesystemAdapter($driver, $adapter);
        });
    }
   
}
