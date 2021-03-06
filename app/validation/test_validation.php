<?php

namespace App\Validation;

use App\Lib\Response;

class TestValidation{
	public static function validate($data){
		$response = new Response();
		$key = 'Nombre';
		if(empty($data[$key])){
			$response->errors[$key][] = 'Este campo es obligatorio';
		}else{
			$value = $data[$key];
			if(strlen($value) < 4){
				$response->errors[$key][] = 'Debe contener como minimo 4 caracteres';
			}
		}

		$response->SetResponse(count($response->errors) === 0);

		return $response;
	}
}