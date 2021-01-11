<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	public function mhs()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mhs');
			$crud->set_subject('Master Mahasiswa');
			$crud->required_fields('nim,nama_mahasiswa,jurusan');
			//$crud->set_relation('jurusan','jurusan','nama_jurusan');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function matkul()
	{
		try{

			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('matkul');
			$crud->set_subject('Mata Kuliah');
			$crud->required_fields('kode_matakuliah,nama_matkul,huruf_mutu');
			//$crud->set_relation('mhs','mhs','nama');

			$output = $crud->render();

			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function transkrip()
	{
		try{

			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			//$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('transkrip');
			$crud->set_subject('transkrip nilai');
			$crud->required_fields('nim,nama,semester,kode_matkul,huruf_mutu');
			$crud->set_relation('nama','mhs','nama_mahasiswa');
			$crud->set_relation('semester','mhs','semester_brp');
			$crud->set_relation('kode_matkul','matkul','nama_matkul');
			//$crud->unset_add();
			//$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
