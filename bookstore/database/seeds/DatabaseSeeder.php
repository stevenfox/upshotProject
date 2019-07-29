<?php

use Illuminate\Database\Seeder;
use App\Magazine;
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
        $this->call('MagazinesAppSeeder');
        $this->command->info('Motorbikes and owners finished.');
    }
}

// our own seeder class
// usually this would be its own file
class MagazinesAppSeeder extends Seeder {

    public function run() {

        // clear our database ------------------------------------------
        DB::table('magazines')->delete();

 // seed the magazines table -----------------------
        // we'll create three  different magazines

 // seed owners table ---------------------
        Magazine::create(array(
             'id'     => 1,
            'Name'    => 'Jake',
            'Price'   => 32.1,
            'Cover'   => 'Mat',
            'Colour'  => 'Blue',
            'Size'    => 'M',
            'Theme'   => 'Cars'
        ));

        Magazine::create(array(
             'id'     => 2,
            'Name'    => 'Yawn',
            'Price'   => 2.1,
            'Cover'   => 'Hard',
            'Colour'  => 'Red',
            'Size'    => 'S',
            'Theme'   => 'Sea'
        ));

        Magazine::create(array(
           'id'       => 3,
            'Name'    => 'Miele',
            'Price'   => 5,
            'Cover'   => 'Soft',
            'Colour'  => 'Green',
            'Size'    => 'L',
            'Theme'   => 'Historic'
        ));
        $this->command->info('Owners Seed Completed!');
    }
}
