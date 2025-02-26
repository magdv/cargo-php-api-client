# # Claim

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID объекта |
**number** | **string** | Номер требования |
**type** | [**\MagDv\Cargomart\Dto\ClaimType**](ClaimType.md) |  |
**status** | [**\MagDv\Cargomart\Dto\ClaimStatus**](ClaimStatus.md) |  |
**date** | **\DateTime** | Дата подачи требования |
**order** | [**\MagDv\Cargomart\Dto\ClaimOrder**](ClaimOrder.md) |  |
**claimant** | [**\MagDv\Cargomart\Dto\ClaimParticipant**](ClaimParticipant.md) | Реквизиты заявителя |
**respondent** | [**\MagDv\Cargomart\Dto\ClaimParticipant**](ClaimParticipant.md) | Реквизиты ответчика |
**amount** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Сумма штрафа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
