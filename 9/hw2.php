<?php

class Communication
{

	function message(Messenger $communication, $text)
	{
		
		echo $text . $communication->write_m($text);
	}
}

interface Messenger
{
	function write_m();
}

class Phone implements Messenger
{
		function write_m (){
		return  "\nsent from " . strtolower(get_class($this)); 
	}
}

class Letter implements Messenger
{
		function write_m (){
		return  "\nsent from " . strtolower(get_class($this)); 
	}
}

class Email implements Messenger
{
		function write_m (){
		return  "\nsent from " . strtolower(get_class($this)); 
	}
}

class Pigeon implements Messenger
{
		function write_m (){
		return  "\nsent from " . strtolower(get_class($this)); 
	}
}

$text = "lalala";
$messenger = new Email();
$comm = new Communication();
echo $comm->message($messenger, $text);
