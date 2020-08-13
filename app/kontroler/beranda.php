<?php

/**
 * 
 */
class beranda extends Kontroler
{

	function __construct()
	{
		$this->session = new Session();
	}
	
	function indeks()
	{
		$data = array(
			'title' => 'Beranda',
			'pages' => 'Beranda',
			'nama'  => $this->model('model_pengguna')->getPengguna()
		);
		$this->tampilkan('template/header-web', $data);
		$this->tampilkan('template/navbar/nol');
		$this->tampilkan('publik/index');
		$this->tampilkan('template/footer');
	}
}