# # Prediction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price** | **string** | Предсказанная цена (строка, если не смогли предсказать, пустая строка) |
**expeditor_price_strategy_type** | [**\MagDv\Cargomart\Dto\ExpeditorPriceStrategyType**](ExpeditorPriceStrategyType.md) |  |
**departure_code** | **string** | Код точки отправки | [optional]
**destination_code** | **string** | Код точки назначения | [optional]
**truck_type** | **string** | Идентификатор типа кузова | [optional]
**distance** | **float** | Длина пути маршрута | [optional]
**price_per_km** | **float** | Цена за км пути маршрута | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
