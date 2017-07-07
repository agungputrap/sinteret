<?php

class GerejaController extends Controller
{
	public function actionIndex()
	{
		$this->layout = '//layouts/main-layout';
		$this->render('index');
	}


}