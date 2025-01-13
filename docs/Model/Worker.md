# # Worker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор |
**last_name** | **string** | Фамилия | [optional]
**first_name** | **string** | Имя | [optional]
**second_name** | **string** | Отчество | [optional]
**email** | **string** | Электронная почта | [optional]
**phone** | **string** | Телефон | [optional]
**contact_phone** | **string** | Контактный телефон | [optional]
**contact_phone_ext** | **string** | Контактный телефон (добавочный номер) | [optional]
**contact_email** | **string** | Контактный Email пользователя | [optional]
**contact_email_status** | [**\MagDv\Cargomart\Dto\UserContactEmailStatusEnum**](UserContactEmailStatusEnum.md) | Статус контактного Email | [optional]
**position** | **string** | Должность | [optional]
**role_id** | [**\MagDv\Cargomart\Dto\UserRoleEnum**](UserRoleEnum.md) | Роль сотрудника в компании |
**is_blocked** | **bool** | Заблокирован пользователь | [optional] [default to false]
**timezone** | **string** | Часовой пояс | [optional]
**invite_status** | [**\MagDv\Cargomart\Dto\WorkerInviteStatusEnum**](WorkerInviteStatusEnum.md) |  | [optional]
**issue_certificate** | [**\MagDv\Cargomart\Dto\IssueCertificate**](IssueCertificate.md) |  | [optional]
**simple_signature_phone_verification** | [**\MagDv\Cargomart\Dto\ValueWithCodeVerification**](ValueWithCodeVerification.md) |  | [optional]
**certificate** | [**\MagDv\Cargomart\Dto\UserCertificateShort[]**](UserCertificateShort.md) | Список информации по сертификату | [optional]
**invite_expire_date** | **\DateTime** | Срок действия приглашения в сотрудники | [optional]
**locked_profile** | **bool** | Заблокирована ли возможность редактирования пользовательских данных | [optional] [default to false]
**access** | [**\MagDv\Cargomart\Dto\WorkerAccess**](WorkerAccess.md) | Объект доступа | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
