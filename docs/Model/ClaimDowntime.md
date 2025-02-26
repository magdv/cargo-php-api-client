# # ClaimDowntime

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID объекта |
**status** | [**\MagDv\Cargomart\Dto\ClaimStatus**](ClaimStatus.md) |  |
**type** | [**\MagDv\Cargomart\Dto\ClaimDowntimeTypeEnum**](ClaimDowntimeTypeEnum.md) | Тип требования по простою |
**signed_documents** | [**\MagDv\Cargomart\Dto\SignedDocument[]**](SignedDocument.md) |  | [optional]
**reject_reason** | **string** | Среднее текстовое сообщение | [optional]
**access** | **object** |  | [optional]
**order** | [**\MagDv\Cargomart\Dto\ClaimDowntimeOrder**](ClaimDowntimeOrder.md) |  |
**claimant** | [**\MagDv\Cargomart\Dto\ClaimParticipant**](ClaimParticipant.md) | Реквизиты заявителя |
**respondent** | [**\MagDv\Cargomart\Dto\ClaimParticipant**](ClaimParticipant.md) | Реквизиты ответчика |
**vehicle** | [**\MagDv\Cargomart\Dto\ClaimDowntimeVehicle**](ClaimDowntimeVehicle.md) |  |
**contract** | [**\MagDv\Cargomart\Dto\ClaimDowntimeContract**](ClaimDowntimeContract.md) |  |
**bank_details** | [**\MagDv\Cargomart\Dto\ClaimBankDetails**](ClaimBankDetails.md) |  |
**points** | [**\MagDv\Cargomart\Dto\ClaimDowntimePoint[]**](ClaimDowntimePoint.md) |  |
**downtime** | [**\MagDv\Cargomart\Dto\Downtime**](Downtime.md) | Простой по заявке |
**proofs** | [**\MagDv\Cargomart\Dto\ClaimProofDocument[]**](ClaimProofDocument.md) | Документы подтверждающие факт простоя для претензии о простое по заявке (сделать обязательными после реализации) | [optional]
**date** | **\DateTime** | Дата документа |
**number** | **string** | Номер документа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
