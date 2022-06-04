<?php


require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:3000');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AUsIyz2O_iKQCkKHOR0adjIICboA8cr-IwFz_Kdfmihw1M24YEdRofF_Bm-VFfei_9AUUL1dHD68wcLL',//Cliente ID
        'EKAx82GupP_sBAfiqALHOyed2DXWMTp5PuK_ljuRMIK7XHiH2IK9JUOzA53hTYV_2pDUCpSnbu_6pXDI'//Secret
    )
);