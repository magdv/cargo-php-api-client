# # ClaimDowntimeCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | [**ClaimDowntimePoint[]**](ClaimDowntimePoint.md) |  | [optional]
**order** | [**\MagDv\Cargomart\Dto\ClaimDowntimeOrder**](ClaimDowntimeOrder.md) |  |
**claimant** | [**\MagDv\Cargomart\Dto\ClaimParticipant**](ClaimParticipant.md) | Реквизиты заявителя |
**respondent** | [**\MagDv\Cargomart\Dto\ClaimParticipant**](ClaimParticipant.md) | Реквизиты ответчика |
**vehicle** | [**\MagDv\Cargomart\Dto\ClaimDowntimeVehicle**](ClaimDowntimeVehicle.md) |  |
**contract** | [**\MagDv\Cargomart\Dto\ClaimDowntimeContract**](ClaimDowntimeContract.md) |  |
**bank_details** | [**\MagDv\Cargomart\Dto\ClaimBankDetails**](ClaimBankDetails.md) |  |
**downtime** | [**\MagDv\Cargomart\Dto\Downtime**](Downtime.md) | Простой по заявке |
**proofs** | [**\MagDv\Cargomart\Dto\ClaimProofDocument[]**](ClaimProofDocument.md) | Документы подтверждающие факт простоя для претензии о простое по заявке (сделать обязательными после реализации) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
