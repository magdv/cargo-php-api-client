# MagDv\Cargomart\OrderListApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderCountGet()**](OrderListApi.md#apiV2OrderCountGet) | **GET** /api/v2/order/count | Метод для получения количества заказов согласно фильтру.
[**apiV2OrderExistsGet()**](OrderListApi.md#apiV2OrderExistsGet) | **GET** /api/v2/order/exists | Метод для проверки существования хоть одной записи по запросу.
[**apiV2OrderGet()**](OrderListApi.md#apiV2OrderGet) | **GET** /api/v2/order | Метод для получения списка заказов согласно фильтру.
[**apiV2OrderIdsGet()**](OrderListApi.md#apiV2OrderIdsGet) | **GET** /api/v2/order/ids | Метод для получения списка идентификаторов (хешей) заказов согласно фильтру.


## `apiV2OrderCountGet()`

```php
apiV2OrderCountGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_sign_status, $with): \MagDv\Cargomart\Dto\OrderCountResponse
```

Метод для получения количества заказов согласно фильтру.

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


$apiInstance = new MagDv\Cargomart\Api\OrderListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPortStateEnum(); // \MagDv\Cargomart\Dto\OrderFilterPortStateEnum | Тип показываемого заказа.
$filter_order_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[] | Тип заказа.
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
$filter_status = array(56); // int[] | Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании победителя
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_order = array('filter_order_example'); // string[] | Массив id хэшей заказов
$filter_create_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ОТ
$filter_create_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ДО
$filter_available = True; // bool | Только доступные мне заказы. Только для перевозчика.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderKind()); // \MagDv\Cargomart\Dto\OrderKind[] | Тип заказа.
$filter_is_general_partner = True; // bool | Фильтр по статусу генерального партнера.
$filter_is_truck = True; // bool | Только заказы в которых прикреплен водитель/машина
$filter_is_carrier_document = True; // bool | Только заказы в которых перевозчик прикрепил документы
$filter_is_general_partner_document = True; // bool | Только заказы в которых ГП прикрепил документы
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[] | Фильтр подписей.
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum()); // \MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum[] | Массив доп данных.

try {
    $result = $apiInstance->apiV2OrderCountGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_sign_status, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderListApi->apiV2OrderCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\OrderFilterPortStateEnum**](../Model/.md)| Тип показываемого заказа. | [optional]
 **filter_order_type** | [**\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum.md)| Тип заказа. | [optional]
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
 **filter_status** | [**int[]**](../Model/int.md)| Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации. | [optional]
 **filter_carrier** | **string**| Хэш код компании победителя | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_order** | [**string[]**](../Model/string.md)| Массив id хэшей заказов | [optional]
 **filter_create_from** | **\DateTime**| Дата создания заказа ОТ | [optional]
 **filter_create_to** | **\DateTime**| Дата создания заказа ДО | [optional]
 **filter_available** | **bool**| Только доступные мне заказы. Только для перевозчика. | [optional]
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderKind[]**](../Model/\MagDv\Cargomart\Dto\OrderKind.md)| Тип заказа. | [optional]
 **filter_is_general_partner** | **bool**| Фильтр по статусу генерального партнера. | [optional]
 **filter_is_truck** | **bool**| Только заказы в которых прикреплен водитель/машина | [optional]
 **filter_is_carrier_document** | **bool**| Только заказы в которых перевозчик прикрепил документы | [optional]
 **filter_is_general_partner_document** | **bool**| Только заказы в которых ГП прикрепил документы | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **with** | [**\MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum.md)| Массив доп данных. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderCountResponse**](../Model/OrderCountResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderExistsGet()`

```php
apiV2OrderExistsGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_driver, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_sign_status, $filter_consignor_to_expeditor_paid_status, $page, $per_page): \MagDv\Cargomart\Dto\ExistsResponse
```

Метод для проверки существования хоть одной записи по запросу.

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


$apiInstance = new MagDv\Cargomart\Api\OrderListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPortStateEnum(); // \MagDv\Cargomart\Dto\OrderFilterPortStateEnum | Тип показываемого заказа.
$filter_order_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[] | Тип заказа.
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
$filter_status = array(56); // int[] | Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании победителя
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_driver = 56; // int | Идентификатор водителя
$filter_order = array('filter_order_example'); // string[] | Массив id хэшей заказов
$filter_create_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ОТ
$filter_create_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ДО
$filter_available = True; // bool | Только доступные мне заказы. Только для перевозчика.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderKind()); // \MagDv\Cargomart\Dto\OrderKind[] | Тип заказа.
$filter_is_general_partner = True; // bool | Фильтр по статусу генерального партнера.
$filter_is_truck = True; // bool | Только заказы в которых прикреплен водитель/машина
$filter_is_carrier_document = True; // bool | Только заказы в которых перевозчик прикрепил документы
$filter_is_general_partner_document = True; // bool | Только заказы в которых ГП прикрепил документы
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[] | Фильтр подписей.
$filter_consignor_to_expeditor_paid_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterConsignorPaidStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterConsignorPaidStatusEnum[] | Выборка по статусу оплат от заказчика экспедитору
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2OrderExistsGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_driver, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_sign_status, $filter_consignor_to_expeditor_paid_status, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderListApi->apiV2OrderExistsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\OrderFilterPortStateEnum**](../Model/.md)| Тип показываемого заказа. | [optional]
 **filter_order_type** | [**\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum.md)| Тип заказа. | [optional]
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
 **filter_status** | [**int[]**](../Model/int.md)| Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации. | [optional]
 **filter_carrier** | **string**| Хэш код компании победителя | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_driver** | **int**| Идентификатор водителя | [optional]
 **filter_order** | [**string[]**](../Model/string.md)| Массив id хэшей заказов | [optional]
 **filter_create_from** | **\DateTime**| Дата создания заказа ОТ | [optional]
 **filter_create_to** | **\DateTime**| Дата создания заказа ДО | [optional]
 **filter_available** | **bool**| Только доступные мне заказы. Только для перевозчика. | [optional]
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderKind[]**](../Model/\MagDv\Cargomart\Dto\OrderKind.md)| Тип заказа. | [optional]
 **filter_is_general_partner** | **bool**| Фильтр по статусу генерального партнера. | [optional]
 **filter_is_truck** | **bool**| Только заказы в которых прикреплен водитель/машина | [optional]
 **filter_is_carrier_document** | **bool**| Только заказы в которых перевозчик прикрепил документы | [optional]
 **filter_is_general_partner_document** | **bool**| Только заказы в которых ГП прикрепил документы | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **filter_consignor_to_expeditor_paid_status** | [**\MagDv\Cargomart\Dto\OrderFilterConsignorPaidStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterConsignorPaidStatusEnum.md)| Выборка по статусу оплат от заказчика экспедитору | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\ExistsResponse**](../Model/ExistsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderGet()`

