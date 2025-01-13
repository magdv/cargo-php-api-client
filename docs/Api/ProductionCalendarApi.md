# MagDv\Cargomart\ProductionCalendarApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ProductionCalendarGet()**](ProductionCalendarApi.md#apiV2ProductionCalendarGet) | **GET** /api/v2/production-calendar | Метод для получения праздничных дней по производственному календарю.


## `apiV2ProductionCalendarGet()`

```php
apiV2ProductionCalendarGet($filter_from, $filter_to): \MagDv\Cargomart\Dto\ProductionCalendarResponse
```

Метод для получения праздничных дней по производственному календарю.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ProductionCalendarApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Начало периода.
$filter_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Конец периода.

try {
    $result = $apiInstance->apiV2ProductionCalendarGet($filter_from, $filter_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionCalendarApi->apiV2ProductionCalendarGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_from** | **\DateTime**| Начало периода. | [optional]
 **filter_to** | **\DateTime**| Конец периода. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ProductionCalendarResponse**](../Model/ProductionCalendarResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
