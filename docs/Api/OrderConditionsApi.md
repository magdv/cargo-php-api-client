# MagDv\Cargomart\OrderConditionsApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderConditions()**](OrderConditionsApi.md#getOrderConditions) | **GET** /api/v2/order-conditions | Получить условия перевозки


## `getOrderConditions()`

```php
getOrderConditions($route_points, $kind, $storage_point_ids, $company_branch_id): \MagDv\Cargomart\Dto\OrderConditionsResponse
```

Получить условия перевозки

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderConditionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$route_points = array('route_points_example'); // string[] | Список КЛАДР кодов пунктов
$kind = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderDraftKind(); // \MagDv\Cargomart\Dto\OrderDraftKind | Тип заказа
$storage_point_ids = array(56); // int[] | Список id пунктов погрузки
$company_branch_id = 56; // int | Идентификатор дочерней компании

try {
    $result = $apiInstance->getOrderConditions($route_points, $kind, $storage_point_ids, $company_branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderConditionsApi->getOrderConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_points** | [**string[]**](../Model/string.md)| Список КЛАДР кодов пунктов |
 **kind** | [**\MagDv\Cargomart\Dto\OrderDraftKind**](../Model/.md)| Тип заказа |
 **storage_point_ids** | [**int[]**](../Model/int.md)| Список id пунктов погрузки | [optional]
 **company_branch_id** | **int**| Идентификатор дочерней компании | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderConditionsResponse**](../Model/OrderConditionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
