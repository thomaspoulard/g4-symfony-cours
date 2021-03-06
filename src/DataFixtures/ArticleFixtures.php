<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ArticleFixtures extends Fixture
{

    //TODO: For next time; Create ArticleController and display 100 articles in a new view that you can access with a navbar containing links
    // Careful, it must be user friendly. Stylize your twig views with Bootstrap
    
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 100; $i++) {
            $article = new Article();
            $article->setTitle($faker->sentence());
            $article->setContent ($faker->paragraph(3, true));
            $article->setDate($faker->dateTime());
    
            $manager->persist($article);
        }

        $manager->flush();
    }
}
