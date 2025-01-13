# MagDv\Cargomart\ConfigurationApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ConfigurationGet()**](ConfigurationApi.md#apiV2ConfigurationGet) | **GET** /api/v2/configuration | Получение текущей конфигурации системы


## `apiV2ConfigurationGet()`

```php
apiV2ConfigurationGet(): \MagDv\Cargomart\Dto\ConfigurationResponse
```

Получение текущей конфигурации системы

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2ConfigurationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->apiV2ConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ConfigurationResponse**](../Model/ConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
