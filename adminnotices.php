<?php

class DataDB extends SQLite3 {
	public function __construct() {
		$this->open('data.db');
		if (file_get_contents($dbfile) == '') {
			$this->install();
		}
	}
	private function install () {

	}
}