```php
apiV2OrderGet($x_modify_from_event, $filter_company_branch, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_departure_area_latitude, $filter_departure_area_longitude, $filter_departure_area_radius, $filter_departure_area_country_code, $filter_destination_area_latitude, $filter_destination_area_longitude, $filter_destination_area_radius, $filter_destination_area_country_code, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_driver, $filter_driver_name, $filter_consignor_curator, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_proxy_status, $filter_tracking_number, $filter_document_originals_status, $filter_document_package_status, $filter_patch_status, $filter_expeditor_order_refuse_type, $filter_order_refuse_type, $filter_driver_status, $filter_carrier_paid_status, $filter_sign_status, $filter_storage_point_loading_ids, $filter_storage_point_unloading_ids, $with, $page, $per_page): \MagDv\Cargomart\Dto\OrderListResponse
```

Метод для получения списка заказов согласно фильтру.

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


$apiInstance = new MagDv\Cargomart\Api\OrderListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_company_branch = True; // bool | От дочерних компаний true, от головной компании false
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterStateEnum(); // \MagDv\Cargomart\Dto\OrderFilterStateEnum | Тип показываемого заказа.
$filter_order_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[] | Тип заказа.
$filter_belong = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterBelongEnum(); // \MagDv\Cargomart\Dto\OrderFilterBelongEnum | Вкладка списка по принадлежности заказа.
$filter_serial = 'filter_serial_example'; // string | Порядковый номер заказа.
$filter_departure = 'filter_departure_example'; // string | Deprecated в пользу departureArea. Код кладр пункта отправления.
$filter_departure_radius = 56; // int | Deprecated в пользу departureArea. Радиус точки отправления.
$filter_destination = 'filter_destination_example'; // string | Deprecated в пользу destinationArea. Код кладр пункта назначения.
$filter_destination_radius = 56; // int | Deprecated в пользу destinationArea. Радиус точки назначения.
$filter_departure_area_latitude = 3.4; // float | Широта точки отправления.
$filter_departure_area_longitude = 3.4; // float | Долгота точки отправления.
$filter_departure_area_radius = 56; // int | Радиус точки отправления в километрах.
$filter_departure_area_country_code = 'filter_departure_area_country_code_example'; // string | Код страны отправления в формате alpha2.
$filter_destination_area_latitude = 3.4; // float | Широта точки назначения.
$filter_destination_area_longitude = 3.4; // float | Долгота точки назначения.
$filter_destination_area_radius = 56; // int | Радиус точки назначения в километрах.
$filter_destination_area_country_code = 'filter_destination_area_country_code_example'; // string | Код страны назначения в формате alpha2.
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
$filter_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterStatusEnum[] | Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании победителя
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_driver = 56; // int | Идентификатор водителя
$filter_driver_name = 'filter_driver_name_example'; // string | ФИО водителя
$filter_consignor_curator = 56; // int | Идентификатор куратора со стороны заказчика
$filter_order = array('filter_order_example'); // string[] | Массив id хэшей заказов
$filter_create_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ОТ
$filter_create_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ДО
$filter_available = True; // bool | Только доступные мне заказы. Только для перевозчика.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderKind()); // \MagDv\Cargomart\Dto\OrderKind[] | Тип заказа.
$filter_is_general_partner = True; // bool | Фильтр по статусу генерального партнера.
$filter_is_truck = True; // bool | Только заказы в которых прикреплен водитель/машина
$filter_is_carrier_document = True; // bool | Только заказы в которых перевозчик прикрепил документы
$filter_is_general_partner_document = True; // bool | Только заказы в которых ГП прикрепил документы
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_proxy_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterProxyStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterProxyStatusEnum[] | Список статусов доверенности.
$filter_tracking_number = 'filter_tracking_number_example'; // string | Трек номер
$filter_document_originals_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterDocumentOriginalStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterDocumentOriginalStatusEnum[] | Статус проверки оригиналов документов
$filter_document_package_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterDocumentPackageStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterDocumentPackageStatusEnum[] | Статус проверки пакетов документов (сканов)
$filter_patch_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPatchStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterPatchStatusEnum[] | Статус последнего патча заказа
$filter_expeditor_order_refuse_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterExpeditorRefuseTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterExpeditorRefuseTypeEnum[] | Наличие отказа для заказа по его типу (только для экспедиторских заказов)
$filter_order_refuse_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterRefuseTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterRefuseTypeEnum[] | Наличие отказа для заказа по его типу
$filter_driver_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterDriverStatus(); // \MagDv\Cargomart\Dto\OrderFilterDriverStatus | Выборка по статусу назначения водителей
$filter_carrier_paid_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterCarrierPaidStatusEnum(); // \MagDv\Cargomart\Dto\OrderFilterCarrierPaidStatusEnum | Выборка по статусу оплат перевозчику
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[] | Фильтр подписей.
$filter_storage_point_loading_ids = array(56); // int[] | Массив id точек погрузки
$filter_storage_point_unloading_ids = array(56); // int[] | Массив id точек выгрузки
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum()); // \MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum[] | Массив доп данных.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2OrderGet($x_modify_from_event, $filter_company_branch, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_departure_area_latitude, $filter_departure_area_longitude, $filter_departure_area_radius, $filter_departure_area_country_code, $filter_destination_area_latitude, $filter_destination_area_longitude, $filter_destination_area_radius, $filter_destination_area_country_code, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_driver, $filter_driver_name, $filter_consignor_curator, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_proxy_status, $filter_tracking_number, $filter_document_originals_status, $filter_document_package_status, $filter_patch_status, $filter_expeditor_order_refuse_type, $filter_order_refuse_type, $filter_driver_status, $filter_carrier_paid_status, $filter_sign_status, $filter_storage_point_loading_ids, $filter_storage_point_unloading_ids, $with, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderListApi->apiV2OrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_company_branch** | **bool**| От дочерних компаний true, от головной компании false | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\OrderFilterStateEnum**](../Model/.md)| Тип показываемого заказа. | [optional]
 **filter_order_type** | [**\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum.md)| Тип заказа. | [optional]
 **filter_belong** | [**\MagDv\Cargomart\Dto\OrderFilterBelongEnum**](../Model/.md)| Вкладка списка по принадлежности заказа. | [optional]
 **filter_serial** | **string**| Порядковый номер заказа. | [optional]
 **filter_departure** | **string**| Deprecated в пользу departureArea. Код кладр пункта отправления. | [optional]
 **filter_departure_radius** | **int**| Deprecated в пользу departureArea. Радиус точки отправления. | [optional]
 **filter_destination** | **string**| Deprecated в пользу destinationArea. Код кладр пункта назначения. | [optional]
 **filter_destination_radius** | **int**| Deprecated в пользу destinationArea. Радиус точки назначения. | [optional]
 **filter_departure_area_latitude** | **float**| Широта точки отправления. | [optional]
 **filter_departure_area_longitude** | **float**| Долгота точки отправления. | [optional]
 **filter_departure_area_radius** | **int**| Радиус точки отправления в километрах. | [optional]
 **filter_departure_area_country_code** | **string**| Код страны отправления в формате alpha2. | [optional]
 **filter_destination_area_latitude** | **float**| Широта точки назначения. | [optional]
 **filter_destination_area_longitude** | **float**| Долгота точки назначения. | [optional]
 **filter_destination_area_radius** | **int**| Радиус точки назначения в километрах. | [optional]
 **filter_destination_area_country_code** | **string**| Код страны назначения в формате alpha2. | [optional]
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
 **filter_status** | [**\MagDv\Cargomart\Dto\OrderFilterStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterStatusEnum.md)| Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации. | [optional]
 **filter_carrier** | **string**| Хэш код компании победителя | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_driver** | **int**| Идентификатор водителя | [optional]
 **filter_driver_name** | **string**| ФИО водителя | [optional]
 **filter_consignor_curator** | **int**| Идентификатор куратора со стороны заказчика | [optional]
 **filter_order** | [**string[]**](../Model/string.md)| Массив id хэшей заказов | [optional]
 **filter_create_from** | **\DateTime**| Дата создания заказа ОТ | [optional]
 **filter_create_to** | **\DateTime**| Дата создания заказа ДО | [optional]
 **filter_available** | **bool**| Только доступные мне заказы. Только для перевозчика. | [optional]
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderKind[]**](../Model/\MagDv\Cargomart\Dto\OrderKind.md)| Тип заказа. | [optional]
 **filter_is_general_partner** | **bool**| Фильтр по статусу генерального партнера. | [optional]
 **filter_is_truck** | **bool**| Только заказы в которых прикреплен водитель/машина | [optional]
 **filter_is_carrier_document** | **bool**| Только заказы в которых перевозчик прикрепил документы | [optional]
 **filter_is_general_partner_document** | **bool**| Только заказы в которых ГП прикрепил документы | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_proxy_status** | [**\MagDv\Cargomart\Dto\OrderFilterProxyStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterProxyStatusEnum.md)| Список статусов доверенности. | [optional]
 **filter_tracking_number** | **string**| Трек номер | [optional]
 **filter_document_originals_status** | [**\MagDv\Cargomart\Dto\OrderFilterDocumentOriginalStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterDocumentOriginalStatusEnum.md)| Статус проверки оригиналов документов | [optional]
 **filter_document_package_status** | [**\MagDv\Cargomart\Dto\OrderFilterDocumentPackageStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterDocumentPackageStatusEnum.md)| Статус проверки пакетов документов (сканов) | [optional]
 **filter_patch_status** | [**\MagDv\Cargomart\Dto\OrderFilterPatchStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterPatchStatusEnum.md)| Статус последнего патча заказа | [optional]
 **filter_expeditor_order_refuse_type** | [**\MagDv\Cargomart\Dto\OrderFilterExpeditorRefuseTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterExpeditorRefuseTypeEnum.md)| Наличие отказа для заказа по его типу (только для экспедиторских заказов) | [optional]
 **filter_order_refuse_type** | [**\MagDv\Cargomart\Dto\OrderFilterRefuseTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterRefuseTypeEnum.md)| Наличие отказа для заказа по его типу | [optional]
 **filter_driver_status** | [**\MagDv\Cargomart\Dto\OrderFilterDriverStatus**](../Model/.md)| Выборка по статусу назначения водителей | [optional]
 **filter_carrier_paid_status** | [**\MagDv\Cargomart\Dto\OrderFilterCarrierPaidStatusEnum**](../Model/.md)| Выборка по статусу оплат перевозчику | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **filter_storage_point_loading_ids** | [**int[]**](../Model/int.md)| Массив id точек погрузки | [optional]
 **filter_storage_point_unloading_ids** | [**int[]**](../Model/int.md)| Массив id точек выгрузки | [optional]
 **with** | [**\MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderAdditionalDataTypeEnum.md)| Массив доп данных. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderIdsGet()`

```php
apiV2OrderIdsGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_driver, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_sign_status, $page, $per_page): \MagDv\Cargomart\Dto\OrderIdsResponse
```

Метод для получения списка идентификаторов (хешей) заказов согласно фильтру.

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


$apiInstance = new MagDv\Cargomart\Api\OrderListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterPortStateEnum(); // \MagDv\Cargomart\Dto\OrderFilterPortStateEnum | Тип показываемого заказа.
$filter_order_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum()); // \MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[] | Тип заказа.
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
$filter_status = array(56); // int[] | Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании победителя
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_driver = 56; // int | Идентификатор водителя
$filter_order = array('filter_order_example'); // string[] | Массив id хэшей заказов
$filter_create_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ОТ
$filter_create_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата создания заказа ДО
$filter_available = True; // bool | Только доступные мне заказы. Только для перевозчика.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderKind()); // \MagDv\Cargomart\Dto\OrderKind[] | Тип заказа.
$filter_is_general_partner = True; // bool | Фильтр по статусу генерального партнера.
$filter_is_truck = True; // bool | Только заказы в которых прикреплен водитель/машина
$filter_is_carrier_document = True; // bool | Только заказы в которых перевозчик прикрепил документы
$filter_is_general_partner_document = True; // bool | Только заказы в которых ГП прикрепил документы
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[] | Фильтр подписей.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2OrderIdsGet($x_modify_from_event, $filter_type, $filter_order_type, $filter_belong, $filter_serial, $filter_departure, $filter_departure_radius, $filter_destination, $filter_destination_radius, $filter_tag, $filter_loading_from, $filter_loading_to, $filter_start_from, $filter_start_to, $filter_worker, $filter_truck_type, $filter_weight_from, $filter_weight_to, $filter_capacity_from, $filter_capacity_to, $filter_price_from, $filter_price_to, $filter_status, $filter_carrier, $filter_consignor, $filter_driver, $filter_order, $filter_create_from, $filter_create_to, $filter_available, $filter_kind, $filter_is_general_partner, $filter_is_truck, $filter_is_carrier_document, $filter_is_general_partner_document, $filter_archive_status, $filter_branch_id, $filter_consignor_parent, $filter_sign_status, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderListApi->apiV2OrderIdsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\OrderFilterPortStateEnum**](../Model/.md)| Тип показываемого заказа. | [optional]
 **filter_order_type** | [**\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterBiddingTypeEnum.md)| Тип заказа. | [optional]
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
 **filter_status** | [**int[]**](../Model/int.md)| Массив id статусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации. | [optional]
 **filter_carrier** | **string**| Хэш код компании победителя | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_driver** | **int**| Идентификатор водителя | [optional]
 **filter_order** | [**string[]**](../Model/string.md)| Массив id хэшей заказов | [optional]
 **filter_create_from** | **\DateTime**| Дата создания заказа ОТ | [optional]
 **filter_create_to** | **\DateTime**| Дата создания заказа ДО | [optional]
 **filter_available** | **bool**| Только доступные мне заказы. Только для перевозчика. | [optional]
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderKind[]**](../Model/\MagDv\Cargomart\Dto\OrderKind.md)| Тип заказа. | [optional]
 **filter_is_general_partner** | **bool**| Фильтр по статусу генерального партнера. | [optional]
 **filter_is_truck** | **bool**| Только заказы в которых прикреплен водитель/машина | [optional]
 **filter_is_carrier_document** | **bool**| Только заказы в которых перевозчик прикрепил документы | [optional]
 **filter_is_general_partner_document** | **bool**| Только заказы в которых ГП прикрепил документы | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderIdsResponse**](../Model/OrderIdsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
