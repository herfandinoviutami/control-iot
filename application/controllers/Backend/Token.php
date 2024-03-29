<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Seoul');

use Firebase\JWT\JWT;

/**
 * @property Token_model $Token_model
 * @property Feeds_model $Feeds_model
 * @property Chanel_model $Chanel_model
 * @property Listing_model $Listing_model
 */

class Token extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Token_model');
		$this->load->model('Feeds_model');
		$this->load->model('Listing_model');
	}

	public function index()
	{
		$listing['listing_role'] = $this->Listing_model->listing_role($this->session->userdata('role'));
		$data = [
			'token_read'	=> $this->Token_model->GetAllReadToken(),
			'token_write'	=> $this->Token_model->GetAllWriteToken()
		];
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('partials/sidebar', $listing);
		$this->load->view('back/admin/token/list', $data);
		$this->load->view('partials/header');
	}

	public function generate(): void
	{
		$id_users = $this->session->userdata('id_user');

		$key = $this->generateSecretKey();
		$data = array(
			"id_chanel" => 2,
			"id_users" => $id_users,
			"token" => $key
		);
		$insert = $this->Token_model->insertToken($data, $id_users);

		if ($insert) {
			$this->session->set_flashdata('sukses', 'Token berhasil di generate');
			redirect(base_url('admin/chanel'));
		} else {
			$this->session->set_flashdata('gagal', 'Token gagal di generate');
			redirect(base_url('admin/chanel'));
		}
	}

	protected function generateSecretKey($length = 16): string
	{
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		$max = strlen($characters) - 1;

		for ($i = 0; $i < 16; $i++) {
			try {
				$randomString .= $characters[random_int(0, $max)];
			} catch (Exception $e) {
				echo 'Error occurred: ' . $e->getMessage();
			}
		}

		return $randomString;
	}

	public function insertJson(): void
	{
		$token = $this->input->get('api_key');
		$id_chanel = $this->input->get('chanel_id');
		$field1 = $this->input->get('field1');
		$field2 = $this->input->get('field2');
		$field3 = $this->input->get('field3');
		$field4 = $this->input->get('field4');
		$field5 = $this->input->get('field5');
		$field6 = $this->input->get('field6');
		$field7 = $this->input->get('field7');
		$field8 = $this->input->get('field8');

		$check = $this->Token_model->getTokenByToken($token);

		if ($check) {
			$data = array(
				'created_at' => date('Y-m-d H:i:s'),
				'chanel_id' => $id_chanel,
				'field1' => $field1,
				'field2' => $field2,
				'field3' => $field3,
				'field4' => $field4,
				'field5' => $field5,
				'field6' => $field6,
				'field7' => $field7,
				'field8' => $field8,
			);

			$insert = $this->Feeds_model->insert($data);
			if ($insert) {
				$this->output->set_status_header(201);
				$response = [
					'status' => true,
					'message' => 'Data has been Insert.',
					'data' => $data
				];
			} else {
				$this->output->set_status_header(500);
				$response = [
					'status' => false,
					'message' => 'Data has been Insert.'
				];
			}
		} else {
			$response = [
				'status' => false,
				'message' => 'token invalid'
			];
		}
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
}
