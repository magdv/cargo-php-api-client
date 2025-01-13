# # SettingsDataRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_use_order_external_id** | **bool** | Использовать внешний идентификатор в заказах | [optional] [default to false]
**is_hide_route_addresses** | **bool** | Скрывать адреса маршрута в торгах | [optional] [default to false]
**order_external_id_label** | **string** | Название внешнего идентификатора заказа | [optional]
**order_price_check_rate** | **string** | Коэффициент от рекомендованной цены, для проверки попадания цены заказа | [optional]
**need_approve_driver_truck_changes** | **bool** | Необходимость согласовывать изменения водителя или машины у перевозчика | [optional] [default to false]
**status_using_ecn** | [**\MagDv\Cargomart\Dto\StatusUsingEcnEnum**](StatusUsingEcnEnum.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
