<?php
namespace Database\Seeders;



use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Video::factory()->hasComments(4)->hasLikes(20)->count(20)->create();
    }
}
