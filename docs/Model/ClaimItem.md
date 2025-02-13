# # ClaimItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID объекта |
**number** | **string** | Номер требования |
**date** | **\DateTime** | Дата создания требования (в часовом поясе создателя требования) |
**serial_id** | **int** | Порядковый номер заказа | [optional]
**order_id** | **string** | UUID или хэш объекта |
**consignor** | [**\MagDv\Cargomart\Dto\CompanyShort**](CompanyShort.md) | Заказчик | [optional]
**carrier** | [**\MagDv\Cargomart\Dto\CompanyShort**](CompanyShort.md) | Перевозчик | [optional]
**penalty_sum** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Рассчитанная сумма штрафа | [optional]
**status** | [**\MagDv\Cargomart\Dto\ClaimStatus**](ClaimStatus.md) |  |
**claimant** | [**\MagDv\Cargomart\Dto\ClaimantType**](ClaimantType.md) |  | [optional]
**respondent** | [**\MagDv\Cargomart\Dto\ClaimantType**](ClaimantType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
