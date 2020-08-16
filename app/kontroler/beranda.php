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
			'pages'	=> 1
		);
		$this->tampilkan('template/header-web', $data);
		$this->tampilkan('template/navbar/nol', $data);
		$this->tampilkan('publik/index');
		$this->tampilkan('template/footer');
	}

	function kegiatan()
	{
		$data = array(
			'title' => 'Kegiatan',
			'pages'	=> 2
		);
		$this->tampilkan('template/header-web', $data);
		$this->tampilkan('template/navbar/nol', $data);
		$this->tampilkan('publik/kegiatan');
		$this->tampilkan('template/footer');
	}

	function tentang()
	{
		$data = array(
			'title'	=> 'Tentang',
			'pages'	=> 3
		);

		$this->tampilkan('template/header-web', $data);
		$this->tampilkan('template/navbar/nol', $data);
		$this->tampilkan('publik/tentang');
		$this->tampilkan('template/footer');
	}
}