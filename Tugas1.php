<?php
	// Kelas
	class Elang {	

		//Properti
		public $jumlahKaki 		= 2;
		public $keahlian	 	= "Terbang Tinggi";
		public $attackPower		= 10;
		public $deffencePower 	= 5;

		//Method
		function getInfoHewan(){
			echo "Elang <br> Jumlah Kaki = " . $this->jumlahKaki . "<br>",
				 "Keahlian = " . $this->keahlian . "<br>",
				 "Attack Power = " . $this->attackPower . "<br>",
				 "Deffence Power = " . $this->deffencePower . "<br><br>";
		}
		
	}
	//Instansiasi
	$elang = new Elang();

	class Harimau {
		public $jumlahKaki 		= 4;
		public $keahlian	 	= "Lari Cepat";
		public $attackPower		= 7;
		public $deffencePower 	= 8;

		function getInfoHewan(){
			echo "Harimau <br> Jumlah Kaki = " . $this->jumlahKaki . "<br>",
				"Keahlian = " . $this->keahlian . "<br>",
				"Attack Power = " . $this->attackPower . "<br>",
				"Deffence Power = " . $this->deffencePower . "<br><br><br>";
		}

	}

	$harimau = new Harimau();

	class Hewan {

		public static $nama 		= "The Flash";
		public static $darah	 	= 50;
		public static $jumlahKaki	= 4;
		public static $keahlian 	= "Lari Cepat";

		public static function atraksi(){
			return self::$nama . " sedang " . self::$keahlian . "<br><br>";
		}

	}

	class Fight extends Hewan {

		public static $attackPower		= 9;
		public static $deffencePower 	= 7;

		function serang() {
			echo "Elang sedang menyerang " . Hewan::$nama . "<br>" .
				"Darah = " . (Hewan::$darah - self::$attackPower) . "<br>";
		}

		function diserang() {
			echo Hewan::$nama . " sedang diserang Elang <br>" .
				"Darah = " . (Hewan::$darah - self::$deffencePower);
		}

	}

	echo $elang->getInfoHewan();
	echo $harimau->getInfoHewan();
	echo Hewan::atraksi();
	echo Fight::serang();
	echo Fight::diserang();

?>