<?php

	class Tip {

		public $tipID = 0;
		public $nazivTipa = '';
		public $opisTipa = '';

		public function __construct() {

		}

		public static function vratiSve($db) {

			$result = $db->query('SELECT * FROM tip');

			$tipovi = array();

			while ($row = $result->fetch_assoc()) {

				$tip = new Tip();
				$tip->tipID = $row['tipID'];
				$tip->nazivTipa = $row['nazivTipa'];
				$tip->opisTipa = $row['opisTipa'];

				array_push($tipovi, $tip);

			}

			return $tipovi;

		}

	}

?>
