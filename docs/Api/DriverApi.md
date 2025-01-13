# MagDv\Cargomart\DriverApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2DriverGet()**](DriverApi.md#apiV2DriverGet) | **GET** /api/v2/driver | Получение списка водителей.
[**apiV2DriverIdDelete()**](DriverApi.md#apiV2DriverIdDelete) | **DELETE** /api/v2/driver/{id} | Удаление водителя
[**apiV2DriverIdDriverAppInvitePost()**](DriverApi.md#apiV2DriverIdDriverAppInvitePost) | **POST** /api/v2/driver/{id}/driver-app-invite | Отправить на номер телефона водителя приглашение на установку &#39;приложения водителя&#39;.
[**apiV2DriverIdGet()**](DriverApi.md#apiV2DriverIdGet) | **GET** /api/v2/driver/{id} | Получение информации по водителю.
[**apiV2DriverIdPatch()**](DriverApi.md#apiV2DriverIdPatch) | **PATCH** /api/v2/driver/{id} | Обновить данные водителя.
[**apiV2DriverPost()**](DriverApi.md#apiV2DriverPost) | **POST** /api/v2/driver | Создание нового водителя.


## `apiV2DriverGet()`

```php
apiV2DriverGet($filter_search, $filter_name, $filter_external_id, $filter_passport_number, $filter_phone, $filter_truck_id, $sort, $page, $per_page): \MagDv\Cargomart\Dto\DriverListResponse
```

Получение списка водителей.

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


$apiInstance = new MagDv\Cargomart\Api\DriverApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Полнотекстовый поиск одной строкой
$filter_name = 'filter_name_example'; // string | Поиск по имени водителя
$filter_external_id = 'filter_external_id_example'; // string | Поиск по внешнему номеру
$filter_passport_number = 'filter_passport_number_example'; // string | Поиск по номеру паспорта
$filter_phone = 'filter_phone_example'; // string | Поиск по номеру телефона
$filter_truck_id = array(56); // int[] | Идентификаторы ТС, для определения рейтинга
$sort = array('sort_example'); // string[] | Список ключей для сортировки. Доступно: rating.
$page = 1; // int | Просматриваемая страница
$per_page = 20; // int | Количество элементов на одну страницу

try {
    $result = $apiInstance->apiV2DriverGet($filter_search, $filter_name, $filter_external_id, $filter_passport_number, $filter_phone, $filter_truck_id, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->apiV2DriverGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Полнотекстовый поиск одной строкой | [optional]
 **filter_name** | **string**| Поиск по имени водителя | [optional]
 **filter_external_id** | **string**| Поиск по внешнему номеру | [optional]
 **filter_passport_number** | **string**| Поиск по номеру паспорта | [optional]
 **filter_phone** | **string**| Поиск по номеру телефона | [optional]
 **filter_truck_id** | [**int[]**](../Model/int.md)| Идентификаторы ТС, для определения рейтинга | [optional]
 **sort** | [**string[]**](../Model/string.md)| Список ключей для сортировки. Доступно: rating. | [optional]
 **page** | **int**| Просматриваемая страница | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на одну страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\DriverListResponse**](../Model/DriverListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DriverIdDelete()`

```php
apiV2DriverIdDelete($id)
```

Удаление водителя

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


$apiInstance = new MagDv\Cargomart\Api\DriverApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор водителя.

try {
    $apiInstance->apiV2DriverIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->apiV2DriverIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор водителя. |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DriverIdDriverAppInvitePost()`

```php
apiV2DriverIdDriverAppInvitePost($id, $driver_app_invite_post_request): \MagDv\Cargomart\Dto\DriverResponse
```

Отправить на номер телефона водителя приглашение на установку 'приложения водителя'.

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


$apiInstance = new MagDv\Cargomart\Api\DriverApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор водителя.
$driver_app_invite_post_request = new \MagDv\Cargomart\Dto\DriverAppInvitePostRequest(); // \MagDv\Cargomart\Dto\DriverAppInvitePostRequest

try {
    $result = $apiInstance->apiV2DriverIdDriverAppInvitePost($id, $driver_app_invite_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->apiV2DriverIdDriverAppInvitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор водителя. |
 **driver_app_invite_post_request** | [**\MagDv\Cargomart\Dto\DriverAppInvitePostRequest**](../Model/DriverAppInvitePostRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DriverResponse**](../Model/DriverResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DriverIdGet()`

```php
apiV2DriverIdGet($id): \MagDv\Cargomart\Dto\DriverResponse
```

Получение информации по водителю.

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


$apiInstance = new MagDv\Cargomart\Api\DriverApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор водителя.

try {
    $result = $apiInstance->apiV2DriverIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->apiV2DriverIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор водителя. |

### Return type

[**\MagDv\Cargomart\Dto\DriverResponse**](../Model/DriverResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DriverIdPatch()`

```php
apiV2DriverIdPatch($id, $driver_post_request): \MagDv\Cargomart\Dto\DriverResponse
```

Обновить данные водителя.

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


$apiInstance = new MagDv\Cargomart\Api\DriverApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор водителя.
$driver_post_request = new \MagDv\Cargomart\Dto\DriverPostRequest(); // \MagDv\Cargomart\Dto\DriverPostRequest

try {
    $result = $apiInstance->apiV2DriverIdPatch($id, $driver_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->apiV2DriverIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор водителя. |
 **driver_post_request** | [**\MagDv\Cargomart\Dto\DriverPostRequest**](../Model/DriverPostRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DriverResponse**](../Model/DriverResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DriverPost()`

```php
apiV2DriverPost($driver_post_request): \MagDv\Cargomart\Dto\DriverResponse
```

Создание нового водителя.

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


$apiInstance = new MagDv\Cargomart\Api\DriverApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$driver_post_request = new \MagDv\Cargomart\Dto\DriverPostRequest(); // \MagDv\Cargomart\Dto\DriverPostRequest

try {
    $result = $apiInstance->apiV2DriverPost($driver_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->apiV2DriverPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_post_request** | [**\MagDv\Cargomart\Dto\DriverPostRequest**](../Model/DriverPostRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DriverResponse**](../Model/DriverResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
