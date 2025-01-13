# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор компании |
**client_id** | **int** | Идентификатор компании | [optional]
**logo** | **string** |  | [optional]
**short_name** | **string** | Краткое название организации |
**legal_name** | **string** |  | [optional]
**actual_address** | **string** |  | [optional]
**legal_address** | **string** | Юридический адрес компании | [optional]
**phone** | **string** | Телефон только цифры |
**email** | **string** |  | [optional]
**head_name** | **string** |  | [optional]
**is_partnership_allowed** | **bool** | Компания разрешает другим компаниям присылать себе приглашения в партнёры | [optional] [default to false]
**is_with_vat** | **bool** | Организация применяет общую систему налогообложения с НДС | [optional] [default to false]
**is_blocked** | **bool** | Заблокирован клиент | [optional] [default to false]
**is_with_branch** | **bool** | У компании есть дочерние компании | [optional] [default to false]
**inn** | **string** | ИНН организации | [optional]
**ogrn** | **string** |  | [optional]
**okpo** | **string** |  | [optional]
**kpp** | **string** |  | [optional]
**url** | **string** |  | [optional]
**description** | **string** |  | [optional]
**type** | [**\MagDv\Cargomart\Dto\CompanyTypeEnum**](CompanyTypeEnum.md) | Роль компании |
**bank_name** | **string** |  | [optional]
**operating_account** | **string** |  | [optional]
**corresponding_account** | **string** |  | [optional]
**bic** | **string** |  | [optional]
**count_create_order** | **int** | @deprecated Количество созданных заказов (только для грузоотправителя). Вместо данного поля использовать metrics.ordersCreated | [optional]
**count_winner_order** | **int** | @deprecated Количество выполненных заказов (только для грузоперевозчика). Вместо данного поля использовать metrics.ordersWon | [optional]
**activity_type** | **string** |  | [optional]
**activity_type_id** | **int** |  | [optional]
**activity_type_name** | **string** |  | [optional]
**activity_type_alias** | **string** |  | [optional]
**partner_status** | [**\MagDv\Cargomart\Dto\PartnerStatusEnum**](PartnerStatusEnum.md) | Статус партнёрства | [optional]
**partners** | [**\MagDv\Cargomart\Dto\PartnerShortItem[]**](PartnerShortItem.md) | Список крупных партнёров (только для грузоперевозчика)(через with[partner]) | [optional]
**disabled** | [**\MagDv\Cargomart\Dto\DisabledFull**](.md) | Информация о блокировке перевозчика | [optional]
**is_cooperating_general_partner** | **bool** | Есть договор с Генеральным партнёром | [optional] [default to false]
**contract** | [**\MagDv\Cargomart\Dto\PartnerContract**](PartnerContract.md) | Объект договора | [optional]
**partner_contract** | [**\MagDv\Cargomart\Dto\PartnerContractWithType[]**](PartnerContractWithType.md) | Список договоров с информацией о типе | [optional]
**metrics** | [**\MagDv\Cargomart\Dto\CompanyMetrics**](.md) | Показатели работы | [optional]
**create_date** | **string** | Дата регистрации на Каргомрат | [optional]
**register_date** | **\DateTime** | Дата регистрации организации | [optional]
**is_direct_sender** | **bool** | Является прямым отправителем | [optional] [default to false]
**status** | [**\MagDv\Cargomart\Dto\CompanyStatusEnum**](CompanyStatusEnum.md) | Cтатус клиентской валидации | [optional]
**access** | [**\MagDv\Cargomart\Dto\CompanyAccess**](.md) | Права доступа | [optional]
**is_validated** | **bool** | Валидирована ли компания | [optional] [default to false]
**legal_status_id** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус: 1- Физическое лицо, 2- Индивидуальный предприниматель, 3- Юридическое лицо | [optional]
**has_company_contact_groups** | **bool** | Наличие контактов компании. | [optional] [default to false]
**country_code** | **string** | Код страны | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
