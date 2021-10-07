<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\GroupParameter;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(GroupParameterSeeder::class);
        $this->call(ParameterSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);

        Tag::factory(8)->create();
    }
}
