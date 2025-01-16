# MagDv\Cargomart\OrderPatchApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderIdPatchPost()**](OrderPatchApi.md#apiV2OrderIdPatchPost) | **POST** /api/v2/order/{id}/patch | Создание запроса на изменение заказа экспедитором.
[**apiV2OrderOrderIdCustomerPatchPost()**](OrderPatchApi.md#apiV2OrderOrderIdCustomerPatchPost) | **POST** /api/v2/order/{orderId}/customer-patch | Создание запроса на изменение заказа отправителем.
[**apiV2OrderOrderIdRefuseRevertPatchPost()**](OrderPatchApi.md#apiV2OrderOrderIdRefuseRevertPatchPost) | **POST** /api/v2/order/{orderId}/refuse-revert-patch | Создание запроса на возвращение Отправителем заявки Экспедитора с победителем в работу после отказа.
[**apiV2OrderOrderIdTruckDriverPatchPost()**](OrderPatchApi.md#apiV2OrderOrderIdTruckDriverPatchPost) | **POST** /api/v2/order/{orderId}/truck-driver-patch | Создание запроса на изменение машины и водителя в заказе.
[**apiV2OrderPatchPatchIdApprovePost()**](OrderPatchApi.md#apiV2OrderPatchPatchIdApprovePost) | **POST** /api/v2/order-patch/{patchId}/approve | Подтверждение запроса на изменение заказа.
[**apiV2OrderPatchPatchIdCancelPost()**](OrderPatchApi.md#apiV2OrderPatchPatchIdCancelPost) | **POST** /api/v2/order-patch/{patchId}/cancel | Отмена запроса на изменение заказа его создателем.
[**apiV2OrderPatchPatchIdGet()**](OrderPatchApi.md#apiV2OrderPatchPatchIdGet) | **GET** /api/v2/order-patch/{patchId} | Получение данных запроса на изменение заказа.
[**apiV2OrderPatchPatchIdRejectPost()**](OrderPatchApi.md#apiV2OrderPatchPatchIdRejectPost) | **POST** /api/v2/order-patch/{patchId}/reject | Отклонение запроса на изменение заказа.


## `apiV2OrderIdPatchPost()`

```php
apiV2OrderIdPatchPost($id, $order_patch_request): \MagDv\Cargomart\Dto\OrderPatchResponse
```

Создание запроса на изменение заказа экспедитором.

@deprecated использовать /api/v2/expeditor-proposal/{id}/patch

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа
$order_patch_request = new \MagDv\Cargomart\Dto\OrderPatchRequest(); // \MagDv\Cargomart\Dto\OrderPatchRequest

try {
    $result = $apiInstance->apiV2OrderIdPatchPost($id, $order_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderIdPatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа |
 **order_patch_request** | [**\MagDv\Cargomart\Dto\OrderPatchRequest**](../Model/OrderPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderPatchResponse**](../Model/OrderPatchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCustomerPatchPost()`

```php
apiV2OrderOrderIdCustomerPatchPost($order_id, $order_customer_patch_request): \MagDv\Cargomart\Dto\OrderPatchResponse
```

Создание запроса на изменение заказа отправителем.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$order_customer_patch_request = new \MagDv\Cargomart\Dto\OrderCustomerPatchRequest(); // \MagDv\Cargomart\Dto\OrderCustomerPatchRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdCustomerPatchPost($order_id, $order_customer_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderOrderIdCustomerPatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **order_customer_patch_request** | [**\MagDv\Cargomart\Dto\OrderCustomerPatchRequest**](../Model/OrderCustomerPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderPatchResponse**](../Model/OrderPatchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRefuseRevertPatchPost()`

```php
apiV2OrderOrderIdRefuseRevertPatchPost($order_id, $order_refuse_revert_patch_request): \MagDv\Cargomart\Dto\OrderPatchResponse
```

Создание запроса на возвращение Отправителем заявки Экспедитора с победителем в работу после отказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа Экспедитора.
$order_refuse_revert_patch_request = new \MagDv\Cargomart\Dto\OrderRefuseRevertPatchRequest(); // \MagDv\Cargomart\Dto\OrderRefuseRevertPatchRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdRefuseRevertPatchPost($order_id, $order_refuse_revert_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderOrderIdRefuseRevertPatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа Экспедитора. |
 **order_refuse_revert_patch_request** | [**\MagDv\Cargomart\Dto\OrderRefuseRevertPatchRequest**](../Model/OrderRefuseRevertPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderPatchResponse**](../Model/OrderPatchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdTruckDriverPatchPost()`

```php
apiV2OrderOrderIdTruckDriverPatchPost($order_id, $order_truck_driver_patch_request): \MagDv\Cargomart\Dto\OrderPatchResponse
```

Создание запроса на изменение машины и водителя в заказе.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$order_truck_driver_patch_request = new \MagDv\Cargomart\Dto\OrderTruckDriverPatchRequest(); // \MagDv\Cargomart\Dto\OrderTruckDriverPatchRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdTruckDriverPatchPost($order_id, $order_truck_driver_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderOrderIdTruckDriverPatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **order_truck_driver_patch_request** | [**\MagDv\Cargomart\Dto\OrderTruckDriverPatchRequest**](../Model/OrderTruckDriverPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderPatchResponse**](../Model/OrderPatchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderPatchPatchIdApprovePost()`

```php
apiV2OrderPatchPatchIdApprovePost($patch_id): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Подтверждение запроса на изменение заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$patch_id = 'patch_id_example'; // string | Идентификатор запроса на изменение

try {
    $result = $apiInstance->apiV2OrderPatchPatchIdApprovePost($patch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderPatchPatchIdApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_id** | **string**| Идентификатор запроса на изменение |

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderPatchPatchIdCancelPost()`

```php
apiV2OrderPatchPatchIdCancelPost($patch_id, $order_patch_cancel_request): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Отмена запроса на изменение заказа его создателем.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$patch_id = 'patch_id_example'; // string | Идентификатор запроса на изменение
$order_patch_cancel_request = new \MagDv\Cargomart\Dto\OrderPatchCancelRequest(); // \MagDv\Cargomart\Dto\OrderPatchCancelRequest

try {
    $result = $apiInstance->apiV2OrderPatchPatchIdCancelPost($patch_id, $order_patch_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderPatchPatchIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_id** | **string**| Идентификатор запроса на изменение |
 **order_patch_cancel_request** | [**\MagDv\Cargomart\Dto\OrderPatchCancelRequest**](../Model/OrderPatchCancelRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderPatchPatchIdGet()`

```php
apiV2OrderPatchPatchIdGet($patch_id): \MagDv\Cargomart\Dto\OrderPatchResponse
```

Получение данных запроса на изменение заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$patch_id = 'patch_id_example'; // string | Идентификатор запроса на изменение

try {
    $result = $apiInstance->apiV2OrderPatchPatchIdGet($patch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderPatchPatchIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_id** | **string**| Идентификатор запроса на изменение |

### Return type

[**\MagDv\Cargomart\Dto\OrderPatchResponse**](../Model/OrderPatchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderPatchPatchIdRejectPost()`

```php
apiV2OrderPatchPatchIdRejectPost($patch_id, $order_patch_reject_request): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Отклонение запроса на изменение заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPatchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$patch_id = 'patch_id_example'; // string | Идентификатор запроса на изменение
$order_patch_reject_request = new \MagDv\Cargomart\Dto\OrderPatchRejectRequest(); // \MagDv\Cargomart\Dto\OrderPatchRejectRequest

try {
    $result = $apiInstance->apiV2OrderPatchPatchIdRejectPost($patch_id, $order_patch_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPatchApi->apiV2OrderPatchPatchIdRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_id** | **string**| Идентификатор запроса на изменение |
 **order_patch_reject_request** | [**\MagDv\Cargomart\Dto\OrderPatchRejectRequest**](../Model/OrderPatchRejectRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
