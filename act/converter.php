<?php 


class converter {
	protected $usd=43.75;
	protected $gbp=78.98;
	protected $eur=56.45;
	protected $jpy=0.867;

	public function convert ($curr,$amnt){
		switch ($curr) {
			case 'usd':
				return ($amnt*$this->usd);
				break;
			case 'gbp':
				return ($amnt*$this->gbp);
				break;
			case 'eur':
				return ($amnt*$this->eur);
				break;
			case 'jpy':
				return ($amnt*$this->jpy);
				break;
		}

	}

}

?>