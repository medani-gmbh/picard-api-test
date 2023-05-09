<?php
namespace App\Api;

use RtgConnector\RtgConnectBundle\Model\ProductsRequestBody;

interface ProductsRequestBodyBuilderInterface extends BuilderInterface {
    public function build(): ProductsRequestBody;
}
