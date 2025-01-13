# MagDv\Cargomart\OrderCategoryStatisticsApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderCategoryStatisticsGet()**](OrderCategoryStatisticsApi.md#apiV2OrderCategoryStatisticsGet) | **GET** /api/v2/order/category-statistics | Получение статистики заказов по категориям


## `apiV2OrderCategoryStatisticsGet()`

```php
apiV2OrderCategoryStatisticsGet(): \MagDv\Cargomart\Dto\OrderCategoryStatisticsResponse
```

Получение статистики заказов по категориям

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderCategoryStatisticsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2OrderCategoryStatisticsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCategoryStatisticsApi->apiV2OrderCategoryStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\OrderCategoryStatisticsResponse**](../Model/OrderCategoryStatisticsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
