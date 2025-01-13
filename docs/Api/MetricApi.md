# MagDv\Cargomart\MetricApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2MetricsLocalityPost()**](MetricApi.md#apiV2MetricsLocalityPost) | **POST** /api/v2/metrics/locality | Отправка нового события метрики для поиска по пунктам отправления/назначения


## `apiV2MetricsLocalityPost()`

```php
apiV2MetricsLocalityPost($locality_metric_request): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Отправка нового события метрики для поиска по пунктам отправления/назначения

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


$apiInstance = new MagDv\Cargomart\Api\MetricApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$locality_metric_request = new \MagDv\Cargomart\Dto\LocalityMetricRequest(); // \MagDv\Cargomart\Dto\LocalityMetricRequest

try {
    $result = $apiInstance->apiV2MetricsLocalityPost($locality_metric_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricApi->apiV2MetricsLocalityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locality_metric_request** | [**\MagDv\Cargomart\Dto\LocalityMetricRequest**](../Model/LocalityMetricRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
