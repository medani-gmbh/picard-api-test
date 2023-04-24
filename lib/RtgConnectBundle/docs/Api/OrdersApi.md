# RtgConnector\RtgConnectBundle\OrdersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /api/shop/v2/order | createOrder |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /api/shop/v2/order/{order_id} | getOrder |
| [**getOrderStatus()**](OrdersApi.md#getOrderStatus) | **GET** /api/shop/v2/order/{order_id}/status | getOrderStatus |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /api/shop/v2/orders | getOrders |
| [**updateOrderStatus()**](OrdersApi.md#updateOrderStatus) | **PUT** /api/shop/v2/order/{order_id}/status | updateOrderStatus |


## `createOrder()`

```php
createOrder($createOrderRequestBody): \RtgConnector\RtgConnectBundle\Model\OrderCreatedResponse
```

createOrder

Set new order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createOrderRequestBody = new \RtgConnector\RtgConnectBundle\Model\CreateOrderRequestBody(); // \RtgConnector\RtgConnectBundle\Model\CreateOrderRequestBody | Order data

try {
    $result = $apiInstance->createOrder($createOrderRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createOrderRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\CreateOrderRequestBody**](../Model/CreateOrderRequestBody.md)| Order data | [optional] |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\OrderCreatedResponse**](../Model/OrderCreatedResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($orderId): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getOrder

Get specific orderdata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Check for specific order_id

try {
    $result = $apiInstance->getOrder($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Check for specific order_id | |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderStatus()`

```php
getOrderStatus($orderId): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getOrderStatus

get orderstatus of specific order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Check for specific order_id

try {
    $result = $apiInstance->getOrderStatus($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Check for specific order_id | |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($defaultFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getOrders

Get all orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$defaultFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody | Default filter requestbody

try {
    $result = $apiInstance->getOrders($defaultFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
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

## `updateOrderStatus()`

```php
updateOrderStatus($orderId, $orderStatusCodeId): \RtgConnector\RtgConnectBundle\Model\UpdateOrderStatusResponse
```

updateOrderStatus

Set new orderstatus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | OrderID to selecte order to set status for
$orderStatusCodeId = 56; // int | Set order_status_code_id to set orderstatus

try {
    $result = $apiInstance->updateOrderStatus($orderId, $orderStatusCodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| OrderID to selecte order to set status for | |
| **orderStatusCodeId** | **int**| Set order_status_code_id to set orderstatus | |

### Return type

[**\RtgConnector\RtgConnectBundle\Model\UpdateOrderStatusResponse**](../Model/UpdateOrderStatusResponse.md)

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
