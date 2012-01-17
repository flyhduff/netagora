<?php

namespace ECE\Bundle\NetagoraBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ECE\Bundle\NetagoraBundle\Entity\User
 *
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $picture
     */
    private $picture;
    
    /**
     * @var string $location
     */
    private $location;
    
    /**
     * @var string $firstName
     */
    private $firstName;
    
    /**
     * @var string $lastName
     */
    private $lastName;
    
    /**
     * @var datetime $birthdate
     */
    private $birthdate;
    
    /**
     * @var datetime $registeredAt
     */
    private $registeredAt;

    /**
     * @var datetime $lastConnection
     */
    private $lastLoginAt;
    
    /** 
     * @var string
     */
    protected $twitterID;

    /** 
     * @var string
     */
    protected $twitterUsername;

    private $categories;

    private $publications;

    private $tokens;

    /**
     * @Assert\Image(maxSize="1M")
     */
    public $file;

    function __construct()
    {
        parent::__construct();
        $this->lastLoginAt = new \DateTime();
        $this->registeredAt = new \DateTime();
        $this->categories = new ArrayCollection();
        $this->publications = new ArrayCollection();
        $this->tokens = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setUsername($username)
    {
        parent::setUsername($username);

        $this->setUsernameCanonical($username);
    }

    public function setEmail($email)
    {
        parent::setEmail($email);

        $this->setEmailCanonical($email);
    }

    public function getTokens()
    {
        return $this->tokens;
    }

    public function getTwitterToken()
    {
        return $this->getTokenByType('twitter');
    }

    public function getFacebookToken()
    {
        return $this->getTokenByType('facebook');
    }

    private function getTokenByType($type)
    {
        foreach ($this->tokens as $token) {
            if ($type === $token->getType()) {
                return $token;
            }
        }
    }

    public function setTokens($tokens)
    {
        $this->tokens = array();
        foreach ($tokens as $token) {
            $this->addToken($token);
        }
    }

    public function addToken(ServiceToken $token)
    {
        if (!$this->tokens->contains($token)) {
            $this->token->add($token);
        }

        if (!$token->getUser()) {
            $token->setUser($this);
        }
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories($categories)
    {
        $this->categories = array();
        foreach ($categories as $category) {
            $this->addCategory($category);
        }
    }

    public function addCategory(Category $category)
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        if (!$category->contains($this)) {
            $category->addUser($this);
        }
    }

    public function getPublications()
    {
        return $this->publications;
    }

    public function getFavoritePublications()
    {
        $favorites = array();
        foreach ($this->publications as $publication) {
            if ($publication->isFavorite()) {
                $favorites[] = $publication;
            }
        }

        return $favorites;
    }

    public function setPublications($publications)
    {
        $this->publications = array();
        foreach ($publications as $publication) {
            $this->addPublication($publication);
        }
    }

    public function addPublication(Publication $publication)
    {
        if (!$this->publications->contains($publication)) {
            $this->publications->add($publication);
        }

        if (!$publication->getUser()) {
            $publication->setUser($this);
        }
    }

    /**
     * Set picture
     *
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Set lastname
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * Set birthdate
     *
     * @param integer $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get birthdate
     *
     * @return integer 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set inscriptionDate
     *
     * @param DateTime $date
     */
    public function setRegisteredAt(\DateTime $date)
    {
        $this->registeredAt = $date;
    }

    /**
     * Get inscriptionDate
     *
     * @return DateTime 
     */
    public function getRegisteredAt()
    {
        return $this->registeredAt;
    }

    /**
     * Set last login date
     *
     * @param DateTime $lastLoginAt
     */
    public function setLastConnection($lastLoginAt)
    {
        $this->lastLoginAt = $lastLoginAt;
    }

    /**
     * Get last login date
     *
     * @return DateTime 
     */
    public function getLastConnection()
    {
        return $this->lastLoginAt;
    }
    
    /**
     * Set twitterID
     *
     * @param string $twitterID
     */
    public function setTwitterID($twitterID)
    {
        $this->twitterID = $twitterID;
        $this->setTwitterUsername($twitterID);
        $this->salt = '';
    }

    /**
     * Get twitterID
     *
     * @return string 
     */
    public function getTwitterID()
    {
        return $this->twitterID;
    }

    /**
     * Set twitter_username
     *
     * @param string $twitterUsername
     */
    public function setTwitterUsername($twitterUsername)
    {
        $this->twitterUsername = $twitterUsername;
    }

    /**
     * Get twitter_username
     *
     * @return string 
     */
    public function getTwitterUsername()
    {
        return $this->twitterUsername;
    }

    public function getAbsolutePath()
    {
        return null === $this->picture ? null : $this->getUploadRootDir().'/'.$this->picture;
    }

    public function getWebPath()
    {
        return null === $this->picture ? null : $this->getUploadDir().'/'.$this->picture;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }
    
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->file) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the target filename to move to
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // set the path property to the filename where you'ved saved the file
        $this->picture = $this->file->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }
    
    public function getSocialButtons($network, $tweet_id)
    {
    
    	if($network == "f"){
    	
    		// for the social buttons at the bottom of the feed display
    		$social_buttons='<div class="fb-like" data-href="http://blop.ca" data-send="true" data-layout="button_count" data-width="200" data-show-faces="true"></div>';
    		
    	}
    	else if($network == "t"){

    		$t_reply = '<a class="t_reply" href="https://twitter.com/intent/tweet?in_reply_to='.$tweet_id.'"> </a>';
    		$t_fav = '<a class="t_favorite" href="https://twitter.com/intent/retweet?tweet_id='.$tweet_id.'"> </a>';
    		$t_retweet = '<a class="t_retweet" href="https://twitter.com/intent/favorite?tweet_id='.$tweet_id.'"> </a>';
    		$social_buttons = $t_reply . ' ' . $t_fav . ' ' . $t_retweet;
    	}	
    
    	return $social_buttons;	
    
    }
}