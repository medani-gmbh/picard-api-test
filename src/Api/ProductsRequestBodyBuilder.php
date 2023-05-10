<?php
namespace App\Api;

use RtgConnector\RtgConnectBundle\Model\ProductsRequestBody;

class ProductsRequestBodyBuilder implements ProductsRequestBodyBuilderInterface {

    use DateFilterBuilderTrait;

    private $object;

    public function __construct() {
        $this->object = new ProductsRequestBody();
    }

    public function setLimit(int $limit): ProductsRequestBodyBuilder {
        $this->object->setLimit($limit);
        return $this;
    }

    public function setOffset(int $offset): ProductsRequestBodyBuilder {
        $this->object->setOffset($offset);
        return $this;
    }

    public function setRequestId(int $requestId): ProductsRequestBodyBuilder{
        $this->object->setRequestId($requestId);
        return $this;
    }

    public function setProductId(int $productId): ProductsRequestBodyBuilder {
        $this->object->setProductId($productId);
        return $this;
    }

    public function withPrices(): ProductsRequestBodyBuilder {
        $this->object->setWithPrices("true");
        return $this;
    }

    public function withAttributes(): ProductsRequestBodyBuilder {
        $this->object->setWithAttributes("true");
        return $this;
    }

    public function withLineartech(): ProductsRequestBodyBuilder {
        $this->object->setWithLineartech("true");
        return $this;
    }

    public function withImage(): ProductsRequestBodyBuilder {
        $this->object->setWithImage("true");
        return $this;
    }

    public function withQuantity(): ProductsRequestBodyBuilder{
        $this->object->setWithQuantity("true");
        return $this;
    }

    public function build(): ProductsRequestBody {
        return $this->object;
    }

}
