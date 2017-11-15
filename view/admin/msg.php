<?php
/**
 * Created by PhpStorm.
 * User: Hider
 * Date: 2017/11/15
 * Time: 22:11
 */

$content = $_POST["content"];

$fh = fopen('msg.txt','a');

$str = $content ."\n";
fwrite($fh,$str);

fclose($fh);

echo 'ok';