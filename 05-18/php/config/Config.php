<?php

namespace Config;


class Config
{
    /**
     * @var array
     */
    private $conf = [
        'db' => [
            'type' => 'mysql',
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'dariusM',
            'username' => 'dariusM',
            'password' => 'darmik47',
        ]
    ];

    /**
     * @param null $index
     * @return array|mixed
     */
    public function getConfig($index = NULL)
    {
        if ($index != NULL) {
            return $this->conf[$index];
        }

        return $this->conf;
    }
}
