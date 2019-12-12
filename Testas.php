<?php
Testas::instance()->labas();

class Testas
{
    private static $instance;

    static function instance()
    {
        if (isset(self::$instance)) {
            return self::$instance;
        } else {
            self::$instance = new Testas();
            return self::$instance;
        }
    }

    public function labas() {
        print 'labas';
    }
}