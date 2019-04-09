<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $types = factory(\App\Models\Type::class, 5)->create();

        $cities = factory(\App\Models\City::class, 10)->create();

        $cities->each(function ($city) {
            $districts = factory(\App\Models\District::class, rand(2, 5))->create([
                'city_id' => $city->id,
            ]);

            $districts->each(function ($district) {
                $properties = factory(\App\Models\Property::class, rand(2, 5))->create([
                    'type_id' => rand(1, 5),
                    'district_id' => $district->id
                ]);

                $properties->each(function ($property) {
                    $galleries = factory(\App\Models\Gallery::class, rand(3, 10))->create([
                        'property_id' => $property->id
                    ]);
                });
            });
        });
    }
}
