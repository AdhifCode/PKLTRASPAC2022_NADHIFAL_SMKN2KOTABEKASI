<?php
class Kalkulator
	{

        public $angka,$angka1,$angka2,$angka3,$angka4,$angka5,$hasil,$spread;
    
		public function setOperasi($spread,$bilangan1,$bilangan2,$bilangan3,$bilangan4,$bilangan5,$operasi)
		{
			$this->angka1=$bilangan1;
            $this->angka2=$bilangan2;
			$this->angka3=$bilangan3;
			$this->angka4=$bilangan4;
			$this->angka5=$bilangan5;
			$this->angka=$spread = [$bilangan1,$bilangan2,$bilangan3,$bilangan4,$bilangan5];

			if($operasi == 'tambah'){
                $this->hasil = $spread + $spread;
			}else if($operasi == 'kurang'){
                $this->hasil = $bilangan1 - $bilangan2;
			}else if($operasi == 'bagi'){
				if($bilangan1 && $bilangan2 && $bilangan3 && $bilangan4 && $bilangan5 == 0){
					$this->hasil = "Tidak Dapat Di Jumlah";
				}else {
					$this->hasil = $bilangan1 / $bilangan2;
				}
			}else if($operasi == 'kali'){
                $this->hasil = $bilangan1 * $bilangan2;
			}else if($operasi == 'modulo'){
				if($bilangan1 && $bilangan2 && $bilangan3 && $bilangan4 && $bilangan5 == 0){
					$this->hasil = "Tidak Dapat Di Jumlah";
				}else {
				$this->hasil = $bilangan1 % $bilangan2;
				}
			}else if($operasi == null ){
				$this->hasil = "Tidak Ada Operasi";
			}
			return $this->hasil;
		}
 
		public function spread(...$number){
			var_dump (...$number);

		}

		public function getOperasi()
		{
			$html = '<p>Hasil: '.$this->hasil.'</p>';
			return $html;
		}
	}
	$c = new Kalkulator();
	$c->spread(2+2+2+2);
?>