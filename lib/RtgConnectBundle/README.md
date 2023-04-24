# OpenAPIClient-php

The RTG-Portal API is an interface for selected RTG-Shop customers.

For more information, please visit [https://www.picard.de](https://www.picard.de).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mwd/picard-rtg-connector.git"
    }
  ],
  "require": {
    "mwd/picard-rtg-connector": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\InfrastructuralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)

try {
    $result = $apiInstance->checkConnection($stockListToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->checkConnection: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InfrastructuralApi* | [**checkConnection**](docs/Api/InfrastructuralApi.md#checkconnection) | **GET** /api/shop/v2/testconnection/{stockListToken} | checkConnection
*InfrastructuralApi* | [**getCarriers**](docs/Api/InfrastructuralApi.md#getcarriers) | **GET** /api/shop/v2/carriers | getCarriers
*InfrastructuralApi* | [**getLanguages**](docs/Api/InfrastructuralApi.md#getlanguages) | **GET** /api/shop/v2/languages | getLanguages
*InfrastructuralApi* | [**getOrderStatuscodes**](docs/Api/InfrastructuralApi.md#getorderstatuscodes) | **GET** /api/shop/v2/order/statuscodes | getOrderStatuscodes
*InfrastructuralApi* | [**getProductCategories**](docs/Api/InfrastructuralApi.md#getproductcategories) | **GET** /api/shop/v2/product/categories/{stockListToken} | getProductCategories
*InfrastructuralApi* | [**getProductManufacturers**](docs/Api/InfrastructuralApi.md#getproductmanufacturers) | **GET** /api/shop/v2/product/manufacturers/{stockListToken} | getProductManufacturers
*InfrastructuralApi* | [**updateRequestStatus**](docs/Api/InfrastructuralApi.md#updaterequeststatus) | **PUT** /api/shop/v2/report_request_status | updateRequestStatus
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /api/shop/v2/order | createOrder
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /api/shop/v2/order/{order_id} | getOrder
*OrdersApi* | [**getOrderStatus**](docs/Api/OrdersApi.md#getorderstatus) | **GET** /api/shop/v2/order/{order_id}/status | getOrderStatus
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /api/shop/v2/orders | getOrders
*OrdersApi* | [**updateOrderStatus**](docs/Api/OrdersApi.md#updateorderstatus) | **PUT** /api/shop/v2/order/{order_id}/status | updateOrderStatus
*ProductsApi* | [**getImage**](docs/Api/ProductsApi.md#getimage) | **GET** /api/shop/v2/products/image/{imagename} | getImage
*ProductsApi* | [**getImages**](docs/Api/ProductsApi.md#getimages) | **GET** /api/shop/v2/products/images/{stockListToken} | getImages
*ProductsApi* | [**getLineartechProducts**](docs/Api/ProductsApi.md#getlineartechproducts) | **GET** /api/shop/v2/products/lineartech/{stockListToken} | getLineartechProducts
*ProductsApi* | [**getLineartechQuantities**](docs/Api/ProductsApi.md#getlineartechquantities) | **GET** /api/shop/v2/products/lineartech/quantities/{stockListToken} | getLineartechQuantities
*ProductsApi* | [**getPrices**](docs/Api/ProductsApi.md#getprices) | **GET** /api/shop/v2/products/prices/{stockListToken} | getPrices
*ProductsApi* | [**getProductAttributeKeys**](docs/Api/ProductsApi.md#getproductattributekeys) | **GET** /api/shop/v2/products/attribute_keys/{stockListToken} | getProductAttributeKeys
*ProductsApi* | [**getProductAttributeValues**](docs/Api/ProductsApi.md#getproductattributevalues) | **GET** /api/shop/v2/products/attribute_values/{stockListToken} | getProductAttributeValues
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /api/shop/v2/products/{stockListToken} | getProducts
*ProductsApi* | [**getQuantities**](docs/Api/ProductsApi.md#getquantities) | **GET** /api/shop/v2/products/quantities/{stockListToken} | getQuantities

## Models

- [Address](docs/Model/Address.md)
- [Carrier](docs/Model/Carrier.md)
- [Category](docs/Model/Category.md)
- [CategoryCategoryLangInner](docs/Model/CategoryCategoryLangInner.md)
- [CategorySubCategoriesInner](docs/Model/CategorySubCategoriesInner.md)
- [CategorySubCategoriesInnerCategoryLangInner](docs/Model/CategorySubCategoriesInnerCategoryLangInner.md)
- [CategorySubCategoriesInnerSubCategoriesInner](docs/Model/CategorySubCategoriesInnerSubCategoriesInner.md)
- [CategorySubCategoriesInnerSubCategoriesInnerCategoryLangInner](docs/Model/CategorySubCategoriesInnerSubCategoriesInnerCategoryLangInner.md)
- [CreateOrderRequestBody](docs/Model/CreateOrderRequestBody.md)
- [CreateOrderRequestBodyDeliveryAddress](docs/Model/CreateOrderRequestBodyDeliveryAddress.md)
- [CreateOrderRequestBodyInvoice](docs/Model/CreateOrderRequestBodyInvoice.md)
- [CreateOrderRequestBodyInvoiceAddress](docs/Model/CreateOrderRequestBodyInvoiceAddress.md)
- [DataTokenInvalidErrorResponse](docs/Model/DataTokenInvalidErrorResponse.md)
- [DefaultFilterRequestBody](docs/Model/DefaultFilterRequestBody.md)
- [DefaultProductFilterRequestBody](docs/Model/DefaultProductFilterRequestBody.md)
- [Language](docs/Model/Language.md)
- [Manufacturer](docs/Model/Manufacturer.md)
- [MissingAddressErrorResponse](docs/Model/MissingAddressErrorResponse.md)
- [Order](docs/Model/Order.md)
- [OrderCreatedResponse](docs/Model/OrderCreatedResponse.md)
- [OrderDetailDeliveryAddress](docs/Model/OrderDetailDeliveryAddress.md)
- [OrderDetailInvoice](docs/Model/OrderDetailInvoice.md)
- [OrderDetailInvoiceAddress](docs/Model/OrderDetailInvoiceAddress.md)
- [OrderDetailInvoiceSchema](docs/Model/OrderDetailInvoiceSchema.md)
- [OrderDetailPosition](docs/Model/OrderDetailPosition.md)
- [OrderDetailStatusHistoryEntry](docs/Model/OrderDetailStatusHistoryEntry.md)
- [OrderNotFoundErrorResponse](docs/Model/OrderNotFoundErrorResponse.md)
- [OrderStatusHistory](docs/Model/OrderStatusHistory.md)
- [OrderStatuscode](docs/Model/OrderStatuscode.md)
- [ProductAttribute](docs/Model/ProductAttribute.md)
- [ProductAttributeKey](docs/Model/ProductAttributeKey.md)
- [ProductAttributeValue](docs/Model/ProductAttributeValue.md)
- [ProductData](docs/Model/ProductData.md)
- [ProductDataBuildProducts](docs/Model/ProductDataBuildProducts.md)
- [ProductDataImage](docs/Model/ProductDataImage.md)
- [ProductDataLineartech](docs/Model/ProductDataLineartech.md)
- [ProductDataPrice](docs/Model/ProductDataPrice.md)
- [ProductDataQuantity](docs/Model/ProductDataQuantity.md)
- [ProductDataRelatedProducts](docs/Model/ProductDataRelatedProducts.md)
- [ProductDataSetProducts](docs/Model/ProductDataSetProducts.md)
- [ProductImage](docs/Model/ProductImage.md)
- [ProductImageFileNotFoundErrorResponse](docs/Model/ProductImageFileNotFoundErrorResponse.md)
- [ProductImages](docs/Model/ProductImages.md)
- [ProductLineartechDetail](docs/Model/ProductLineartechDetail.md)
- [ProductLineartechQuantities](docs/Model/ProductLineartechQuantities.md)
- [ProductNotFoundErrorResponse](docs/Model/ProductNotFoundErrorResponse.md)
- [ProductPrice](docs/Model/ProductPrice.md)
- [ProductQuantity](docs/Model/ProductQuantity.md)
- [ProductsRequestBody](docs/Model/ProductsRequestBody.md)
- [ReportRequestStatusResponse](docs/Model/ReportRequestStatusResponse.md)
- [RequestBodyValidationErrorResponse](docs/Model/RequestBodyValidationErrorResponse.md)
- [RequestBodyValidationErrorResponseDynamicKeys](docs/Model/RequestBodyValidationErrorResponseDynamicKeys.md)
- [ShoptokenInvalidErrorResponse](docs/Model/ShoptokenInvalidErrorResponse.md)
- [ShoptokenPermissionErrorResponse](docs/Model/ShoptokenPermissionErrorResponse.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [SuccessResponseData](docs/Model/SuccessResponseData.md)
- [SuccessResponseMeta](docs/Model/SuccessResponseMeta.md)
- [SuccessResponseMetaSchema](docs/Model/SuccessResponseMetaSchema.md)
- [TestConnectionResponse](docs/Model/TestConnectionResponse.md)
- [UpdateOrderStatusResponse](docs/Model/UpdateOrderStatusResponse.md)

## Authorization

### Shoptoken

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

fabian.kaufmann@picard.de

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
