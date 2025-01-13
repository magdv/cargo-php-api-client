# MagDv\Cargomart\ChatApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ChatChatIdGet()**](ChatApi.md#apiV2ChatChatIdGet) | **GET** /api/v2/chat/{chatId} | Получение списка сообщений чата.


## `apiV2ChatChatIdGet()`

```php
apiV2ChatChatIdGet($chat_id, $last_id, $max_id): \MagDv\Cargomart\Dto\ChatPostListResponse
```

Получение списка сообщений чата.

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


$apiInstance = new MagDv\Cargomart\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Идентификатор чата.
$last_id = 56; // int | Последнее сообщение.
$max_id = 56; // int | Максимальный идентификатор сообщения.

try {
    $result = $apiInstance->apiV2ChatChatIdGet($chat_id, $last_id, $max_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->apiV2ChatChatIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chat_id** | **string**| Идентификатор чата. |
 **last_id** | **int**| Последнее сообщение. | [optional]
 **max_id** | **int**| Максимальный идентификатор сообщения. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ChatPostListResponse**](../Model/ChatPostListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
