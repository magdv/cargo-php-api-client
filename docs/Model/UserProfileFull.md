# # UserProfileFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор |
**last_name** | **string** | Фамилия | [optional]
**first_name** | **string** | Имя | [optional]
**second_name** | **string** | Отчество | [optional]
**position** | **string** | Должность | [optional]
**email** | **string** | email | [optional]
**contact_email** | **string** | Контактный Email адрес | [optional]
**contact_email_status** | [**\MagDv\Cargomart\Dto\UserContactEmailStatusEnum**](UserContactEmailStatusEnum.md) | Статус контактного Email | [optional]
**contact_email_resend_code_after_date** | **\DateTime** | Дата когда след. раз можно будет отправить повторно код | [optional]
**contact_email_confirm_before_date** | **\DateTime** | Дата до которой надо подтвердить email | [optional]
**phone** | **string** | Телефон, только цифры | [optional]
**contact_phone** | **string** | Телефон, только цифры | [optional]
**contact_phone_ext** | **string** | Контактный телефон(добавочный номер) | [optional]
**email_un_confirmed** | **string** | Новая почта | [optional]
**email_confirm_before_date** | **\DateTime** | Дата, до которой активен запрос на смену email (только при наличии запроса на смену) | [optional]
**phone_un_confirmed** | **string** | Новый телефон | [optional]
**phone_confirm_before_date** | **\DateTime** | Дата, до которой активен запрос на смену телефона (только при наличии запроса на смену) | [optional]
**timezone** | **string** | Часовой пояс |
**role** | [**\MagDv\Cargomart\Dto\CompanyTypeEnum**](CompanyTypeEnum.md) | Роль клиента | [optional]
**role_id** | [**\MagDv\Cargomart\Dto\UserRoleEnum**](UserRoleEnum.md) | Роль в организации: 0- контакт, 1- читатель, 2- редактор, 3- владелец |
**is_blocked** | **bool** | Заблокирован ли пользователь | [optional] [default to false]
**locked_profile** | **bool** | Заблокирована ли возможность редактирования пользовательских данных | [optional] [default to false]
**is_phone_verified** | **bool** | Подтверждена ли личность по телефону | [optional] [default to false]
**verified_phone** | **string** | Подтверждённый номер телефона | [optional]
**is_validated** | **bool** | @deprecated. Прошел ли пользователь валидацию | [optional] [default to false]
**legal_status_id** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | @deprecated. Юридический статус: 1- Физическое лицо, 2- Индивидуальный предприниматель, 3- Юридическое лицо | [optional]
**is_have_bid** | **bool** | пользователь сделал хотя бы одну ставку (только для перевозчика) | [optional] [default to false]
**is_have_general_partner** | **bool** | в партнерах у пользователя есть хотя бы один из крупных отправителей (только для перевозчика) | [optional] [default to false]
**delay_send_sms** | **int** | @deprecated. Смотреть на дату. Время ожидания до возможности повторной отправки смс(сек) | [optional]
**delay_send_email** | **int** | @deprecated. Смотреть на дату. Время ожидания до возможности повторной отправки email(сек) | [optional]
**available_resend_email_code_date** | **\DateTime** | Время возможности повторной отправки email | [optional]
**available_resend_sms_code_date** | **\DateTime** | Время возможности повторной отправки СМС | [optional]
**company** | [**\MagDv\Cargomart\Dto\CompanyInfo**](.md) | Данные компании пользователя | [optional]
**access** | [**\MagDv\Cargomart\Dto\UserAccess**](UserAccess.md) |  | [optional]
**personal_manager** | [**\MagDv\Cargomart\Dto\PersonalManager[]**](PersonalManager.md) | Список персональных менеджеров компании пользователя | [optional]
**issue_certificate** | [**\MagDv\Cargomart\Dto\IssueCertificate**](IssueCertificate.md) |  | [optional]
**simple_signature_phone_verification** | [**\MagDv\Cargomart\Dto\ValueWithCodeVerification**](ValueWithCodeVerification.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
