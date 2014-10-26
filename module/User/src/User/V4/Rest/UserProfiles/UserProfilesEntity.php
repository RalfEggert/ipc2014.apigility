<?php
namespace User\V4\Rest\UserProfiles;

/**
 * Class UserProfilesEntity
 *
 * @package User\V4\Rest\UserProfiles\Entity
 */
class UserProfilesEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var array
     */
    protected $contacts;

    /**
     * @var array
     */
    protected $websites;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param array $contacts
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param array $websites
     */
    public function setWebsites(array $websites)
    {
        $this->websites = $websites;
    }

    /**
     * @return array
     */
    public function getWebsites()
    {
        return $this->websites;
    }
}
