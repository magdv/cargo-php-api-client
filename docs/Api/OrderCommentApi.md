# MagDv\Cargomart\OrderCommentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdCommentGet()**](OrderCommentApi.md#apiV2OrderOrderIdCommentGet) | **GET** /api/v2/order/{orderId}/comment | Метод возвращает список комментариев по заказу.
[**apiV2OrderOrderIdCommentPost()**](OrderCommentApi.md#apiV2OrderOrderIdCommentPost) | **POST** /api/v2/order/{orderId}/comment | Создание комментария


## `apiV2OrderOrderIdCommentGet()`

```php
apiV2OrderOrderIdCommentGet($order_id, $page, $per_page): \MagDv\Cargomart\Dto\CommentListResponse
```

Метод возвращает список комментариев по заказу.

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


$apiInstance = new MagDv\Cargomart\Api\OrderCommentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$page = 56; // int | Пагинация списка документов.
$per_page = 56; // int | Количество элементов на странице.

try {
    $result = $apiInstance->apiV2OrderOrderIdCommentGet($order_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCommentApi->apiV2OrderOrderIdCommentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **page** | **int**| Пагинация списка документов. | [optional]
 **per_page** | **int**| Количество элементов на странице. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CommentListResponse**](../Model/CommentListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCommentPost()`

```php
apiV2OrderOrderIdCommentPost($order_id, $order_comment_request): \MagDv\Cargomart\Dto\CommentResponse
```

Создание комментария

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


$apiInstance = new MagDv\Cargomart\Api\OrderCommentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$order_comment_request = new \MagDv\Cargomart\Dto\OrderCommentRequest(); // \MagDv\Cargomart\Dto\OrderCommentRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdCommentPost($order_id, $order_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCommentApi->apiV2OrderOrderIdCommentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **order_comment_request** | [**\MagDv\Cargomart\Dto\OrderCommentRequest**](../Model/OrderCommentRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CommentResponse**](../Model/CommentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
