<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /* for ($i = 0; $i < 100; $i++) {
            $article = new Article();
            $article->setTitle("l'article cool");
            $article->setContent("le content");
            $article->setDate(new \DateTime('now'));
    
            $manager->persist($article);
        }*/

        $manager->flush();
    }
}
