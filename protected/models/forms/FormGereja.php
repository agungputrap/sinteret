<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/8/2017
 * Time: 11:45 PM
 */

class FormGereja extends CFormModel
{
    public $nama;
    public $tipe_id;
    public $kota;
    public $alamat;
    public $longitude;
    public $latitude;
    public $email;

    public function rules()
    {
        return array(
            array('nama, kota, email', 'required',
                'message'=>'{attribute} tidak boleh kosong.'),
            array('alamat','validasiLokasi'),
        );
    }

    public function validasiLokasi($attr, $param) {
        if(!$this->hasErrors()) {
            //hardcode lokasi awal
            if($this->latitude == "-6.17511" && $this->longitude == "106.86503949999997") {
                $this->addError($attr, 'pastikan lokasi gereja telah diset sesuai dengan alamat gereja');
            }
        }
    }
    public function simpan($param) {
        $this->attributes = $param;
        $this->latitude = $param['latitude'];
        $this->longitude = $param['longitude'];
        $this->alamat = $param['alamat'];
        if($this->validate()) {
            //simpan alamat gereja
            $modelGereja = new Gereja();
            $modelGereja->nama = $param['nama'];
            $modelGereja->kota = $param['kota'];
            $modelGereja->tipe_id = $param['tipe_id'];
            $modelGereja->latitude = $param['latitude'];
            $modelGereja->longitude = $param['longitude'];
            $modelGereja->alamat = $param['alamat'];
            if($modelGereja->validate()) {
                $modelGereja->save();
            }

            //simpan informasi relawan
            $modelRelawan = new RelawanData();
            $modelRelawan->email = $param['email'];
            $modelRelawan->gereja_id = $modelGereja->id;
            if($modelRelawan->validate()) {
                $modelRelawan->save();
            }
            return true;
        }
        else {
            return false;
        }
    }

}