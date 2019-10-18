<?php

class Alert {
	private $list_phone;

	function __construct() {
		$this->list_phone = array("1080", "2080");
	}
	function send($msg) {
		foreach ($this->list_phone as $phone) {
			$this->sendTo($phone, $msg);
		}
	}
	function sendTo($phone, $msg) {
		echo("Da gui " . $msg . " den sdt " . $phone . "</br>");
	}
}