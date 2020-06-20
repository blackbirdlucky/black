<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
	{
		return view('index');
	}
	
	   public function blog_largeAction()
	{
		return view('blog_large');
	}
	
	   public function contact_ustwoAction()
	{
		return view('contact_ustwo');
	}
	
	public function fixer_listAction()
	{
		return view('fixer_list');
	}
	
	public function player_listAction()
	{
		return view('player_list');
	}
	
	public function product_listAction()
	{
		return view('product_list');
	}
	
	public function team_infoAction()
	{
		return view('team_info');
	}
}
