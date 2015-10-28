<?php 

namespace CashBundle\Entity;

class Machine{
	public $tickets = array(100,50,20,10);
	public $numberTickets = array();
	public $request = 0;

	function __construct($request){
	    $this->request = $request;
    }

    function whitdraw(){
    	$result = "";

    	if(empty($this->request)){
    		return 'Vacio';
    	}

    	if($this->request < 0  || !is_numeric($this->request)){
    		return "Cantidad Invalida.";
    	}

    	for($i = 0; $i < count($this->tickets); $i++){
    		if($this->tickets[$i] <= $this->request){
    			$this->numberTickets[$this->tickets[$i]] = intval($this->request / $this->tickets[$i]);
    			$this->request = $this->request % $this->tickets[$i];
    		}
    	}

    	if($this->request != 0){
    		return "No es posible retirar esa cantidad.";
    	}

    	$keys = array_keys($this->numberTickets);
    	for ($i=0; $i < count($keys); $i++) { 
    		$result .= implode(",", array_fill(0, $this->numberTickets[$keys[$i]], $keys[$i])).',';
    	}



		return substr_replace($result, "", -1);
	}

}