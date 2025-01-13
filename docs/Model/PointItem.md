# # PointItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id пункта |
**title** | **string** | Название пункта | [optional]
**code** | **string** | @deprecated КЛАДР код пункта погрузки. Вместо этого использовать addressObject. | [optional]
**address** | **string** | @deprecated Адрес пункта. Вместо этого использовать addressObject. | [optional]
**address_info** | [**\MagDv\Cargomart\Dto\AddressInfo**](AddressInfo.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**address_object** | [**\MagDv\Cargomart\Dto\Address**](Address.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**work_schedule** | [**\MagDv\Cargomart\Dto\WorkSchedule**](WorkSchedule.md) |  | [optional]
**locality_name** | **string** | Краткое название пункта / полное название | [optional]
**house** | **string** | @deprecated Дом. Вместо этого использовать addressObject. | [optional]
**comment** | **string** | Комментарий | [optional]
**latitude** | **float** | @deprecated Широта. Вместо этого использовать addressObject. | [optional]
**longitude** | **float** | @deprecated Долгота. Вместо этого использовать addressObject. | [optional]
**file_ids** | **int[]** | Идентификаторы файлов со схемой проезда | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**status** | [**\MagDv\Cargomart\Dto\StoragePointStatusEnum**](StoragePointStatusEnum.md) | Статус корректности данных. 0 - статус не определен, 1 - данные корректны, 2 - неверные координаты | [optional]
**email_list** | [**\MagDv\Cargomart\Dto\PointEmailContact[]**](PointEmailContact.md) | Список email для пунктов | [optional]
**is_edm** | **bool** | Участвует в обмене ЭТрН | [optional] [default to false]
**point_shipper_diadoc_box_data** | [**\MagDv\Cargomart\Dto\DiadocBoxIdData**](DiadocBoxIdData.md) | Данные грузоотправителя из Диадока для отправки документов | [optional]
**legal_status** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус | [optional]
**legal_name** | **string** | Юридическое наименование или ФИО | [optional]
**point_shipper** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Грузополучатель/грузоотправитель | [optional]
**contact** | [**\MagDv\Cargomart\Dto\ContactItem[]**](ContactItem.md) | Список контактов | [optional]
**url** | **string** | Общая ссылка на скачивание документа | [optional]
**contract_number** | **string** | Номер договора грузоотправителя | [optional]
**contract_date** | **\DateTime** | Дата договора грузоотправителя | [optional]
**storage_type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип пункта погрузки | [optional]
**is_owner_point_shipper** | **bool** | Совпадает ли владелец с грузоотправителем | [optional] [default to false]
**owner** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Владелец инфраструктуры склада | [optional]
**access** | [**\MagDv\Cargomart\Dto\PointAccess**](PointAccess.md) | Доступы к действиям | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
