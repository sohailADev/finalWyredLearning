<?php

class HomeController extends BaseController
{

	public function __construct()
	{

	}
	public function index()
	{
		$this->view('Home/index',['title'=>'Home']);
	}
	public function about()
	{
		$this->view('Home/about',['title'=>'Home']);
	}
}