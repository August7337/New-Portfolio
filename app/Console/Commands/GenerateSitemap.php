<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use App\Models\Post;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating an XML Sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();

        $this->info("adding root...");
        $postsitmap->add(
            Url::create('/')
        );

        Post::get()->each(function (Post $post) use ($postsitmap) {
            if ($post->draft == true)
                return;
            $this->info("adding '/post/{$post->url}'...");
            $postsitmap->add(
                Url::create("/post/{$post->url}")
            );
        });

        $postsitmap->writeToFile(public_path('sitemap.xml'));
        $this->info("\nSitemap Generated Successfully");
    }
}
