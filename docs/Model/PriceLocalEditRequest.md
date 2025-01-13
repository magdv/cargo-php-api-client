# # PriceLocalEditRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price_local_pool_id** | **int** | Идентификатор пула направлений и цен | [optional]
**truck_type_id** | **int** | Идентификатор типа кузова | [optional]
**consignor_price** | **string** | Цена для отправителя по всем направлениям данного элемента справочника цен | [optional]
**carrier_price** | **string** | Цена для перевозчика (меньше суток) по всем направлениям данного элемента справочника цен | [optional]
**carrier_price_tomorrow** | **string** | Цена для перевозчика (больше суток) по всем направлениям данного элемента справочника цен | [optional]
**is_active** | **bool** | Статус элемента справочника цен (активен или нет) | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
