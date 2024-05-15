<?php

namespace NetworkConnectors;
include_once ('SocialNetworkConnector.php');
class FacebookConnector implements \SocialNetworkConnector
{

    #[\Override] public function signIn(): void
    {
        // TODO: Implement signIn() method.
    }

    #[\Override] public function signOut(): void
    {
        // TODO: Implement signOut() method.
    }

    #[\Override] public function createPost(string $content): void
    {
        // TODO: Implement createPost() method.
    }
}