<?php
class Letter implements Messenger
{
	function write_m (){
		return  "\nsent from " . strtolower(get_class($this)); 
	}
}