# MagDv\Cargomart\ItineraryApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ItineraryByKladrGet()**](ItineraryApi.md#apiV2ItineraryByKladrGet) | **GET** /api/v2/itinerary/by-kladr | Метод возвращает данные маршрута, по точкам кладра.


## `apiV2ItineraryByKladrGet()`

```php
apiV2ItineraryByKladrGet($departure, $destination): \MagDv\Cargomart\Dto\ItineraryListResponse
```

Метод возвращает данные маршрута, по точкам кладра.

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


$apiInstance = new MagDv\Cargomart\Api\ItineraryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$departure = 'departure_example'; // string | Начало маршрута.
$destination = 56; // int | Окончание маршрута.

try {
    $result = $apiInstance->apiV2ItineraryByKladrGet($departure, $destination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItineraryApi->apiV2ItineraryByKladrGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **departure** | **string**| Начало маршрута. | [optional]
 **destination** | **int**| Окончание маршрута. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ItineraryListResponse**](../Model/ItineraryListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
