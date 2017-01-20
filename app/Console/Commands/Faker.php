<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Faker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:randname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the random name from Faker';

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
        $faker = \Faker\Factory::create();

        echo $faker->name;
    }
}
