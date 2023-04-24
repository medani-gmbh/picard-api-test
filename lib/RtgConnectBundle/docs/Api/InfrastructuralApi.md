# RtgConnector\RtgConnectBundle\InfrastructuralApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkConnection()**](InfrastructuralApi.md#checkConnection) | **GET** /api/shop/v2/testconnection/{stockListToken} | checkConnection |
| [**getCarriers()**](InfrastructuralApi.md#getCarriers) | **GET** /api/shop/v2/carriers | getCarriers |
| [**getLanguages()**](InfrastructuralApi.md#getLanguages) | **GET** /api/shop/v2/languages | getLanguages |
| [**getOrderStatuscodes()**](InfrastructuralApi.md#getOrderStatuscodes) | **GET** /api/shop/v2/order/statuscodes | getOrderStatuscodes |
| [**getProductCategories()**](InfrastructuralApi.md#getProductCategories) | **GET** /api/shop/v2/product/categories/{stockListToken} | getProductCategories |
| [**getProductManufacturers()**](InfrastructuralApi.md#getProductManufacturers) | **GET** /api/shop/v2/product/manufacturers/{stockListToken} | getProductManufacturers |
| [**updateRequestStatus()**](InfrastructuralApi.md#updateRequestStatus) | **PUT** /api/shop/v2/report_request_status | updateRequestStatus |


## `checkConnection()`

```php
checkConnection($stockListToken): \RtgConnector\RtgConnectBundle\Model\TestConnectionResponse
```

checkConnection

Testing connection of shop to RTG-Portal and setting shopstatus to active

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\TestConnectionResponse**](../Model/TestConnectionResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCarriers()`

```php
getCarriers($defaultFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getCarriers

Get carriers

### Example

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
$defaultFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody | Default filter requestbody

try {
    $result = $apiInstance->getCarriers($defaultFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->getCarriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **defaultFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody**](../Model/DefaultFilterRequestBody.md)| Default filter requestbody | [optional] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLanguages()`

```php
getLanguages($defaultFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getLanguages

Get all supported languages, that has been assigned in the rtg-portal

### Example

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
$defaultFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody | Default filter requestbody

try {
    $result = $apiInstance->getLanguages($defaultFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->getLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **defaultFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody**](../Model/DefaultFilterRequestBody.md)| Default filter requestbody | [optional] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderStatuscodes()`

```php
getOrderStatuscodes($defaultFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getOrderStatuscodes

Get order-statuscodes

### Example

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
$defaultFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody | Default filter requestbody

try {
    $result = $apiInstance->getOrderStatuscodes($defaultFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->getOrderStatuscodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **defaultFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody**](../Model/DefaultFilterRequestBody.md)| Default filter requestbody | [optional] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductCategories()`

```php
getProductCategories($stockListToken, $defaultFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getProductCategories

Get all product-categories, that has been assigned in the rtg-portal

### Example

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
$defaultFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody | Default filter requestbody

try {
    $result = $apiInstance->getProductCategories($stockListToken, $defaultFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->getProductCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody**](../Model/DefaultFilterRequestBody.md)| Default filter requestbody | [optional] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductManufacturers()`

```php
getProductManufacturers($stockListToken, $defaultFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getProductManufacturers

Get all product-manufacturers, that has been assigned in the rtg-portal

### Example

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
$defaultFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody | Default filter requestbody

try {
    $result = $apiInstance->getProductManufacturers($stockListToken, $defaultFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->getProductManufacturers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody**](../Model/DefaultFilterRequestBody.md)| Default filter requestbody | [optional] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRequestStatus()`

```php
updateRequestStatus($requestId, $status, $errorText): \RtgConnector\RtgConnectBundle\Model\ReportRequestStatusResponse
```

updateRequestStatus

reporting request status, if failed or succeed

### Example

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
$requestId = 56; // int | Request-id to set status for
$status = 'status_example'; // string | status of request
$errorText = ' '; // string | Errortext, `REQUIRED` if `status = 2` aa

try {
    $result = $apiInstance->updateRequestStatus($requestId, $status, $errorText);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructuralApi->updateRequestStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestId** | **int**| Request-id to set status for | |
| **status** | **string**| status of request | |
| **errorText** | **string**| Errortext, &#x60;REQUIRED&#x60; if &#x60;status &#x3D; 2&#x60; aa | [default to &#39;
&#39;] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\ReportRequestStatusResponse**](../Model/ReportRequestStatusResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
