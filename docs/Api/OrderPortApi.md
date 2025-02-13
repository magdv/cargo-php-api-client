# MagDv\Cargomart\OrderPortApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderExcelGet()**](OrderPortApi.md#apiV2OrderExcelGet) | **GET** /api/v2/order/excel | Получение ссылки на excel файл отчета.
[**apiV2OrderExcelOfferReportGet()**](OrderPortApi.md#apiV2OrderExcelOfferReportGet) | **GET** /api/v2/order/excel/offer-report | выгрузка xlsx с отчетом по запросам цен.
[**apiV2OrderExcelPost()**](OrderPortApi.md#apiV2OrderExcelPost) | **POST** /api/v2/order/excel | Отправка запроса на экспорт.
[**apiV2OrderImportGet()**](OrderPortApi.md#apiV2OrderImportGet) | **GET** /api/v2/order/import | Получение шаблона.
[**apiV2OrderImportPost()**](OrderPortApi.md#apiV2OrderImportPost) | **POST** /api/v2/order/import | Импорт заказа из xlsx.
[**apiV2OrderOrderIdOfferExcelGet()**](OrderPortApi.md#apiV2OrderOrderIdOfferExcelGet) | **GET** /api/v2/order/{orderId}/offer/excel | выгрузка xlsx файла со списком предложений.


## `apiV2OrderExcelGet()`

```php
apiV2OrderExcelGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_branch_id): \MagDv\Cargomart\Dto\FileLinkResponse
```

Получение ссылки на excel файл отчета.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPortApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPortStateEnum(); // \MagDv\Cargomart\Dto\OrderFilterPortStateEnum | Тип показываемого заказа.
$filter_order_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPortOrderTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterPortOrderTypeEnum[] | Тип заказа.
$filter_belong = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterBelongEnum(); // \MagDv\Cargomart\Dto\OrderFilterBelongEnum | Вкладка списка по принадлежности заказа.
$filter_serial = 'filter_serial_example'; // string | Порядковый номер заказа.
$filter_departure = 'filter_departure_example'; // string | Код кладр пункта отправления.
$filter_departure_radius = 56; // int | Радиус точки отправления.
$filter_destination = 'filter_destination_example'; // string | Код кладр пункта назначения.
$filter_destination_radius = 56; // int | Радиус точки назначения.
$filter_tag = array('filter_tag_example'); // string[] | Массив тэгов, только для отправителя.
$filter_loading_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ.
$filter_loading_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО.
$filter_start_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата начала розыгрыша ОТ.
$filter_start_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата начала розыгрыша ДО.
$filter_worker = 56; // int | Идентификатор сотрудника создателя для отправителя и сотрудника закрепителя для перевозчика.
$filter_truck_type = array(56); // int[] | Список идентификаторов типов ТС.
$filter_weight_from = 56; // int | Вес груза в ОТ, кг.
$filter_weight_to = 56; // int | Вес груза в ДО, кг.
$filter_capacity_from = 56; // int | Объём груза в ОТ, м3.
$filter_capacity_to = 56; // int | Объём груза в ДО, м3.
$filter_price_from = 56; // int | Текущая цена заказа ОТ.
$filter_price_to = 56; // int | Текущая цена заказа ДО.
$filter_status = array(56); // int[] | Массив id cтатусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании победителя
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_order = array('filter_order_example'); // string[] | Массив id хэшей заказов
$filter_create_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ОТ
$filter_create_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ДО
$filter_available = True; // bool | Только доступные мне заказы. Только для перевозчика.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPortKindEnum()); // \MagDv\Cargomart\Dto\OrderFilterPortKindEnum[] | Тип заказа.
$filter_is_general_partner = True; // bool | Фильтр по статусу генерального партнера.
$filter_is_truck = True; // bool | Только заказы в которых прикреплен водитель/машина
$filter_is_carrier_document = True; // bool | Только заказы в которых перевозчик прикрепил документы
$filter_is_general_partner_document = True; // bool | Только заказы в которых ГП прикрепил документы
$filter_branch_id = 56; // int | Заказы дочерней компании

try {
    $result = $apiInstance->apiV2OrderExcelGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPortApi->apiV2OrderExcelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\OrderFilterPortStateEnum**](../Model/.md)| Тип показываемого заказа. | [optional]
 **filter_order_type** | [**\MagDv\Cargomart\Dto\OrderFilterPortOrderTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterPortOrderTypeEnum.md)| Тип заказа. | [optional]
 **filter_belong** | [**\MagDv\Cargomart\Dto\OrderFilterBelongEnum**](../Model/.md)| Вкладка списка по принадлежности заказа. | [optional]
 **filter_serial** | **string**| Порядковый номер заказа. | [optional]
 **filter_departure** | **string**| Код кладр пункта отправления. | [optional]
 **filter_departure_radius** | **int**| Радиус точки отправления. | [optional]
 **filter_destination** | **string**| Код кладр пункта назначения. | [optional]
 **filter_destination_radius** | **int**| Радиус точки назначения. | [optional]
 **filter_tag** | [**string[]**](../Model/string.md)| Массив тэгов, только для отправителя. | [optional]
 **filter_loading_from** | **\DateTime**| Дата погрузки ОТ. | [optional]
 **filter_loading_to** | **\DateTime**| Дата погрузки ДО. | [optional]
 **filter_start_from** | **\DateTime**| Дата начала розыгрыша ОТ. | [optional]
 **filter_start_to** | **\DateTime**| Дата начала розыгрыша ДО. | [optional]
 **filter_worker** | **int**| Идентификатор сотрудника создателя для отправителя и сотрудника закрепителя для перевозчика. | [optional]
 **filter_truck_type** | [**int[]**](../Model/int.md)| Список идентификаторов типов ТС. | [optional]
 **filter_weight_from** | **int**| Вес груза в ОТ, кг. | [optional]
 **filter_weight_to** | **int**| Вес груза в ДО, кг. | [optional]
 **filter_capacity_from** | **int**| Объём груза в ОТ, м3. | [optional]
 **filter_capacity_to** | **int**| Объём груза в ДО, м3. | [optional]
 **filter_price_from** | **int**| Текущая цена заказа ОТ. | [optional]
 **filter_price_to** | **int**| Текущая цена заказа ДО. | [optional]
 **filter_status** | [**int[]**](../Model/int.md)| Массив id cтатусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации. | [optional]
 **filter_carrier** | **string**| Хэш код компании победителя | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_order** | [**string[]**](../Model/string.md)| Массив id хэшей заказов | [optional]
 **filter_create_from** | **\DateTime**| Дата создания заказа ОТ | [optional]
 **filter_create_to** | **\DateTime**| Дата создания заказа ДО | [optional]
 **filter_available** | **bool**| Только доступные мне заказы. Только для перевозчика. | [optional]
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderFilterPortKindEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterPortKindEnum.md)| Тип заказа. | [optional]
 **filter_is_general_partner** | **bool**| Фильтр по статусу генерального партнера. | [optional]
 **filter_is_truck** | **bool**| Только заказы в которых прикреплен водитель/машина | [optional]
 **filter_is_carrier_document** | **bool**| Только заказы в которых перевозчик прикрепил документы | [optional]
 **filter_is_general_partner_document** | **bool**| Только заказы в которых ГП прикрепил документы | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]

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

## `apiV2OrderExcelOfferReportGet()`

```php
apiV2OrderExcelOfferReportGet($from, $to): \SplFileObject
```

выгрузка xlsx с отчетом по запросам цен.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPortApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата от.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата до.

try {
    $result = $apiInstance->apiV2OrderExcelOfferReportGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPortApi->apiV2OrderExcelOfferReportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Дата от. |
 **to** | **\DateTime**| Дата до. |

### Return type

**\SplFileObject**

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderExcelPost()`

```php
apiV2OrderExcelPost($api_v2_order_excel_post_request, $x_modify_from_event): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Отправка запроса на экспорт.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPortApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$api_v2_order_excel_post_request = new \MagDv\Cargomart\Dto\ApiV2OrderExcelPostRequest(); // \MagDv\Cargomart\Dto\ApiV2OrderExcelPostRequest
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов, которые изменились после этого события

try {
    $result = $apiInstance->apiV2OrderExcelPost($api_v2_order_excel_post_request, $x_modify_from_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPortApi->apiV2OrderExcelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_v2_order_excel_post_request** | [**\MagDv\Cargomart\Dto\ApiV2OrderExcelPostRequest**](../Model/ApiV2OrderExcelPostRequest.md)|  |
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов, которые изменились после этого события | [optional]

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderImportGet()`

```php
apiV2OrderImportGet(): \SplFileObject
```

Получение шаблона.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPortApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2OrderImportGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPortApi->apiV2OrderImportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderImportPost()`

```php
apiV2OrderImportPost($file): \MagDv\Cargomart\Dto\OrderImport
```

Импорт заказа из xlsx.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPortApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->apiV2OrderImportPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPortApi->apiV2OrderImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderImport**](../Model/OrderImport.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdOfferExcelGet()`

```php
apiV2OrderOrderIdOfferExcelGet($order_id): \SplFileObject
```

выгрузка xlsx файла со списком предложений.

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


$apiInstance = new MagDv\Cargomart\Api\OrderPortApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdOfferExcelGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPortApi->apiV2OrderOrderIdOfferExcelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

**\SplFileObject**

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
