# # Tracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор |
**is_active** | **bool** | Флаг активности | [optional] [default to false]
**departure** | **string** | Код кладр отправления | [optional]
**departure_radius** | **int** | Радиус отправления | [optional]
**destination** | **string** | Код кладр назначения | [optional]
**destination_radius** | **int** | Радиус назначения | [optional]
**with_reverse** | **bool** | Отслеживать в обратную сторону | [optional] [default to false]
**weight_from** | **float** | Тоннаж в кг ОТ | [optional]
**weight_to** | **float** | Тоннаж в кг ДО | [optional]
**capacity_from** | **int** | Объём груза в м3 ОТ | [optional]
**capacity_to** | **int** | Объём груза в м3 ДО | [optional]
**consignor** | **string** | Хэш код компании отправителя | [optional]
**truck_type** | **int[]** | Типы кузовов ТС | [optional]
**track_orders** | **bool** | Отслеживать заказы | [optional] [default to true]
**track_tender_lots** | **bool** | Отслеживать лоты по тендерам | [optional] [default to true]
**access** | [**\MagDv\Cargomart\Dto\TrackingAccess**](TrackingAccess.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
