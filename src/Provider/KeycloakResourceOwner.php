<?php

namespace Stevenmaguire\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class KeycloakResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    /**
     * Get resource owner id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['sub'] ?: null;
    }

    /**
     * Get resource owner username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->response['preferred_username'] ?: null;
    }

    /**
     * Get resource owner email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get resource owner full name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->response['name'] ?: null;
    }

    /**
     * Get resource owner full name
     * Alias for getFullName
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getFullName();
    }

    /**
     * Get resource owner first name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->response['given_name'] ?: null;
    }

    /**
     * Get resource owner first name
     * Alias for getFirstName
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->getFirstName();
    }

    /**
     * Get resource owner last name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->response['family_name'] ?: null;
    }

    /**
     * Get resource owner last name
     * Alias for getLastName
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->getLastName();
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
