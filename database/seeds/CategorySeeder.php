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
        $categories = [
            [
                'name' => 'Giao duc',
                'parent_id' => 0,
                'slug' => Str::slug('Giao duc'),
            ],
            [
                'name' => 'Khoa hoc',
                'parent_id' => 0,
                'slug' => Str::slug('Khoa hoc'),
            ],
            [
                'name' => 'Truyen tranh',
                'parent_id' => 0,
                'slug' => Str::slug('Truyen tranh'),
            ],
            [
                'name' => 'Lich su',
                'parent_id' => 0,
                'slug' => Str::slug('Lich su'),
            ],
            [
                'name' => 'Self help',
                'parent_id' => 0,
                'slug' => Str::slug('Self help'),
            ],
            [
                'name' => 'Phat trien ban than',
                'parent_id' => 0,
                'slug' => Str::slug('Phat trien ban than'),
            ],
            [
                'name' => 'Cap 1',
                'parent_id' => 1,
                'slug' => Str::slug('Cap 1'),
            ],
            [
                'name' => 'Cap 2',
                'parent_id' => 1,
                'slug' => Str::slug('Cap 2'),
            ],
            [
                'name' => 'Cap 3',
                'parent_id' => 1,
                'slug' => Str::slug('Cap 3'),
            ],
            [
                'name' => 'Dai hoc',
                'parent_id' => 1,
                'slug' => Str::slug('Dai hoc'),
            ],
            [
                'name' => 'Mam non',
                'parent_id' => 1,
                'slug' => Str::slug('Mam non'),
            ],
            [
                'name' => 'Khoa hoc 1',
                'parent_id' => 2,
                'slug' => Str::slug('Khoa hoc 1'),
            ],
            [
                'name' => 'Khoa hoc 2',
                'parent_id' => 2,
                'slug' => Str::slug('Khoa hoc 2'),
            ],
            [
                'name' => 'Khoa hoc 3',
                'parent_id' => 2,
                'slug' => Str::slug('Khoa hoc 3'),
            ],
            [
                'name' => 'Khoa hoc 4',
                'parent_id' => 2,
                'slug' => Str::slug('Khoa hoc 4'),
            ],
            [
                'name' => 'Truyen tranh 1',
                'parent_id' => 3,
                'slug' => Str::slug('Truyen tranh 1'),
            ],
            [
                'name' => 'Truyen tranh 2',
                'parent_id' => 3,
                'slug' => Str::slug('Truyen tranh 2'),
            ],
            [
                'name' => 'Truyen tranh 3',
                'parent_id' => 3,
                'slug' => Str::slug('Truyen tranh 3'),
            ],
            [
                'name' => 'Truyen tranh 4',
                'parent_id' => 3,
                'slug' => Str::slug('Truyen tranh 4'),
            ],
            [
                'name' => 'Lich su 1',
                'parent_id' => 4,
                'slug' => Str::slug('Lich su 1'),
            ],
            [
                'name' => 'Lich su 2',
                'parent_id' => 4,
                'slug' => Str::slug('Lich su 2'),
            ],
            [
                'name' => 'Lich su 3',
                'parent_id' => 4,
                'slug' => Str::slug('Lich su 3'),
            ],
            [
                'name' => 'Lich su 4',
                'parent_id' => 4,
                'slug' => Str::slug('Lich su 4'),
            ],
            [
                'name' => 'Self help 1',
                'parent_id' => 5,
                'slug' => Str::slug('Self help 1'),
            ],
            [
                'name' => 'Self help 2',
                'parent_id' => 5,
                'slug' => Str::slug('Self help 2'),
            ],
            [
                'name' => 'Self help 3',
                'parent_id' => 5,
                'slug' => Str::slug('Self help 3'),
            ],
            [
                'name' => 'Self help 4',
                'parent_id' => 6,
                'slug' => Str::slug('Self help 4'),
            ],
            [
                'name' => '	Phat trien ban than 1',
                'parent_id' => 6,
                'slug' => Str::slug('	Phat trien ban than 1'),
            ],
            [
                'name' => '	Phat trien ban than 2',
                'parent_id' => 6,
                'slug' => Str::slug('	Phat trien ban than 2'),
            ],
            [
                'name' => '	Phat trien ban than 3',
                'parent_id' => 6,
                'slug' => Str::slug('Phat trien ban than3'),
            ],
            [
                'name' => '	Phat trien ban than 4',
                'parent_id' => 6,
                'slug' => Str::slug('	Phat trien ban than 4'),
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
