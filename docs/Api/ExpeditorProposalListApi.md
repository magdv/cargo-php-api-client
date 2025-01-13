# MagDv\Cargomart\ExpeditorProposalListApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalExistsGet()**](ExpeditorProposalListApi.md#apiV2ExpeditorProposalExistsGet) | **GET** /api/v2/expeditor-proposal/exists | Метод для существования хоть одной записи по запросу.
[**apiV2ExpeditorProposalGet()**](ExpeditorProposalListApi.md#apiV2ExpeditorProposalGet) | **GET** /api/v2/expeditor-proposal | Метод для получения списка заказов Экспедитора согласно фильтру.
[**apiV2ExpeditorProposalIdsGet()**](ExpeditorProposalListApi.md#apiV2ExpeditorProposalIdsGet) | **GET** /api/v2/expeditor-proposal/ids | Метод для получения списка ids заказов Экспедитора согласно фильтру.


## `apiV2ExpeditorProposalExistsGet()`

```php
apiV2ExpeditorProposalExistsGet($x_modify_from_event, $filter_serial, $filter_departure, $filter_destination, $filter_truck_type, $filter_status, $filter_proxy_status, $filter_loading_from, $filter_loading_to, $filter_carrier, $filter_consignor, $filter_branch_id, $filter_consignor_parent, $filter_archive_status, $filter_driver, $filter_driver_name, $filter_max_end_time, $filter_tracking_number, $filter_document_originals_status, $filter_has_carrier, $filter_expeditor_order_refuse_type, $filter_document_package_status, $filter_carrier_paid_status, $filter_sign_status, $filter_consignor_curator, $filter_has_expeditor_offers, $filter_expeditor_price_type): \MagDv\Cargomart\Dto\ExistsResponse
```

Метод для существования хоть одной записи по запросу.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_serial = 'filter_serial_example'; // string | Порядковый номер заказа.
$filter_departure = 'filter_departure_example'; // string | Код кладр пункта отправления.
$filter_destination = 'filter_destination_example'; // string | Код кладр пункта назначения.
$filter_truck_type = array(56); // int[] | Список идентификаторов типов ТС.
$filter_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum[] | Массив id статусов заказов.
$filter_proxy_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalProxyStatusEnum()); // \MagDv\Cargomart\Dto\ProposalProxyStatusEnum[] | Список статусов доверенности.
$filter_loading_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ.
$filter_loading_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании перевозчика
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_driver = 56; // int | Идентификатор водителя
$filter_driver_name = 'filter_driver_name_example'; // string | ФИО водителя
$filter_max_end_time = 'filter_max_end_time_example'; // string | Предел времени закрытия заказа
$filter_tracking_number = 'filter_tracking_number_example'; // string | Трек номер
$filter_document_originals_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum | Статус оригинала документа
$filter_has_carrier = True; // bool | Фильтр по наличию перевозчика.
$filter_expeditor_order_refuse_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum()); // \MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum[] | Наличие отказа для заказа по его типу
$filter_document_package_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum[] | Статус проверки пакетов документов (сканов)
$filter_carrier_paid_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum | Выборка по статусу оплат перевозчику
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum[] | Фильтр подписей.
$filter_consignor_curator = 56; // int | Идентификатор куратора со стороны заказчика.
$filter_has_expeditor_offers = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\StringBooleanEnum(); // \MagDv\Cargomart\Dto\StringBooleanEnum | Фильтр наличия предложений (в том числе ставок перевозчика).
$filter_expeditor_price_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderExpeditorPriceType()); // \MagDv\Cargomart\Dto\OrderExpeditorPriceType[] | Фильтр по типу согласования цены.

