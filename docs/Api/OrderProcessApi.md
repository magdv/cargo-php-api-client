# MagDv\Cargomart\OrderProcessApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdConsignorDocumentPost()**](OrderProcessApi.md#apiV2OrderOrderIdConsignorDocumentPost) | **POST** /api/v2/order/{orderId}/consignor-document | Загрузить документы отправителя.
[**apiV2OrderOrderIdInvoiceGpCarrierGet()**](OrderProcessApi.md#apiV2OrderOrderIdInvoiceGpCarrierGet) | **GET** /api/v2/order/{orderId}/invoice-gp-carrier | Получение данных о платежах генерального партнера для перевозчика
[**apiV2OrderOrderIdInvoiceGpCarrierPut()**](OrderProcessApi.md#apiV2OrderOrderIdInvoiceGpCarrierPut) | **PUT** /api/v2/order/{orderId}/invoice-gp-carrier | Добавление данных о платежах генерального партнера для перевозчика
[**apiV2OrderOrderIdProxyConsignorAdditionalInfoGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorAdditionalInfoGet) | **GET** /api/v2/order/{orderId}/proxy-consignor-additional-info | Получить добавочные данные, или проверить их наличие.
[**apiV2OrderOrderIdProxyConsignorAdditionalInfoPost()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorAdditionalInfoPost) | **POST** /api/v2/order/{orderId}/proxy-consignor-additional-info | Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.
[**apiV2OrderOrderIdTruckDriverPatch()**](OrderProcessApi.md#apiV2OrderOrderIdTruckDriverPatch) | **PATCH** /api/v2/order/{orderId}/truck-driver | Прикрепить к заказу водителя и машину.


## `apiV2OrderOrderIdConsignorDocumentPost()`

```php
apiV2OrderOrderIdConsignorDocumentPost($order_id, $order_document_file_id_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Загрузить документы отправителя.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_document_file_id_request = new \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest(); // \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdConsignorDocumentPost($order_id, $order_document_file_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdConsignorDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_document_file_id_request** | [**\MagDv\Cargomart\Dto\OrderDocumentFileIdRequest**](../Model/OrderDocumentFileIdRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdInvoiceGpCarrierGet()`

```php
apiV2OrderOrderIdInvoiceGpCarrierGet($order_id): \MagDv\Cargomart\Dto\OrderInvoiceResponse
```

Получение данных о платежах генерального партнера для перевозчика

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdInvoiceGpCarrierGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdInvoiceGpCarrierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderInvoiceResponse**](../Model/OrderInvoiceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdInvoiceGpCarrierPut()`

```php
apiV2OrderOrderIdInvoiceGpCarrierPut($order_id, $order_invoice_request): \MagDv\Cargomart\Dto\OrderInvoiceResponse
```

Добавление данных о платежах генерального партнера для перевозчика

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$order_invoice_request = new \MagDv\Cargomart\Dto\OrderInvoiceRequest(); // \MagDv\Cargomart\Dto\OrderInvoiceRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdInvoiceGpCarrierPut($order_id, $order_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdInvoiceGpCarrierPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **order_invoice_request** | [**\MagDv\Cargomart\Dto\OrderInvoiceRequest**](../Model/OrderInvoiceRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderInvoiceResponse**](../Model/OrderInvoiceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorAdditionalInfoGet()`

```php
apiV2OrderOrderIdProxyConsignorAdditionalInfoGet($order_id): \MagDv\Cargomart\Dto\OrderProxyInfoResponse
```

Получить добавочные данные, или проверить их наличие.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorAdditionalInfoGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorAdditionalInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderProxyInfoResponse**](../Model/OrderProxyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorAdditionalInfoPost()`

```php
apiV2OrderOrderIdProxyConsignorAdditionalInfoPost($order_id, $order_proxy_info_request): \MagDv\Cargomart\Dto\OrderProxyInfoResponse
```

Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_proxy_info_request = new \MagDv\Cargomart\Dto\OrderProxyInfoRequest(); // \MagDv\Cargomart\Dto\OrderProxyInfoRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorAdditionalInfoPost($order_id, $order_proxy_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorAdditionalInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_proxy_info_request** | [**\MagDv\Cargomart\Dto\OrderProxyInfoRequest**](../Model/OrderProxyInfoRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderProxyInfoResponse**](../Model/OrderProxyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdTruckDriverPatch()`

```php
apiV2OrderOrderIdTruckDriverPatch($order_id, $truck_driver)
```

Прикрепить к заказу водителя и машину.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$truck_driver = new \MagDv\Cargomart\Dto\TruckDriver(); // \MagDv\Cargomart\Dto\TruckDriver

try {
    $apiInstance->apiV2OrderOrderIdTruckDriverPatch($order_id, $truck_driver);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdTruckDriverPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **truck_driver** | [**\MagDv\Cargomart\Dto\TruckDriver**](../Model/TruckDriver.md)|  |

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
