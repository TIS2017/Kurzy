<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Role;
use AppBundle\Entity\User;
use AppBundle\Entity\Email;
use AppBundle\Entity\Workplace;
use AppBundle\Entity\CourseSoftPrerequisite;
use AppBundle\Entity\Enrolled;
use AppBundle\Entity\Place;
use AppBundle\Entity\CourseInstance;
use AppBundle\Entity\CourseType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;
use DateInterval;

class AppFixture extends Fixture
{

    private function randomDate($start_date, $end_date) {
        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime($end_date);


        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date_create(date('Y-m-d H:i:s', $val));
    }

    private function seedRoles(ObjectManager $manager) {
        //create user-roles
        $roles = array("ROLE_USER", "ROLE_SUPERVISOR", "ROLE_MASTER", "ROLE_SUBADMIN", "ROLE_ADMIN");
        for ($i = 0; $i < 5; $i++) {
            $role = new Role();
            $role->setName($roles[$i]);

            $this->addReference('role'.$i, $role);

            $manager->persist($role);
        }
    }

    private function seedUsers(ObjectManager $manager){
        // create 20 users
        $names = ['Patka Marmanova', 'Danka Skorvankova', 'Adka Spisakova', 'Misko Brcko'];
        $roles = ['User', 'Supervisor', 'Master', 'Subadmin', 'Admin'];
        for ($i = 1; $i <= 50; $i++) {
            $user = new User();
            if ($i>=1 && $i <= 4){
                $login = $names[($i-1)];
            } else {
                $login = 'user'.$i;
            }
            $user->setLogin($login);
            $pass = 'pass' . $i;
            $user->setPassword(password_hash($pass, PASSWORD_DEFAULT));
            $user->setRole($this->getReference('role'.random_int(0, 4)));

            $this->addReference('user'.$i, $user);  //set reference for this user

            $manager->persist($user);
        }
        // Uzivatelia s hlavnymi rolami
        $i = 0;
        foreach ($roles as $role) {
            $user = new User();
            $user->setLogin($role);
            $user->setPassword(password_hash('pass', PASSWORD_DEFAULT));
            $user->setRole($this->getReference('role'.$i));
            $i++;
            $manager->persist($user);
        }

    }

    public function setReferenceRepository(ReferenceRepository $referenceRepository)
    {
        parent::setReferenceRepository($referenceRepository); // TODO: Change the autogenerated stub
    }

    private function seedEmails(ObjectManager $manager){
        //create 50 emails
        for ($i = 1; $i <= 50; $i++) {
            $email = new Email();
            $email->setEmail('user' . $i . '@domain.com');
            $email->setUser($this->getReference('user'.$i));    //get reference of user
            ($this->getReference('user'.$i))->setSelectedEmail($email);

            $manager->persist($email);
        }
    }

    private function seedWorkplaces(ObjectManager $manager){
        //create 12 workplaces
        for ($i = -1; $i <= 10; $i++) {
            $workplace = new Workplace();
            if ($i == -1 || $i == 0) {   //vytvor Univerzitu UK a Fakultu FMFI
                if ($i == -1){
                    $name = 'Univerzita Komenskeho';
                    $this->addReference('UK', $workplace);
                    $parent = null;
                } else {
                    $name = 'Fakulta Matematiky,Fyziky a Informatiky';
                    $this->addReference('FMFI', $workplace);
                    $parent = $this->getReference('UK');
                }
                $workplace->setName($name);
                $workplace->setParent($parent);       //TODO parent je integer bez vazby
            } else {
                $workplace->setName('workplace' . $i);
                $workplace->setParent($this->getReference('FMFI'));

                $this->addReference('workplace' . $i, $workplace);
                //TODO ostatne vazby
            }
            $manager->persist($workplace);
        }
    }

    private function seedPlaces(ObjectManager $manager){
        //create 10 places
        for ($i = 1; $i <= 10; $i++) {
            $place = new Place();
            $place->setName('place'.$i);
            $now = new \DateTime("now");
            $place->setCreated($now);
            $place->setUpdated($now);
            $place->setDeleted(false);
            $place->setWorkplace($this->getReference('workplace'.$i));

            $this->addReference('place'.$i, $place);

            $manager->persist($place);
        }
    }

    private function seedCourseTypes(ObjectManager $manager){
        //create 10 course types
        for ($i = 1; $i <= 10; $i++) {
            $courseType = new CourseType();
            $courseType->setName('course type '.$i);
            $courseType->setDescription('Course description number '.$i);
            if ($i == 4 || $i == 5 || $i == 6){     // 4, 5, 6 viditelne kvoli prerekvizitam
                $visibility = true;
            } else {
                $visibility = rand(0,2)==2;
            }
            $courseType->setVisibility($visibility);
            $courseType->setDeleted(false);
            $num = random_int(1,20);
            $courseType->setGarantId($this->getReference('user'.$num));

            $this->addReference('courseType'.$i ,$courseType);

            $manager->persist($courseType);
        }
    }

    private function seedCourseInstances(ObjectManager $manager){
        //create 60 course instances
        for ($i = 1; $i <= 60; $i++) {
            $courseInstance = new CourseInstance();

            $startDate = "10 January 2017";
            $endDate = "12 December 2019";

            $randomTimestamp = $this->randomDate($startDate, $endDate);
            $courseInstance->setTimeStamp( $randomTimestamp );

            $randomTimestampDisenroll = $randomTimestamp;
            date_sub($randomTimestampDisenroll, date_interval_create_from_date_string('1 day'));

            $courseInstance->setDisenrollDate($randomTimestampDisenroll);

            $courseInstance->setPlace($this->getReference('place'. random_int(1,10) ));
            $courseInstance->setCapacity(random_int(10, 50));
            $courseInstance->setCourseType($this->getReference('courseType'. random_int(1,10) ));
            $courseInstance->setSupervisor($this->getReference('user'. random_int(1,20)) );


            $this->addReference('courseInstance'.$i, $courseInstance);

            $manager->persist($courseInstance);
        }
    }

