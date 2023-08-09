<?php

class Configuration
{
    protected $configData = array();
    private $path = "";

    function __construct(string $path)
    {
        $this->path = $path;
    }

    public function loadEnvVariables()
    {
        $path = $this->path;
        if (!file_exists($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '=') !== false && substr($line, 0, 1) !== '#') {
                list($key, $value) = explode('=', $line, 2);
                // var_dump($key, $value);
                $this->configData[$key] = $value;
            }
        }
    }

    public function get($key, $default = null)
    {
        return isset($this->configData[$key]) ? $this->configData[$key] : $default;
    }
}
