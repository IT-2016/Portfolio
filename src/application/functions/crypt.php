<?php
	function _crypt($crypt, $algo, $options = null){
		if($algo == "cesar"){
			$resultat = cesar($crypt, $options['decalage']);
		}
		if($algo == "rot13"){
			$resultat = str_rot13($crypt);
		}
		return $resultat;
	}
	function cesar($crypt, $decalage){
		return "wrwr";
	}
	