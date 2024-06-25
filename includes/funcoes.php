<?php
	function thumb($foto) {
		$arquivo = "fotos/$foto";	
		if (is_null($foto) || !file_exists($arquivo)){
			return "fotos/indisponivel.png";
		} else {
			return $arquivo;
		} 
	}

	function voltar() {
		return "<a href='index.php'><span class='material-icons md-36'>arrow_back</span></a>";
	}

	function msg_sucesso($m) {
		$resp = "<div class='sucesso'><span class='material-icons md-36'>check_circle</span>$m</div>";
		return $resp;
	}

	function msg_aviso($m) {
		$resp = "<div class='aviso'><span class='material-icons md-36'>info</span>$m</div>";
		return $resp;
	}

	function msg_erro($m) {
		$resp = "<div class='erro'><span class='material-icons md-36'>error</span>$m</div>";
		return $resp;
	}

