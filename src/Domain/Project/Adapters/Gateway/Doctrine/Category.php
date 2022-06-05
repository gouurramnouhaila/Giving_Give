<?php


namespace App\Domain\Project\Adapters\Gateway\Doctrine;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * @package App\Domain\Project\Adapters\Gateway\Doctrine
 * @ORM\Entity(repositoryClass="DoctrineCategoryRepository")
 */
class Category
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
     private $id;

    /**
     * @ORM\Column(type="string")
     */
     private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Domain\Project\Adapters\Gateway\Doctrine\Project", mappedBy="category")
     */
     private $projects;



    /**
     * Category constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }




}