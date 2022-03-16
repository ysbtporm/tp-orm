<?php
require dirname(dirname(__FILE__)).'\\'."vendor\autoload.php";
use think\facade\Db;
$sql = "update user_account set trading_balance=trading_balance-30	where user_id=1 ";
$re = Db::query($sql);