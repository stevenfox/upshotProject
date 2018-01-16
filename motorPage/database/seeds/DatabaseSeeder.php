<?php

use Illuminate\Database\Seeder;
use App\Motorbike;
use App\Owner;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // call our class and run our seeds
        $this->call('MotorAppSeeder');
        $this->command->info('Motorbikes and owners finished.');
    }
}

// our own seeder class
// usually this would be its own file
class MotorAppSeeder extends Seeder {

    public function run() {

        // clear our database ------------------------------------------
        DB::table('motorbikes')->delete();
        DB::table('owners')->delete();

 // seed the motorbikes table -----------------------
        // we'll create six different motorbikes


        $motor1 = Motorbike::create(array(
            'id'     => 1,
            'Brand'  => 'Yamaha',
            'Colour' => 'Red',
            'Model_Year' => 2004
        ));

         $motor2 = Motorbike::create(array(
            'id'     => 2,
            'Brand'  => 'Honda',
            'Colour' => 'Blue',
            'Model_Year' => 2007
        ));

          $motor3 = Motorbike::create(array(
            'id'     => 3,
            'Brand'  => 'Honda',
            'Colour' => 'Black',
            'Model_Year' => 2014
        ));

           $motor4 = Motorbike::create(array(
            'id'     => 4,
            'Brand'  => 'Suzuki',
            'Colour' => 'Red',
            'Model_Year' => 2009
        ));

            $motor5 = Motorbike::create(array(
            'id'     => 5,
            'Brand'  => 'Harley-Davidson',
            'Colour' => 'Black',
            'Model_Year' => 2013
        ));

             $motor6 = Motorbike::create(array(
            'id'     => 6,
            'Brand'  => 'Ducati',
            'Colour' => 'Red',
            'Model_Year' => 2007
        ));

             $this->command->info('The motorbikes are stored!');

 // seed owners table ---------------------
        Owner::create(array(
             'id'     => 1,
            'Name'    => 'Jake',
            'Motorbike_id'     => $motor4->id,
            'Location' => '51.5034722,-0.0922523'
        ));

        Owner::create(array(
             'id'     => 2,
            'Name'    => 'Paul',
            'Motorbike_id'     => $motor2->id,
            'Location' => '51.5153163,-0.1011231'
        ));

        Owner::create(array(
             'id'     => 3,
            'Name'    => 'Mark',
            'Motorbike_id'     => $motor1->id,
            'Location' => '51.516758,-0.076783'
        ));

        Owner::create(array(
             'id'     => 4,
            'Name'    => 'Paul',
            'Motorbike_id'     => $motor3->id,
            'Location' => '51.5153163,-0.1011231'
        ));

        $this->command->info('Owners Seed Completed!');
    }
}
