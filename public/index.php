<?php
/**
 * Author: sunny
 * Date: 2020-02-04
 * Time: 9:26 PM
 */

require_once(__DIR__ . '/../vendor/autoload.php');


$db = \bread\Database::connect();

$page = new \bread\Page([
    'body' => print_r($db),
    'title' => 'bread',
]);
echo $page->render();

