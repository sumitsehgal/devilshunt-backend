<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Audio',
            'description' => 'Audio Files',
            'parent_id' => 0,
        ]);
        Tag::create([
            'name' => 'Image',
            'description' => 'Image Files',
            'parent_id' => 0,
        ]);
        Tag::create([
            'name' => 'Video',
            'description' => 'Video Files',
            'parent_id' => 0,
        ]);
    }
}
