# # OrderShort

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор заказа |
**serial_id** | **int** | Порядковый номер заказа | [optional]
**currency_code** | **string** | Код валюты заказа |
**vat_rate** | **float** | Ставка ндс | [optional]
**is_consignor_vat** | **bool** | Отправитель работает с НДС | [optional] [default to false]
**is_carrier_vat** | **bool** | Перевозчик работает с НДС | [optional] [default to false]
**distance** | **int** | Общее расстояние по заказу (м) | [optional]
**status_id** | [**\MagDv\Cargomart\Dto\OrderStatusEnum**](OrderStatusEnum.md) | Статуса заказа |
**ext_status_id** | [**\MagDv\Cargomart\Dto\OrderStatusEnum**](OrderStatusEnum.md) | Расширенный статус заказа |
**expeditor_id** | **string** | Хэш экспедитора | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
