# # PayloadChunkCargo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Перевозимый груз |
**truck_type** | **string** | Наименование типа ТС |
**weight** | **float** | Тоннаж авто из условий заказа(в тоннах) |
**capacity** | **int** | Кубатура авто из условий заказа(в м3) | [optional]
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим | [optional]
**loading** | **int[]** | Типы погрузки-выгрузки |
**loading_type** | **string** | Название способа погрузки | [optional]
**truck_conditions** | **string** | Условия перевозки | [optional]
**truck_devices** | **string** | Дополнительное оборудование машины | [optional]
**additional_info** | **string** | Свободное сопроводительное описание к грузу или транспортировке | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
