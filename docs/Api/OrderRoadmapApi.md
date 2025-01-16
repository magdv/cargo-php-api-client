# MagDv\Cargomart\OrderRoadmapApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdRoadmapGet()**](OrderRoadmapApi.md#apiV2OrderOrderIdRoadmapGet) | **GET** /api/v2/order/{orderId}/roadmap | Получение роадмап
[**apiV2RoadmapRoadmapIdHidePost()**](OrderRoadmapApi.md#apiV2RoadmapRoadmapIdHidePost) | **POST** /api/v2/roadmap/{roadmapId}/hide | Скрытие динамического типа роадмап


## `apiV2OrderOrderIdRoadmapGet()`

```php
apiV2OrderOrderIdRoadmapGet($order_id): \MagDv\Cargomart\Dto\OrderRoadmapListResponse
```

Получение роадмап

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


$apiInstance = new MagDv\Cargomart\Api\OrderRoadmapApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdRoadmapGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRoadmapApi->apiV2OrderOrderIdRoadmapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderRoadmapListResponse**](../Model/OrderRoadmapListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2RoadmapRoadmapIdHidePost()`

```php
apiV2RoadmapRoadmapIdHidePost($roadmap_id, $body): \MagDv\Cargomart\Dto\OrderRoadmapListResponse
```

Скрытие динамического типа роадмап

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


$apiInstance = new MagDv\Cargomart\Api\OrderRoadmapApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$roadmap_id = 'roadmap_id_example'; // string | Идентификатор роадмап.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiV2RoadmapRoadmapIdHidePost($roadmap_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRoadmapApi->apiV2RoadmapRoadmapIdHidePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roadmap_id** | **string**| Идентификатор роадмап. |
 **body** | **object**|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderRoadmapListResponse**](../Model/OrderRoadmapListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