    private function seedEnrolled(ObjectManager $manager){
        //create many enrolleds
        for ($i = 1; $i <= 19; $i++) {

            $enrolledIn = array();

            $randCount = random_int(0,7);

            for ($j = 1; $j <= $randCount; $j++) {

                $enrolled = new Enrolled();

                $enrolled->setUserId($this->getReference('user' . $i));


                $enrolled->setGraduated(rand(0, 1) == 1);
                $enrolled->setAttended(rand(0, 1) == 1);

                $randCourse = random_int(1, 60);

                if (!in_array($randCourse, $enrolledIn)) {
                    array_push($enrolledIn, $randCourse);


                    $enrolled->setCourseInstance($this->getReference('courseInstance' . $randCourse));

                    $enrolled->setComment('Comment.');

                    $manager->persist($enrolled);
                }
            }
        }
        $manager->flush();
    }

    private function seedCourseSoftPrerequisites(ObjectManager $manager){
        //create 10 Course Soft Prerequisites
        for ($i = 1; $i <= 10; $i++) {
            $courseSoftPrerequisite = new CourseSoftPrerequisite();
            $courseSoftPrerequisite->setValue('Soft Prerequisity '.$i);

            $this->addReference('softPrerequisite'.$i, $courseSoftPrerequisite);

            $manager->persist($courseSoftPrerequisite);
        }
    }

    private function seedCourseHardPrerequisites(ObjectManager $manager){
            $course4 = $this->getReference('courseType4');
            $course5 = $this->getReference('courseType5');
            $course6 = $this->getReference('courseType6');

            $course4->setHardPrerequisites(array($course5,$course6));
            $course5->setHardPrerequisitesOf(array($course4));
            $course6->setHardPrerequisitesOf(array($course4));

            $manager->persist($course4);
            $manager->persist($course5);
            $manager->persist($course6);
    }

    private function seedUserWorkplaces(ObjectManager $manager){
        for ($i = 1; $i <= 20; $i++) {
            $user = $this->getReference('user'.$i);
            $workplaces = array();
            for ($j = 1; $j <= 10; $j++) {
                if (random_int(1,3) == 3){
                    $workplace = $this->getReference('workplace'.$j);
                    $workplaceUsers = $workplace->getUsers();
                    $workplaceUsers->add($user);
                    array_push($workplaces, $workplace);
                    $manager->persist($workplace);
                }
            }
            $user->setWorkplaces($workplaces);

            $manager->persist($user);
        }
    }

    private function seedCourseWorkplaces(ObjectManager $manager){
        for ($i = 1; $i <= 10; $i++) {
            $courseType = $this->getReference('courseType'.$i);
            $workplaces = array();
            for ($j = 1; $j <= 10; $j++) {
                if (random_int(1,3) == 3){
                    $workplace = $this->getReference('workplace'.$j);
                    $workplaceCourseTypes = $workplace->getCourseTypes();
                    $workplaceCourseTypes->add($courseType);
                    array_push($workplaces, $workplace);
                    $manager->persist($workplace);
                }
            }
            $courseType->setWorkplaces($workplaces);

            $manager->persist($courseType);
        }
    }

    private function seedSubadmins(ObjectManager $manager){
        for ($i = 1; $i <= 20; $i++) {
            $user = $this->getReference('user'.$i);
            $workplaces = array();
            for ($j = 1; $j <= 10; $j++) {
                if (random_int(1,6) == 6){
                    $workplace = $this->getReference('workplace'.$j);
                    $workplaceSubadmins = $workplace->getSubadmins();
                    $workplaceSubadmins->add($user);
                    array_push($workplaces, $workplace);
                    $manager->persist($workplace);
                }
            }
            $user->setSubadminWorkplaces($workplaces);

            $manager->persist($user);
        }
    }

    private function seedCourseTypeSoftPrerequisites(ObjectManager $manager){
        for ($i = 1; $i <= 10; $i++) {

            $courseType = $this->getReference('courseType'.$i);
            $softPrerequisites = array();

            for ($j = 1; $j <= 10; $j++) {
                if (random_int(1,4) == 4){
                    $softPrerequisite = $this->getReference('softPrerequisite'.$j);
                    $softPrerequisiteTo = $softPrerequisite->getSoftPrerequisiteTo();
                    $softPrerequisiteTo->add($courseType);
                    array_push($softPrerequisites, $softPrerequisite);
                    $manager->persist($softPrerequisite);
                }
            }
            $courseType->setSoftPrerequisites($softPrerequisites);
            $manager->persist($courseType);
        }
    }

        public function load(ObjectManager $manager){
        $this->seedRoles($manager);
        $this->seedUsers($manager);
        $this->seedEmails($manager);
        $this->seedWorkplaces($manager);
        $this->seedPlaces($manager);
        $this->seedCourseTypes($manager);
        $this->seedCourseInstances($manager);
        $this->seedEnrolled($manager);
        $this->seedCourseSoftPrerequisites($manager);
        $this->seedCourseHardPrerequisites($manager);
        $this->seedUserWorkplaces($manager);
        $this->seedCourseWorkplaces($manager);
        $this->seedSubadmins($manager);
        $this->seedCourseTypeSoftPrerequisites($manager);

        $manager->flush();
    }

}