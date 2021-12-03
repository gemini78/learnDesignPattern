<?php

namespace App\Structural;

class RealSubject implements ISubject
{
    public function request()
    {
        echo "<br>RealSubject::request";
    }
}
