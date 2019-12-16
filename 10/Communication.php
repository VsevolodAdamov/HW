<?php
class Communication
{

	function message(Messenger $communication, $text){
		echo $text . $communication->write_m($text);
	}
}
