<?php

namespace App\Behavioral;

interface ISubject
{
    function attach(Observer $observer);
    function detach(Observer $observer);
    function notify();
}
