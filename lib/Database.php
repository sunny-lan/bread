<?php
/**
 * Author: sunny
 * Date: 2020-02-04
 * Time: 10:10 PM
 */

namespace bread;


class Database
{
    static function connect(): \mysqli
    {
        $dev_file = __DIR__ . '/development.ini';
        if (is_readable($dev_file)) {
            $ini = parse_ini_file($dev_file);
            return new \mysqli($ini['server'],$ini['user'],$ini['pass']);
        } else {
            $ini = parse_ini_file(__DIR__ . '/production.ini');
            return new \mysqli(getenv($ini['url_var']));
        }
    }
}
