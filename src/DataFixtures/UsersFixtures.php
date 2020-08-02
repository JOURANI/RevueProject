<?php


namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\GroupeAuteur;
use App\Entity\Institution;
use App\Entity\Revue;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {

        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        //#############################################
        //###########  Institution Records  ###########
        //#############################################

        $institution = new Institution();
        $institution->setNomIns('NSA');
        $institution->setAdressIns('NSA Adresse');
        $institution->setVilleIns('RABAT');
        $manager->persist($institution);

        $institution1 = new Institution();
        $institution1->setNomIns('ENCG');
        $institution1->setAdressIns('ENCG Adresse');
        $institution1->setVilleIns('CASABLANCA');
        $manager->persist($institution1);

        $institution2 = new Institution();
        $institution2->setNomIns('INPT');
        $institution2->setAdressIns('INPT Adresse');
        $institution2->setVilleIns('RABAT');
        $manager->persist($institution2);
        
        //#############################################
        //###############  User Records  ##############
        //#############################################

        $admin = new Users();
        $admin->setNom("admin");
        $admin->setPrenom("admin");
        $admin->setAdresse("Adresse admin");
        $admin->setEmail("admin@email.com");
        $admin->setPassword($this->encoder->encodePassword($admin,"admin"));
        $admin->setUsername("admin");
        $admin->setCreatedAt(new \DateTime());
        $admin->setUpdatedAt(new \DateTime());
        $admin->setRoles(["ROLE_ADMIN"]);
        $admin->setIsValide(true);
        $admin->setInstitution($institution->setNomIns("NSA"));
        $manager->persist($admin);

        $user = new Users();
        $user ->setNom("user");
        $user->setPrenom("user");
        $user->setAdresse("Adresse user");
        $user->setEmail("user@email.com");
        $user->setPassword($this->encoder->encodePassword($user,"user"));
        $user->setUsername("user");
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());
        $user->setRoles(["ROLE_USER"]);
        $user->setIsValide(true);
        $user->setInstitution($institution->setNomIns("ENCG"));
        $manager->persist($user);

        //#############################################
        //#############  Reviwer Records  #############
        //#############################################

        $reviwer = new Users();
        $reviwer ->setNom("reviewer");
        $reviwer->setPrenom("reviewer");
        $reviwer->setAdresse("Adresse reviewer");
        $reviwer->setEmail("reviewer@email.com");
        $reviwer->setPassword($this->encoder->encodePassword($reviwer,"reviewer"));
        $reviwer->setUsername("reviewer");
        $reviwer->setCreatedAt(new \DateTime());
        $reviwer->setUpdatedAt(new \DateTime());
        $reviwer->setRoles(["ROLE_REVIEWER"]);
        $reviwer->setIsValide(true);
        $reviwer->setInstitution($institution->setNomIns("INPT"));
        $manager->persist($reviwer);

        //#############################################
        //############  Category Records  #############
        //#############################################

        $category= new Categorie();
        $category->setNomCategorie("Physique");
        $manager->persist($category);

        $category1= new Categorie();
        $category1->setNomCategorie("Chimie");
        $manager->persist($category1);

        $category2= new Categorie();
        $category2->setNomCategorie("Math");
        $manager->persist($category2);

        $category3= new Categorie();
        $category3->setNomCategorie("SVT");
        $manager->persist($category3);

        $category4= new Categorie();
        $category4->setNomCategorie("Sociologie");
        $manager->persist($category4);

        //#############################################
        //#############  Revue Records  ###############
        //#############################################

        $revue = new Revue();
        $revue->setNomRevue("scopus");
        $revue->setTypeRevue("scopus");
        $manager->persist($revue);

        $revue1 = new Revue();
        $revue1->setNomRevue("Cedefop");
        $revue1->setTypeRevue("Cedefop");
        $manager->persist($revue1);

        $revue2 = new Revue();
        $revue2->setNomRevue("PubChem");
        $revue2->setTypeRevue("PubChem");
        $manager->persist($revue2);

        //#############################################
        //#############  Auteur Records  ##############
        //#############################################

        $auteur = new GroupeAuteur();
        $auteur->setPrenomAuteur("fabian");
        $auteur->setNomAuteur("fabian");
        $auteur->setAdresseIns("paris");
        $auteur->setNomIns("university la salle");
        $manager->persist($auteur);

        $auteur1 = new GroupeAuteur();
        $auteur1->setPrenomAuteur("tom");
        $auteur1->setNomAuteur("tom");
        $auteur1->setAdresseIns("london");
        $auteur1->setNomIns("london institution");
        $manager->persist($auteur1);

        $auteur2 = new GroupeAuteur();
        $auteur2->setPrenomAuteur("younes");
        $auteur2->setNomAuteur("younes");
        $auteur2->setAdresseIns("paris");
        $auteur2->setNomIns("college la salle");
        $manager->persist($auteur2);

        $auteurs =[$auteur,$auteur1,$auteur2];

        //#############################################
        //#############  Article Records  #############
        //#############################################

        $article =new Article();
        $article->setTitle("svt la genetique");
        $article->setAbstract("svt la genetique");
        $article->setKeyword("svt la genetique");
        $article->setSize("230");
        $article->setContent("svt la genetique svt la genetique");
        $article->setCategorie($category3->setNomCategorie("SVT"));
        $article->setRevue($revue1->setTypeRevue("Cedefop"));
        $article->setUser($admin->setNom("admin"));
        $item=null;
        foreach($auteurs  as $item){
            $article->addAuteur($item);
        }

        $manager->persist($article);


        $article1 =new Article();
        $article1->setTitle("Chimie nucléaire");
        $article1->setAbstract("Chimie nucléaire");
        $article1->setKeyword("Chimie nucléaire");
        $article1->setSize("333");
        $article1->setContent("Chimie nucléaire Chimie nucléaire");
        $article1->setCategorie($category3->setNomCategorie("Chimie"));
        $article1->setRevue($revue1->setTypeRevue("Cedefop"));
        $article1->setUser($admin->setNom("admin"));
        $item=null;
        foreach($auteurs  as $item){
            $article1->addAuteur($item);
        }

        $manager->persist($article1);

        $manager->flush();
    }
}
