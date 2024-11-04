<?php
// Simple config

namespace App\Core;

class Config
{
    private $config;

    public function __construct()
    {
        // Load .env
        $this->config = parse_ini_file('.env');

        // Merge with .env.local
        $this->config = array_merge($this->config, parse_ini_file('.env.local'));
    }

    public function get($key)
    {
        return $this->config[$key];
    }

    public function set($key, $value)
    {
        $this->config[$key] = $value;
    }
}
