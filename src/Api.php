<?php

namespace App;

require dirname(__FILE__) . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use RtgConnector\RtgConnectBundle\Api\InfrastructuralApi;
use RtgConnector\RtgConnectBundle\Api\OrdersApi;
use RtgConnector\RtgConnectBundle\Api\ProductsApi;
use RtgConnector\RtgConnectBundle\Configuration;

class Api {

    private $config;
    private $stockListToken;

    public function __construct() {
        $config = Configuration::getDefaultConfiguration();
        $config->setHost("https://rtg-portal.picard.de");
        $config->setAccessToken("1|njGOSJ2HTXI3lkE2T6WmUn5B2vjjSFCBQiUB5PxM");        
        $this->config = $config;

        $this->stockListToken = "2|Q4dVki2tmdBuR2wsuxBuf9e2DOwgDMlOQRwRR6Dn";
    }

    public function getInfrastructuralApi() {
        return new InfrastructuralApi(
            new Client(),
            $this->config,
            null,
            2
        ); 
    }

    public function getProductApi() {
        return new ProductsApi(
            new Client(),
            $this->config,
            null,
            2
        ); 
    }

    public function getOrdersApi() {
        return new OrdersApi(
            new Client(),
            $this->config,
            null,
            2
        ); 
    }

    public function getStocklistToken() {
        return $this->stockListToken;
    }
    

}
