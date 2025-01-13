# MagDv\Cargomart\TrailerApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2TrailerGet()**](TrailerApi.md#apiV2TrailerGet) | **GET** /api/v2/trailer | Метод поиска тягачей и прицепов.


## `apiV2TrailerGet()`

```php
apiV2TrailerGet($filter_search, $filter_type, $page, $per_page): \MagDv\Cargomart\Dto\TrailerListResponse
```

Метод поиска тягачей и прицепов.

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


$apiInstance = new MagDv\Cargomart\Api\TrailerApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\TrailerFilterTypeEnum(); // \MagDv\Cargomart\Dto\TrailerFilterTypeEnum | тип по параметру (all) отображаются все, (isTruck) тягачи, (isTrailer) прицепы. по умолчанию all - все
$page = 56; // int | Страница выдачи.
$per_page = 56; // int | лимит выдачи.

try {
    $result = $apiInstance->apiV2TrailerGet($filter_search, $filter_type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->apiV2TrailerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\TrailerFilterTypeEnum**](../Model/.md)| тип по параметру (all) отображаются все, (isTruck) тягачи, (isTrailer) прицепы. по умолчанию all - все | [optional]
 **page** | **int**| Страница выдачи. | [optional]
 **per_page** | **int**| лимит выдачи. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TrailerListResponse**](../Model/TrailerListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
