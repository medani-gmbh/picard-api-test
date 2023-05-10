<?php
namespace App\Api;

use RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody;

class DefaultFilterRequestBodyBuilder implements DefaultFilterRequestBodyBuilderInterface {

    use DateFilterBuilderTrait;

    private $object;

    public function __construct() {
        $this->object = new DefaultFilterRequestBody();
    }

    public function setLimit(int $limit): DefaultFilterRequestBodyBuilder {
        $this->object->setLimit($limit);
        return $this;
    }

    public function setOffset(int $offset): DefaultFilterRequestBodyBuilder {
        $this->object->setOffset($offset);
        return $this;
    }

    public function setRequestId(int $requestId): DefaultFilterRequestBodyBuilder{
        $this->object->setRequestId($requestId);
        return $this;
    }

    public function forceFullData(): DefaultFilterRequestBodyBuilder {
        $this->object->setForceFullData("true");
        return $this;
    }

    public function build(): DefaultFilterRequestBody {
        return $this->object;
    }



}
