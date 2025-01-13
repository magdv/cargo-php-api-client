# MagDv\Cargomart\OrderDraftApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderDraftDraftIdDelete()**](OrderDraftApi.md#apiV2OrderDraftDraftIdDelete) | **DELETE** /api/v2/order-draft/{draftId} | Удаление черновика заказа
[**apiV2OrderDraftDraftIdGet()**](OrderDraftApi.md#apiV2OrderDraftDraftIdGet) | **GET** /api/v2/order-draft/{draftId} | Получение информации о черновике  заказа.
[**apiV2OrderDraftDraftIdPut()**](OrderDraftApi.md#apiV2OrderDraftDraftIdPut) | **PUT** /api/v2/order-draft/{draftId} | Редактирование черновика заказа
[**apiV2OrderDraftGet()**](OrderDraftApi.md#apiV2OrderDraftGet) | **GET** /api/v2/order-draft | Список черновиков
[**apiV2OrderDraftPost()**](OrderDraftApi.md#apiV2OrderDraftPost) | **POST** /api/v2/order-draft | Создание черновика заказа


## `apiV2OrderDraftDraftIdDelete()`

```php
apiV2OrderDraftDraftIdDelete($draft_id)
```

Удаление черновика заказа

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.

try {
    $apiInstance->apiV2OrderDraftDraftIdDelete($draft_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftApi->apiV2OrderDraftDraftIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftDraftIdGet()`

```php
apiV2OrderDraftDraftIdGet($draft_id): \MagDv\Cargomart\Dto\OrderDraftResponse
```

Получение информации о черновике  заказа.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.

try {
    $result = $apiInstance->apiV2OrderDraftDraftIdGet($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftApi->apiV2OrderDraftDraftIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftResponse**](../Model/OrderDraftResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftDraftIdPut()`

```php
apiV2OrderDraftDraftIdPut($draft_id, $order_draft_request): \MagDv\Cargomart\Dto\OrderDraftResponse
```

Редактирование черновика заказа

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.
$order_draft_request = new \MagDv\Cargomart\Dto\OrderDraftRequest(); // \MagDv\Cargomart\Dto\OrderDraftRequest

try {
    $result = $apiInstance->apiV2OrderDraftDraftIdPut($draft_id, $order_draft_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftApi->apiV2OrderDraftDraftIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |
 **order_draft_request** | [**\MagDv\Cargomart\Dto\OrderDraftRequest**](../Model/OrderDraftRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftResponse**](../Model/OrderDraftResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftGet()`

```php
apiV2OrderDraftGet($filter_creator_id, $filter_loading_from, $filter_loading_to, $filter_kind, $filter_tag, $page, $per_page): \MagDv\Cargomart\Dto\OrderDraftListResponse
```

Список черновиков

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_creator_id = 56; // int | Id автора черновика
$filter_loading_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ.
$filter_loading_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderDraftKind()); // \MagDv\Cargomart\Dto\OrderDraftKind[] | Тип черновика.
$filter_tag = array('filter_tag_example'); // string[] | Массив меток.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2OrderDraftGet($filter_creator_id, $filter_loading_from, $filter_loading_to, $filter_kind, $filter_tag, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftApi->apiV2OrderDraftGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_creator_id** | **int**| Id автора черновика | [optional]
 **filter_loading_from** | **\DateTime**| Дата погрузки ОТ. | [optional]
 **filter_loading_to** | **\DateTime**| Дата погрузки ДО. | [optional]
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderDraftKind[]**](../Model/\MagDv\Cargomart\Dto\OrderDraftKind.md)| Тип черновика. | [optional]
 **filter_tag** | [**string[]**](../Model/string.md)| Массив меток. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftListResponse**](../Model/OrderDraftListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftPost()`

```php
apiV2OrderDraftPost($order_draft_request): \MagDv\Cargomart\Dto\OrderDraftResponse
```

Создание черновика заказа

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_draft_request = new \MagDv\Cargomart\Dto\OrderDraftRequest(); // \MagDv\Cargomart\Dto\OrderDraftRequest

try {
    $result = $apiInstance->apiV2OrderDraftPost($order_draft_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDraftApi->apiV2OrderDraftPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_draft_request** | [**\MagDv\Cargomart\Dto\OrderDraftRequest**](../Model/OrderDraftRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftResponse**](../Model/OrderDraftResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
