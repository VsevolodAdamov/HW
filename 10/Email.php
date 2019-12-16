<?php
class Email implements Messenger
{
	function write_m (){
		return  "\nsent from " . strtolower(get_class($this)); 
	}
}