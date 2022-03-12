<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use zcrmsdk\crm\crud\ZCRMRecord;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use App\Services\ZohoConnection;
class IndexController extends Controller
{
    public function index()
    {
        return view('form',['title' => 'Форма создания']);
    }

    public function store(Request $request)
    {
        ZohoConnection::connect();
        $deal = ZCRMRecord::getInstance('Deals','');
        $deal->setFieldValue('Deal_Name', $request->post('dealName'));
        $deal->setFieldValue('Stage', $request->post('stage'));
        $deal->setFieldValue('Pipeline', $request->post('pipeline'));
        $deal->create();

        $client = ZCRMRecord::getInstance('Tasks','');
        $client->setFieldValue('Subject',$request->post('subject'));
        $client->setFieldValue('se_module','Potentials');
        $client->setFieldValue('What_Id', $deal->getEntityId());
        $client->create();
        return view('success', ['title' => 'Success']);

    }

}
