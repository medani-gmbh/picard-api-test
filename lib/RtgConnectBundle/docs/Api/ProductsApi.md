# RtgConnector\RtgConnectBundle\ProductsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getImage()**](ProductsApi.md#getImage) | **GET** /api/shop/v2/products/image/{imagename} | getImage |
| [**getImages()**](ProductsApi.md#getImages) | **GET** /api/shop/v2/products/images/{stockListToken} | getImages |
| [**getLineartechProducts()**](ProductsApi.md#getLineartechProducts) | **GET** /api/shop/v2/products/lineartech/{stockListToken} | getLineartechProducts |
| [**getLineartechQuantities()**](ProductsApi.md#getLineartechQuantities) | **GET** /api/shop/v2/products/lineartech/quantities/{stockListToken} | getLineartechQuantities |
| [**getPrices()**](ProductsApi.md#getPrices) | **GET** /api/shop/v2/products/prices/{stockListToken} | getPrices |
| [**getProductAttributeKeys()**](ProductsApi.md#getProductAttributeKeys) | **GET** /api/shop/v2/products/attribute_keys/{stockListToken} | getProductAttributeKeys |
| [**getProductAttributeValues()**](ProductsApi.md#getProductAttributeValues) | **GET** /api/shop/v2/products/attribute_values/{stockListToken} | getProductAttributeValues |
| [**getProducts()**](ProductsApi.md#getProducts) | **GET** /api/shop/v2/products/{stockListToken} | getProducts |
| [**getQuantities()**](ProductsApi.md#getQuantities) | **GET** /api/shop/v2/products/quantities/{stockListToken} | getQuantities |


## `getImage()`

```php
getImage($imagename): \SplFileObject
```

getImage

Get product images by filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$imagename = abziehuelse.jpg; // string | Filename of image

try {
    $result = $apiInstance->getImage($imagename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **imagename** | **string**| Filename of image | |

### Return type

**\SplFileObject**

### Authorization

[Shoptoken](../../README.md#Shoptoken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImages()`

```php
getImages($stockListToken, $images): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getImages

Get product images by filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$images = array('images_example'); // string[] | Array of image-filenames

try {
    $result = $apiInstance->getImages($stockListToken, $images);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **images** | [**string[]**](../Model/string.md)| Array of image-filenames | |

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

## `getLineartechProducts()`

```php
getLineartechProducts($stockListToken, $defaultProductFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getLineartechProducts

Provides all lineartechproductdetails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$defaultProductFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody | Default filter with productfilter option requestbody

try {
    $result = $apiInstance->getLineartechProducts($stockListToken, $defaultProductFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getLineartechProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultProductFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody**](../Model/DefaultProductFilterRequestBody.md)| Default filter with productfilter option requestbody | [optional] |

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

## `getLineartechQuantities()`

```php
getLineartechQuantities($stockListToken, $defaultProductFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getLineartechQuantities

Provides all lineartechquantities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$defaultProductFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody | Default filter with productfilter option requestbody

try {
    $result = $apiInstance->getLineartechQuantities($stockListToken, $defaultProductFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getLineartechQuantities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultProductFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody**](../Model/DefaultProductFilterRequestBody.md)| Default filter with productfilter option requestbody | [optional] |

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

## `getPrices()`

```php
getPrices($stockListToken, $defaultProductFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getPrices

Provides all productprices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$defaultProductFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody | Default filter with productfilter option requestbody

try {
    $result = $apiInstance->getPrices($stockListToken, $defaultProductFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultProductFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody**](../Model/DefaultProductFilterRequestBody.md)| Default filter with productfilter option requestbody | [optional] |

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

## `getProductAttributeKeys()`

```php
getProductAttributeKeys($stockListToken, $defaultProductFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getProductAttributeKeys

Provides all product attribute keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$defaultProductFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody | Default filter with productfilter option requestbody

try {
    $result = $apiInstance->getProductAttributeKeys($stockListToken, $defaultProductFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAttributeKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultProductFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody**](../Model/DefaultProductFilterRequestBody.md)| Default filter with productfilter option requestbody | [optional] |

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

## `getProductAttributeValues()`

```php
getProductAttributeValues($stockListToken, $defaultProductFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getProductAttributeValues

Provides all product attribute values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$defaultProductFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody | Default filter with productfilter option requestbody

try {
    $result = $apiInstance->getProductAttributeValues($stockListToken, $defaultProductFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAttributeValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultProductFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody**](../Model/DefaultProductFilterRequestBody.md)| Default filter with productfilter option requestbody | [optional] |

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

## `getProducts()`

```php
getProducts($stockListToken, $productsRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getProducts

Get Products with full dataset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$productsRequestBody = new \RtgConnector\RtgConnectBundle\Model\ProductsRequestBody(); // \RtgConnector\RtgConnectBundle\Model\ProductsRequestBody | productfilter with optionaldata parameter

try {
    $result = $apiInstance->getProducts($stockListToken, $productsRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **productsRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\ProductsRequestBody**](../Model/ProductsRequestBody.md)| productfilter with optionaldata parameter | [optional] |

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

## `getQuantities()`

```php
getQuantities($stockListToken, $defaultProductFilterRequestBody): \RtgConnector\RtgConnectBundle\Model\SuccessResponse
```

getQuantities

Provides all productquantities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Shoptoken
$config = RtgConnector\RtgConnectBundle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RtgConnector\RtgConnectBundle\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockListToken = 'stockListToken_example'; // string | Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create)
$defaultProductFilterRequestBody = new \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody(); // \RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody | Default filter with productfilter option requestbody

try {
    $result = $apiInstance->getQuantities($stockListToken, $defaultProductFilterRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getQuantities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockListToken** | **string**| Stocklist identifier, add in RTG-Portal [Stocklist » add](https://rtg-portal.picard.de/stocklists/create) | |
| **defaultProductFilterRequestBody** | [**\RtgConnector\RtgConnectBundle\Model\DefaultProductFilterRequestBody**](../Model/DefaultProductFilterRequestBody.md)| Default filter with productfilter option requestbody | [optional] |

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
