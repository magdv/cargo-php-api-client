# # OrderDowntimeClaim

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID объекта |
**number** | **string** | Номер претензии |
**type** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimType**](OrderDowntimeClaimType.md) |  |
**date** | **\DateTime** | Дата претензии (в часовом поясе создателя претензии) |
**downtime** | [**\MagDv\Cargomart\Dto\Downtime**](Downtime.md) | Простой по заявке |
**status** | [**\MagDv\Cargomart\Dto\ClaimStatus**](ClaimStatus.md) |  |
**points** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimPoint[]**](OrderDowntimeClaimPoint.md) |  |
**proof** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimProof**](OrderDowntimeClaimProof.md) |  | [optional]
**signed_documents** | [**\MagDv\Cargomart\Dto\SignedDocument[]**](SignedDocument.md) |  | [optional]
**reject_reason** | **string** | Среднее текстовое сообщение | [optional]
**access** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimAccess**](OrderDowntimeClaimAccess.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
