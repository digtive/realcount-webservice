<?php

use Restserver\Libraries\REST_Controller;
require(APPPATH . 'libraries/REST_Controller.php');

class SuaraController extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }




    // show data suara
    function index_get() {
        $tps_id = $this->get('tps_id');

        if ($tps_id == '') {
            $suara = $this->db->get('rcapp_tps')->result();
        } else {
            $this->db->where('tps_id', $tps_id);
            $suara = $this->db->get('rcapp_tps')->result();
        }

        $this->response(array('data_suara' => $suara));
    }

    // insert new data to suara
    function index_post() {
        $data = array(
                    'tps_id'                    => $this->post('tps_id'),
                    'tps_total_dpt'             => $this->post('tps_total_dpt'),
                    'tps_suara_sah'             => $this->post('tps_suara_sah'),
                    'tps_suara_tidaksah'        => $this->post('tps_suara_tidaksah'),
                    'tps_suara_calon'           => $this->post('tps_suara_calon'),
                    'tps_pengguna_hakpilih'     => $this->post('tps_pengguna_hakpilih'),
                    'tps_status_validasi'       => $this->post('tps_status_validasi'),
                    'tps_status_validasi'       => $this->post('tps_date_created'),
                    'wilayah_id'                => $this->post('wilayah_id'));
        $insert = $this->db->insert('rcapp_tps', $data);
        if ($insert) {
            $this->response(array('data_sara' => $data));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data suara
    function index_put() {
        $tps_id = $this->put('tps_id');
        $data = array(
                    'tps_id'                    => $this->put('tps_id'),
                    'tps_total_dpt'             => $this->put('tps_total_dpt'),
                    'tps_suara_sah'             => $this->put('tps_suara_sah'),
                    'tps_suara_tidaksah'        => $this->put('tps_suara_tidaksah'),
                    'tps_suara_calon'           => $this->put('tps_suara_calon'),
                    'tps_pengguna_hakpilih'     => $this->put('tps_pengguna_hakpilih'),
                    'tps_status_validasi'       => $this->put('tps_status_validasi'),
                    'tps_status_validasi'       => $this->put('tps_date_created'),
                    'wilayah_id'                => $this->put('wilayah_id'));
        $this->db->where('tps_id', $tps_id);
        $update = $this->db->update('rcapp_tps', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete suara
    function index_delete() {
        $tps_id = $this->delete('tps_id');
        $this->db->where('tps_id', $tps_id);
        $delete = $this->db->delete('rcapp_tps');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}