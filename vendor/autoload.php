<?php


spl_autoload_register("autoloadClass");
function autoloadClass($class)
{
	$path_for_class = __DIR__."/class/".$class.".php";
	if(file_exists($path_for_class))
	include_once($path_for_class);

	$path_for_class = __DIR__."/../controller/".$class.".php";
	if(file_exists($path_for_class))
	include_once($path_for_class);

	$path_for_class = __DIR__."/../middleware/".$class.".php";
	if(file_exists($path_for_class))
	include_once($path_for_class);	

	$path_for_class = __DIR__."/../services/".$class.".php";
	if(file_exists($path_for_class))
	include_once($path_for_class);			
}

