<?php
/**
 * @version        $Id: index.php 1 9:23 2010-11-11 tianya $
 * @package        DedeCMS.Site
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           #
 */

require_once (dirname(__FILE__) . "/include/common.inc.php");// lyy开启了session,和免脚本验证
if($_GET["login_yz"]=="eiApmggCNvWqupAKunwLc03gIQwY"){//index_go.php?login_yz=eiApmggCNvWqupAKunwLc03gIQwY
	$_SESSION["login_yz"]=1;
	//header("Location:http://www.baidu.com");
	//var_dump($_SESSION);
	//echo session_save_path(); exit;
	//var_dump($_SESSION["login_yz"]);exit; 
	header("Content-type:text/html;charset=utf-8");
	echo '<a href="15101111_xghl/login.php">请点击此处安全进入登陆页>></a><br><font size="2" color=#666>注：请保存此页面网址以便下次登录。</font>'; 
}else{
	header("HTTP/1.0 404 Not Found");
	echo "HTTP/1.0 404 Not Found";
	exit;
}
?>