# # PayloadChunkPoints

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storage_point_id** | **int** | Идентификатор склада |
**type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) |  |
**from_date** | **\DateTime** | Дата на пункте маршрута ОТ |
**from_time** | **string** | Время работы пункта маршрута ОТ. HH:mm:ss | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]
**to_date** | **\DateTime** | Дата на пункте маршрута ДО | [optional]
**to_time** | **string** | Время работы пункта маршрута ДО. HH:mm:ss | [optional]
**address** | **string** | Адрес пункта маршрута |
**house** | **string** | Номер дома пункта маршрута | [optional]
**locality_name** | **string** | Название пункта маршрута |
**location** | **string** | Полный адрес с названием точки |
**comment** | **string** | Комментарий пункта маршрута | [optional]
**contacts** | **string[]** | Контакты маршрутной точки для связи |
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]
**date** | **string** | Форматированная строка даты маршрутной точки |
**point_shipper_last_name** | **string** | Фамилия грузополучателя/грузоотправителя ИП и российских/иностранных физ.лиц | [optional]
**point_shipper_first_name** | **string** | Имя грузополучателя/грузоотправителя ИП и российских/иностранных физ.лиц | [optional]
**point_shipper_second_name** | **string** | Отчество грузополучателя/грузоотправителя ИП и российских/иностранных физ.лиц | [optional]
**point_shipper_address** | **string** | Адрес регистрации грузополучателя/грузоотправителя | [optional]
**phones** | **string[]** | Телефоны контактных лиц | [optional]
**legal_status** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус | [optional]
**company_name** | **string** | Юридическое наименование | [optional]
**inn** | **string** | ИНН грузополучателя/грузоотправителя | [optional]
**taxpayer_id** | **string** | Налоговый идентификатор  грузополучателя/грузоотправителя для иностранных юр.лиц | [optional]
**country_code** | **string** | Страна резидентства грузополучателя/грузоотправителя для иностранных юр.лиц | [optional]
**document_type** | **string** | Вид документа, удостоверяющего личность грузополучателя/грузоотправителя иностранного физ.лица | [optional]
**document_number** | **string** | Номер документа, удостоверяющего личность грузополучателя/грузоотправителя иностранного физ.лица | [optional]
**document_date** | **\DateTime** | Дата документа, удостоверяющего личность грузополучателя/грузоотправителя иностранного физ.лица | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
