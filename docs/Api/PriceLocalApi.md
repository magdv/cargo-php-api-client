# MagDv\Cargomart\PriceLocalApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2AcPriceLocalPoolGet()**](PriceLocalApi.md#apiV2AcPriceLocalPoolGet) | **GET** /api/v2/ac/price-local-pool | Поиск пулов.
[**apiV2ExpeditorPriceLocalPoolGet()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolGet) | **GET** /api/v2/expeditor/price-local/pool | Получение списка пулов направлений и цен.
[**apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete) | **DELETE** /api/v2/expeditor/price-local/pool/{poolId}/direction/{directionId} | Открепление направления от данного пула.
[**apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet) | **GET** /api/v2/expeditor/price-local/pool/{poolId}/direction | Получение списка направлений данного пула.
[**apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost) | **POST** /api/v2/expeditor/price-local/pool/{poolId}/direction | Прикрепление направления к данному пулу направлений и цен.
[**apiV2ExpeditorPriceLocalPoolPoolIdGet()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolPoolIdGet) | **GET** /api/v2/expeditor/price-local/pool/{poolId} | Получение данных конкретного пула направлений и цен.
[**apiV2ExpeditorPriceLocalPoolPoolIdPatch()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolPoolIdPatch) | **PATCH** /api/v2/expeditor/price-local/pool/{poolId} | Редактирование конкретного пула направлений и цен.
[**apiV2ExpeditorPriceLocalPoolPost()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPoolPost) | **POST** /api/v2/expeditor/price-local/pool | Создание пула направлений и цен.
[**apiV2ExpeditorPriceLocalPriceGet()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPriceGet) | **GET** /api/v2/expeditor/price-local/price | Получения списка элементов справочника цен
[**apiV2ExpeditorPriceLocalPricePost()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPricePost) | **POST** /api/v2/expeditor/price-local/price | Создание нового элемента в справочнике цен.
[**apiV2ExpeditorPriceLocalPricePriceIdDelete()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPricePriceIdDelete) | **DELETE** /api/v2/expeditor/price-local/price/{priceId} | Деактивация направления.
[**apiV2ExpeditorPriceLocalPricePriceIdGet()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPricePriceIdGet) | **GET** /api/v2/expeditor/price-local/price/{priceId} | Получение данных конкретного элемента справочника цен.
[**apiV2ExpeditorPriceLocalPricePriceIdPut()**](PriceLocalApi.md#apiV2ExpeditorPriceLocalPricePriceIdPut) | **PUT** /api/v2/expeditor/price-local/price/{priceId} | Редактирование конкретного элемента справочника цен.


## `apiV2AcPriceLocalPoolGet()`

```php
apiV2AcPriceLocalPoolGet($filter_search, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\PriceLocalPoolListResponse
```

Поиск пулов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$selected_ids = array(56); // int[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи.
$per_page = 56; // int | лимит выдачи.

try {
    $result = $apiInstance->apiV2AcPriceLocalPoolGet($filter_search, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2AcPriceLocalPoolGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **selected_ids** | [**int[]**](../Model/int.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи. | [optional]
 **per_page** | **int**| лимит выдачи. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalPoolListResponse**](../Model/PriceLocalPoolListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolGet()`

```php
apiV2ExpeditorPriceLocalPoolGet($filter_is_active, $filter_id, $filter_departure_code, $filter_destination_code): \MagDv\Cargomart\Dto\PriceLocalPoolListResponse
```

Получение списка пулов направлений и цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_is_active = 'filter_is_active_example'; // string | Фильтр по активности записи
$filter_id = 56; // int | Фильтр по id пула
$filter_departure_code = 'filter_departure_code_example'; // string | Фильтр по коду точки отправления
$filter_destination_code = 'filter_destination_code_example'; // string | Фильтр по коду точки назначения

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolGet($filter_is_active, $filter_id, $filter_departure_code, $filter_destination_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_is_active** | **string**| Фильтр по активности записи | [optional]
 **filter_id** | **int**| Фильтр по id пула | [optional]
 **filter_departure_code** | **string**| Фильтр по коду точки отправления | [optional]
 **filter_destination_code** | **string**| Фильтр по коду точки назначения | [optional]

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalPoolListResponse**](../Model/PriceLocalPoolListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete()`

```php
apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete($pool_id, $direction_id, $body): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Открепление направления от данного пула.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$pool_id = 56; // int | Идентификатор пула направлений и цен.
$direction_id = 56; // int | Идентификатор направления.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete($pool_id, $direction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **int**| Идентификатор пула направлений и цен. |
 **direction_id** | **int**| Идентификатор направления. |
 **body** | **object**|  |

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet()`

```php
apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet($pool_id): \MagDv\Cargomart\Dto\PriceLocalDirectionListResponse
```

Получение списка направлений данного пула.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$pool_id = 56; // int | Идентификатор пула направлений и цен.

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **int**| Идентификатор пула направлений и цен. |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalDirectionListResponse**](../Model/PriceLocalDirectionListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost()`

```php
apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost($pool_id, $price_local_direction_create_request): \MagDv\Cargomart\Dto\PriceLocalDirectionItemResponse
```

Прикрепление направления к данному пулу направлений и цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$pool_id = 56; // int | Идентификатор пула направлений и цен.
$price_local_direction_create_request = new \MagDv\Cargomart\Dto\PriceLocalDirectionCreateRequest(); // \MagDv\Cargomart\Dto\PriceLocalDirectionCreateRequest

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost($pool_id, $price_local_direction_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **int**| Идентификатор пула направлений и цен. |
 **price_local_direction_create_request** | [**\MagDv\Cargomart\Dto\PriceLocalDirectionCreateRequest**](../Model/PriceLocalDirectionCreateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalDirectionItemResponse**](../Model/PriceLocalDirectionItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolPoolIdGet()`

```php
apiV2ExpeditorPriceLocalPoolPoolIdGet($pool_id): \MagDv\Cargomart\Dto\PriceLocalPoolItemResponse
```

Получение данных конкретного пула направлений и цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$pool_id = 56; // int | Идентификатор пула направлений и цен.

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolPoolIdGet($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolPoolIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **int**| Идентификатор пула направлений и цен. |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalPoolItemResponse**](../Model/PriceLocalPoolItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolPoolIdPatch()`

```php
apiV2ExpeditorPriceLocalPoolPoolIdPatch($pool_id, $price_local_pool_edit_request): \MagDv\Cargomart\Dto\PriceLocalPoolItemResponse
```

Редактирование конкретного пула направлений и цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$pool_id = 56; // int | Идентификатор пула направлений и цен.
$price_local_pool_edit_request = new \MagDv\Cargomart\Dto\PriceLocalPoolEditRequest(); // \MagDv\Cargomart\Dto\PriceLocalPoolEditRequest

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolPoolIdPatch($pool_id, $price_local_pool_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolPoolIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **int**| Идентификатор пула направлений и цен. |
 **price_local_pool_edit_request** | [**\MagDv\Cargomart\Dto\PriceLocalPoolEditRequest**](../Model/PriceLocalPoolEditRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalPoolItemResponse**](../Model/PriceLocalPoolItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPoolPost()`

```php
apiV2ExpeditorPriceLocalPoolPost($price_local_pool_create_request): \MagDv\Cargomart\Dto\PriceLocalPoolItemResponse
```

Создание пула направлений и цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$price_local_pool_create_request = new \MagDv\Cargomart\Dto\PriceLocalPoolCreateRequest(); // \MagDv\Cargomart\Dto\PriceLocalPoolCreateRequest

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPoolPost($price_local_pool_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPoolPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_local_pool_create_request** | [**\MagDv\Cargomart\Dto\PriceLocalPoolCreateRequest**](../Model/PriceLocalPoolCreateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalPoolItemResponse**](../Model/PriceLocalPoolItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPriceGet()`

```php
apiV2ExpeditorPriceLocalPriceGet($filter_pool_id, $filter_truck_type_id, $filter_is_active, $filter_departure_code, $filter_destination_code, $page, $per_page): \MagDv\Cargomart\Dto\PriceLocalListResponse
```

Получения списка элементов справочника цен

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_pool_id = 56; // int | Фильтр по идентификатору пула направлений и цен.
$filter_truck_type_id = 56; // int | Фильтр по идентификатору типа кузова
$filter_is_active = 'filter_is_active_example'; // string | Фильтр по активности записи
$filter_departure_code = 'filter_departure_code_example'; // string | Фильтр по коду точки отправления
$filter_destination_code = 'filter_destination_code_example'; // string | Фильтр по коду точки назначения
$page = 56; // int | Номер страницы для постраничной навигации
$per_page = 56; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPriceGet($filter_pool_id, $filter_truck_type_id, $filter_is_active, $filter_departure_code, $filter_destination_code, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_pool_id** | **int**| Фильтр по идентификатору пула направлений и цен. | [optional]
 **filter_truck_type_id** | **int**| Фильтр по идентификатору типа кузова | [optional]
 **filter_is_active** | **string**| Фильтр по активности записи | [optional]
 **filter_departure_code** | **string**| Фильтр по коду точки отправления | [optional]
 **filter_destination_code** | **string**| Фильтр по коду точки назначения | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional]
 **per_page** | **int**| Количество элементов на страницу | [optional]

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalListResponse**](../Model/PriceLocalListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPricePost()`

```php
apiV2ExpeditorPriceLocalPricePost($price_local_create_request): \MagDv\Cargomart\Dto\PriceLocalItemResponse
```

Создание нового элемента в справочнике цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$price_local_create_request = new \MagDv\Cargomart\Dto\PriceLocalCreateRequest(); // \MagDv\Cargomart\Dto\PriceLocalCreateRequest

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPricePost($price_local_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPricePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_local_create_request** | [**\MagDv\Cargomart\Dto\PriceLocalCreateRequest**](../Model/PriceLocalCreateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalItemResponse**](../Model/PriceLocalItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPricePriceIdDelete()`

```php
apiV2ExpeditorPriceLocalPricePriceIdDelete($price_id, $body): \MagDv\Cargomart\Dto\PriceLocalItemResponse
```

Деактивация направления.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$price_id = 56; // int | Идентификатор элемента справочника цен.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPricePriceIdDelete($price_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPricePriceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **int**| Идентификатор элемента справочника цен. |
 **body** | **object**|  |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalItemResponse**](../Model/PriceLocalItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPricePriceIdGet()`

```php
apiV2ExpeditorPriceLocalPricePriceIdGet($price_id): \MagDv\Cargomart\Dto\PriceLocalItemResponse
```

Получение данных конкретного элемента справочника цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$price_id = 56; // int | Идентификатор элемента справочника цен.

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPricePriceIdGet($price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPricePriceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **int**| Идентификатор элемента справочника цен. |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalItemResponse**](../Model/PriceLocalItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorPriceLocalPricePriceIdPut()`

```php
apiV2ExpeditorPriceLocalPricePriceIdPut($price_id, $price_local_edit_request): \MagDv\Cargomart\Dto\PriceLocalItemResponse
```

Редактирование конкретного элемента справочника цен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PriceLocalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$price_id = 56; // int | Идентификатор элемента справочника цен.
$price_local_edit_request = new \MagDv\Cargomart\Dto\PriceLocalEditRequest(); // \MagDv\Cargomart\Dto\PriceLocalEditRequest

try {
    $result = $apiInstance->apiV2ExpeditorPriceLocalPricePriceIdPut($price_id, $price_local_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceLocalApi->apiV2ExpeditorPriceLocalPricePriceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **int**| Идентификатор элемента справочника цен. |
 **price_local_edit_request** | [**\MagDv\Cargomart\Dto\PriceLocalEditRequest**](../Model/PriceLocalEditRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PriceLocalItemResponse**](../Model/PriceLocalItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
