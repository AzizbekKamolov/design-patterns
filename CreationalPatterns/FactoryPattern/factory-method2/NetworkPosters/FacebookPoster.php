<?php
include_once ('SocialNetworkPoster.php');
class FacebookPoster extends SocialNetworkPoster
{

    #[\Override] public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector();
    }
}