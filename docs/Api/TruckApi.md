# MagDv\Cargomart\TruckApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2TruckGet()**](TruckApi.md#apiV2TruckGet) | **GET** /api/v2/truck | Метод возращает список ТС
[**apiV2TruckIdDelete()**](TruckApi.md#apiV2TruckIdDelete) | **DELETE** /api/v2/truck/{id} | Удаление ТС
[**apiV2TruckIdGet()**](TruckApi.md#apiV2TruckIdGet) | **GET** /api/v2/truck/{id} | Информация о конкретном ТС
[**apiV2TruckIdPut()**](TruckApi.md#apiV2TruckIdPut) | **PUT** /api/v2/truck/{id} | Редактирование ТС


## `apiV2TruckGet()`

```php
apiV2TruckGet($x_truck_version, $filter_mode, $filter_note, $filter_status, $filter_driver_id, $filter_truck_id, $sort, $page, $per_page): \MagDv\Cargomart\Dto\TruckList
```

Метод возращает список ТС

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


$apiInstance = new MagDv\Cargomart\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$x_truck_version = 56; // int | Версия API запроса
$filter_mode = array(56); // int[] | Фильтрация по виду ТС (тягач, полуприцеп, фургон, сцепка), передается id
$filter_note = 'filter_note_example'; // string | Фильтрация по описанию
$filter_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\TruckStatusEnum(); // \MagDv\Cargomart\Dto\TruckStatusEnum | Фильтрация по Статусу. 0 - без ПТС, 1 - на модерации, 2 - одобрено, 3 - отклонено.
$filter_driver_id = 56; // int | Идентификатор водителя, для определения рейтинга
$filter_truck_id = 56; // int | Идентификатор ТС, для определения рейтинга
$sort = array('sort_example'); // string[] | Список ключей для сортировки. Доступно: rating, number, createDate
$page = 1; // int | Номер страницы
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TruckGet($x_truck_version, $filter_mode, $filter_note, $filter_status, $filter_driver_id, $filter_truck_id, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->apiV2TruckGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_truck_version** | **int**| Версия API запроса | [optional]
 **filter_mode** | [**int[]**](../Model/int.md)| Фильтрация по виду ТС (тягач, полуприцеп, фургон, сцепка), передается id | [optional]
 **filter_note** | **string**| Фильтрация по описанию | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\TruckStatusEnum**](../Model/.md)| Фильтрация по Статусу. 0 - без ПТС, 1 - на модерации, 2 - одобрено, 3 - отклонено. | [optional]
 **filter_driver_id** | **int**| Идентификатор водителя, для определения рейтинга | [optional]
 **filter_truck_id** | **int**| Идентификатор ТС, для определения рейтинга | [optional]
 **sort** | [**string[]**](../Model/string.md)| Список ключей для сортировки. Доступно: rating, number, createDate | [optional]
 **page** | **int**| Номер страницы | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\TruckList**](../Model/TruckList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TruckIdDelete()`

```php
apiV2TruckIdDelete($id)
```

Удаление ТС

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


$apiInstance = new MagDv\Cargomart\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор ТС

try {
    $apiInstance->apiV2TruckIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->apiV2TruckIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор ТС |

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

## `apiV2TruckIdGet()`

```php
apiV2TruckIdGet($id, $x_truck_version): \MagDv\Cargomart\Dto\TruckItem
```

Информация о конкретном ТС

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


$apiInstance = new MagDv\Cargomart\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор ТС
$x_truck_version = 56; // int | Версия API запроса

try {
    $result = $apiInstance->apiV2TruckIdGet($id, $x_truck_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->apiV2TruckIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор ТС |
 **x_truck_version** | **int**| Версия API запроса | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TruckItem**](../Model/TruckItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TruckIdPut()`

```php
apiV2TruckIdPut($id, $x_truck_version, $api_v2_truck_id_put_request)
```

Редактирование ТС

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


$apiInstance = new MagDv\Cargomart\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор ТС
$x_truck_version = 56; // int | Версия API запроса
$api_v2_truck_id_put_request = new \MagDv\Cargomart\Dto\ApiV2TruckIdPutRequest(); // \MagDv\Cargomart\Dto\ApiV2TruckIdPutRequest

try {
    $apiInstance->apiV2TruckIdPut($id, $x_truck_version, $api_v2_truck_id_put_request);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->apiV2TruckIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор ТС |
 **x_truck_version** | **int**| Версия API запроса | [optional]
 **api_v2_truck_id_put_request** | [**\MagDv\Cargomart\Dto\ApiV2TruckIdPutRequest**](../Model/ApiV2TruckIdPutRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
