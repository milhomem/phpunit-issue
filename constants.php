<?php

if (defined("COMPUTER_NAME")) {
    var_dump('required twice');exit;
}
define('COMPUTER_NAME', php_uname('n'));
