<?php

use Illuminate\Database\Seeder;

use App\Domain;
use Webpatser\Uuid\Uuid;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'uuid' => Uuid::generate(4)->string,
            'name' => 'test.test',
            'public' => true,
            'contact' => 'test@test.test'
        ]);

        DB::table('domains')->insert([
            'uuid' => Uuid::generate(4)->string,
            'name' => 'private.test.test',
            'public' => false,
            'contact' => 'test@test.test'
        ]);

        factory(Domain::class, rand(5, 15))->create();
    }
}
