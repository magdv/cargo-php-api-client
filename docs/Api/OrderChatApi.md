# MagDv\Cargomart\OrderChatApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdChatGet()**](OrderChatApi.md#apiV2OrderOrderIdChatGet) | **GET** /api/v2/order/{orderId}/chat | Получение списка комнат по заказу.
[**apiV2OrderOrderIdChatTypePost()**](OrderChatApi.md#apiV2OrderOrderIdChatTypePost) | **POST** /api/v2/order/{orderId}/chat/{type} | создание комнаты по типу.


## `apiV2OrderOrderIdChatGet()`

```php
apiV2OrderOrderIdChatGet($order_id): \MagDv\Cargomart\Dto\ChatListResponse
```

Получение списка комнат по заказу.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdChatTypePost()`

```php
apiV2OrderOrderIdChatTypePost($order_id, $type): \MagDv\Cargomart\Dto\ChatResponse
```

создание комнаты по типу.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderChatTypeEnum(); // \MagDv\Cargomart\Dto\OrderChatTypeEnum | Тип открываемого чата.

try {
    $result = $apiInstance->apiV2OrderOrderIdChatTypePost($order_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderChatApi->apiV2OrderOrderIdChatTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **type** | [**\MagDv\Cargomart\Dto\OrderChatTypeEnum**](../Model/.md)| Тип открываемого чата. |

### Return type

[**\MagDv\Cargomart\Dto\ChatResponse**](../Model/ChatResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)