# MagDv\Cargomart\MessageApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2MessageCountGet()**](MessageApi.md#apiV2MessageCountGet) | **GET** /api/v2/message/count | Получение количества сообщений


## `apiV2MessageCountGet()`

```php
apiV2MessageCountGet($filter): \MagDv\Cargomart\Dto\MessageCountResponse
```

Получение количества сообщений

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


$apiInstance = new MagDv\Cargomart\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ListFilterRequest(); // \MagDv\Cargomart\Dto\ListFilterRequest | поиск по сообщениям

try {
    $result = $apiInstance->apiV2MessageCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->apiV2MessageCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**\MagDv\Cargomart\Dto\ListFilterRequest**](../Model/.md)| поиск по сообщениям | [optional]

### Return type

[**\MagDv\Cargomart\Dto\MessageCountResponse**](../Model/MessageCountResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
