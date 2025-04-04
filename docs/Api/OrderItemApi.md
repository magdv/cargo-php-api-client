# MagDv\Cargomart\OrderItemApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdBidGet()**](OrderItemApi.md#apiV2OrderOrderIdBidGet) | **GET** /api/v2/order/{orderId}/bid | получение списка ставок на заказ.
[**apiV2OrderOrderIdBidLastGet()**](OrderItemApi.md#apiV2OrderOrderIdBidLastGet) | **GET** /api/v2/order/{orderId}/bid/last | Получение последней информации связанной с торгами.
[**apiV2OrderOrderIdBidPost()**](OrderItemApi.md#apiV2OrderOrderIdBidPost) | **POST** /api/v2/order/{orderId}/bid | Установка ставки на заказ.
[**apiV2OrderOrderIdCheckDigitalEcnAccessGet()**](OrderItemApi.md#apiV2OrderOrderIdCheckDigitalEcnAccessGet) | **GET** /api/v2/order/{orderId}/check-digital-ecn-access | Проверка доступа к созданию Электронной ТРН.
[**apiV2OrderOrderIdEcnGet()**](OrderItemApi.md#apiV2OrderOrderIdEcnGet) | **GET** /api/v2/order/{orderId}/ecn | Получение списка ЭТрН у заказа
[**apiV2OrderOrderIdEcnPost()**](OrderItemApi.md#apiV2OrderOrderIdEcnPost) | **POST** /api/v2/order/{orderId}/ecn | Создание ЭТрН для заказа.
[**apiV2OrderOrderIdEcnTemplateGet()**](OrderItemApi.md#apiV2OrderOrderIdEcnTemplateGet) | **GET** /api/v2/order/{orderId}/ecn-template | Скачать транспортную накладную (подготовить ссылку на скачивание)
[**apiV2OrderOrderIdFixPriceGet()**](OrderItemApi.md#apiV2OrderOrderIdFixPriceGet) | **GET** /api/v2/order/{orderId}/fix-price | Зафиксировать цену заказа
[**apiV2OrderOrderIdGet()**](OrderItemApi.md#apiV2OrderOrderIdGet) | **GET** /api/v2/order/{orderId} | Получение информации для карточки заказа.
[**apiV2OrderOrderIdItineraryGet()**](OrderItemApi.md#apiV2OrderOrderIdItineraryGet) | **GET** /api/v2/order/{orderId}/itinerary | Получение данных по точкам маршрута.
[**apiV2OrderOrderIdOriginalDocsAcceptPost()**](OrderItemApi.md#apiV2OrderOrderIdOriginalDocsAcceptPost) | **POST** /api/v2/order/{orderId}/original-docs-accept | Подтвердить принятие оригиналов документов.
[**apiV2OrderOrderIdOriginalDocsRejectPost()**](OrderItemApi.md#apiV2OrderOrderIdOriginalDocsRejectPost) | **POST** /api/v2/order/{orderId}/original-docs-reject | Отклонить оригиналы документов.
[**apiV2OrderOrderIdPinDelete()**](OrderItemApi.md#apiV2OrderOrderIdPinDelete) | **DELETE** /api/v2/order/{orderId}/pin | Удаление заказа из списка закрепленных.
[**apiV2OrderOrderIdPinGet()**](OrderItemApi.md#apiV2OrderOrderIdPinGet) | **GET** /api/v2/order/{orderId}/pin | Получить список пользователей закрепивших заказ
[**apiV2OrderOrderIdPinPost()**](OrderItemApi.md#apiV2OrderOrderIdPinPost) | **POST** /api/v2/order/{orderId}/pin | Добавление заказа в список закрепленных.
[**apiV2OrderOrderIdSignPost()**](OrderItemApi.md#apiV2OrderOrderIdSignPost) | **POST** /api/v2/order/{orderId}/sign | Подписаться на заказ
[**apiV2OrderOrderIdSignedDocumentGet()**](OrderItemApi.md#apiV2OrderOrderIdSignedDocumentGet) | **GET** /api/v2/order/{orderId}/signed-document | Получение документов заказа со списком титулов
[**apiV2OrderOrderIdValidateEcnDataPost()**](OrderItemApi.md#apiV2OrderOrderIdValidateEcnDataPost) | **POST** /api/v2/order/{orderId}/validate-ecn-data | Проверка данных ЭТрН заказа перед созданием.
[**apiV2OrderOrderIdVisitorGet()**](OrderItemApi.md#apiV2OrderOrderIdVisitorGet) | **GET** /api/v2/order/{orderId}/visitor | Получить список пользователей открывавших карточку заказа


## `apiV2OrderOrderIdBidGet()`

```php
apiV2OrderOrderIdBidGet($order_id): \MagDv\Cargomart\Dto\BidListResponse
```

получение списка ставок на заказ.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdBidGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdBidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\BidListResponse**](../Model/BidListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdBidLastGet()`

```php
apiV2OrderOrderIdBidLastGet($order_id): \MagDv\Cargomart\Dto\BidLastResponse
```

Получение последней информации связанной с торгами.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdBidLastGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdBidLastGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\BidLastResponse**](../Model/BidLastResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdBidPost()`

```php
apiV2OrderOrderIdBidPost($order_id, $bid_push_request): \MagDv\Cargomart\Dto\BidLastResponse
```

Установка ставки на заказ.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$bid_push_request = new \MagDv\Cargomart\Dto\BidPushRequest(); // \MagDv\Cargomart\Dto\BidPushRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdBidPost($order_id, $bid_push_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdBidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **bid_push_request** | [**\MagDv\Cargomart\Dto\BidPushRequest**](../Model/BidPushRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\BidLastResponse**](../Model/BidLastResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCheckDigitalEcnAccessGet()`

```php
apiV2OrderOrderIdCheckDigitalEcnAccessGet($order_id, $point_index_from, $point_index_to): \MagDv\Cargomart\Dto\OrderEcnCheckAccessResponse
```

Проверка доступа к созданию Электронной ТРН.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$point_index_from = 56; // int | Индекс пункта погрузки из маршрута.
$point_index_to = 56; // int | Индекс пункта выгрузки из маршрута.

try {
    $result = $apiInstance->apiV2OrderOrderIdCheckDigitalEcnAccessGet($order_id, $point_index_from, $point_index_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdCheckDigitalEcnAccessGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **point_index_from** | **int**| Индекс пункта погрузки из маршрута. |
 **point_index_to** | **int**| Индекс пункта выгрузки из маршрута. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnCheckAccessResponse**](../Model/OrderEcnCheckAccessResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdEcnGet()`

```php
apiV2OrderOrderIdEcnGet($order_id, $filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $filter_is_active, $page, $per_page): \MagDv\Cargomart\Dto\OrderEcnListResponse
```

Получение списка ЭТрН у заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$filter_index_from = 56; // int | Индекс пункта откуда.
$filter_index_to = 56; // int | Индекс пункта куда.
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnType(); // \MagDv\Cargomart\Dto\EcnType | Тип ТРН.
$filter_status_group = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatusGroup(); // \MagDv\Cargomart\Dto\EcnStatusGroup | Обобщенный статус ТРН.
$filter_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatus(); // \MagDv\Cargomart\Dto\EcnStatus | Статус ТРН.
$filter_is_active = True; // bool | Выбрать только активные.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2OrderOrderIdEcnGet($order_id, $filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $filter_is_active, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdEcnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **filter_index_from** | **int**| Индекс пункта откуда. | [optional]
 **filter_index_to** | **int**| Индекс пункта куда. | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\EcnType**](../Model/.md)| Тип ТРН. | [optional]
 **filter_status_group** | [**\MagDv\Cargomart\Dto\EcnStatusGroup**](../Model/.md)| Обобщенный статус ТРН. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\EcnStatus**](../Model/.md)| Статус ТРН. | [optional]
 **filter_is_active** | **bool**| Выбрать только активные. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnListResponse**](../Model/OrderEcnListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdEcnPost()`

```php
apiV2OrderOrderIdEcnPost($order_id, $ecn_additional_data): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Создание ЭТрН для заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$ecn_additional_data = new \MagDv\Cargomart\Dto\EcnAdditionalData(); // \MagDv\Cargomart\Dto\EcnAdditionalData

try {
    $result = $apiInstance->apiV2OrderOrderIdEcnPost($order_id, $ecn_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdEcnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **ecn_additional_data** | [**\MagDv\Cargomart\Dto\EcnAdditionalData**](../Model/EcnAdditionalData.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdEcnTemplateGet()`

```php
apiV2OrderOrderIdEcnTemplateGet($order_id, $format, $point_index): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать транспортную накладную (подготовить ссылку на скачивание)

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$format = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnTemplateFormatEnum(); // \MagDv\Cargomart\Dto\EcnTemplateFormatEnum | Формат формирования накладной.
$point_index = array(56); // int[] | Индексы точек погрузки, которые указать в ТН, 2-шт

try {
    $result = $apiInstance->apiV2OrderOrderIdEcnTemplateGet($order_id, $format, $point_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdEcnTemplateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **format** | [**\MagDv\Cargomart\Dto\EcnTemplateFormatEnum**](../Model/.md)| Формат формирования накладной. | [optional]
 **point_index** | [**int[]**](../Model/int.md)| Индексы точек погрузки, которые указать в ТН, 2-шт | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdFixPriceGet()`

```php
apiV2OrderOrderIdFixPriceGet($order_id): \MagDv\Cargomart\Dto\OrderFixPriceResponse
```

Зафиксировать цену заказа

Зафиксировать цену заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdFixPriceGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdFixPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderFixPriceResponse**](../Model/OrderFixPriceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdGet()`

```php
apiV2OrderOrderIdGet($order_id): \MagDv\Cargomart\Dto\OrderCardResponse
```

Получение информации для карточки заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdItineraryGet()`

```php
apiV2OrderOrderIdItineraryGet($order_id, $with): \MagDv\Cargomart\Dto\ItineraryListResponse
```

Получение данных по точкам маршрута.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$with = array('with_example'); // string[] | Связанные данные, добавить реальное местоположение машины

try {
    $result = $apiInstance->apiV2OrderOrderIdItineraryGet($order_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdItineraryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **with** | [**string[]**](../Model/string.md)| Связанные данные, добавить реальное местоположение машины | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ItineraryListResponse**](../Model/ItineraryListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdOriginalDocsAcceptPost()`

```php
apiV2OrderOrderIdOriginalDocsAcceptPost($order_id): \MagDv\Cargomart\Dto\OrderCardResponse
```

Подтвердить принятие оригиналов документов.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdOriginalDocsAcceptPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdOriginalDocsAcceptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdOriginalDocsRejectPost()`

```php
apiV2OrderOrderIdOriginalDocsRejectPost($order_id, $reject_document_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Отклонить оригиналы документов.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$reject_document_request = new \MagDv\Cargomart\Dto\RejectDocumentRequest(); // \MagDv\Cargomart\Dto\RejectDocumentRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdOriginalDocsRejectPost($order_id, $reject_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdOriginalDocsRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **reject_document_request** | [**\MagDv\Cargomart\Dto\RejectDocumentRequest**](../Model/RejectDocumentRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdPinDelete()`

```php
apiV2OrderOrderIdPinDelete($order_id): \MagDv\Cargomart\Dto\OrderPinResponse
```

Удаление заказа из списка закрепленных.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdPinDelete($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdPinDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderPinResponse**](../Model/OrderPinResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdPinGet()`

```php
apiV2OrderOrderIdPinGet($order_id): \MagDv\Cargomart\Dto\OrderUsersResponse
```

Получить список пользователей закрепивших заказ

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdPinGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdPinGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderUsersResponse**](../Model/OrderUsersResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdPinPost()`

```php
apiV2OrderOrderIdPinPost($order_id): \MagDv\Cargomart\Dto\OrderPinResponse
```

Добавление заказа в список закрепленных.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdPinPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdPinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderPinResponse**](../Model/OrderPinResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdSignPost()`

```php
apiV2OrderOrderIdSignPost($order_id, $order_sign_create_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Подписаться на заказ

Подписаться на заказ

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$order_sign_create_request = new \MagDv\Cargomart\Dto\OrderSignCreateRequest(); // \MagDv\Cargomart\Dto\OrderSignCreateRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdSignPost($order_id, $order_sign_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdSignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **order_sign_create_request** | [**\MagDv\Cargomart\Dto\OrderSignCreateRequest**](../Model/OrderSignCreateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdSignedDocumentGet()`

```php
apiV2OrderOrderIdSignedDocumentGet($order_id): \MagDv\Cargomart\Dto\OrderSignedDocumentListResponse
```

Получение документов заказа со списком титулов

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdSignedDocumentGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdSignedDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderSignedDocumentListResponse**](../Model/OrderSignedDocumentListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdValidateEcnDataPost()`

```php
apiV2OrderOrderIdValidateEcnDataPost($order_id, $ecn_additional_data): \MagDv\Cargomart\Dto\BaseMessageResponse
```

Проверка данных ЭТрН заказа перед созданием.

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$ecn_additional_data = new \MagDv\Cargomart\Dto\EcnAdditionalData(); // \MagDv\Cargomart\Dto\EcnAdditionalData

try {
    $result = $apiInstance->apiV2OrderOrderIdValidateEcnDataPost($order_id, $ecn_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdValidateEcnDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **ecn_additional_data** | [**\MagDv\Cargomart\Dto\EcnAdditionalData**](../Model/EcnAdditionalData.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\BaseMessageResponse**](../Model/BaseMessageResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdVisitorGet()`

```php
apiV2OrderOrderIdVisitorGet($order_id): \MagDv\Cargomart\Dto\OrderUsersResponse
```

Получить список пользователей открывавших карточку заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdVisitorGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiV2OrderOrderIdVisitorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderUsersResponse**](../Model/OrderUsersResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
