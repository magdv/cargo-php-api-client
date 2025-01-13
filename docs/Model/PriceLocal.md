# # PriceLocal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор элемента справочника цен |
**pool_id** | **int** | Идентификатор пула направлений и цен |
**truck_type_id** | **int** | Идентификатор типа кузова |
**consignor_price** | **string** | Цена для отправителя по всем направлениям данного элемента справочника цен |
**carrier_price** | **string** | Цена для перевозчика (меньше суток) по всем направлениям данного элемента справочника цен |
**carrier_price_tomorrow** | **string** | Цена для перевозчика (больше суток) по всем направлениям данного элемента справочника цен |
**is_active** | **bool** | Статус элемента справочника цен (активен или нет) | [default to false]
**access** | [**\MagDv\Cargomart\Dto\PriceLocalAccess**](PriceLocalAccess.md) | Описание доступных действий по объекту | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
