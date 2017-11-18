<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/13
 * Time: 21:52
 */

require 'view/admin/admin.html';

$fh = fopen('view/admin/msg.txt','r');

while (($row =fgetcsv($fh))!=false){
    echo $row[0]."</br>";
}