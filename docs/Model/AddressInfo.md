# # AddressInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | alpha3-код страны. |
**code** | **string** | КЛАДР код адреса c префиксом кода страны (например, для России префикс 001), обязательно для не России | [optional]
**gar_guid** | **string** | Идентификатор ГАР конкретного адреса с точностью до дома. Обязателен при countryCode&#x3D;RUS. | [optional]
**osm_id** | **string** | Идентификатор OpenStreetMap конкретного адреса с точностью до дома. Обязателен при countryCode&#x3D;BLR. | [optional]
**standardized_address** | **string** | Стандартизированный адрес одной строкой | [optional]
**coordinate** | [**\MagDv\Cargomart\Dto\Coordinate**](Coordinate.md) | Координаты адреса | [optional]
**postal_code** | **string** | Индекс | [optional]
**region** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**area** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**city** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**city_district** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**settlement** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**street** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**stead** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**house** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]
**block** | [**\MagDv\Cargomart\Dto\AddressItem**](AddressItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
