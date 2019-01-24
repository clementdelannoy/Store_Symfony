<?php

namespace CartBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="CartBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min=3, max=255)
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name = '';

    /**
     * @var bool
     *
     * @Assert\Type(type="boolean")
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active = false;

    /**
     * Many Groups have Many Users.
     *
     * @ORM\ManyToMany(targetEntity="CartBundle\Entity\Product", mappedBy="categories")
     */
    private $products;

    /**
     * Category constructor.
     */
    public function __construct()
    {
        $this->setName('');
        $this->setActive(true);
        $this->setProducts(new ArrayCollection());
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Category
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ArrayCollection $products
     * @return $this
     */
    public function setProducts(ArrayCollection $products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}

