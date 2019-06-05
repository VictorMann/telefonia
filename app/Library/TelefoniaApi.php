<?php
/**
 * Classe para acesso as funções do Telefonia API
 * @author Matheus Soares <matheus.soares@twsolutions.com.br>
 * @version 1.0
 * @copyright GPL © 2019, TW Solutions. 
 * @access public
 * @package Cliente On Line
 * @subpackage Helpers
 * @link Documentação: linkservidor/telefonia/index.html
 */

namespace App\Library;

class TelefoniaApi {

	public function __construct(){
		//$this->token  = $token;
		$this->url    = getenv('URL_TELEFONIA_API');
	}

	public function create($name,$data = null)
	{
		$curl = $this->comunicaApi('POST',$name,$data);
		return json_decode($curl);
	}

	public function get($name)
	{
		$curl = $this->comunicaApi('GET',$name);
		return json_decode($curl);
	}

	public function put($name,$data=null)
	{
		$curl = $this->comunicaApi('PUT',$name,$data);
		return json_decode($curl);
	}

	public function delete($name)
	{
		$curl = $this->comunicaApi('DELETE',$name);
		return json_decode($curl);
	}


	private function comunicaApi($method,$name,$data = [])
	{
		//$token = $this->token;
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL 			=> $this->url.$name,
			CURLOPT_RETURNTRANSFER  => true,
			CURLOPT_ENCODING 		=> "",
			CURLOPT_MAXREDIRS 		=> 10,
			CURLOPT_TIMEOUT         => 60,
			CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST   => $method,
			CURLOPT_POSTFIELDS      => http_build_query($data),
			CURLOPT_HTTPHEADER      => array(
				"Accept: application/json",
				//"Authorization:Bearer ".$this->token,
				"Cache-Control: no-cache",
				"Content-Type: application/x-www-form-urlencoded",
				"Postman-Token: 43786ded-f3fb-41ee-a164-e6ae0d3ba019"
			),
		));

		$response = curl_exec($curl);
		
		$err = curl_error($curl);
		
		curl_close($curl);

		if ($err) 
		{
			return json_encode($err);
		} 
		else 
		{
			return $response;
		}
	}
}