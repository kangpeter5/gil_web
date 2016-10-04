<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Post;
use Session;

class PagesController extends Controller
{
	public function getHome()
	{
		// '/' or '.' works but '.' makes it look more object oriented
		$posts = Post::all();
		return view('pages.home')->withPosts($posts);
	}
	public function getAbout()
	{
		// example
		$first = "Han";
		$last = "Soloist";
		$fullname = $first . " " . $last;
		$email = "info@hansoloist.com";
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		// return view("pages.about")->with('fullname', $fullname)->with('email', $email);
		// 
		// same as below
		// 
		// return view("pages.about")->withFullname($fullname)->withEmail($email);
		// 
		// or if you use ARRAY
		return view("pages.about")->withData($data);
	}
	public function getContact()
	{
		return view('pages.contact');
	}
	public function getAffiliates()
	{
		return view('pages.affiliates');
	}
	public function getGallery()
	{
		return view('pages.gallery');
	}
}