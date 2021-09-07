<?php
	session_start();

	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

	$linha1 = array(
		0 => '1a', 1 => '1b', 2 => '1c', 3 => '1d', 4 => '1e', 5 => '1f', 6 => '1g', 7 => '1h',
		8 => '1i', 9 => '1j', 10 => '1k', 11 => '1l', 12 => '1m', 13 => '1n', 14 => '1o',
	);

	$linha2 = array(
		0 => '2a', 1 => '2b', 2 => '2c', 3 => '2d', 4 => '2e', 5 => '2f', 6 => '2g', 7 => '2h',
		8 => '2i', 9 => '2j', 10 => '2k', 11 => '2l', 12 => '2m', 13 => '2n', 14 => '2o',
	);

	$linha3 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha4 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha5 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha6 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha7 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha8 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha9 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha10 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha11 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha13 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha14 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$linha15 = array(
		0 => '3a', 1 => '3b', 2 => '3c', 3 => '3d', 4 => '3e', 5 => '3f', 6 => '3g', 7 => '3h',
		8 => '3i', 9 => '3j', 10 => '3k', 11 => '3l', 12 => '3m', 13 => '3n', 14 => '3o',
	);

	$alfa = array(
		0 => "a", 1 => "b", 2 => "c", 3 => "d", 4 => "e", 5 => "f", 6 => "g", 7 => "h", 8 => "i",
		9 => "j", 10 => "k", 11 => "l", 12 => "m", 13 => "n", 14 => "o", 
	);

	$linha = preg_replace("/[^0-9]/","", $id);

	switch ($linha) {
	      case '1':
			  $linhaBaixo = LinhaBaixo($alfa, 1, $id);
			  $linhaMeio = LinhaMeio($alfa, 1, $id);
			  $linhaCima = LinhaCima($alfa, 1, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

	      case '2':
			  $linhaBaixo = LinhaBaixo($alfa, 2, $id);
			  $linhaMeio = LinhaMeio($alfa, 2, $id);
			  $linhaCima = LinhaCima($alfa, 2, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '3':
			  $linhaBaixo = LinhaBaixo($alfa, 3, $id);
			  $linhaMeio = LinhaMeio($alfa, 3, $id);
			  $linhaCima = LinhaCima($alfa, 3, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '4':
			  $linhaBaixo = LinhaBaixo($alfa, 4, $id);
			  $linhaMeio = LinhaMeio($alfa, 4, $id);
			  $linhaCima = LinhaCima($alfa, 4, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '5':
			  $linhaBaixo = LinhaBaixo($alfa, 5, $id);
			  $linhaMeio = LinhaMeio($alfa, 5, $id);
			  $linhaCima = LinhaCima($alfa, 5, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '6':
			  $linhaBaixo = LinhaBaixo($alfa, 6, $id);
			  $linhaMeio = LinhaMeio($alfa, 6, $id);
			  $linhaCima = LinhaCima($alfa, 6, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '7':
			  $linhaBaixo = LinhaBaixo($alfa, 7, $id);
			  $linhaMeio = LinhaMeio($alfa, 7, $id);
			  $linhaCima = LinhaCima($alfa, 7, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '8':
			  $linhaBaixo = LinhaBaixo($alfa, 8, $id);
			  $linhaMeio = LinhaMeio($alfa, 8, $id);
			  $linhaCima = LinhaCima($alfa, 8, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '9':
			  $linhaBaixo = LinhaBaixo($alfa, 9, $id);
			  $linhaMeio = LinhaMeio($alfa, 9, $id);
			  $linhaCima = LinhaCima($alfa, 9, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '10':
			  $linhaBaixo = LinhaBaixo($alfa, 10, $id);
			  $linhaMeio = LinhaMeio($alfa, 10, $id);
			  $linhaCima = LinhaCima($alfa, 10, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '11':
			  $linhaBaixo = LinhaBaixo($alfa, 11, $id);
			  $linhaMeio = LinhaMeio($alfa, 11, $id);
			  $linhaCima = LinhaCima($alfa, 11, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '12':
			  $linhaBaixo = LinhaBaixo($alfa, 12, $id);
			  $linhaMeio = LinhaMeio($alfa, 12, $id);
			  $linhaCima = LinhaCima($alfa, 12, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '13':
			  $linhaBaixo = LinhaBaixo($alfa, 13, $id);
			  $linhaMeio = LinhaMeio($alfa, 13, $id);
			  $linhaCima = LinhaCima($alfa, 13, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '14':
			  $linhaBaixo = LinhaBaixo($alfa, 14, $id);
			  $linhaMeio = LinhaMeio($alfa, 14, $id);
			  $linhaCima = LinhaCima($alfa, 14, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

		  case '15':
			  $linhaBaixo = LinhaBaixo($alfa, 15, $id);
			  $linhaMeio = LinhaMeio($alfa, 15, $id);
			  $linhaCima = LinhaCima($alfa, 15, $id);
			  $posicoes = array_merge($linhaBaixo, $linhaMeio, $linhaCima);
			  $resposta = implode(",", $posicoes);
			  echo json_encode($resposta);
		  break;

    }

	function LinhaBaixo($alfa, $linha, $id){
		$linha = $linha + 1;
		$posicao = preg_replace('/\d+/u', '', $id);
		$keyBaixo = array_search($posicao, $alfa);

		for($i = 0; $i <= 14; $i++){
			if($alfa[$i] == $posicao){
				if($alfa[$i] == 'a'){
					$baixo1 = $linha . $alfa[$keyBaixo];
					$baixo2 = $linha . $alfa[$keyBaixo + 1];
					$posi = array(0 => $baixo1, 1 => $baixo2);
					return $posi;

				}elseif($alfa[$i] == 'o'){
					$baixo0 = $linha . $alfa[$keyBaixo - 1];
					$baixo1 = $linha . $alfa[$keyBaixo];
					$posi = array(0 => $baixo0, 1 => $baixo1);
					return $posi;

				}else{
					$key = array_search($posicao, $alfa);
					$key = $key + 1;
					$baixo0 = $linha . $alfa[$keyBaixo - 1];
					$baixo1 = $linha . $alfa[$keyBaixo];
					$baixo2 = $linha . $alfa[$keyBaixo + 1];
					$posi = array(0 => $baixo0, 1 => $baixo1, 2 => $baixo2);

					return $posi;
				}
			}
		} 
	} 

	function LinhaMeio($alfa, $linha, $id){
		$posicao = preg_replace('/\d+/u', '', $id);
		$keyMeio = array_search($posicao, $alfa);

		for($i = 0; $i <= 14; $i++){
			if($alfa[$i] == $posicao){
				if($alfa[$i] == 'a'){
					$meio1 = $linha . $alfa[$keyMeio + 1];
					$posi = array(0 => $meio1);
					return $posi;

				}elseif($alfa[$i] == 'o'){
					$meio1 = $linha . $alfa[$keyMeio - 1];
					$posi = array(0 => $meio1);
					return $posi;

				}else{
					$meio0 = $linha . $alfa[$keyMeio - 1];
					$meio1 = $linha . $alfa[$keyMeio + 1];
					$posi = array(0 => $meio0, 1 => $meio1);
					return $posi;

				}
			}
		} 
	} 

	function LinhaCima($alfa, $linha, $id){
		$linha = $linha - 1;
		$posicao = preg_replace('/\d+/u', '', $id);
		$keyCima = array_search($posicao, $alfa);

		for($i = 0; $i <= 14; $i++){
			if($alfa[$i] == $posicao){
				if($alfa[$i] == 'a'){
					$baixo1 = $linha . $alfa[$keyCima];
					$baixo2 = $linha . $alfa[$keyCima + 1];
					$posi = array(0 => $baixo1, 1 => $baixo2);
					return $posi;

				}elseif($alfa[$i] == 'o'){
					$baixo0 = $linha . $alfa[$keyCima - 1];
					$baixo1 = $linha . $alfa[$keyCima];
					$posi = array(0 => $baixo0, 1 => $baixo1);
					return $posi;

				}else{
					$key = array_search($posicao, $alfa);
					$key = $key + 1;
					$baixo0 = $linha . $alfa[$keyCima - 1];
					$baixo1 = $linha . $alfa[$keyCima];
					$baixo2 = $linha . $alfa[$keyCima + 1];
					$posi = array(0 => $baixo0, 1 => $baixo1, 2 => $baixo2);
					return $posi;
				}
			}
		}
	}

	