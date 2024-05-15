<?php


interface SocialNetworkConnector
{
    public function signIn():void;
    public function signOut():void;
    public function createPost(string $content):void;

}