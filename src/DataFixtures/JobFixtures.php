<?php

namespace App\DataFixtures;

use App\Entity\Job;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JobFixtures extends Fixture
{
    /**
     * Summary of load
     * @param \Doctrine\Persistence\ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $currentDateTime = new \DateTimeImmutable();

        // Job SensioLabs
        $jobSensioLabs = new Job();
        $jobSensioLabs->setCategory($this->getReference('category-programming'));
        $jobSensioLabs->setType('full-time');
        $jobSensioLabs->setCompany('sensiolabs');
        $jobSensioLabs->setLogo('images/sensiolabs.jpeg');
        $jobSensioLabs->setUrl('http://www.sensiolabs.com/');
        $jobSensioLabs->setPosition('Web Developer');
        $jobSensioLabs->setLocation('Paris, France');
        $jobSensioLabs->setDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
        $jobSensioLabs->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobSensioLabs->setPublic(true);
        $jobSensioLabs->setActivated(true);
        $jobSensioLabs->setToken('job_sensio_labs');
        $jobSensioLabs->setEmail('job@example.com');
        $jobSensioLabs->setExpiresAt(new \DateTimeImmutable('+5 days'));
        $jobSensioLabs->setCreatedAt(new \DateTimeImmutable());
        $jobSensioLabs->setUpdatedAt(new \DateTimeImmutable());

        //Job ExtremeSensio
        $jobExtremeSensio = new Job();
        $jobExtremeSensio->setCategory($this->getReference('category-design'));
        $jobExtremeSensio->setType('part-time');
        $jobExtremeSensio->setCompany('Extreme Sensio');
        $jobExtremeSensio->setLogo('extreme-sensio.gif');
        $jobExtremeSensio->setUrl('http://www.extreme-sensio.com/');
        $jobExtremeSensio->setPosition('Web Designer');
        $jobExtremeSensio->setLocation('Paris, France');
        $jobExtremeSensio->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $jobExtremeSensio->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobExtremeSensio->setPublic(true);
        $jobExtremeSensio->setActivated(true);
        $jobExtremeSensio->setToken('job_extreme_sensio');
        $jobExtremeSensio->setEmail('job@example.com');
        $jobExtremeSensio->setExpiresAt(new \DateTimeImmutable('+30 days'));
        $jobExtremeSensio->setCreatedAt($currentDateTime);
        $jobExtremeSensio->setUpdatedAt($currentDateTime);

        // Job Expired
        $jobExpired = new Job();
        $jobExpired->setCategory($this->getReference('category-programming'));
        $jobExpired->setType('full-time');
        $jobExpired->setCompany('Sensio Labs');
        $jobExpired->setLogo('sensio-labs.gif');
        $jobExpired->setUrl('http://www.sensiolabs.com/');
        $jobExpired->setPosition('Web Developer Expired');
        $jobExpired->setLocation('Paris, France');
        $jobExpired->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $jobExpired->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
        $jobExpired->setPublic(true);
        $jobExpired->setActivated(true);
        $jobExpired->setToken('job_expired');
        $jobExpired->setEmail('job@example.com');
        $jobExpired->setExpiresAt(new \DateTimeImmutable('-10 days'));

        $manager->persist($jobSensioLabs);
        $manager->persist($jobExtremeSensio);
        $manager->persist($jobExpired);

        // Job
        for ($i = 100; $i <= 130; $i++) {
            $job = new Job();
            $job->setCategory($this->getReference('category-programming'));
            $job->setType('full-time');
            $job->setCompany('Company ' . $i);
            $job->setPosition('Web Developer');
            $job->setLocation('Paris, France');
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
            $job->setPublic(true);
            $job->setActivated(true);
            $job->setToken('job_' . $i);
            $job->setEmail('job@example.com');

            $manager->persist($job);
        }

        $manager->flush();
    }

    /**
     * @return array
     */

    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}