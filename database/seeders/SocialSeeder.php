<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Social::create([
            'href' => 'https://www.facebook.com/deltaarhlab',
            'alt' => 'facebook',
            'file_path' => '/images/social_icons/DAL_FB.svg',
        ]);

        \App\Models\Social::create([
            'href' => 'https://www.instagram.com/deltaarhlab',
            'alt' => 'instagram',
            'file_path' => '/images/social_icons/DAL_IG.svg',
        ]);

        \App\Models\Social::create([
            'href' => 'https://www.linkedin.com/company/deltaarhlab',
            'alt' => 'linkedin',
            'file_path' => '/images/social_icons/DAL_IN.svg',
        ]);

        \App\Models\Social::create([
            'href' => 'https://github.com/DeltaArhLab',
            'alt' => 'github',
            'file_path' => '/images/social_icons/DAL_Git.svg',
        ]);

        \App\Models\Social::create([
            'href' => 'mailto:contactus@deltaarhlab.com',
            'alt' => 'email',
            'file_path' => '/images/social_icons/DAL_mail.svg',
        ]);
    }
}
