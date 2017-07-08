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
            select g.*, tg.nama as tipe from gereja g
            inner join tipe_gereja tg on g.tipe_id = tg.id
            where g.kota ilike '%".$kota."%'
        ";
        $data = Yii::app()->db->createCommand($sql);
        $rawData = $data->queryAll();
        return $rawData;
    }

}