# MagDv\Cargomart\PredictorApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2PredictorPriceGet()**](PredictorApi.md#apiV2PredictorPriceGet) | **GET** /api/v2/predictor/price | Возвращает предсказание цены для маршрута


## `apiV2PredictorPriceGet()`

```php
apiV2PredictorPriceGet($truck_type, $departure_code, $destination_code, $points): \MagDv\Cargomart\Dto\PricePredictorResponse
```

Возвращает предсказание цены для маршрута

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


$apiInstance = new MagDv\Cargomart\Api\PredictorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\PredictorAvailableTruckTypeEnum(); // \MagDv\Cargomart\Dto\PredictorAvailableTruckTypeEnum | Код типа кузова (допустимы пока только тент, реф и изотерм)
$departure_code = 'departure_code_example'; // string | Код города отправки
$destination_code = 'destination_code_example'; // string | Код города назначения
$points = array('points_example'); // string[] | Коды городов маршрута

try {
    $result = $apiInstance->apiV2PredictorPriceGet($truck_type, $departure_code, $destination_code, $points);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredictorApi->apiV2PredictorPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_type** | [**\MagDv\Cargomart\Dto\PredictorAvailableTruckTypeEnum**](../Model/.md)| Код типа кузова (допустимы пока только тент, реф и изотерм) |
 **departure_code** | **string**| Код города отправки | [optional]
 **destination_code** | **string**| Код города назначения | [optional]
 **points** | [**string[]**](../Model/string.md)| Коды городов маршрута | [optional]

### Return type

[**\MagDv\Cargomart\Dto\PricePredictorResponse**](../Model/PricePredictorResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
