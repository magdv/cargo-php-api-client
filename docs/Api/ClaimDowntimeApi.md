# MagDv\Cargomart\ClaimDowntimeApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ClaimDowntimeIdCancelPost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdCancelPost) | **POST** /api/v2/claim/downtime/{id}/cancel | Отмена претензии о простое
[**apiV2ClaimDowntimeIdGet()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdGet) | **GET** /api/v2/claim/downtime/{id} | Просмотр претензии о простое
[**apiV2ClaimDowntimeIdRedirectPost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdRedirectPost) | **POST** /api/v2/claim/downtime/{id}/redirect | Перенаправление требования перевозчика заказчику
[**apiV2ClaimDowntimeIdResolvePost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdResolvePost) | **POST** /api/v2/claim/downtime/{id}/resolve | Решение по претензии о простое
[**apiV2ClaimDowntimePost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimePost) | **POST** /api/v2/claim/downtime | Создание претензии о простое


## `apiV2ClaimDowntimeIdCancelPost()`

```php
apiV2ClaimDowntimeIdCancelPost($id): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Отмена претензии о простое

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


$apiInstance = new MagDv\Cargomart\Api\ClaimDowntimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор претензии.

try {
    $result = $apiInstance->apiV2ClaimDowntimeIdCancelPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор претензии. |

### Return type

[**\MagDv\Cargomart\Dto\DowntimeClaimResponse**](../Model/DowntimeClaimResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ClaimDowntimeIdGet()`

```php
apiV2ClaimDowntimeIdGet($id): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Просмотр претензии о простое

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


$apiInstance = new MagDv\Cargomart\Api\ClaimDowntimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор претензии.

try {
    $result = $apiInstance->apiV2ClaimDowntimeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор претензии. |

### Return type

[**\MagDv\Cargomart\Dto\DowntimeClaimResponse**](../Model/DowntimeClaimResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ClaimDowntimeIdRedirectPost()`

```php
apiV2ClaimDowntimeIdRedirectPost($id): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Перенаправление требования перевозчика заказчику

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


$apiInstance = new MagDv\Cargomart\Api\ClaimDowntimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор претензии.

try {
    $result = $apiInstance->apiV2ClaimDowntimeIdRedirectPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdRedirectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор претензии. |

### Return type

[**\MagDv\Cargomart\Dto\DowntimeClaimResponse**](../Model/DowntimeClaimResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ClaimDowntimeIdResolvePost()`

```php
apiV2ClaimDowntimeIdResolvePost($id, $claim_downtime_resolution_request): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Решение по претензии о простое

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


$apiInstance = new MagDv\Cargomart\Api\ClaimDowntimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор претензии.
$claim_downtime_resolution_request = new \MagDv\Cargomart\Dto\ClaimDowntimeResolutionRequest(); // \MagDv\Cargomart\Dto\ClaimDowntimeResolutionRequest

try {
    $result = $apiInstance->apiV2ClaimDowntimeIdResolvePost($id, $claim_downtime_resolution_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdResolvePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор претензии. |
 **claim_downtime_resolution_request** | [**\MagDv\Cargomart\Dto\ClaimDowntimeResolutionRequest**](../Model/ClaimDowntimeResolutionRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DowntimeClaimResponse**](../Model/DowntimeClaimResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ClaimDowntimePost()`

```php
apiV2ClaimDowntimePost($claim_downtime_create_request): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Создание претензии о простое

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


$apiInstance = new MagDv\Cargomart\Api\ClaimDowntimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$claim_downtime_create_request = new \MagDv\Cargomart\Dto\ClaimDowntimeCreateRequest(); // \MagDv\Cargomart\Dto\ClaimDowntimeCreateRequest

try {
    $result = $apiInstance->apiV2ClaimDowntimePost($claim_downtime_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_downtime_create_request** | [**\MagDv\Cargomart\Dto\ClaimDowntimeCreateRequest**](../Model/ClaimDowntimeCreateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DowntimeClaimResponse**](../Model/DowntimeClaimResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
