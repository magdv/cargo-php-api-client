# MagDv\Cargomart\OrderChatApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdChatGet()**](OrderChatApi.md#apiV2OrderOrderIdChatGet) | **GET** /api/v2/order/{orderId}/chat | Получение списка комнат по заказу.


## `apiV2OrderOrderIdChatGet()`

```php
apiV2OrderOrderIdChatGet($order_id): \MagDv\Cargomart\Dto\ChatListResponse
```

Получение списка комнат по заказу.

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


$apiInstance = new MagDv\Cargomart\Api\OrderChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdChatGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderChatApi->apiV2OrderOrderIdChatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |

### Return type

[**\MagDv\Cargomart\Dto\ChatListResponse**](../Model/ChatListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
