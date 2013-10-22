<?php

namespace Application\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $body;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }
    /**
     * @var string
     */
    private $summary;

    /**
     * @var \Application\PostBundle\Entity\User
     */
    private $users;


    /**
     * Set summary
     *
     * @param string $summary
     * @return Post
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set users
     *
     * @param \Application\PostBundle\Entity\User $users
     * @return Post
     */
    public function setUsers(\Application\PostBundle\Entity\User $users = null)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return \Application\PostBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var \Application\PostBundle\Entity\User
     */
    private $username;


    /**
     * Set username
     *
     * @param \Application\PostBundle\Entity\User $username
     * @return Post
     */
    public function setUsername(\Application\PostBundle\Entity\User $username = null)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return \Application\PostBundle\Entity\User 
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @var \Application\PostBundle\Entity\User
     */
    private $usero;


    /**
     * Set usero
     *
     * @param \Application\PostBundle\Entity\User $usero
     * @return Post
     */
    public function setUsero(\Application\PostBundle\Entity\User $usero = null)
    {
        $this->usero = $usero;
    
        return $this;
    }

    /**
     * Get usero
     *
     * @return \Application\PostBundle\Entity\User 
     */
    public function getUsero()
    {
        return $this->usero;
    }
}