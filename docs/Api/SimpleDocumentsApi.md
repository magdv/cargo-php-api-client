# MagDv\Cargomart\SimpleDocumentsApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2SimpleDocumentPreviewGet()**](SimpleDocumentsApi.md#apiV2SimpleDocumentPreviewGet) | **GET** /api/v2/simple-document/preview | Превью PDF-файла для титула ЭДО-документа перед подписанием им.
[**apiV2SimpleDocumentRootIdGet()**](SimpleDocumentsApi.md#apiV2SimpleDocumentRootIdGet) | **GET** /api/v2/simple-document/{rootId} | Детали по подписанному документу заказа.


## `apiV2SimpleDocumentPreviewGet()`

```php
apiV2SimpleDocumentPreviewGet($q): \SplFileObject
```

Превью PDF-файла для титула ЭДО-документа перед подписанием им.

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


$apiInstance = new MagDv\Cargomart\Api\SimpleDocumentsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$q = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ApiV2SimpleDocumentPreviewGetQParameter(); // \MagDv\Cargomart\Dto\ApiV2SimpleDocumentPreviewGetQParameter | Запрос на создание превью.

try {
    $result = $apiInstance->apiV2SimpleDocumentPreviewGet($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimpleDocumentsApi->apiV2SimpleDocumentPreviewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [**\MagDv\Cargomart\Dto\ApiV2SimpleDocumentPreviewGetQParameter**](../Model/.md)| Запрос на создание превью. |

### Return type

**\SplFileObject**

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SimpleDocumentRootIdGet()`

```php
apiV2SimpleDocumentRootIdGet($root_id): \MagDv\Cargomart\Dto\SimpleDocumentResponse
```

Детали по подписанному документу заказа.

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


$apiInstance = new MagDv\Cargomart\Api\SimpleDocumentsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$root_id = 'root_id_example'; // string | Идентификатор первого титула из документа заказа.

try {
    $result = $apiInstance->apiV2SimpleDocumentRootIdGet($root_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimpleDocumentsApi->apiV2SimpleDocumentRootIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root_id** | **string**| Идентификатор первого титула из документа заказа. |

### Return type

[**\MagDv\Cargomart\Dto\SimpleDocumentResponse**](../Model/SimpleDocumentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
