# MagDv\Cargomart\CandidateApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2CandidateCountGet()**](CandidateApi.md#apiV2CandidateCountGet) | **GET** /api/v2/candidate/count | Вывод количество потенциальных сотрудников компании.
[**apiV2CandidateGet()**](CandidateApi.md#apiV2CandidateGet) | **GET** /api/v2/candidate | Вывод списка потенциальных сотрудников компании.
[**apiV2CandidateIdGet()**](CandidateApi.md#apiV2CandidateIdGet) | **GET** /api/v2/candidate/{id} | Получение информации по потенциальному сотруднику компании.
[**apiV2CandidateIdPost()**](CandidateApi.md#apiV2CandidateIdPost) | **POST** /api/v2/candidate/{id} | Создать сотрудника из потенциального сотрудника.


## `apiV2CandidateCountGet()`

```php
apiV2CandidateCountGet(): \MagDv\Cargomart\Dto\CandidateCountResponse
```

Вывод количество потенциальных сотрудников компании.

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


$apiInstance = new MagDv\Cargomart\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CandidateCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV2CandidateCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CandidateCountResponse**](../Model/CandidateCountResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CandidateGet()`

```php
apiV2CandidateGet($page, $per_page): \MagDv\Cargomart\Dto\CandidateListResponse
```

Вывод списка потенциальных сотрудников компании.

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


$apiInstance = new MagDv\Cargomart\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Просматриваемая страница, по умолчанию 1
$per_page = 20; // int | Количество элементов на одну страницу, по умолчанию 20

try {
    $result = $apiInstance->apiV2CandidateGet($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV2CandidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Просматриваемая страница, по умолчанию 1 | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на одну страницу, по умолчанию 20 | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\CandidateListResponse**](../Model/CandidateListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CandidateIdGet()`

```php
apiV2CandidateIdGet($id): \MagDv\Cargomart\Dto\CandidateResponse
```

Получение информации по потенциальному сотруднику компании.

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


$apiInstance = new MagDv\Cargomart\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор потенциального сотрудника

try {
    $result = $apiInstance->apiV2CandidateIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV2CandidateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор потенциального сотрудника |

### Return type

[**\MagDv\Cargomart\Dto\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CandidateIdPost()`

```php
apiV2CandidateIdPost($id, $candidate_request): \MagDv\Cargomart\Dto\WorkerResponse
```

Создать сотрудника из потенциального сотрудника.

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


$apiInstance = new MagDv\Cargomart\Api\CandidateApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор потенциального сотрудника.
$candidate_request = new \MagDv\Cargomart\Dto\CandidateRequest(); // \MagDv\Cargomart\Dto\CandidateRequest

try {
    $result = $apiInstance->apiV2CandidateIdPost($id, $candidate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV2CandidateIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор потенциального сотрудника. |
 **candidate_request** | [**\MagDv\Cargomart\Dto\CandidateRequest**](../Model/CandidateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\WorkerResponse**](../Model/WorkerResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
