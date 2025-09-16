<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:custom-view';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';
    protected $description = 'Command to create nested and custom views';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $view=$this->argument('view');
        $path=resource_path('views/'.str_replace('.','/',$view));
        if(file_exists($path)){
            $this->error('View already exists');
            return;
        }
        if(!file_exists(dirname($path))){
            mkdir(dirname($path),0755,true);
        }
        file_put_contents($path,'<!--Hello from '.$view.'-->');
        $this->info('View created successfully at '.$path);
    }
}
