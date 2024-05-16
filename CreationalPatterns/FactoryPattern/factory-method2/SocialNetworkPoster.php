<?php

include_once ('SocialNetworkConnector.php');
abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork():SocialNetworkConnector;

    public function createPost(string $content):void
    {
        $network = $this->getSocialNetwork();
        $network->signIn();
        $network->createPost($content);
        $network->signOut();
    }

}