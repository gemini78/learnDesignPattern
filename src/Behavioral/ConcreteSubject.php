<?php

namespace App\Behavioral;

class ConcreteSubject implements ISubject
{
    const MIN = 2;
    const MAX = 78;

    public $state;
    private $observers = [];

    function attach(Observer $observer)
    {
        if (in_array($observer, $this->observers)) {
            echo "Subject: the observer has been attach already" . "<br>";
            return;
        }
        echo "Subject: the observer has been attach" . "<br>";
        $this->observers[] = $observer;
    }

    function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key === false) {
            echo "Subject: this observer no exist" . "<br>";
            return;
        }
        unset($this->observers[$key]);
        echo "Subject: Detached an observer" . "<br>";
    }

    function notify()
    {
        echo "Subject: Notifying observers..." . "<br>";
        foreach ($this->observers as $observer) {
            $observer->update($this->state);
        }
    }

    function someBusinessLogic()
    {
        echo "Subject: I do important something" . "<br>";
        $this->state = $this->getRandom();
        echo "Subject: My state has changed :" . $this->state . "<br>";
        $this->notify();
    }

    private function getRandom()
    {
        return rand(self::MIN, self::MAX);
    }
}
