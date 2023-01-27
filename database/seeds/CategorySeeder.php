<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id'=>'1',
               'cname'=>'Acoustic Drum',
              
            ],
            [
                'id'=>'2',
               'cname'=>'Acoustic Guitar',
              
            ],
            [
                'id'=>'3',
               'cname'=>'Piano',
              
            ],
            [
                'id'=>'4',
               'cname'=>'Ukulele',
              
            ],
            [
                'id'=>'5',
               'cname'=>'Keyboard',
              
            ],
            [
                'id'=>'6',
               'cname'=>'Electric Drum',
              
            ],
           
        ];
  
        foreach ($user as $key => $value) {
            Category::create($value);
        }
    }

}
