<?php

namespace App\Services;

use zcrmsdk\crm\setup\restclient\ZCRMRestClient;

class ZohoConnection
{
    protected static $configuration = [
        'accounts_url' => 'https://accounts.zoho.eu',
        'apiBaseUrl' => 'www.zohoapis.eu',
        'token_persistence_path' => '/home/alex/PhpstormProjects/ZohoTest/storage/framework/tokens',
        "client_id"=>'1000.4ZN6WTVSZ19OLJTZ2KJNCWCAL8EM9L',
        "client_secret"=>'f09b69f56f201acb2e814ae0f213e92dc77aa49f41',
        "redirect_uri"=>'google.com',
        "currentUserEmail"=>'navrotskiy.alex@gmail.com'
    ];
    public static function connect()
    {
        ZCRMRestClient::initialize(self::$configuration);
    }
}
