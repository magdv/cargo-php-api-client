# MagDv\Cargomart\SearchApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2SearchGet()**](SearchApi.md#apiV2SearchGet) | **GET** /api/v2/search | Метод для поиска информации в Каргомарте.


## `apiV2SearchGet()`

```php
apiV2SearchGet($filter_search, $filter_selected_ids): \MagDv\Cargomart\Dto\SearchResponse
```

Метод для поиска информации в Каргомарте.

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


$apiInstance = new MagDv\Cargomart\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$filter_selected_ids = array('filter_selected_ids_example'); // string[] | Найти указанные ID

try {
    $result = $apiInstance->apiV2SearchGet($filter_search, $filter_selected_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->apiV2SearchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **filter_selected_ids** | [**string[]**](../Model/string.md)| Найти указанные ID | [optional]

### Return type

[**\MagDv\Cargomart\Dto\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
