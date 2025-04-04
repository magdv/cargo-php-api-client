# MagDv\Cargomart\OrderDraftFtlApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderDraftFtlDraftIdDelete()**](OrderDraftFtlApi.md#apiV2OrderDraftFtlDraftIdDelete) | **DELETE** /api/v2/order-draft-ftl/{draftId} | Удаление черновика заказа
[**apiV2OrderDraftFtlDraftIdGet()**](OrderDraftFtlApi.md#apiV2OrderDraftFtlDraftIdGet) | **GET** /api/v2/order-draft-ftl/{draftId} | Получение иформации о черновике FTL заказа.
[**apiV2OrderDraftFtlDraftIdPublishPost()**](OrderDraftFtlApi.md#apiV2OrderDraftFtlDraftIdPublishPost) | **POST** /api/v2/order-draft-ftl/{draftId}/publish | Публикация черновика FTL заказа.
[**apiV2OrderDraftFtlDraftIdPut()**](OrderDraftFtlApi.md#apiV2OrderDraftFtlDraftIdPut) | **PUT** /api/v2/order-draft-ftl/{draftId} | Редактирование черновика заказа FTL
[**apiV2OrderDraftFtlPost()**](OrderDraftFtlApi.md#apiV2OrderDraftFtlPost) | **POST** /api/v2/order-draft-ftl | Создание черновика заказа FTL
[**apiV2OrderDraftFtlStepBidGet()**](OrderDraftFtlApi.md#apiV2OrderDraftFtlStepBidGet) | **GET** /api/v2/order-draft-ftl/step-bid | Получить шаг ставки по цене


## `apiV2OrderDraftFtlDraftIdDelete()`

```php
apiV2OrderDraftFtlDraftIdDelete($draft_id)
```

Удаление черновика заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderDraftFtlApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.

try {
    $apiInstance->apiV2OrderDraftFtlDraftIdDelete($draft_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftFtlApi->apiV2OrderDraftFtlDraftIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |

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

## `apiV2OrderDraftFtlDraftIdGet()`

```php
apiV2OrderDraftFtlDraftIdGet($draft_id): \MagDv\Cargomart\Dto\OrderDraftFtlResponse
```

Получение иформации о черновике FTL заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderDraftFtlApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.

try {
    $result = $apiInstance->apiV2OrderDraftFtlDraftIdGet($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftFtlApi->apiV2OrderDraftFtlDraftIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftFtlResponse**](../Model/OrderDraftFtlResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftFtlDraftIdPublishPost()`

```php
apiV2OrderDraftFtlDraftIdPublishPost($draft_id, $order_draft_ftl_request): \MagDv\Cargomart\Dto\OrderDraftFtlResponse
```

Публикация черновика FTL заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderDraftFtlApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.
$order_draft_ftl_request = new \MagDv\Cargomart\Dto\OrderDraftFtlRequest(); // \MagDv\Cargomart\Dto\OrderDraftFtlRequest

try {
    $result = $apiInstance->apiV2OrderDraftFtlDraftIdPublishPost($draft_id, $order_draft_ftl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftFtlApi->apiV2OrderDraftFtlDraftIdPublishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |
 **order_draft_ftl_request** | [**\MagDv\Cargomart\Dto\OrderDraftFtlRequest**](../Model/OrderDraftFtlRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftFtlResponse**](../Model/OrderDraftFtlResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftFtlDraftIdPut()`

```php
apiV2OrderDraftFtlDraftIdPut($draft_id, $order_draft_ftl_request): \MagDv\Cargomart\Dto\OrderDraftFtlResponse
```

Редактирование черновика заказа FTL

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


$apiInstance = new MagDv\Cargomart\Api\OrderDraftFtlApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.
$order_draft_ftl_request = new \MagDv\Cargomart\Dto\OrderDraftFtlRequest(); // \MagDv\Cargomart\Dto\OrderDraftFtlRequest

try {
    $result = $apiInstance->apiV2OrderDraftFtlDraftIdPut($draft_id, $order_draft_ftl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftFtlApi->apiV2OrderDraftFtlDraftIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |
 **order_draft_ftl_request** | [**\MagDv\Cargomart\Dto\OrderDraftFtlRequest**](../Model/OrderDraftFtlRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftFtlResponse**](../Model/OrderDraftFtlResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftFtlPost()`

```php
apiV2OrderDraftFtlPost($order_draft_ftl_request): \MagDv\Cargomart\Dto\OrderDraftFtlResponse
```

Создание черновика заказа FTL

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


$apiInstance = new MagDv\Cargomart\Api\OrderDraftFtlApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_draft_ftl_request = new \MagDv\Cargomart\Dto\OrderDraftFtlRequest(); // \MagDv\Cargomart\Dto\OrderDraftFtlRequest

try {
    $result = $apiInstance->apiV2OrderDraftFtlPost($order_draft_ftl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftFtlApi->apiV2OrderDraftFtlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_draft_ftl_request** | [**\MagDv\Cargomart\Dto\OrderDraftFtlRequest**](../Model/OrderDraftFtlRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftFtlResponse**](../Model/OrderDraftFtlResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftFtlStepBidGet()`

```php
apiV2OrderDraftFtlStepBidGet($price, $currency_code): \MagDv\Cargomart\Dto\OrderDraftStepBidResponse
```

Получить шаг ставки по цене

Получить шаг ставки по цене

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


$apiInstance = new MagDv\Cargomart\Api\OrderDraftFtlApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$price = 'price_example'; // string | Цена для которой нужно рассчитать шаг ставки
$currency_code = 'currency_code_example'; // string | Код валюты в которой указана цена

try {
    $result = $apiInstance->apiV2OrderDraftFtlStepBidGet($price, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftFtlApi->apiV2OrderDraftFtlStepBidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price** | **string**| Цена для которой нужно рассчитать шаг ставки |
 **currency_code** | **string**| Код валюты в которой указана цена |

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftStepBidResponse**](../Model/OrderDraftStepBidResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
