<?php
include_once('SocialNetworkPoster.php');
include_once('FacebookConnector.php');

class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(private string $email, private string $password){}

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->email, $this->password);
    }
}