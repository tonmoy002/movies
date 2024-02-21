<?php
namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2015);
        $movie->setDescription('This is the description of the Dark knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2023/01/06/02/01/ai-generated-7700259_1280.jpg');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description of Avengers and game');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2024/01/06/02/35/ai-generated-8490496_1280.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
