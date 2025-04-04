# MagDv\Cargomart\StoragePointApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2StoragePointDelete()**](StoragePointApi.md#apiV2StoragePointDelete) | **DELETE** /api/v2/storage-point | Групповое удаление пунктов погрузки/выгрузки.
[**apiV2StoragePointGet()**](StoragePointApi.md#apiV2StoragePointGet) | **GET** /api/v2/storage-point | Метод возвращает список пунктов погрузки/выгрузки.
[**apiV2StoragePointIdContactGet()**](StoragePointApi.md#apiV2StoragePointIdContactGet) | **GET** /api/v2/storage-point/{id}/contact | @deprecated. Использовать вместе с редактированием SP. Получение списка контактов пункта погрузки/выгрузки
[**apiV2StoragePointIdContactPost()**](StoragePointApi.md#apiV2StoragePointIdContactPost) | **POST** /api/v2/storage-point/{id}/contact | @deprecated. Использовать вместе с редактированием SP. Создание контакта пункта погрузки выгрузки
[**apiV2StoragePointIdDelete()**](StoragePointApi.md#apiV2StoragePointIdDelete) | **DELETE** /api/v2/storage-point/{id} | Удаление пункта погрузки/выгрузки
[**apiV2StoragePointIdGet()**](StoragePointApi.md#apiV2StoragePointIdGet) | **GET** /api/v2/storage-point/{id} | Информация о конкретном пункте погрузки/выгрузки
[**apiV2StoragePointIdPut()**](StoragePointApi.md#apiV2StoragePointIdPut) | **PUT** /api/v2/storage-point/{id} | Редактирование пункта погрузки/выгрузки
[**apiV2StoragePointPost()**](StoragePointApi.md#apiV2StoragePointPost) | **POST** /api/v2/storage-point | Создание нового пункта погрузки/выгрузки


## `apiV2StoragePointDelete()`

```php
apiV2StoragePointDelete($sp_batch_delete_request)
```

Групповое удаление пунктов погрузки/выгрузки.

Удаление нескольких пунктов погрузки/выгрузки. Список идентификаторов должен быть передан в теле запроса.

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sp_batch_delete_request = new \MagDv\Cargomart\Dto\SpBatchDeleteRequest(); // \MagDv\Cargomart\Dto\SpBatchDeleteRequest | Список идентификаторов пунктов погрузки/выгрузки для удаления

try {
    $apiInstance->apiV2StoragePointDelete($sp_batch_delete_request);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sp_batch_delete_request** | [**\MagDv\Cargomart\Dto\SpBatchDeleteRequest**](../Model/SpBatchDeleteRequest.md)| Список идентификаторов пунктов погрузки/выгрузки для удаления | [optional]

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StoragePointGet()`

```php
apiV2StoragePointGet($filter_title, $filter_locality_name, $filter_external_id, $sort, $page, $per_page, $selected_ids): \MagDv\Cargomart\Dto\PointList
```

Метод возвращает список пунктов погрузки/выгрузки.

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_title = 'filter_title_example'; // string | Название пункта погрузки/выгрузки
$filter_locality_name = 'filter_locality_name_example'; // string | Город
$filter_external_id = 'filter_external_id_example'; // string | Внешний идентификатор
$sort = array('sort_example'); // string[] | Список ключей для сортировки. Для сортировки доступны поля модели (title, localityName). Сортировка производитсяя по возрастанию. При наличии префикса \"-\" сортировка будет произведена в обратном порядке.
$page = 56; // int | Просматриваемая страница, по умолчанию 1
$per_page = 56; // int | Количество элементов на одну страницу, по умолчанию 20
$selected_ids = array(56); // int[] | Отсортировать пункты под идентификатору(на первое место)

try {
    $result = $apiInstance->apiV2StoragePointGet($filter_title, $filter_locality_name, $filter_external_id, $sort, $page, $per_page, $selected_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_title** | **string**| Название пункта погрузки/выгрузки | [optional]
 **filter_locality_name** | **string**| Город | [optional]
 **filter_external_id** | **string**| Внешний идентификатор | [optional]
 **sort** | [**string[]**](../Model/string.md)| Список ключей для сортировки. Для сортировки доступны поля модели (title, localityName). Сортировка производитсяя по возрастанию. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. | [optional]
 **page** | **int**| Просматриваемая страница, по умолчанию 1 | [optional]
 **per_page** | **int**| Количество элементов на одну страницу, по умолчанию 20 | [optional]
 **selected_ids** | [**int[]**](../Model/int.md)| Отсортировать пункты под идентификатору(на первое место) | [optional]

### Return type

[**\MagDv\Cargomart\Dto\PointList**](../Model/PointList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StoragePointIdContactGet()`

```php
apiV2StoragePointIdContactGet($id): \MagDv\Cargomart\Dto\ContactList
```

@deprecated. Использовать вместе с редактированием SP. Получение списка контактов пункта погрузки/выгрузки

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор пункта погрузки/выгрузки

try {
    $result = $apiInstance->apiV2StoragePointIdContactGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointIdContactGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор пункта погрузки/выгрузки |

### Return type

[**\MagDv\Cargomart\Dto\ContactList**](../Model/ContactList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StoragePointIdContactPost()`

```php
apiV2StoragePointIdContactPost($id, $sp_contact): \MagDv\Cargomart\Dto\ContactList
```

@deprecated. Использовать вместе с редактированием SP. Создание контакта пункта погрузки выгрузки

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор пункта погрузки/выгрузки
$sp_contact = new \MagDv\Cargomart\Dto\SpContact(); // \MagDv\Cargomart\Dto\SpContact | Тело запроса

try {
    $result = $apiInstance->apiV2StoragePointIdContactPost($id, $sp_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointIdContactPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор пункта погрузки/выгрузки |
 **sp_contact** | [**\MagDv\Cargomart\Dto\SpContact**](../Model/SpContact.md)| Тело запроса |

### Return type

[**\MagDv\Cargomart\Dto\ContactList**](../Model/ContactList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StoragePointIdDelete()`

```php
apiV2StoragePointIdDelete($id)
```

Удаление пункта погрузки/выгрузки

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор пункта погрузки/выгрузки

try {
    $apiInstance->apiV2StoragePointIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор пункта погрузки/выгрузки |

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

## `apiV2StoragePointIdGet()`

```php
apiV2StoragePointIdGet($id): \MagDv\Cargomart\Dto\PointOne
```

Информация о конкретном пункте погрузки/выгрузки

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор пункта погрузки/выгрузки

try {
    $result = $apiInstance->apiV2StoragePointIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор пункта погрузки/выгрузки |

### Return type

[**\MagDv\Cargomart\Dto\PointOne**](../Model/PointOne.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StoragePointIdPut()`

```php
apiV2StoragePointIdPut($id, $sp_point): \MagDv\Cargomart\Dto\PointOne
```

Редактирование пункта погрузки/выгрузки

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор пункта погрузки/выгрузки
$sp_point = new \MagDv\Cargomart\Dto\SpPoint(); // \MagDv\Cargomart\Dto\SpPoint

try {
    $result = $apiInstance->apiV2StoragePointIdPut($id, $sp_point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор пункта погрузки/выгрузки |
 **sp_point** | [**\MagDv\Cargomart\Dto\SpPoint**](../Model/SpPoint.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PointOne**](../Model/PointOne.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StoragePointPost()`

```php
apiV2StoragePointPost($sp_point): \MagDv\Cargomart\Dto\PointOne
```

Создание нового пункта погрузки/выгрузки

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


$apiInstance = new MagDv\Cargomart\Api\StoragePointApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sp_point = new \MagDv\Cargomart\Dto\SpPoint(); // \MagDv\Cargomart\Dto\SpPoint

try {
    $result = $apiInstance->apiV2StoragePointPost($sp_point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePointApi->apiV2StoragePointPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sp_point** | [**\MagDv\Cargomart\Dto\SpPoint**](../Model/SpPoint.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PointOne**](../Model/PointOne.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
