<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function getName(){
    	return "Hello laravel 5.7";
    }
    public function sumAction($num1= null,$num2= null){
    	$sum = $num1 + $num2;
    	return $sum;
    }
    // tham so truyen vao bat buoc phai dang mang
    public function getViewAction(){
    	$data['info'] = [
    		'name'=>'namvv',
    		'age'=>'25',
    		'add'=>'bacgiang',
    		'sex'=>'1'
    	]; 
    	return view('myview',$data);
    }

    public function getHeaderAction(){
    	return view('getheader');
    }
    public function getContentAction(){
    	return view('getcontent');
    }
    public function getHomeAction(){
    	return view('home');
    }
}
