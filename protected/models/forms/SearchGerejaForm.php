<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/8/2017
 * Time: 3:16 PM
 */
class SearchGerejaForm extends CFormModel
{
    public $kota;

    public function attributeLabels()
    {
        return array(
            'kota'=>'Kota',
        );
    }

    public function findGerejaByKota($kota)
    {
        $sql="
            select * from gereja
            where kota ilike '%".$kota."%'
        ";
        $data = Yii::app()->db->createCommand($sql);
        $rawData = $data->queryAll();
        return $rawData;
    }

}