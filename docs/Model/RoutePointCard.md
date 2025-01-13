# # RoutePointCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор |
**storage_point_id** | **int** | Идентификатор | [optional]
**address_info** | [**\MagDv\Cargomart\Dto\AddressInfo**](AddressInfo.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**address_object** | [**\MagDv\Cargomart\Dto\Address**](Address.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**code** | **string** | @deprecated КЛАДР код локации. Вместо этого использовать addressObject. | [optional]
**serial_id** | **int** | Порядковый номер в заказе | [optional]
**locality_name** | **string** | Название населенного пункта, где находится пункт маршрута | [optional]
**title** | **string** | Название пункта маршрута | [optional]
**address** | **string** | @deprecated Адрес пункта маршрута. Вместо этого использовать addressObject. | [optional]
**house** | **string** | @deprecated Номер дома пункта маршрута. Вместо этого использовать addressObject. | [optional]
**comment** | **string** | Комментарий пункта маршрута | [optional]
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]
**contact** | [**\MagDv\Cargomart\Dto\RoutePointContactInner[]**](RoutePointContactInner.md) | Контактная информация пункта маршрута. | [optional]
**is_load** | **bool** | Флаг загрузки в пункте маршрута | [optional] [default to false]
**is_edm** | **bool** | Участвует в обмене ЭТрН | [optional] [default to false]
**point_shipper_diadoc_box_data** | [**\MagDv\Cargomart\Dto\DiadocBoxIdData**](DiadocBoxIdData.md) | Данные грузоотправителя из Диадока для отправки документов | [optional]
**is_unload** | **bool** | Флаг выгрузки в пункте маршрута | [optional] [default to false]
**loading_type_id** | **int** | Идентификатор способа погрузки | [optional]
**cargo_type** | **string** | Описание типа груза | [optional]
**from_date** | **\DateTime** | Диапазон дат на пункте маршрута ОТ. YYYY-MM-DD | [optional]
**to_date** | **\DateTime** | Диапазон дат на пункте маршрута ДО. YYYY-MM-DD | [optional]
**from_time** | **string** | Время работы пункта маршрута ОТ. HH:mm | [optional]
**to_time** | **string** | Время работы пункта маршрута ДО. HH:mm | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]
**work_schedule** | [**\MagDv\Cargomart\Dto\WorkSchedule**](WorkSchedule.md) |  | [optional]
**contact_name** | **string** | Контактное ФИО | [optional]
**contact_phone** | **string** | Контакта телефон | [optional]
**contact_ext** | **string** | Добавочный/расширенная иформация | [optional]
**longitude** | **float** | @deprecated Долгота. Вместо этого использовать addressObject. | [optional]
**latitude** | **float** | @deprecated Широта. Вместо этого использовать addressObject. | [optional]
**legal_status** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус | [optional]
**legal_name** | **string** | Юридическое наименование или ФИО | [optional]
**point_shipper** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Грузополучатель/грузоотправитель | [optional]
**storage_type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип пункта погрузки | [optional]
**owner** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Владелец инфраструктуры склада | [optional]
**file_ids** | **int[]** | Список идентификаторов файлов схемы проезда | [optional]
**status** | [**\MagDv\Cargomart\Dto\StoragePointStatusEnum**](StoragePointStatusEnum.md) | Статус корректности данных. 0 - статус не определен, 1 - данные корректны, 2 - неверные координаты | [optional]
**email_list** | [**\MagDv\Cargomart\Dto\PointEmailContact[]**](PointEmailContact.md) | Список email для пунктов, отображается только владельцу или экспедитору | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
