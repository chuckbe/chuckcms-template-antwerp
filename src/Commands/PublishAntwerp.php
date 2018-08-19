<?php

namespace Chuckbe\ChuckcmsTemplateAntwerp\Commands;

use Chuckbe\ChuckcmsTemplateAntwerp\migrations\seeds\ChuckcmsTemplateAntwerpTableSeeder;
use Illuminate\Console\Command;

class PublishAntwerp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-antwerp:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Antwerp template for ChuckCMS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $seeder = new ChuckcmsTemplateAntwerpTableSeeder();
        $seeder->run();
        
        $this->info('Validating your information and generating a new site...');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... ANTWERP ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... ANTWERP ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... ANTWERP ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Antwerp published successfully');
        $this->info(' ');
        

        
    }
}
