<?php
class Utilisateur
{  //class keyword
    private $user_name;  //property
    private $user_pass; // [private,public]= visibility markers

    public function __construct($n, $p)
    { // method
        $this->user_name = $n;
        $this->user_pass = $p;  // $this pseudo variable
    }

    public function getNom()
    {
        return $this->user_name; //(->)  object operator
    }
}
