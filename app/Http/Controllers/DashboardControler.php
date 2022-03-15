<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index()
    {
        $data['all_unit']=4381;
            $data['all_user']=2311;
            $data['all_user_p']=number_format(($data['all_user']/$data['all_unit'])*100,0,'','.');
            $data['all_avail']=$data['all_unit']-$data['all_user'];
            $data['all_avail_p']=number_format(($data['all_avail']/$data['all_unit'])*100,0,'','.');
            $data['all_cash']=rand(0,$data['all_user']);
            $data['all_cash_p']=number_format(($data['all_cash']/$data['all_user'])*100,0,'','.');
            $data['all_cashbertahap']=rand(0,$data['all_user']-$data['all_cash']);
            $data['all_cashbertahap_p']=number_format(($data['all_cashbertahap']/$data['all_user'])*100,0,'','.');
            $data['all_cashkeras']=rand(0,$data['all_user']-$data['all_cash']-$data['all_cashbertahap']);
            $data['all_cashkeras_p']=number_format(($data['all_cashkeras']/$data['all_user'])*100,0,'','.');
            $data['all_inhouse']=rand(0,$data['all_user']-$data['all_cash']-$data['all_cashbertahap']-$data['all_cashkeras']);;
            $data['all_inhouse_p']=number_format(($data['all_inhouse']/$data['all_user'])*100,0,'','.');

            $data['sj1_unit']=rand(0,$data['all_unit']);
            $data['sj1_user']=rand(0,$data['sj1_unit']);;
            $data['sj1_user_p']=number_format(($data['sj1_user']/$data['sj1_unit'])*100,0,'','.');
            $data['sj1_avail']=$data['sj1_unit']-$data['sj1_user'];
            $data['sj1_avail_p']=number_format(($data['sj1_avail']/$data['sj1_unit'])*100,0,'','.');
            $data['sj1_cash']=rand(0,$data['sj1_user']);
            $data['sj1_cash_p']=number_format(($data['sj1_cash']/$data['sj1_user'])*100,0,'','.');
            $data['sj1_cashbertahap']=rand(0,$data['sj1_user']-$data['sj1_cash']);
            $data['sj1_cashbertahap_p']=number_format(($data['sj1_cashbertahap']/$data['sj1_user'])*100,0,'','.');
            $data['sj1_cashkeras']=rand(0,$data['sj1_user']-$data['sj1_cash']-$data['sj1_cashbertahap']);
            $data['sj1_cashkeras_p']=number_format(($data['sj1_cashkeras']/$data['sj1_user'])*100,0,'','.');
            $data['sj1_inhouse']=rand(0,$data['sj1_user']-$data['sj1_cash']-$data['sj1_cashbertahap']-$data['sj1_cashkeras']);;
            $data['sj1_inhouse_p']=number_format(($data['sj1_inhouse']/$data['sj1_user'])*100,0,'','.');

            $data['sj2_unit']=rand(0,$data['all_unit']-$data['sj1_unit']);
            $data['sj2_user']=rand(0,$data['sj2_unit']);;
            $data['sj2_user_p']=number_format(($data['sj2_user']/$data['sj2_unit'])*100,0,'','.');
            $data['sj2_avail']=$data['sj2_unit']-$data['sj2_user'];
            $data['sj2_avail_p']=number_format(($data['sj2_avail']/$data['sj2_unit'])*100,0,'','.');
            $data['sj2_cash']=rand(0,$data['sj2_user']);
            $data['sj2_cash_p']=number_format(($data['sj2_cash']/$data['sj2_user'])*100,0,'','.');
            $data['sj2_cashbertahap']=rand(0,$data['sj2_user']-$data['sj2_cash']);
            $data['sj2_cashbertahap_p']=number_format(($data['sj2_cashbertahap']/$data['sj2_user'])*100,0,'','.');
            $data['sj2_cashkeras']=rand(0,$data['sj2_user']-$data['sj2_cash']-$data['sj2_cashbertahap']);
            $data['sj2_cashkeras_p']=number_format(($data['sj2_cashkeras']/$data['sj2_user'])*100,0,'','.');
            $data['sj2_inhouse']=rand(0,$data['sj2_user']-$data['sj2_cash']-$data['sj2_cashbertahap']-$data['sj2_cashkeras']);;
            $data['sj2_inhouse_p']=number_format(($data['sj2_inhouse']/$data['sj2_user'])*100,0,'','.');

            $data['boro_unit']=rand(0,$data['all_unit']-$data['sj1_unit']-$data['sj2_unit']);
            $data['boro_user']=rand(0,$data['boro_unit']);;
            $data['boro_user_p']=number_format(($data['boro_user']/$data['boro_unit'])*100,0,'','.');
            $data['boro_avail']=$data['boro_unit']-$data['boro_user'];
            $data['boro_avail_p']=number_format(($data['boro_avail']/$data['boro_unit'])*100,0,'','.');
            $data['boro_cash']=rand(0,$data['boro_user']);
            $data['boro_cash_p']=number_format(($data['boro_cash']/$data['boro_user'])*100,0,'','.');
            $data['boro_cashbertahap']=rand(0,$data['boro_user']-$data['boro_cash']);
            $data['boro_cashbertahap_p']=number_format(($data['boro_cashbertahap']/$data['boro_user'])*100,0,'','.');
            $data['boro_cashkeras']=rand(0,$data['boro_user']-$data['boro_cash']-$data['boro_cashbertahap']);
            $data['boro_cashkeras_p']=number_format(($data['boro_cashkeras']/$data['boro_user'])*100,0,'','.');
            $data['boro_inhouse']=rand(0,$data['boro_user']-$data['boro_cash']-$data['boro_cashbertahap']-$data['boro_cashkeras']);;
            $data['boro_inhouse_p']=number_format(($data['boro_inhouse']/$data['boro_user'])*100,0,'','.');
        
            $data=(object)$data;

            
            return view('dashboard.homepage', compact('data'));
        
    }
}
