# # ProposalCargo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | **float** | Тоннаж авто из условий заказа(в тоннах) |
**capacity** | **int** | Кубатура авто из условий заказа(в м3) |
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**conditions** | **string[]** | Условия перевозки |
**devices** | **string[]** | Дополнительное оборудование машины |
**truck_type** | **int** | Идентификатор типа ТС |
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) |  | [optional]
**loading** | **int[]** | Типы погрузки-выгрузки |
**description** | **string** | Описание |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
