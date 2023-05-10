<?php

namespace App\Api;

use RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody;

interface DefaultFilterRequestBodyBuilderInterface extends BuilderInterface {
    public function build(): DefaultFilterRequestBody;
}
