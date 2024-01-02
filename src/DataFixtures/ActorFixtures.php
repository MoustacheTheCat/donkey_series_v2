<?php

namespace App\DataFixtures;

use App\Entity\Actor;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTOR_NORMAN_REEDUS = 'normanReedus';
    const ACTOR_JON_BERNTHAL = 'jonBernthal';
    const ACTOR_ANDREW_LINCOLN = 'andrewLincoln';
    const ACTOR_JEFFREY_DEAN_MORGAN = 'jeffreyDeanMorgan';
    const ACTOR_HILARIE_BURTON = 'hilarieBurton';
    const ACTOR_Cillian_Murphy = 'cillianMurphy';
    const ACTOR_Paul_Anderson = 'PaulAnderson';
    const ACTOR_Bryan_Cranston = 'BryanCranston';
    const ACTOR_Aaron_Paul = 'AaronPaul';
    const ACTOR_Dominic_West = 'DominicWest';
    const ACTOR_John_Doman = 'JohnDoman';
    const ACTOR_Kyle_MacLachlan = 'KyleMacLachlan';
    const ACTOR_Michael_Ontkean = 'MichaelOntkean';
    const ACTOR_Alexandre_Astier = 'AlexandreAstier';
    const ACTOR_Lionnel_Astier = 'LionnelAstier';
    const ACTOR_Frankie_Muniz = 'FrankieMuniz';
    const ACTOR_Justin_Berfield = 'JustinBerfield';
    const ACTOR_CHRISTOPHER_MELONI = 'christopherMeloni';
    const ACTOR_MARISKA_HARGITAY = 'mariskaHargitay';
    const ACTOR_CHRISTHOPHE_LEMOINE = 'christopheLemoine';
    const ACTOR_THIERRY_WERMUTH = 'thierryWermuth';
    const ACTOR_WILLIAM_CORYN = 'williamCoryn';
    const ACTOR_HENRI_COURSEAUX = 'henriCourseaux';
    const ACTOR_JIM_PARSONS = 'jimParsons';
    const ACTOR_KALEY_CUOCO = 'kaleyCuoco';
    const ACTOR_JOHNNY_GALECKI = 'johnnyGalecki';
    const ACTOR_MELISSA_RAUCH = 'melissaRauch';
    const ACTOR_SIMON_HELMBERG = 'simonHelberg';
    const ACTOR_ZACH_BRAFF = 'zachBraff';
    const ACTOR_DONALD_FAISON = 'donaldFaison';
    const ACTOR_JON_HAMM = 'jonHamm';
    const ACTOR_ELISABETH_MOSS = 'elisabethMoss';

    public function load(ObjectManager $manager): void
    {

        $normanReedus = new Actor();
        $normanReedus->setName('Norman Reedus');
        $normanReedus->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($normanReedus);
        $this->addReference(self::ACTOR_NORMAN_REEDUS, $normanReedus);

        $jonBernthal = new Actor();
        $jonBernthal->setName('Jon Bernthal');
        $jonBernthal->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($jonBernthal);
        $this->addReference(self::ACTOR_JON_BERNTHAL, $jonBernthal);


        $andrewLincoln = new Actor();
        $andrewLincoln->setName('Andrew Lincoln');
        $andrewLincoln->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($andrewLincoln);
        $this->addReference(self::ACTOR_ANDREW_LINCOLN, $andrewLincoln);


        $jeffreyDeanMorgan = new Actor();
        $jeffreyDeanMorgan->setName('Jeffrey Dean Morgan');
        $jeffreyDeanMorgan->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($jeffreyDeanMorgan);
        $this->addReference(self::ACTOR_JEFFREY_DEAN_MORGAN, $jeffreyDeanMorgan);

        $hilarieBurton = new Actor();
        $hilarieBurton->setName('Hilarie Burton');
        $hilarieBurton->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($hilarieBurton);
        $this->addReference(self::ACTOR_HILARIE_BURTON, $hilarieBurton);

        $cillianMurphy = new Actor();
        $cillianMurphy->setName('Cillian Murphy');
        $cillianMurphy->addProgram($this->getReference(ProgramFixtures::PROGRAM_PEAKY_BLINDERS));
        $manager->persist($cillianMurphy);
        $this->addReference(self::ACTOR_Cillian_Murphy, $cillianMurphy);


        $PaulAnderson = new Actor();
        $PaulAnderson->setName('Paul Anderson');
        $PaulAnderson->addProgram($this->getReference(ProgramFixtures::PROGRAM_PEAKY_BLINDERS));
        $manager->persist($PaulAnderson);
        $this->addReference(self::ACTOR_Paul_Anderson, $PaulAnderson);
        
        $bryanCranston = new Actor();
        $bryanCranston->setName('Bryan Cranston');
        $bryanCranston->addProgram($this->getReference(ProgramFixtures::PROGRAM_BRERAKING_BAD));
        $manager->persist($bryanCranston);
        $this->addReference(self::ACTOR_Bryan_Cranston, $bryanCranston);

        $aaronPaul = new Actor();
        $aaronPaul->setName('Aaron Paul');
        $aaronPaul->addProgram($this->getReference(ProgramFixtures::PROGRAM_BRERAKING_BAD));
        $manager->persist($aaronPaul);
        $this->addReference(self::ACTOR_Aaron_Paul, $aaronPaul);

        $dominicWest = new Actor();
        $dominicWest->setName('Dominic West');
        $dominicWest->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_WIRE));
        $manager->persist($dominicWest);
        $this->addReference(self::ACTOR_Dominic_West, $dominicWest);

        $johnDoman = new Actor();
        $johnDoman->setName('John Doman');
        $johnDoman->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_WIRE));
        $manager->persist($johnDoman);
        $this->addReference(self::ACTOR_John_Doman, $johnDoman);

        $kyleMacLachlan = new Actor();
        $kyleMacLachlan->setName('Kyle MacLachlan');
        $kyleMacLachlan->addProgram($this->getReference(ProgramFixtures::PROGRAM_TWIN_PEAKS));
        $manager->persist($kyleMacLachlan);
        $this->addReference(self::ACTOR_Kyle_MacLachlan, $kyleMacLachlan);

        $michaelOntkean = new Actor();
        $michaelOntkean->setName('Michael Ontkean');
        $michaelOntkean->addProgram($this->getReference(ProgramFixtures::PROGRAM_TWIN_PEAKS));
        $manager->persist($michaelOntkean);
        $this->addReference(self::ACTOR_Michael_Ontkean, $michaelOntkean);

        $alexandreAstier = new Actor();
        $alexandreAstier->setName('Alexandre Astier');
        $alexandreAstier->addProgram($this->getReference(ProgramFixtures::PROGRAM_KAAMELOTT));
        $manager->persist($alexandreAstier);
        $this->addReference(self::ACTOR_Alexandre_Astier, $alexandreAstier);

        $lionnelAstier = new Actor();
        $lionnelAstier->setName('Lionnel Astier');
        $lionnelAstier->addProgram($this->getReference(ProgramFixtures::PROGRAM_KAAMELOTT));
        $manager->persist($lionnelAstier);
        $this->addReference(self::ACTOR_Lionnel_Astier, $lionnelAstier);

        $frankieMuniz = new Actor();
        $frankieMuniz->setName('Frankie Muniz');
        $frankieMuniz->addProgram($this->getReference(ProgramFixtures::PROGRAM_MALCOLM));
        $manager->persist($frankieMuniz);
        $this->addReference(self::ACTOR_Frankie_Muniz, $frankieMuniz);

        $justinBerfield = new Actor();
        $justinBerfield->setName('Justin Berfield');
        $justinBerfield->addProgram($this->getReference(ProgramFixtures::PROGRAM_MALCOLM));
        $manager->persist($justinBerfield);
        $this->addReference(self::ACTOR_Justin_Berfield, $justinBerfield);

        $christopherMeloni = new Actor();
        $christopherMeloni->setName('Christopher Meloni');
        $christopherMeloni->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($christopherMeloni);
        $this->addReference(self::ACTOR_CHRISTOPHER_MELONI, $christopherMeloni);

        $mariskaHargitay = new Actor();
        $mariskaHargitay->setName('Mariska Hargitay');
        $mariskaHargitay->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($mariskaHargitay);
        $this->addReference(self::ACTOR_MARISKA_HARGITAY, $mariskaHargitay);

        $christopheLemoine = new Actor();
        $christopheLemoine->setName('Christophe Lemoine');
        $christopheLemoine->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($christopheLemoine);
        $this->addReference(self::ACTOR_CHRISTHOPHE_LEMOINE, $christopheLemoine);

        $thierryWermuth = new Actor();
        $thierryWermuth->setName('Thierry Wermuth');
        $thierryWermuth->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($thierryWermuth);
        $this->addReference(self::ACTOR_THIERRY_WERMUTH, $thierryWermuth);

        $williamCoryn = new Actor();
        $williamCoryn->setName('William Coryn');
        $williamCoryn->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($williamCoryn);
        $this->addReference(self::ACTOR_WILLIAM_CORYN, $williamCoryn);

        $henriCourseaux = new Actor();
        $henriCourseaux->setName('Henri Courseaux');
        $henriCourseaux->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($henriCourseaux);
        $this->addReference(self::ACTOR_HENRI_COURSEAUX, $henriCourseaux);

        $jimParsons = new Actor();
        $jimParsons->setName('Jim Parsons');
        $jimParsons->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($jimParsons);
        $this->addReference(self::ACTOR_JIM_PARSONS, $jimParsons);

        $kaleyCuoco = new Actor();
        $kaleyCuoco->setName('Kaley Cuoco');
        $kaleyCuoco->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($kaleyCuoco);
        $this->addReference(self::ACTOR_KALEY_CUOCO, $kaleyCuoco);

        $johnnyGalecki = new Actor();
        $johnnyGalecki->setName('Johnny Galecki');
        $johnnyGalecki->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($johnnyGalecki);
        $this->addReference(self::ACTOR_JOHNNY_GALECKI, $johnnyGalecki);

        $melissaRauch = new Actor();
        $melissaRauch->setName('Melissa Rauch');
        $melissaRauch->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($melissaRauch);
        $this->addReference(self::ACTOR_MELISSA_RAUCH, $melissaRauch);

        $simonHelberg = new Actor();
        $simonHelberg->setName('Simon Helberg');
        $simonHelberg->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($simonHelberg);
        $this->addReference(self::ACTOR_SIMON_HELMBERG, $simonHelberg);

        $zachBraff = new Actor();
        $zachBraff->setName('Zach Braff');
        $zachBraff->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($zachBraff);
        $this->addReference(self::ACTOR_ZACH_BRAFF, $zachBraff);

        $donaldFaison = new Actor();
        $donaldFaison->setName('Donald Faison');
        $donaldFaison->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($donaldFaison);
        $this->addReference(self::ACTOR_DONALD_FAISON, $donaldFaison);

        $jonHamm = new Actor();
        $jonHamm->setName('Jon Hamm');    
        $jonHamm->addProgram($this->getReference(ProgramFixtures::PROGRAM_MAD_MEN));
        $manager->persist($jonHamm);
        $this->addReference(self::ACTOR_JON_HAMM, $jonHamm);

        $elisabethMoss = new Actor();
        $elisabethMoss->setName('Elisabeth Moss');   
        $elisabethMoss->addProgram($this->getReference(ProgramFixtures::PROGRAM_MAD_MEN));
        $manager->persist($elisabethMoss);
        $this->addReference(self::ACTOR_ELISABETH_MOSS, $elisabethMoss);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}



