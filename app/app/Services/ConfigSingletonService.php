<?php
namespace App\Services;

class ConfigSingletonService
{
    private static ?ConfigSingletonService $instance = null;
    private array $settings = [];

    private function __construct() {
        $this->settings = parse_ini_file(config('singleton.ini'), true);
    }
    private function __clone(){}
//    private function __wakeup(){}

    public static function getInstance() : ConfigSingletonService
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        return $this->settings[$key] ?? null;
    }
}
