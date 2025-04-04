# MagDv\Cargomart\SimpleDocumentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdSimpleDocumentGet()**](SimpleDocumentApi.md#apiV2ExpeditorProposalIdSimpleDocumentGet) | **GET** /api/v2/expeditor-proposal/{id}/simple-document | Получение иформации для карточки заказа Экспедитора.


## `apiV2ExpeditorProposalIdSimpleDocumentGet()`

```php
apiV2ExpeditorProposalIdSimpleDocumentGet($id): \MagDv\Cargomart\Dto\OrderSimpleDocumentResponse
```

Получение иформации для карточки заказа Экспедитора.

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


$apiInstance = new MagDv\Cargomart\Api\SimpleDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Получение документа заказа со списком титулов

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdSimpleDocumentGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimpleDocumentApi->apiV2ExpeditorProposalIdSimpleDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Получение документа заказа со списком титулов |

### Return type

[**\MagDv\Cargomart\Dto\OrderSimpleDocumentResponse**](../Model/OrderSimpleDocumentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
