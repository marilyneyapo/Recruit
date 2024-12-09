<?php

// src/DataFixtures/AppFixtures.php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Job;
use App\Entity\Category;
use Symfony\Component\Uid\Uuid;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Create a category
        $category = new Category();
        $category->setName('Development');
        $manager->persist($category);

        // Create a job entity
        $job = new Job();
        $job->setType('Full-time');
        $job->setCompany('Tech Company');
        $job->setLogo('logo.png');
        $job->setUrl('https://techcompany.com');
        $job->setPosition('Software Engineer');
        $job->setCompetencesRequises(['PHP', 'Symfony', 'JavaScript']);
        $job->setAnneesExperienceRequise(3);
        $job->setLocation('Paris, France');
        $job->setDescription('We are looking for a talented Software Engineer.');
        $job->setHowToApply('Send your CV to hr@techcompany.com');
        $job->setToken(Uuid::v4()->toString());
        $job->setPublic(true);
        $job->setActivated(true);
        $job->setEmail('hr@techcompany.com');
        $job->setCategory($category);

        $manager->persist($job);
        $manager->flush();
    }
}
