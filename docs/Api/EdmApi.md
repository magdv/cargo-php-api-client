# MagDv\Cargomart\EdmApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2EdmDiadocBoxListGet()**](EdmApi.md#apiV2EdmDiadocBoxListGet) | **GET** /api/v2/edm/diadoc-box-list | Получение ящиков контрагента для отправки документов через Диадок


## `apiV2EdmDiadocBoxListGet()`

```php
apiV2EdmDiadocBoxListGet($inn): \MagDv\Cargomart\Dto\EdmBoxListResponse
```

Получение ящиков контрагента для отправки документов через Диадок

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


$apiInstance = new MagDv\Cargomart\Api\EdmApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$inn = 'inn_example'; // string | ИНН

try {
    $result = $apiInstance->apiV2EdmDiadocBoxListGet($inn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdmApi->apiV2EdmDiadocBoxListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inn** | **string**| ИНН |

### Return type

[**\MagDv\Cargomart\Dto\EdmBoxListResponse**](../Model/EdmBoxListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
