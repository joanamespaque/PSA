<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['aluno'] = $this->db->get('aluno')->result();
		// $this->load->view('welcome_message', $data);
		$this->load->view('aateste', $data);
		
	}

	public function json()
	{
		$data['nome'] = $_POST['nomeAtividade'];
		$data['categoria'] = $_POST['categoria'];
		$data['dificuldade'] = $_POST['dificuldade'];
		$data['palavra'] = $_POST['palavra'];

		
		$json_str = '{
			"dificuldades": {
				"fácil":
				"médio":
				"difícil":
			}
		}';




		// 	"categorias": [
		// 		{   "id": "1",
		// 			"nome": "categoria1",
		// 			"dificuldades":
		// 				{
		// 					"fácil": [ "palavra01", "palavra02", "palavra03", "palavra04"],
		// 					"médio": [ "palavra05", "palavra06", "palavra07", "palavra08"],
		// 					"difícil": [ "palavra09", "palavra10", "palavra11", "palavra12"]
		// 				}
		// 		},
		// 		{   "id": "2",
		// 			"nome": "categoria1",
		// 			"dificuldades":
		// 				{
		// 					"fácil": [ "palavra01", "palavra02", "palavra03", "palavra04"],
		// 					"médio": [ "palavra05", "palavra06", "palavra07", "palavra08"],
		// 					"difícil": [ "palavra09", "palavra10", "palavra11", "palavra12"]
		// 				}
		// 		}
		// 	]
		// }';

		$obj = json_decode($json_str);

		// $obj->nomeAtividade = $data['nome'];   //na verdade isso aqui tem que buscar por id da atividade NO BANCO
		$obj->categorias[$data['categoria']]->dificuldades->fácil[] = $data['palavra'];
		// $obj->$data['palavra'] = $data['palavra'];
		$data['palavra'] = $obj;

		$this->load->view('aateste', $data);
	}
}
