<?php
interface User
{
    public function login();
}

class customer
{
    public function login()
    {
        return 'Enter your details to login';
    }
    
    public function start()
    {
        return 'Your session has started';
    }
}

class admin extends customer implements User
{
    public function login()
    {
        return 'You are logged in as an administrator';
    }
}

$a = new user();
echo $a->start() . "\n";
echo $a->login() . "\n";
?>