<?php

include_once('SocialNetworkPoster.php');
include_once('LinkedInConnector.php');

class LinkedInPoster extends SocialNetworkPoster
{
    public function __construct(private string $login, private string $password)
    {
    }

    public function getSocialNetwork():SocialNetworkConnector
    {
        return new LinkedInConnector($this->login, $this->password);
    }
}