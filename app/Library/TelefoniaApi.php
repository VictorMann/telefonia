<?php
/**
 * Classe para acesso as funções da API do PABX
 * @author Matheus Soares <matheus.soares@twsolutions.com.br>
 * @version 1.0
 * @copyright GPL © 2018, TW Solutions. 
 * @access public
 * @package Cliente On Line
 * @subpackage Helpers
 * @link Documentação: linkservidor/telefonia/index.html
 */

namespace App\Library;

class PabxTW {

	public function __construct($token,$url){
		$this->token  = $token;
		$this->url    = $url;
	}

/**
	Cliente API
*/
	public function consultaClientes(){
		$param = [
			'url'    => $this->url.'/cliente',
			'method' => 'GET'
		];
		$curl = $this->comunicaPABX($param);
		return $curl;
	}

	public function cadastrarClientes($customer){
		$param = [
			'url'    => $this->url.'/cliente',
			'method' => 'POST',
			'fields' => [
				'siptek_id' 		=> $customer->api_id,
				'razao_social' 		=> $customer->name,
				'nome_fantasia' 	=> $customer->username,
				'cpf_cnpj'       	=> $customer->cpf_cnpj,
				'ie'            	=> empty($customer->rg_ie)?'Isento':$customer->rg_ie,
				'ramais_permitidos' => $customer->qtdRamais,
				'disk_space'        => '500',
				'ativo'             => $customer->ativo,
				'plano'             => '1'
			]
		];
		$curl = $this->comunicaPABX($param);
		return $curl;
	}

	private function comunicaPABX($param)
	{
		//$token = $this->token;
		$fields = '';
		if(isset($param['fields'])){
			foreach($param['fields'] as $name => $valor) {
				$fields .= $name . '=' . str_replace('&', 'e', $valor) . '&';
			}
		}
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL 			=> $param['url'],
			CURLOPT_RETURNTRANSFER  => true,
			CURLOPT_ENCODING 		=> "",
			CURLOPT_MAXREDIRS 		=> 10,
			CURLOPT_TIMEOUT         => 60,
			CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST   => $param['method'],
			CURLOPT_POSTFIELDS      => $fields,
			CURLOPT_HTTPHEADER      => array(
				"Accept: application/json",
				"Authorization:Bearer ".$this->token,
				"Cache-Control: no-cache",
				"Content-Type: application/x-www-form-urlencoded",
				"Postman-Token: 43786ded-f3fb-41ee-a164-e6ae0d3ba019"
			),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
			return json_encode($err);
		} else {
			return $response;
		}
	}
}