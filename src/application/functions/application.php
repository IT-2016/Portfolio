<?php
	function menu($theme){
		ob_start();
			require_once '../application/pages/partials/menu/' . $theme . '.html';
		$menu = ob_get_clean();
		return $menu;
	}
