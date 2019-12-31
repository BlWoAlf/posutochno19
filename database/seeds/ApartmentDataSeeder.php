<?php

use Illuminate\Database\Seeder;

class ApartmentDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facilities = [];
//        for ($i = 0; $i < 4; $i++){
            $facilities['elevator'] = rand(0,1);
            $facilities['balcony'] = rand(0,1);
            $facilities['floor'] = rand(1,10);
            $facilities['wifi'] = rand(0,1);
            $facilities['parking'] = rand(0,1);
            $facilities['washer'] = rand(0,1);
            $facilities['iron'] = rand(0,1);
            $facilities['furniture'] = rand(0,1);
            $facilities['microwave'] = rand(0,1);
            $facilities['tv'] = rand(0,1);
            $facilities['hairdryer'] = rand(0,1);
//        }
        $facilities = json_encode($facilities);

        DB::table('apartments')->insert([
            'address' => 'Тихонова 6Б',
            'town' => 'Черногорск',
            'district' => 'Центр',
            'price1-2' => '1300',
            'price3-9' => '1150',
            'price10-29' => '1050',
            'price30' => '900',
            'rooms' => '1',
            'places' => '2+1',
            'facilities' => $facilities,
            'description' => 'Достойная квартира, для достойных людей. '
        ]);
        DB::table('apartments')->insert([
            'address' => 'Космонавтов 39',
            'town' => 'Черногорск',
            'district' => 'Центр',
            'price1-2' => '1400',
            'price3-9' => '1250',
            'price10-29' => '1150',
            'price30' => '1000',
            'rooms' => '2',
            'places' => '2+2',
            'facilities' => $facilities,
            'description' => 'Достойная квартира, для достойных людей. '
        ]);
        DB::table('apartments')->insert([
            'address' => 'Тихонова 6Б',
            'town' => 'Черногорск',
            'district' => 'Центр',
            'price1-2' => '1300',
            'price3-9' => '1150',
            'price10-29' => '1050',
            'price30' => '900',
            'rooms' => '1',
            'places' => '2+1',
            'facilities' => $facilities,
            'description' => 'Достойная квартира, для достойных людей. '
        ]);
        DB::table('apartments')->insert([
            'address' => 'Калинина 12',
            'town' => 'Черногорск',
            'district' => 'Центр',
            'price1-2' => '1300',
            'price3-9' => '1150',
            'price10-29' => '1050',
            'price30' => '900',
            'rooms' => '2',
            'places' => '2+1',
            'facilities' => $facilities,
            'description' => 'Достойная квартира, для достойных людей. '
        ]);
    }
}
