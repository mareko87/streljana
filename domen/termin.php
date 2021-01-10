<?php

	class Termin { 

		public $terminID = 0;
		public $nazivTermina = '';
		public $osnovnaCena = 0;
		public $ukupnaCena = 0;
		public $tip = 0;
		public $trajanje = 0;

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

		public static function vratiSveSortirano($db, $sort) {

			$result = $db->query('SELECT *,(m.osnovnaCena + tr.dodatakCeni) as suma 
				FROM termin m join tip t on m.tipID=t.tipID join trajanje tr on m.trajanjeID=tr.trajanjeID 
				order by suma ' . $sort);

			$termini = array();

			while ($row = $result->fetch_assoc()) {

				$tip = new Tip();
				$tip->tipID = $row['tipID'];
				$tip->nazivTipa = $row['nazivTipa'];

				$trajanje = new Trajanje();
				$trajanje->trajanjeID = $row['trajanjeID'];
				$trajanje->trajanje  = $row['trajanje'];
				$trajanje->dodatakCeni  = $row['dodatakCeni'];

				$termin = new termin();
				$termin->terminID = $row['terminID']; 
				$termin->nazivTermina = $row['nazivTermina'];
				$termin->osnovnaCena = $row['osnovnaCena'];
				$termin->ukupnaCena = $row['suma'];
				$termin->tip = $tip;
				$termin->trajanje = $trajanje;

				array_push($termini, $termin);

			}

			return $termini;

		}

		public static function sacuvaj($db, $naziv, $cena, $tip, $trajanje) {
			$naziv = mysqli_real_escape_string($db, $naziv);
			$cena = mysqli_real_escape_string($db, $cena);
			$tip = mysqli_real_escape_string($db, $tip);
			$trajanje = mysqli_real_escape_string($db, $trajanje);

			$result = $db->query("INSERT INTO termin (trajanjeID,osnovnaCena, tipID,nazivTermina)
				VALUES ('$trajanje', '$cena', '$tip', '$naziv')");

			if ($result > 0) return true;
			else return false;

		}

		public static function izmeni($db, $cena, $id) {
			
			$cena = mysqli_real_escape_string($db, $cena);

			$sql = "UPDATE termin SET osnovnaCena=" . $cena . " where terminID=" . $id;

			$result = $db->query($sql);

			return true;
			
		}

		public static function obrisi($db, $id) {

			$result = $db->query("DELETE FROM termin where terminID=" . $id);

			return true;

		}

	}

?>
