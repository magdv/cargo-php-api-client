# MagDv\Cargomart\OrderDocumentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderDocumentPackagePackageIdAcceptPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdAcceptPost) | **POST** /api/v2/order-document-package/{packageId}/accept | Подтверждение что пакет сканов документов перевозчика принят
[**apiV2OrderDocumentPackagePackageIdGet()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdGet) | **GET** /api/v2/order-document-package/{packageId} | Получение пакета документов по заказу
[**apiV2OrderDocumentPackagePackageIdRejectPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdRejectPost) | **POST** /api/v2/order-document-package/{packageId}/reject | Отклонение пакета сканов документов перевозчика
[**apiV2OrderDocumentPackagePackageIdShowToCustomerPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdShowToCustomerPost) | **POST** /api/v2/order-document-package/{packageId}/show-to-customer | Установка возможности просмотра документа заказчиком


## `apiV2OrderDocumentPackagePackageIdAcceptPost()`

```php
apiV2OrderDocumentPackagePackageIdAcceptPost($package_id)
```

Подтверждение что пакет сканов документов перевозчика принят

Подтверждение что пакет сканов документов перевозчика принят

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Идентификатор пакета документов

try {
    $apiInstance->apiV2OrderDocumentPackagePackageIdAcceptPost($package_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdAcceptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета документов |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDocumentPackagePackageIdGet()`

```php
apiV2OrderDocumentPackagePackageIdGet($package_id): \MagDv\Cargomart\Dto\OrderDocumentPackageResponse
```

Получение пакета документов по заказу

Получение пакета документов по заказу

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Идентификатор пакета документов

try {
    $result = $apiInstance->apiV2OrderDocumentPackagePackageIdGet($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета документов |

### Return type

[**\MagDv\Cargomart\Dto\OrderDocumentPackageResponse**](../Model/OrderDocumentPackageResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDocumentPackagePackageIdRejectPost()`

```php
apiV2OrderDocumentPackagePackageIdRejectPost($package_id, $order_document_reject_package_request): \MagDv\Cargomart\Dto\OrderDocumentPackageResponse
```

Отклонение пакета сканов документов перевозчика

Отклонение пакета сканов документов перевозчика

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Идентификатор пакета документов
$order_document_reject_package_request = new \MagDv\Cargomart\Dto\OrderDocumentRejectPackageRequest(); // \MagDv\Cargomart\Dto\OrderDocumentRejectPackageRequest

try {
    $result = $apiInstance->apiV2OrderDocumentPackagePackageIdRejectPost($package_id, $order_document_reject_package_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета документов |
 **order_document_reject_package_request** | [**\MagDv\Cargomart\Dto\OrderDocumentRejectPackageRequest**](../Model/OrderDocumentRejectPackageRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderDocumentPackageResponse**](../Model/OrderDocumentPackageResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDocumentPackagePackageIdShowToCustomerPost()`

```php
apiV2OrderDocumentPackagePackageIdShowToCustomerPost($package_id, $order_document_show_to_customer_request)
```

Установка возможности просмотра документа заказчиком

Установка возможности просмотра документа заказчиком

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Идентификатор пакета документов
$order_document_show_to_customer_request = new \MagDv\Cargomart\Dto\OrderDocumentShowToCustomerRequest(); // \MagDv\Cargomart\Dto\OrderDocumentShowToCustomerRequest

try {
    $apiInstance->apiV2OrderDocumentPackagePackageIdShowToCustomerPost($package_id, $order_document_show_to_customer_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdShowToCustomerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета документов |
 **order_document_show_to_customer_request** | [**\MagDv\Cargomart\Dto\OrderDocumentShowToCustomerRequest**](../Model/OrderDocumentShowToCustomerRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
