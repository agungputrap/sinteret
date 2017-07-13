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

			$fileFoto = Yii::app()->baseUrl. '/images/gerejas/' . $fotoGereja[0]->nama_foto;
			/*var_dump($fileFoto);
			die();*/

			$data['jadwalIbadah'] = $jadwalIbadah;
			$data['fotoGereja'] = $fileFoto;
		}

		$data['model'] = $model;
		$this->render('detailIbadah', $data);
	}

	public function actionTambah()
    {
        $model_tipeGereja = TipeGerejaCustom::model()->findAll(array('order'=>'id asc'));
        $model = new FormGereja();
        if(isset($_POST['FormGereja'])&& isset($_POST['submit'])) {
            $berhasil = $model->simpan($_POST['FormGereja']);
            if($berhasil)
                $this->redirect(Yii::app()->createUrl('gereja/konfirmasi'));
        }
        $this->layout = '//layouts/main-layout';
        $this->render('tambah', array(
           'model' => $model,
            'tipeGereja'=> $model_tipeGereja
        ));
    }

    public function actionKonfirmasi()
    {
        $this->layout = '//layouts/main-layout';
        $this->render('konfirmasi', array(
        ));
    }

}