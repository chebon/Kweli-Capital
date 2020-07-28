<?php

namespace App\Console\Commands;

use App\Amenities;
use Illuminate\Console\Command;

class CreateAmenities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:amenities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A Command for creating amenities';

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
     * @return int
     */
    public function handle()
    {
        $amenities = ['Garden', 'Gym', 'Internet', 'Swimming Pool', 'Window Covering', 'Parking', 'Financing'];

        foreach ($amenities as $key => $value){
            $amenity = new Amenities();
            $amenity->name = $value;
            $amenity->save();
        }
        return 0;
    }
}
