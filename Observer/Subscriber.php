<?php


interface Subscriber
{
	function notify($text, $workman);
}