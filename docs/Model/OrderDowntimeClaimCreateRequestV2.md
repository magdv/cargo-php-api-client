# # OrderDowntimeClaimCreateRequestV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | UUID или хэш объекта |
**type** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimTypeEnum**](OrderDowntimeClaimTypeEnum.md) | Тип претензии о простое |
**points** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimPoint[]**](OrderDowntimeClaimPoint.md) |  |
**proof** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimCreateProofRequest**](OrderDowntimeClaimCreateProofRequest.md) |  |
**downtime** | [**\MagDv\Cargomart\Dto\Downtime**](Downtime.md) | Простой по заявке |
**date** | **\DateTime** | Дата документа |
**number** | **string** | Номер документа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
