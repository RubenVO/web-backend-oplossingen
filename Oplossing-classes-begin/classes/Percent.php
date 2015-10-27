<?php
	class Percent{
		public $absolute;
		public $relative;
		public $hundred;
		public $nominal;

		// uitleg vragen over $this->: Gebruiken om variablen in de classe aan te spreken?
		// wat gebeurt er zonder $this->?

		public function __construct($new, $unit)
		{
			$this->absolute = $this->formatNumber($new / $unit);

			$this->relative = $this->formatNumber($this->absolute - 1);

			$this->hundred  = $this->formatNumber($this->relative * 100);


			if($this->hundred > 1){
				$$this->nominal = 'positive';
			} 
			else if ($this->hundred == 1){
				$this->nominal = 'status_quo';
			}
			else if($this->hundred < 1){
				$this->nominal = 'negative';
			}
		}

		public function formatNumber($number)
		{
			return number_format($number, 2, ',', ' ');
		}
	}	
?>

