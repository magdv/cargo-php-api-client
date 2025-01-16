# MagDv\Cargomart\OrderDocumentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderDocumentDocumentIdDelete()**](OrderDocumentApi.md#apiV2OrderDocumentDocumentIdDelete) | **DELETE** /api/v2/order-document/{documentId} | Удаление документа
[**apiV2OrderDocumentDocumentIdGet()**](OrderDocumentApi.md#apiV2OrderDocumentDocumentIdGet) | **GET** /api/v2/order-document/{documentId} | Получение документа
[**apiV2OrderDocumentDocumentIdPut()**](OrderDocumentApi.md#apiV2OrderDocumentDocumentIdPut) | **PUT** /api/v2/order-document/{documentId} | Редактирование документа
[**apiV2OrderDocumentPackagePackageIdAcceptPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdAcceptPost) | **POST** /api/v2/order-document-package/{packageId}/accept | Подтверждение что пакет сканов документов перевозчика принят
[**apiV2OrderDocumentPackagePackageIdDocumentPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdDocumentPost) | **POST** /api/v2/order-document-package/{packageId}/document | Создание документа
[**apiV2OrderDocumentPackagePackageIdGet()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdGet) | **GET** /api/v2/order-document-package/{packageId} | Получение пакета документов по заказу
[**apiV2OrderDocumentPackagePackageIdModerationPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdModerationPost) | **POST** /api/v2/order-document-package/{packageId}/moderation | Отправка пакета документов на проверку
[**apiV2OrderDocumentPackagePackageIdRejectPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdRejectPost) | **POST** /api/v2/order-document-package/{packageId}/reject | Отклонение пакета сканов документов перевозчика
[**apiV2OrderDocumentPackagePackageIdShowToCustomerPost()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdShowToCustomerPost) | **POST** /api/v2/order-document-package/{packageId}/show-to-customer | Установка возможности просмотра документа заказчиком
[**apiV2OrderDocumentPackagePackageIdUpdatePut()**](OrderDocumentApi.md#apiV2OrderDocumentPackagePackageIdUpdatePut) | **PUT** /api/v2/order-document-package/{packageId}/update | Валидация пакета документов перед сохранением файлов в документы заказа и отправкой на модерацию


## `apiV2OrderDocumentDocumentIdDelete()`

```php
apiV2OrderDocumentDocumentIdDelete($document_id)
```

Удаление документа

Удаление документа

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
$document_id = 'document_id_example'; // string | Идентификатор документа.

try {
    $apiInstance->apiV2OrderDocumentDocumentIdDelete($document_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Идентификатор документа. |

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

## `apiV2OrderDocumentDocumentIdGet()`

```php
apiV2OrderDocumentDocumentIdGet($document_id): \MagDv\Cargomart\Dto\OrderDocumentResponse
```

Получение документа

Получение документа

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
$document_id = 'document_id_example'; // string | Идентификатор документа

try {
    $result = $apiInstance->apiV2OrderDocumentDocumentIdGet($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Идентификатор документа |

### Return type

[**\MagDv\Cargomart\Dto\OrderDocumentResponse**](../Model/OrderDocumentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDocumentDocumentIdPut()`

```php
apiV2OrderDocumentDocumentIdPut($document_id, $order_document_update_request): \MagDv\Cargomart\Dto\OrderDocumentResponse
```

Редактирование документа

Редактирование документа

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
$document_id = 'document_id_example'; // string | Идентификатор документа.
$order_document_update_request = new \MagDv\Cargomart\Dto\OrderDocumentUpdateRequest(); // \MagDv\Cargomart\Dto\OrderDocumentUpdateRequest

try {
    $result = $apiInstance->apiV2OrderDocumentDocumentIdPut($document_id, $order_document_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentDocumentIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Идентификатор документа. |
 **order_document_update_request** | [**\MagDv\Cargomart\Dto\OrderDocumentUpdateRequest**](../Model/OrderDocumentUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderDocumentResponse**](../Model/OrderDocumentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `apiV2OrderDocumentPackagePackageIdDocumentPost()`

```php
apiV2OrderDocumentPackagePackageIdDocumentPost($package_id, $order_document_update_request): \MagDv\Cargomart\Dto\OrderDocumentResponse
```

Создание документа

Создание документа

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
$order_document_update_request = new \MagDv\Cargomart\Dto\OrderDocumentUpdateRequest(); // \MagDv\Cargomart\Dto\OrderDocumentUpdateRequest

try {
    $result = $apiInstance->apiV2OrderDocumentPackagePackageIdDocumentPost($package_id, $order_document_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета документов |
 **order_document_update_request** | [**\MagDv\Cargomart\Dto\OrderDocumentUpdateRequest**](../Model/OrderDocumentUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderDocumentResponse**](../Model/OrderDocumentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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

## `apiV2OrderDocumentPackagePackageIdModerationPost()`

```php
apiV2OrderDocumentPackagePackageIdModerationPost($package_id): \MagDv\Cargomart\Dto\OrderDocumentPackageResponse
```

Отправка пакета документов на проверку

Отправка пакета документов на проверку

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
    $result = $apiInstance->apiV2OrderDocumentPackagePackageIdModerationPost($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdModerationPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2OrderDocumentPackagePackageIdUpdatePut()`

```php
apiV2OrderDocumentPackagePackageIdUpdatePut($package_id, $order_document_update_all_request): \MagDv\Cargomart\Dto\OrderDocumentPackageResponse
```

Валидация пакета документов перед сохранением файлов в документы заказа и отправкой на модерацию

Валидация пакета документов перед сохранением файлов в документы заказа и отправкой на модерацию

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
$order_document_update_all_request = new \MagDv\Cargomart\Dto\OrderDocumentUpdateAllRequest(); // \MagDv\Cargomart\Dto\OrderDocumentUpdateAllRequest

try {
    $result = $apiInstance->apiV2OrderDocumentPackagePackageIdUpdatePut($package_id, $order_document_update_all_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentApi->apiV2OrderDocumentPackagePackageIdUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета документов |
 **order_document_update_all_request** | [**\MagDv\Cargomart\Dto\OrderDocumentUpdateAllRequest**](../Model/OrderDocumentUpdateAllRequest.md)|  |

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
