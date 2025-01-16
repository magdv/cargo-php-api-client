# MagDv\Cargomart\OrderTrackingApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2TrackingCountGet()**](OrderTrackingApi.md#apiV2TrackingCountGet) | **GET** /api/v2/tracking/count | Получения количества отслеживаний.
[**apiV2TrackingGet()**](OrderTrackingApi.md#apiV2TrackingGet) | **GET** /api/v2/tracking | Получения списка текущего отслеживания заказов.
[**apiV2TrackingIdActiveDelete()**](OrderTrackingApi.md#apiV2TrackingIdActiveDelete) | **DELETE** /api/v2/tracking/{id}/active | Деактивация фильтра отслеживания.
[**apiV2TrackingIdActivePost()**](OrderTrackingApi.md#apiV2TrackingIdActivePost) | **POST** /api/v2/tracking/{id}/active | Активация фильтра отслеживания.
[**apiV2TrackingIdDelete()**](OrderTrackingApi.md#apiV2TrackingIdDelete) | **DELETE** /api/v2/tracking/{id} | Редактирование отслеживания.
[**apiV2TrackingIdGet()**](OrderTrackingApi.md#apiV2TrackingIdGet) | **GET** /api/v2/tracking/{id} | Получение данных конкретного отслеживания.
[**apiV2TrackingIdPut()**](OrderTrackingApi.md#apiV2TrackingIdPut) | **PUT** /api/v2/tracking/{id} | Редактирование конкретного отслеживания.
[**apiV2TrackingPost()**](OrderTrackingApi.md#apiV2TrackingPost) | **POST** /api/v2/tracking | Создание нового отслеживания.


## `apiV2TrackingCountGet()`

```php
apiV2TrackingCountGet(): \MagDv\Cargomart\Dto\TrackingCountResponse
```

Получения количества отслеживаний.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2TrackingCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\TrackingCountResponse**](../Model/TrackingCountResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingGet()`

```php
apiV2TrackingGet($with, $page, $per_page): \MagDv\Cargomart\Dto\TrackingList
```

Получения списка текущего отслеживания заказов.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum()); // \MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum[] | Фильтр with - locality
$page = 56; // int | Номер страницы для постраничной навигации
$per_page = 56; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TrackingGet($with, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum.md)| Фильтр with - locality | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional]
 **per_page** | **int**| Количество элементов на страницу | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TrackingList**](../Model/TrackingList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingIdActiveDelete()`

```php
apiV2TrackingIdActiveDelete($id): \MagDv\Cargomart\Dto\TrackingItem
```

Деактивация фильтра отслеживания.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор отслеживания

try {
    $result = $apiInstance->apiV2TrackingIdActiveDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingIdActiveDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор отслеживания |

### Return type

[**\MagDv\Cargomart\Dto\TrackingItem**](../Model/TrackingItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingIdActivePost()`

```php
apiV2TrackingIdActivePost($id): \MagDv\Cargomart\Dto\TrackingItem
```

Активация фильтра отслеживания.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор отслеживания

try {
    $result = $apiInstance->apiV2TrackingIdActivePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingIdActivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор отслеживания |

### Return type

[**\MagDv\Cargomart\Dto\TrackingItem**](../Model/TrackingItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingIdDelete()`

```php
apiV2TrackingIdDelete($id)
```

Редактирование отслеживания.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | идентификатор отслеживания.

try {
    $apiInstance->apiV2TrackingIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| идентификатор отслеживания. |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingIdGet()`

```php
apiV2TrackingIdGet($id, $with): \MagDv\Cargomart\Dto\TrackingItem
```

Получение данных конкретного отслеживания.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | идентификатор отслеживания.
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum()); // \MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum[] | Фильтр with - locality

try {
    $result = $apiInstance->apiV2TrackingIdGet($id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| идентификатор отслеживания. |
 **with** | [**\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum.md)| Фильтр with - locality | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TrackingItem**](../Model/TrackingItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingIdPut()`

```php
apiV2TrackingIdPut($id, $tracking_edit): \MagDv\Cargomart\Dto\TrackingItem
```

Редактирование конкретного отслеживания.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | идентификатор отслеживания.
$tracking_edit = new \MagDv\Cargomart\Dto\TrackingEdit(); // \MagDv\Cargomart\Dto\TrackingEdit

try {
    $result = $apiInstance->apiV2TrackingIdPut($id, $tracking_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| идентификатор отслеживания. |
 **tracking_edit** | [**\MagDv\Cargomart\Dto\TrackingEdit**](../Model/TrackingEdit.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\TrackingItem**](../Model/TrackingItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingPost()`

```php
apiV2TrackingPost($tracking_edit): \MagDv\Cargomart\Dto\TrackingItem
```

Создание нового отслеживания.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tracking_edit = new \MagDv\Cargomart\Dto\TrackingEdit(); // \MagDv\Cargomart\Dto\TrackingEdit

try {
    $result = $apiInstance->apiV2TrackingPost($tracking_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_edit** | [**\MagDv\Cargomart\Dto\TrackingEdit**](../Model/TrackingEdit.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\TrackingItem**](../Model/TrackingItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
