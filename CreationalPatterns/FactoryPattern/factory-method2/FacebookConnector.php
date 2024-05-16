<?php

include_once('SocialNetworkConnector.php');

class FacebookConnector implements SocialNetworkConnector
{
    public function __construct(private string $email, private string $password)
    {
    }

    #[\Override] public function signIn(): void
    {
        echo 'Sign in Facebook with email (' . $this->email . ') and password ' . $this->password . ' <br>';
    }

    #[\Override] public function signOut(): void
    {
        echo "Sign out Facebook with email $this->email and password $this->password <br>";
    }

    #[\Override] public function createPost(string $content = ''): void
    {
        echo "Create facebook post : $content <br>";
    }
}