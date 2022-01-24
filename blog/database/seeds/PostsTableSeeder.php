<?php

use Illuminate\Database\Seeder;

// inclusione db fake
use Faker\Generator as Faker;

// inclusione del model
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $new_post = new Post();

            $new_post->location = $faker->word();
            $new_post->state = $faker->words(3, true);
            $new_post->descriptions = $faker->paragraphs(3, true);
            $new_post->image = $faker->imageUrl(640, 480, 'animals', true);
            $new_post->price = $faker->randomNumber(4, true);

            $new_post->save();
        }
    }
}
