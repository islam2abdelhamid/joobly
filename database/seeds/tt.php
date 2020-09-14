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
                
            ],
            [
                'name' => 'hospitality',
                
            ],
            [
                'name' => 'reception',
                
            ],
            [
                'name' => 'transferIsolation',
                
            ],
            [
                'name' => 'cleaningFacilities',
                
            ],
            [
                'name' => 'hospitality',
                
            ],
            [
                'name' => 'receptionist',
                
            ],
          
            [
                'name' => 'shiftting',
                
            ],
            [
                'name' => 'officeCleaning',
                
            ],
            [
                'name' => 'homeCleaning',
                
            ],
            [
                'name' => 'babySitter',
                
            ],
            [
                'name' => 'elderlyHealthCare',
                
            ],
            [
                'name' => 'gardening',
                
            ],
            [
                'name' => 'other',
                
            ],
          
            ]);
    }
}
