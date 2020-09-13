<?php

use Illuminate\Database\Seeder;

class ServicesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'sterilization',
                'image' => 'sterilization.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
            [
                'name' => 'hospitality',
                'image' => 'hospitality.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
            [
                'name' => 'reception',
                'image' => 'reception.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
            [
                'name' => 'transferIsolation',
                'image' => 'transferIsolation.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
            [
                'name' => 'cleaningFacilities',
                'image' => 'cleaningFacilities.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
            [
                'name' => 'hospitality',
                'image' => 'hospitality.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
            [
                'name' => 'receptionist',
                'image' => 'receptionist.png',
                'description' => 'serviceDescription',
                'type'=>'commercialServices'
            ],
          
            [
                'name' => 'shiftting',
                'image' => 'shiftting.png',
                'description' => 'serviceDescription',
                'type'=>'homeServices'
            ],
            [
                'name' => 'officeCleaning',
                'image' => 'officeCleaning.png',
                'description' => 'serviceDescription',
                'type'=>'homeServices'
            ],
            [
                'name' => 'homeCleaning',
                'image' => 'homeCleaning.png',
                'description' => 'serviceDescription',
                'type'=>'homeServices'
            ],
            [
                'name' => 'babySitter',
                'image' => 'babySitter.png',
                'description' => 'serviceDescription',
                'type'=>'homeServices'
            ],
            [
                'name' => 'elderlyHealthCare',
                'image' => 'elderlyHealthCare.png',
                'description' => 'serviceDescription',
                'type'=>'homeServices'
            ],
            [
                'name' => 'gardening',
                'image' => 'gardening.png',
                'description' => 'serviceDescription',
                'type'=>'homeServices'
            ],
            [
                'name' => 'other',
                'image' => 'other.png',
                'description' => 'serviceDescription',
                'type'=>'other'
            ],
          
            ]);
    }
}
