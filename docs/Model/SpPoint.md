# # SpPoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Название пункта погрузки/выгрузки |
**code** | **string** | @deprecated КЛАДР код пункта. Вместо этого использовать addressObject. | [optional]
**address** | **string** | @deprecated Адрес пункта маршрута. Вместо этого использовать addressObject. | [optional]
**address_info** | [**\MagDv\Cargomart\Dto\AddressInfo**](AddressInfo.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**address_object** | [**\MagDv\Cargomart\Dto\Address**](Address.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**work_schedule** | [**\MagDv\Cargomart\Dto\WorkSchedule**](WorkSchedule.md) |  | [optional]
**house** | **string** | @deprecated Дом. Вместо этого использовать addressObject. | [optional]
**comment** | **string** | Комментарий | [optional]
**latitude** | **float** | @deprecated Широта. Вместо этого использовать addressObject. | [optional]
**longitude** | **float** | @deprecated Долгота. Вместо этого использовать addressObject. | [optional]
**file_ids** | **int[]** | Идентфикаторы файлов со схемой проезда | [optional]
**contact** | [**\MagDv\Cargomart\Dto\SpContact[]**](SpContact.md) | Список контактов | [optional]
**legal_status** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус | [optional]
**legal_name** | **string** | Юридическое наименование или ФИО | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**email_list** | [**\MagDv\Cargomart\Dto\PointEmailContact[]**](PointEmailContact.md) | Список email для пунктов | [optional]
**is_edm** | **bool** | Участвует в обмене ЭТрН | [optional] [default to false]
**point_shipper_diadoc_box_data** | [**\MagDv\Cargomart\Dto\DiadocBoxIdData**](DiadocBoxIdData.md) | Данные грузоотправителя из Диадока для отправки документов | [optional]
**point_shipper** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Грузополучатель/грузоотправитель | [optional]
**contract_number** | **string** | Номер договора грузоотправителя | [optional]
**contract_date** | **\DateTime** | Дата договора грузоотправителя | [optional]
**storage_type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип пункта погрузки | [optional]
**is_owner_point_shipper** | **bool** | Совпадает ли владелец с грузоотправителем | [optional] [default to false]
**owner** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Владелец инфраструктуры склада | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
