<?php

namespace App\Structural;

class Proxy implements ISubject
{
    private $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    private function checkAccess()
    {
        echo "<br>Proxy: checking access...";
        return true;
    }

    public function request()
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->log();
        }
    }

    private function log()
    {
        echo "<br>Proxy: log...";
    }
}
