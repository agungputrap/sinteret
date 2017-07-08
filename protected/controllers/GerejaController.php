<?php

class GerejaController extends Controller
{
	public function actionIndex()
	{
		$this->layout = '//layouts/main-layout';
		$this->render('index');
	}

	public function actionDetail($id)
	{
		$this->layout = '//layouts/main-layout';
		$data = array();
		$model = GerejaCustom::model()->findByPk($id);

		if($model) {
			$jadwalIbadah = jadwalIbadah::model()->findAllByAttributes(array('gereja_id'=>$model->id));
			$fotoGereja = FotoGereja::model()->findAllByAttributes(array('gereja_id'=>$model->id));

			$fileFoto = Yii::app()->params['imageGereja'] . $fotoGereja[0]->nama_foto;

			$data['jadwalIbadah'] = $jadwalIbadah;
			$data['fotoGereja'] = $fileFoto;
		}

		$data['model'] = $model;
		$this->render('detailIbadah', $data);
	}


}