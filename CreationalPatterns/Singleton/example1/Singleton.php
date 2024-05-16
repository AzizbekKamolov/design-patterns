<?php
class Singleton
{
    private static array $instance = [];
    protected function __construct()
    {
    }
    private function __clone(): void
    {

    }
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance():self
    {
        $instance = self::class;
        if (!isset(self::$instance[$instance])){
            self::$instance[$instance] = new static();
        }
        return self::$instance[$instance];
    }

}