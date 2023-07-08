<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();  # Creates Dummy Users

        $user = User::factory()->create([
            'name' => 'Rick Man',
            'email' => 'rick@example.com'
        ]);

        Listing::factory(6)->create(['user_id' => $user->id]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Java Senior Developer',
        //     'tags' => 'Java, kotling, spring, spring Boot, javafx',
        //     'company' => 'My company',
        //     'location' => 'Nairobi, KE',
        //     'email' => 'email@email.co',
        //     'website' => 'https://ngonyoku.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, libero reiciendis animi ratione laborum incidunt. Ipsa perspiciatis doloremque eaque quam, cum modi aliquam eveniet incidunt quia tempore numquam officia ex?'
        // ]);

        // Listing::create([
        //     'title' => 'Full Stack Engineer',
        //     'tags' => 'js, html, css, backend, api, nodejs',
        //     'company' => 'Wainaina Corp',
        //     'location' => 'Nakuru, KE',
        //     'email' => 'email@email.co',
        //     'website' => 'https://ngonyoku.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, libero reiciendis animi ratione laborum incidunt. Ipsa perspiciatis doloremque eaque quam, cum modi aliquam eveniet incidunt quia tempore numquam officia ex?'
        // ]);
    }
}
