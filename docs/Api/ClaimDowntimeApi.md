# MagDv\Cargomart\ClaimDowntimeApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ClaimDowntimeIdApprovePost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdApprovePost) | **POST** /api/v2/claim/downtime/{id}/approve | Согласование требования по простою
[**apiV2ClaimDowntimeIdGet()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdGet) | **GET** /api/v2/claim/downtime/{id} | Просмотр претензии о простое
[**apiV2ClaimDowntimeIdRedirectPost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdRedirectPost) | **POST** /api/v2/claim/downtime/{id}/redirect | Перенаправление требования перевозчика заказчику
[**apiV2ClaimDowntimeIdRejectPost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdRejectPost) | **POST** /api/v2/claim/downtime/{id}/reject | Отклонение требования по простою
[**apiV2ClaimDowntimeIdRevokePost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimeIdRevokePost) | **POST** /api/v2/claim/downtime/{id}/revoke | Отзыв требования по простою
[**apiV2ClaimDowntimePost()**](ClaimDowntimeApi.md#apiV2ClaimDowntimePost) | **POST** /api/v2/claim/downtime | Подача (создание) требования по простою


## `apiV2ClaimDowntimeIdApprovePost()`

```php
apiV2ClaimDowntimeIdApprovePost($id): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Согласование требования по простою

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
    $result = $apiInstance->apiV2ClaimDowntimeIdApprovePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdApprovePost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ClaimDowntimeIdRejectPost()`

```php
apiV2ClaimDowntimeIdRejectPost($id, $claim_downtime_reject_request): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Отклонение требования по простою

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
$claim_downtime_reject_request = new \MagDv\Cargomart\Dto\ClaimDowntimeRejectRequest(); // \MagDv\Cargomart\Dto\ClaimDowntimeRejectRequest

try {
    $result = $apiInstance->apiV2ClaimDowntimeIdRejectPost($id, $claim_downtime_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор претензии. |
 **claim_downtime_reject_request** | [**\MagDv\Cargomart\Dto\ClaimDowntimeRejectRequest**](../Model/ClaimDowntimeRejectRequest.md)|  | [optional]

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

## `apiV2ClaimDowntimeIdRevokePost()`

```php
apiV2ClaimDowntimeIdRevokePost($id): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Отзыв требования по простою

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
    $result = $apiInstance->apiV2ClaimDowntimeIdRevokePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimDowntimeApi->apiV2ClaimDowntimeIdRevokePost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ClaimDowntimePost()`

```php
apiV2ClaimDowntimePost($claim_downtime_create_request): \MagDv\Cargomart\Dto\DowntimeClaimResponse
```

Подача (создание) требования по простою

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
