# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | alpha3-код страны. |
**code** | **string** | КЛАДР код адреса c префиксом кода страны (например, для России префикс 001) |
**items** | [**\MagDv\Cargomart\Dto\AddressItems**](AddressItems.md) |  | [optional]
**gar_guid** | **string** | Идентификатор ГАР конкретного адреса с точностью до дома. Обязателен при countryCode&#x3D;RUS. | [optional]
**osm_id** | **string** | Идентификатор OpenStreetMap конкретного адреса с точностью до дома. Обязателен при countryCode&#x3D;BLR. | [optional]
**standardized_address** | **string** | Стандартизированный адрес одной строкой | [optional]
**coordinate** | [**\MagDv\Cargomart\Dto\Coordinate**](Coordinate.md) | Координаты адреса | [optional]
**postal_code** | **string** | Индекс | [optional]
**region** | **string** | @deprecated в пользу items.region. Регион | [optional]
**city** | **string** | @deprecated в пользу items.city. Город | [optional]
**settlement** | **string** | @deprecated в пользу items.settlement. Населённый пункт | [optional]
**street** | **string** | @deprecated в пользу items.street. Улица | [optional]
**house** | **string** | @deprecated в пользу items.house. Дом | [optional]
**block** | **string** | @deprecated в пользу items.block. Корпус/строение | [optional]
**locality_gar_guid** | **string** | @deprecated в пользу items.getGarGuids | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
