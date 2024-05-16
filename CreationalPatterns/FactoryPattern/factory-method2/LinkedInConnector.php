<?php

include_once('SocialNetworkConnector.php');



class LinkedInConnector implements SocialNetworkConnector
{
    public function __construct(private string $login, private string $password){}

    #[\Override] public function signIn(): void
    {
        echo "Sign in LinkedIn with login ($this->login) and password ($this->password) <br>";
    }

    #[\Override] public function signOut(): void
    {
        echo "Sign out LinkedIn with login ($this->login) and password ($this->password) <br>";
    }

    #[\Override] public function createPost(string $content = ''): void
    {
        echo "Create LinkedIn post : $content <br>";
    }
}