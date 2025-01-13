# MagDv\Cargomart\ExpeditorUtilsApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorAcCuratorGet()**](ExpeditorUtilsApi.md#apiV2ExpeditorAcCuratorGet) | **GET** /api/v2/expeditor/ac/curator | Поиск кураторов заказчика


## `apiV2ExpeditorAcCuratorGet()`

```php
apiV2ExpeditorAcCuratorGet($filter_search, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\AcCuratorResponse
```

Поиск кураторов заказчика

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorUtilsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$selected_ids = array(56); // int[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2ExpeditorAcCuratorGet($filter_search, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorUtilsApi->apiV2ExpeditorAcCuratorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **selected_ids** | [**int[]**](../Model/int.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\AcCuratorResponse**](../Model/AcCuratorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
