<?php

$firstname = 'Gio';
$firstname = 'Joe';

define('STATUS_PAID', 'paid');
// const STATUS_PAID = 'paid';

echo $firstname;
echo '</br>';
echo STATUS_PAID;
echo '</br>';
echo defined('STATUS_PAID');

$paid = 'JUST PAID';
define('JUST_', $paid, $paid);

echo '</br>';
echo PHP_VERSION;
echo '</br>';

echo __LINE__;
echo '</br>';

echo __FILE__;
echo '</br>';

$foo = 'bar';
$$foo = 'baz';
echo $foo . ' ' . $$foo;