try {
    $result = $apiInstance->apiV2ExpeditorProposalExistsGet($x_modify_from_event, $filter_serial, $filter_departure, $filter_destination, $filter_truck_type, $filter_status, $filter_proxy_status, $filter_loading_from, $filter_loading_to, $filter_carrier, $filter_consignor, $filter_branch_id, $filter_consignor_parent, $filter_archive_status, $filter_driver, $filter_driver_name, $filter_max_end_time, $filter_tracking_number, $filter_document_originals_status, $filter_has_carrier, $filter_expeditor_order_refuse_type, $filter_document_package_status, $filter_carrier_paid_status, $filter_sign_status, $filter_consignor_curator, $filter_has_expeditor_offers, $filter_expeditor_price_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalListApi->apiV2ExpeditorProposalExistsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_serial** | **string**| Порядковый номер заказа. | [optional]
 **filter_departure** | **string**| Код кладр пункта отправления. | [optional]
 **filter_destination** | **string**| Код кладр пункта назначения. | [optional]
 **filter_truck_type** | [**int[]**](../Model/int.md)| Список идентификаторов типов ТС. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum.md)| Массив id статусов заказов. | [optional]
 **filter_proxy_status** | [**\MagDv\Cargomart\Dto\ProposalProxyStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalProxyStatusEnum.md)| Список статусов доверенности. | [optional]
 **filter_loading_from** | **\DateTime**| Дата погрузки ОТ. | [optional]
 **filter_loading_to** | **\DateTime**| Дата погрузки ДО | [optional]
 **filter_carrier** | **string**| Хэш код компании перевозчика | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_driver** | **int**| Идентификатор водителя | [optional]
 **filter_driver_name** | **string**| ФИО водителя | [optional]
 **filter_max_end_time** | **string**| Предел времени закрытия заказа | [optional]
 **filter_tracking_number** | **string**| Трек номер | [optional]
 **filter_document_originals_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum**](../Model/.md)| Статус оригинала документа | [optional]
 **filter_has_carrier** | **bool**| Фильтр по наличию перевозчика. | [optional]
 **filter_expeditor_order_refuse_type** | [**\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum.md)| Наличие отказа для заказа по его типу | [optional]
 **filter_document_package_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum.md)| Статус проверки пакетов документов (сканов) | [optional]
 **filter_carrier_paid_status** | [**\MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum**](../Model/.md)| Выборка по статусу оплат перевозчику | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **filter_consignor_curator** | **int**| Идентификатор куратора со стороны заказчика. | [optional]
 **filter_has_expeditor_offers** | [**\MagDv\Cargomart\Dto\StringBooleanEnum**](../Model/.md)| Фильтр наличия предложений (в том числе ставок перевозчика). | [optional]
 **filter_expeditor_price_type** | [**\MagDv\Cargomart\Dto\OrderExpeditorPriceType[]**](../Model/\MagDv\Cargomart\Dto\OrderExpeditorPriceType.md)| Фильтр по типу согласования цены. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExistsResponse**](../Model/ExistsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalGet()`

```php
apiV2ExpeditorProposalGet($x_modify_from_event, $filter_serial, $filter_departure, $filter_destination, $filter_truck_type, $filter_status, $filter_proxy_status, $filter_loading_from, $filter_loading_to, $filter_carrier, $filter_consignor, $filter_branch_id, $filter_consignor_parent, $filter_archive_status, $filter_driver_name, $filter_max_end_time, $filter_tracking_number, $filter_document_originals_status, $filter_expeditor_order_refuse_type, $filter_driver_status, $filter_patch_status, $filter_has_carrier, $filter_document_package_status, $filter_carrier_paid_status, $filter_consignor_to_expeditor_paid_status, $filter_sign_status, $filter_has_without_truck_driver, $filter_consignor_curator, $filter_has_expeditor_offers, $filter_expeditor_price_type, $page, $per_page): \MagDv\Cargomart\Dto\ProposalListResponse
```

Метод для получения списка заказов Экспедитора согласно фильтру.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_serial = 'filter_serial_example'; // string | Порядковый номер заказа.
$filter_departure = 'filter_departure_example'; // string | Код кладр пункта отправления.
$filter_destination = 'filter_destination_example'; // string | Код кладр пункта назначения.
$filter_truck_type = array(56); // int[] | Список идентификаторов типов ТС.
$filter_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum[] | Массив id статусов заказов.
$filter_proxy_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalProxyStatusEnum()); // \MagDv\Cargomart\Dto\ProposalProxyStatusEnum[] | Список статусов доверенности.
$filter_loading_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ.
$filter_loading_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании перевозчика
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_driver_name = 'filter_driver_name_example'; // string | ФИО водителя
$filter_max_end_time = 'filter_max_end_time_example'; // string | Предел времени закрытия заказа
$filter_tracking_number = 'filter_tracking_number_example'; // string | Трек номер
$filter_document_originals_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum | Статус оригинала документа
$filter_expeditor_order_refuse_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum()); // \MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum[] | Наличие отказа для заказа по его типу
$filter_driver_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDriverStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterDriverStatusEnum | Выборка по статусу назначения водителей
$filter_patch_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum[] | Список статусов запроса на изменение заказа. 1 - ожидает подтверждение от отправителя, 2 - ожидает подтверждения от перевозчика, 3 - принят ввсеми сторонами, 4 - отозван экспедитором до согласования с перевозчиком, 5 - отклонен отправителем, 6 - отклонен перевозчиком, 7 - отозвано экспедитором до согласования с заказчиком
$filter_has_carrier = True; // bool | Фильтр по наличию перевозчика.
$filter_document_package_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum[] | Статус проверки пакетов документов (сканов)
$filter_carrier_paid_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum | Выборка по статусу оплат перевозчику
$filter_consignor_to_expeditor_paid_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterConsignorPaidStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterConsignorPaidStatusEnum | Выборка по статусу оплат от заказчика экспедитору
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum[] | Фильтр подписей.
$filter_has_without_truck_driver = false; // bool | Фильтр отсутствия машины и водителя.
$filter_consignor_curator = 56; // int | Идентификатор куратора со стороны заказчика.
$filter_has_expeditor_offers = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\StringBooleanEnum(); // \MagDv\Cargomart\Dto\StringBooleanEnum | Фильтр наличия предложений (в том числе ставок перевозчика).
$filter_expeditor_price_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderExpeditorPriceType()); // \MagDv\Cargomart\Dto\OrderExpeditorPriceType[] | Фильтр по типу согласования цены.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2ExpeditorProposalGet($x_modify_from_event, $filter_serial, $filter_departure, $filter_destination, $filter_truck_type, $filter_status, $filter_proxy_status, $filter_loading_from, $filter_loading_to, $filter_carrier, $filter_consignor, $filter_branch_id, $filter_consignor_parent, $filter_archive_status, $filter_driver_name, $filter_max_end_time, $filter_tracking_number, $filter_document_originals_status, $filter_expeditor_order_refuse_type, $filter_driver_status, $filter_patch_status, $filter_has_carrier, $filter_document_package_status, $filter_carrier_paid_status, $filter_consignor_to_expeditor_paid_status, $filter_sign_status, $filter_has_without_truck_driver, $filter_consignor_curator, $filter_has_expeditor_offers, $filter_expeditor_price_type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalListApi->apiV2ExpeditorProposalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_serial** | **string**| Порядковый номер заказа. | [optional]
 **filter_departure** | **string**| Код кладр пункта отправления. | [optional]
 **filter_destination** | **string**| Код кладр пункта назначения. | [optional]
 **filter_truck_type** | [**int[]**](../Model/int.md)| Список идентификаторов типов ТС. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum.md)| Массив id статусов заказов. | [optional]
 **filter_proxy_status** | [**\MagDv\Cargomart\Dto\ProposalProxyStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalProxyStatusEnum.md)| Список статусов доверенности. | [optional]
 **filter_loading_from** | **\DateTime**| Дата погрузки ОТ. | [optional]
 **filter_loading_to** | **\DateTime**| Дата погрузки ДО | [optional]
 **filter_carrier** | **string**| Хэш код компании перевозчика | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_driver_name** | **string**| ФИО водителя | [optional]
 **filter_max_end_time** | **string**| Предел времени закрытия заказа | [optional]
 **filter_tracking_number** | **string**| Трек номер | [optional]
 **filter_document_originals_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum**](../Model/.md)| Статус оригинала документа | [optional]
 **filter_expeditor_order_refuse_type** | [**\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum.md)| Наличие отказа для заказа по его типу | [optional]
 **filter_driver_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDriverStatusEnum**](../Model/.md)| Выборка по статусу назначения водителей | [optional]
 **filter_patch_status** | [**\MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum.md)| Список статусов запроса на изменение заказа. 1 - ожидает подтверждение от отправителя, 2 - ожидает подтверждения от перевозчика, 3 - принят ввсеми сторонами, 4 - отозван экспедитором до согласования с перевозчиком, 5 - отклонен отправителем, 6 - отклонен перевозчиком, 7 - отозвано экспедитором до согласования с заказчиком | [optional]
 **filter_has_carrier** | **bool**| Фильтр по наличию перевозчика. | [optional]
 **filter_document_package_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum.md)| Статус проверки пакетов документов (сканов) | [optional]
 **filter_carrier_paid_status** | [**\MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum**](../Model/.md)| Выборка по статусу оплат перевозчику | [optional]
 **filter_consignor_to_expeditor_paid_status** | [**\MagDv\Cargomart\Dto\ProposalFilterConsignorPaidStatusEnum**](../Model/.md)| Выборка по статусу оплат от заказчика экспедитору | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **filter_has_without_truck_driver** | **bool**| Фильтр отсутствия машины и водителя. | [optional] [default to false]
 **filter_consignor_curator** | **int**| Идентификатор куратора со стороны заказчика. | [optional]
 **filter_has_expeditor_offers** | [**\MagDv\Cargomart\Dto\StringBooleanEnum**](../Model/.md)| Фильтр наличия предложений (в том числе ставок перевозчика). | [optional]
 **filter_expeditor_price_type** | [**\MagDv\Cargomart\Dto\OrderExpeditorPriceType[]**](../Model/\MagDv\Cargomart\Dto\OrderExpeditorPriceType.md)| Фильтр по типу согласования цены. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\ProposalListResponse**](../Model/ProposalListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdsGet()`

```php
apiV2ExpeditorProposalIdsGet($x_modify_from_event, $filter_serial, $filter_departure, $filter_destination, $filter_truck_type, $filter_status, $filter_proxy_status, $filter_loading_from, $filter_loading_to, $filter_carrier, $filter_consignor, $filter_branch_id, $filter_consignor_parent, $filter_archive_status, $filter_driver, $filter_driver_name, $filter_max_end_time, $filter_tracking_number, $filter_document_originals_status, $filter_has_carrier, $filter_expeditor_order_refuse_type, $filter_driver_status, $filter_patch_status, $filter_document_package_status, $filter_carrier_paid_status, $filter_sign_status, $filter_consignor_curator, $filter_has_expeditor_offers, $filter_expeditor_price_type, $page, $per_page): \MagDv\Cargomart\Dto\ProposalListIdsResponse
```

Метод для получения списка ids заказов Экспедитора согласно фильтру.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalListApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$x_modify_from_event = 56; // int | Идентификатор события для получения заказов которые измененились после этого события
$filter_serial = 'filter_serial_example'; // string | Порядковый номер заказа.
$filter_departure = 'filter_departure_example'; // string | Код кладр пункта отправления.
$filter_destination = 'filter_destination_example'; // string | Код кладр пункта назначения.
$filter_truck_type = array(56); // int[] | Список идентификаторов типов ТС.
$filter_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum[] | Массив id статусов заказов.
$filter_proxy_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalProxyStatusEnum()); // \MagDv\Cargomart\Dto\ProposalProxyStatusEnum[] | Список статусов доверенности.
$filter_loading_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ.
$filter_loading_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании перевозчика
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании отправителя
$filter_branch_id = 56; // int | Заказы дочерней компании
$filter_consignor_parent = 'filter_consignor_parent_example'; // string | Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг)
$filter_archive_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderArchiveStatus(); // \MagDv\Cargomart\Dto\OrderArchiveStatus | Статус архивации заказа
$filter_driver = 56; // int | Идентификатор водителя
$filter_driver_name = 'filter_driver_name_example'; // string | ФИО водителя
$filter_max_end_time = 'filter_max_end_time_example'; // string | Предел времени закрытия заказа
$filter_tracking_number = 'filter_tracking_number_example'; // string | Трек номер
$filter_document_originals_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum | Статус оригинала документа
$filter_has_carrier = True; // bool | Фильтр по наличию перевозчика.
$filter_expeditor_order_refuse_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum()); // \MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum[] | Наличие отказа для заказа по его типу
$filter_driver_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDriverStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterDriverStatusEnum | Выборка по статусу назначения водителей
$filter_patch_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum[] | Список статусов запроса на изменение заказа. 1 - ожидает подтверждение от отправителя, 2 - ожидает подтверждения от перевозчика, 3 - принят ввсеми сторонами, 4 - отозван экспедитором до согласования с перевозчиком, 5 - отклонен отправителем, 6 - отклонен перевозчиком, 7 - отозвано экспедитором до согласования с заказчиком
$filter_document_package_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum[] | Статус проверки пакетов документов (сканов)
$filter_carrier_paid_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum(); // \MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum | Выборка по статусу оплат перевозчику
$filter_sign_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum()); // \MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum[] | Фильтр подписей.
$filter_consignor_curator = 56; // int | Идентификатор куратора со стороны заказчика.
$filter_has_expeditor_offers = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\StringBooleanEnum(); // \MagDv\Cargomart\Dto\StringBooleanEnum | Фильтр наличия предложений (в том числе ставок перевозчика).
$filter_expeditor_price_type = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderExpeditorPriceType()); // \MagDv\Cargomart\Dto\OrderExpeditorPriceType[] | Фильтр по типу согласования цены.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdsGet($x_modify_from_event, $filter_serial, $filter_departure, $filter_destination, $filter_truck_type, $filter_status, $filter_proxy_status, $filter_loading_from, $filter_loading_to, $filter_carrier, $filter_consignor, $filter_branch_id, $filter_consignor_parent, $filter_archive_status, $filter_driver, $filter_driver_name, $filter_max_end_time, $filter_tracking_number, $filter_document_originals_status, $filter_has_carrier, $filter_expeditor_order_refuse_type, $filter_driver_status, $filter_patch_status, $filter_document_package_status, $filter_carrier_paid_status, $filter_sign_status, $filter_consignor_curator, $filter_has_expeditor_offers, $filter_expeditor_price_type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalListApi->apiV2ExpeditorProposalIdsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_modify_from_event** | **int**| Идентификатор события для получения заказов которые измененились после этого события | [optional]
 **filter_serial** | **string**| Порядковый номер заказа. | [optional]
 **filter_departure** | **string**| Код кладр пункта отправления. | [optional]
 **filter_destination** | **string**| Код кладр пункта назначения. | [optional]
 **filter_truck_type** | [**int[]**](../Model/int.md)| Список идентификаторов типов ТС. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterOrderStatusEnum.md)| Массив id статусов заказов. | [optional]
 **filter_proxy_status** | [**\MagDv\Cargomart\Dto\ProposalProxyStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalProxyStatusEnum.md)| Список статусов доверенности. | [optional]
 **filter_loading_from** | **\DateTime**| Дата погрузки ОТ. | [optional]
 **filter_loading_to** | **\DateTime**| Дата погрузки ДО | [optional]
 **filter_carrier** | **string**| Хэш код компании перевозчика | [optional]
 **filter_consignor** | **string**| Хэш код компании отправителя | [optional]
 **filter_branch_id** | **int**| Заказы дочерней компании | [optional]
 **filter_consignor_parent** | **string**| Хэш компании, который передается вместе с branchId если нужно включить заказы дочерних компаний (весь холдинг) | [optional]
 **filter_archive_status** | [**\MagDv\Cargomart\Dto\OrderArchiveStatus**](../Model/.md)| Статус архивации заказа | [optional]
 **filter_driver** | **int**| Идентификатор водителя | [optional]
 **filter_driver_name** | **string**| ФИО водителя | [optional]
 **filter_max_end_time** | **string**| Предел времени закрытия заказа | [optional]
 **filter_tracking_number** | **string**| Трек номер | [optional]
 **filter_document_originals_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDocumentOriginalStatusEnum**](../Model/.md)| Статус оригинала документа | [optional]
 **filter_has_carrier** | **bool**| Фильтр по наличию перевозчика. | [optional]
 **filter_expeditor_order_refuse_type** | [**\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum.md)| Наличие отказа для заказа по его типу | [optional]
 **filter_driver_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDriverStatusEnum**](../Model/.md)| Выборка по статусу назначения водителей | [optional]
 **filter_patch_status** | [**\MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterPatchStatusEnum.md)| Список статусов запроса на изменение заказа. 1 - ожидает подтверждение от отправителя, 2 - ожидает подтверждения от перевозчика, 3 - принят ввсеми сторонами, 4 - отозван экспедитором до согласования с перевозчиком, 5 - отклонен отправителем, 6 - отклонен перевозчиком, 7 - отозвано экспедитором до согласования с заказчиком | [optional]
 **filter_document_package_status** | [**\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterDocumentPackageStatusEnum.md)| Статус проверки пакетов документов (сканов) | [optional]
 **filter_carrier_paid_status** | [**\MagDv\Cargomart\Dto\ProposalFilterCarrierPaidStatusEnum**](../Model/.md)| Выборка по статусу оплат перевозчику | [optional]
 **filter_sign_status** | [**\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\ProposalFilterSignStatusEnum.md)| Фильтр подписей. | [optional]
 **filter_consignor_curator** | **int**| Идентификатор куратора со стороны заказчика. | [optional]
 **filter_has_expeditor_offers** | [**\MagDv\Cargomart\Dto\StringBooleanEnum**](../Model/.md)| Фильтр наличия предложений (в том числе ставок перевозчика). | [optional]
 **filter_expeditor_price_type** | [**\MagDv\Cargomart\Dto\OrderExpeditorPriceType[]**](../Model/\MagDv\Cargomart\Dto\OrderExpeditorPriceType.md)| Фильтр по типу согласования цены. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\ProposalListIdsResponse**](../Model/ProposalListIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
