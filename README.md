# OpenAPIClient-php

REST-Full API для логистической биржи cargomart.ru


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/magdv/cargo-php-api-client.git"
    }
  ],
  "require": {
    "magdv/cargo-php-api-client": "*@dev"
  }
}
```

Then run `composer install`

Your project is free to choose the http client of your choice
Please require packages that will provide http client functionality:
https://packagist.org/providers/psr/http-client-implementation
https://packagist.org/providers/php-http/async-client-implementation
https://packagist.org/providers/psr/http-factory-implementation

As an example:

```
composer require guzzlehttp/guzzle php-http/guzzle7-adapter http-interop/http-factory-guzzle
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\AclvepTApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2InfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclvepTApi->apiV2InfoGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://cargomart.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AclvepTApi* | [**apiV2InfoGet**](docs/Api/AclvepTApi.md#apiv2infoget) | **GET** /api/v2/info | Получение информационного (reclamnogo) сообщения.
*AclvepTApi* | [**apiV2InfoIdHidePost**](docs/Api/AclvepTApi.md#apiv2infoidhidepost) | **POST** /api/v2/info/{id}/hide | Спрятать информационное (reclamnogo) сообщения.
*AuthApi* | [**apiV2AuthLoginPost**](docs/Api/AuthApi.md#apiv2authloginpost) | **POST** /api/v2/auth/login | Аутентификация пользователя
*AuthApi* | [**apiV2AuthLogoutPost**](docs/Api/AuthApi.md#apiv2authlogoutpost) | **POST** /api/v2/auth/logout | Удаление текущего токена
*AuthApi* | [**apiV2AuthRefreshTokenPost**](docs/Api/AuthApi.md#apiv2authrefreshtokenpost) | **POST** /api/v2/auth/refresh-token | Обновление токенов пользователя
*CandidateApi* | [**apiV2CandidateCountGet**](docs/Api/CandidateApi.md#apiv2candidatecountget) | **GET** /api/v2/candidate/count | Вывод количество потенциальных сотрудников компании.
*CandidateApi* | [**apiV2CandidateGet**](docs/Api/CandidateApi.md#apiv2candidateget) | **GET** /api/v2/candidate | Вывод списка потенциальных сотрудников компании.
*CandidateApi* | [**apiV2CandidateIdGet**](docs/Api/CandidateApi.md#apiv2candidateidget) | **GET** /api/v2/candidate/{id} | Получение информации по потенциальному сотруднику компании.
*CandidateApi* | [**apiV2CandidateIdPost**](docs/Api/CandidateApi.md#apiv2candidateidpost) | **POST** /api/v2/candidate/{id} | Создать сотрудника из потенциального сотрудника.
*ChatApi* | [**apiV2ChatChatIdGet**](docs/Api/ChatApi.md#apiv2chatchatidget) | **GET** /api/v2/chat/{chatId} | Получение списка сообщений чата.
*ClaimApi* | [**apiV2ClaimDowntimeIdGet**](docs/Api/ClaimApi.md#apiv2claimdowntimeidget) | **GET** /api/v2/claim/downtime/{id} | Просмотр претензии о простое
*ClaimApi* | [**apiV2ClaimGet**](docs/Api/ClaimApi.md#apiv2claimget) | **GET** /api/v2/claim | Список требований на оплату
*CompanyApi* | [**apiV2CompanyBranchAcGet**](docs/Api/CompanyApi.md#apiv2companybranchacget) | **GET** /api/v2/company/branch/ac | Поиск дочерних компаний для автокомплита
*CompanyApi* | [**apiV2CompanyBranchHighlightedGet**](docs/Api/CompanyApi.md#apiv2companybranchhighlightedget) | **GET** /api/v2/company-branch-highlighted | Метод возвращает список рекламируемых филиалов компаний.
*CompanyApi* | [**apiV2CompanyGet**](docs/Api/CompanyApi.md#apiv2companyget) | **GET** /api/v2/company | Метод возвращает все компании с учетом фильтров
*CompanyApi* | [**apiV2CompanyHashBranchGet**](docs/Api/CompanyApi.md#apiv2companyhashbranchget) | **GET** /api/v2/company/{hash}/branch | Получение списка дочерних компаний.
*CompanyApi* | [**apiV2CompanyHashCarParkGet**](docs/Api/CompanyApi.md#apiv2companyhashcarparkget) | **GET** /api/v2/company/{hash}/car-park | автопарк перевозчика.
*CompanyApi* | [**apiV2CompanyHashCarParkPatch**](docs/Api/CompanyApi.md#apiv2companyhashcarparkpatch) | **PATCH** /api/v2/company/{hash}/car-park | автопарк перевозчика.
*CompanyApi* | [**apiV2CompanyHashCarriageDirectionGet**](docs/Api/CompanyApi.md#apiv2companyhashcarriagedirectionget) | **GET** /api/v2/company/{hash}/carriage-direction | Направления перевозок отправителя.
*CompanyApi* | [**apiV2CompanyHashCarriageDirectionPatch**](docs/Api/CompanyApi.md#apiv2companyhashcarriagedirectionpatch) | **PATCH** /api/v2/company/{hash}/carriage-direction | Направления перевозок отправителя.
*CompanyApi* | [**apiV2CompanyHashCarriageRegionGet**](docs/Api/CompanyApi.md#apiv2companyhashcarriageregionget) | **GET** /api/v2/company/{hash}/carriage-region | Области перевозок.
*CompanyApi* | [**apiV2CompanyHashCarriageRegionPatch**](docs/Api/CompanyApi.md#apiv2companyhashcarriageregionpatch) | **PATCH** /api/v2/company/{hash}/carriage-region | Области перевозок.
*CompanyApi* | [**apiV2CompanyHashCommunicationContactsGet**](docs/Api/CompanyApi.md#apiv2companyhashcommunicationcontactsget) | **GET** /api/v2/company/{hash}/communication-contacts | Получение контактов для связи.
*CompanyApi* | [**apiV2CompanyHashCommunicationContactsPut**](docs/Api/CompanyApi.md#apiv2companyhashcommunicationcontactsput) | **PUT** /api/v2/company/{hash}/communication-contacts | Метод редактирует контакты для связи.
*CompanyApi* | [**apiV2CompanyHashDisabledDelete**](docs/Api/CompanyApi.md#apiv2companyhashdisableddelete) | **DELETE** /api/v2/company/{hash}/disabled | Метод удаляет компанию из чёрного списка.
*CompanyApi* | [**apiV2CompanyHashDisabledPost**](docs/Api/CompanyApi.md#apiv2companyhashdisabledpost) | **POST** /api/v2/company/{hash}/disabled | Метод добавления компании в чёрный список.
*CompanyApi* | [**apiV2CompanyHashDocumentGet**](docs/Api/CompanyApi.md#apiv2companyhashdocumentget) | **GET** /api/v2/company/{hash}/document | Метод возвращает список документов, загруженный компанией.
*CompanyApi* | [**apiV2CompanyHashDocumentIdGet**](docs/Api/CompanyApi.md#apiv2companyhashdocumentidget) | **GET** /api/v2/company/{hash}/document/{id} | Метод возвращает указанный документ, принадлежащий компании
*CompanyApi* | [**apiV2CompanyHashGet**](docs/Api/CompanyApi.md#apiv2companyhashget) | **GET** /api/v2/company/{hash} | Метод возвращает реквизиты организации по хэшу.
*CompanyApi* | [**apiV2CompanyHashKonturReportGet**](docs/Api/CompanyApi.md#apiv2companyhashkonturreportget) | **GET** /api/v2/company/{hash}/kontur-report | Получение ссылки на отчет контура по компании.
*CompanyApi* | [**apiV2CompanyHashLogoDelete**](docs/Api/CompanyApi.md#apiv2companyhashlogodelete) | **DELETE** /api/v2/company/{hash}/logo | Метод удаляет логотип организации.
*CompanyApi* | [**apiV2CompanyHashLogoGet**](docs/Api/CompanyApi.md#apiv2companyhashlogoget) | **GET** /api/v2/company/{hash}/logo | Получения логотипа оранизации.
*CompanyApi* | [**apiV2CompanyHashLogoPost**](docs/Api/CompanyApi.md#apiv2companyhashlogopost) | **POST** /api/v2/company/{hash}/logo | Метод сохраняет логотип организации.
*CompanyApi* | [**apiV2CompanyHashPartnerAcceptPut**](docs/Api/CompanyApi.md#apiv2companyhashpartneracceptput) | **PUT** /api/v2/company/{hash}/partner-accept | Метод принимет запрос от компании на партнёрство
*CompanyApi* | [**apiV2CompanyHashPartnerConditionsGet**](docs/Api/CompanyApi.md#apiv2companyhashpartnerconditionsget) | **GET** /api/v2/company/{hash}/partner-conditions | Получение условий партнёрства.
*CompanyApi* | [**apiV2CompanyHashPartnerConditionsPatch**](docs/Api/CompanyApi.md#apiv2companyhashpartnerconditionspatch) | **PATCH** /api/v2/company/{hash}/partner-conditions | Метод редактирует условия партнёрства.
*CompanyApi* | [**apiV2CompanyHashPartnerContractPut**](docs/Api/CompanyApi.md#apiv2companyhashpartnercontractput) | **PUT** /api/v2/company/{hash}/partner-contract | Метод для редактирования данных о договоре партнёров.
*CompanyApi* | [**apiV2CompanyHashPartnerDeletePut**](docs/Api/CompanyApi.md#apiv2companyhashpartnerdeleteput) | **PUT** /api/v2/company/{hash}/partner-delete | Метод удаляет компанию из партнёров
*CompanyApi* | [**apiV2CompanyHashPartnerInvitePut**](docs/Api/CompanyApi.md#apiv2companyhashpartnerinviteput) | **PUT** /api/v2/company/{hash}/partner-invite | Метод добавляет компанию в партнёры
*CompanyApi* | [**apiV2CompanyHashPartnerMessageGet**](docs/Api/CompanyApi.md#apiv2companyhashpartnermessageget) | **GET** /api/v2/company/{hash}/partner-message | Получение последнего партнёрского сообщения от компании.
*CompanyApi* | [**apiV2CompanyHashPartnerRejectPut**](docs/Api/CompanyApi.md#apiv2companyhashpartnerrejectput) | **PUT** /api/v2/company/{hash}/partner-reject | Метод отказывает компании в запросе на партнёрство
*CompanyApi* | [**apiV2CompanyHashPatch**](docs/Api/CompanyApi.md#apiv2companyhashpatch) | **PATCH** /api/v2/company/{hash} | Метод редактирует данные компании.
*CompanyApi* | [**apiV2CompanyHashPut**](docs/Api/CompanyApi.md#apiv2companyhashput) | **PUT** /api/v2/company/{hash} | Метод сохраняет реквизиты своей организации.
*CompanyApi* | [**apiV2CompanyHashRequirementGet**](docs/Api/CompanyApi.md#apiv2companyhashrequirementget) | **GET** /api/v2/company/{hash}/requirement | Требования отправителя к перевозкам.
*CompanyApi* | [**apiV2CompanyHashRequirementPatch**](docs/Api/CompanyApi.md#apiv2companyhashrequirementpatch) | **PATCH** /api/v2/company/{hash}/requirement | Требования отправителя к перевозкам.
*CompanyApi* | [**apiV2CompanyHashReviewGet**](docs/Api/CompanyApi.md#apiv2companyhashreviewget) | **GET** /api/v2/company/{hash}/review | Отзывы на компанию.
*CompanyApi* | [**apiV2CompanyHashReviewIdCommentGet**](docs/Api/CompanyApi.md#apiv2companyhashreviewidcommentget) | **GET** /api/v2/company/{hash}/review/{id}/comment | Комментарии к отзыву на компанию.
*CompanyApi* | [**apiV2CompanyHashReviewIdCommentPost**](docs/Api/CompanyApi.md#apiv2companyhashreviewidcommentpost) | **POST** /api/v2/company/{hash}/review/{id}/comment | Комментарий к отзыву на компанию.
*CompanyApi* | [**apiV2CompanyHashReviewPost**](docs/Api/CompanyApi.md#apiv2companyhashreviewpost) | **POST** /api/v2/company/{hash}/review | Отзыв на компанию.
*CompanyApi* | [**apiV2CompanyHashSettingsGet**](docs/Api/CompanyApi.md#apiv2companyhashsettingsget) | **GET** /api/v2/company/{hash}/settings | Получение настроек компании.
*CompanyApi* | [**apiV2CompanyHashSettingsPatch**](docs/Api/CompanyApi.md#apiv2companyhashsettingspatch) | **PATCH** /api/v2/company/{hash}/settings | Сохранение настроек компании.
*CompanyApi* | [**apiV2CompanyHashStoragePointGet**](docs/Api/CompanyApi.md#apiv2companyhashstoragepointget) | **GET** /api/v2/company/{hash}/storage-point | Метод возвращает список пунктов погрузки/выгрузки.
*CompanyApi* | [**apiV2CompanyLocalityGet**](docs/Api/CompanyApi.md#apiv2companylocalityget) | **GET** /api/v2/company/locality | регионы доступные для перевозок.
*CompanyApi* | [**apiV2CompanySelfBranchGet**](docs/Api/CompanyApi.md#apiv2companyselfbranchget) | **GET** /api/v2/company/self/branch | Получение списка дочерних компаний.
*CompanyApi* | [**apiV2CompanySelfCarParkGet**](docs/Api/CompanyApi.md#apiv2companyselfcarparkget) | **GET** /api/v2/company/self/car-park | Мой автопарк.
*CompanyApi* | [**apiV2CompanySelfCarParkPatch**](docs/Api/CompanyApi.md#apiv2companyselfcarparkpatch) | **PATCH** /api/v2/company/self/car-park | автопарк перевозчика.
*CompanyApi* | [**apiV2CompanySelfCarriageDirectionGet**](docs/Api/CompanyApi.md#apiv2companyselfcarriagedirectionget) | **GET** /api/v2/company/self/carriage-direction | Направления своих перевозок.
*CompanyApi* | [**apiV2CompanySelfCarriageDirectionPatch**](docs/Api/CompanyApi.md#apiv2companyselfcarriagedirectionpatch) | **PATCH** /api/v2/company/self/carriage-direction | Направления перевозок отправителя.
*CompanyApi* | [**apiV2CompanySelfCarriageRegionGet**](docs/Api/CompanyApi.md#apiv2companyselfcarriageregionget) | **GET** /api/v2/company/self/carriage-region | Области своих перевозок.
*CompanyApi* | [**apiV2CompanySelfCarriageRegionPatch**](docs/Api/CompanyApi.md#apiv2companyselfcarriageregionpatch) | **PATCH** /api/v2/company/self/carriage-region | Области перевозок.
*CompanyApi* | [**apiV2CompanySelfCarrierCountGet**](docs/Api/CompanyApi.md#apiv2companyselfcarriercountget) | **GET** /api/v2/company/self/carrier-count | Получение количества перевозчиков, которые могут участвовать в заказах
*CompanyApi* | [**apiV2CompanySelfCommunicationContactsGet**](docs/Api/CompanyApi.md#apiv2companyselfcommunicationcontactsget) | **GET** /api/v2/company/self/communication-contacts | Получение контактов для связи.
*CompanyApi* | [**apiV2CompanySelfCommunicationContactsPut**](docs/Api/CompanyApi.md#apiv2companyselfcommunicationcontactsput) | **PUT** /api/v2/company/self/communication-contacts | Метод редактирует контакты для связи.
*CompanyApi* | [**apiV2CompanySelfExpeditorContractGet**](docs/Api/CompanyApi.md#apiv2companyselfexpeditorcontractget) | **GET** /api/v2/company/self/expeditor-contract | Вывод списка экспедиторских договоров.
*CompanyApi* | [**apiV2CompanySelfGet**](docs/Api/CompanyApi.md#apiv2companyselfget) | **GET** /api/v2/company/self | Метод возвращает реквизиты моей организации.
*CompanyApi* | [**apiV2CompanySelfLogoDelete**](docs/Api/CompanyApi.md#apiv2companyselflogodelete) | **DELETE** /api/v2/company/self/logo | Метод удаляет логотип моей организации.
*CompanyApi* | [**apiV2CompanySelfLogoGet**](docs/Api/CompanyApi.md#apiv2companyselflogoget) | **GET** /api/v2/company/self/logo | Получения логотипа моей оранизации.
*CompanyApi* | [**apiV2CompanySelfLogoPost**](docs/Api/CompanyApi.md#apiv2companyselflogopost) | **POST** /api/v2/company/self/logo | Метод сохраняет логотип моей организации.
*CompanyApi* | [**apiV2CompanySelfPartnerConditionsGet**](docs/Api/CompanyApi.md#apiv2companyselfpartnerconditionsget) | **GET** /api/v2/company/self/partner-conditions | Получение условий партнёрства.
*CompanyApi* | [**apiV2CompanySelfPartnerConditionsPatch**](docs/Api/CompanyApi.md#apiv2companyselfpartnerconditionspatch) | **PATCH** /api/v2/company/self/partner-conditions | Метод редактирует условия партнёрства.
*CompanyApi* | [**apiV2CompanySelfPatch**](docs/Api/CompanyApi.md#apiv2companyselfpatch) | **PATCH** /api/v2/company/self | Метод редактирует данные моей компании.
*CompanyApi* | [**apiV2CompanySelfPut**](docs/Api/CompanyApi.md#apiv2companyselfput) | **PUT** /api/v2/company/self | Метод сохраняет реквизиты своей организации.
*CompanyApi* | [**apiV2CompanySelfRequirementGet**](docs/Api/CompanyApi.md#apiv2companyselfrequirementget) | **GET** /api/v2/company/self/requirement | Мои требования к перевозкам.
*CompanyApi* | [**apiV2CompanySelfRequirementPatch**](docs/Api/CompanyApi.md#apiv2companyselfrequirementpatch) | **PATCH** /api/v2/company/self/requirement | Требования отправителя к перевозкам.
*CompanyApi* | [**apiV2CompanySelfSettingsGet**](docs/Api/CompanyApi.md#apiv2companyselfsettingsget) | **GET** /api/v2/company/self/settings | Получение настроек своей компании.
*CompanyApi* | [**apiV2CompanySelfSettingsPatch**](docs/Api/CompanyApi.md#apiv2companyselfsettingspatch) | **PATCH** /api/v2/company/self/settings | Сохранение настроек компании.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationCompanyConfirmDelete**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationcompanyconfirmdelete) | **DELETE** /api/v2/company-confirmation/company/confirm | Отказ от данных компании.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationCompanyConfirmPost**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationcompanyconfirmpost) | **POST** /api/v2/company-confirmation/company/confirm | Подтверждение данных компании.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationCompanyDelete**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationcompanydelete) | **DELETE** /api/v2/company-confirmation/company | Откат к шагу ввода ИНН.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationCompanyPost**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationcompanypost) | **POST** /api/v2/company-confirmation/company | Установка начальных данных компании.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationCompanyProfileSendPost**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationcompanyprofilesendpost) | **POST** /api/v2/company-confirmation/company-profile-send | Отправить анкету, перейти к следующему шагу
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationCompanyPut**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationcompanyput) | **PUT** /api/v2/company-confirmation/company | Доработка данных компании (СНО, флаг декларации).
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationDocumentIdDelete**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationdocumentiddelete) | **DELETE** /api/v2/company-confirmation/document/{id} | Удаление документа.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationDocumentPost**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationdocumentpost) | **POST** /api/v2/company-confirmation/document | Загрузка нового документа
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationDocumentSendPost**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationdocumentsendpost) | **POST** /api/v2/company-confirmation/document/send | Отправка документа на проверку.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationGet**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationget) | **GET** /api/v2/company-confirmation | Получение текущего статуса валидации.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationIncomeRequestPost**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationincomerequestpost) | **POST** /api/v2/company-confirmation/income-request | Отправка запроса на добавление в сотрудники в компанию дубликат.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationRoleDelete**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationroledelete) | **DELETE** /api/v2/company-confirmation/role | Возврат к выбору роли компании.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationRolePut**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationroleput) | **PUT** /api/v2/company-confirmation/role | Установка роли клиента.
*CompanyConfirmationApi* | [**apiV2CompanyConfirmationValidationGet**](docs/Api/CompanyConfirmationApi.md#apiv2companyconfirmationvalidationget) | **GET** /api/v2/company-confirmation/validation | Получение текущего статуса валидации.
*ConfigurationApi* | [**apiV2ConfigurationGet**](docs/Api/ConfigurationApi.md#apiv2configurationget) | **GET** /api/v2/configuration | Получение текущей конфигурации системы
*ContractTypeApi* | [**apiV2ContractTypeGet**](docs/Api/ContractTypeApi.md#apiv2contracttypeget) | **GET** /api/v2/contract-type | Получение списка типов договоров.
*ContractTypeApi* | [**apiV2ContractTypeIdDelete**](docs/Api/ContractTypeApi.md#apiv2contracttypeiddelete) | **DELETE** /api/v2/contract-type/{id} | Удаление типа договора.
*ContractTypeApi* | [**apiV2ContractTypeIdGet**](docs/Api/ContractTypeApi.md#apiv2contracttypeidget) | **GET** /api/v2/contract-type/{id} | Получение конкретного типа договора.
*ContractTypeApi* | [**apiV2ContractTypeIdPatch**](docs/Api/ContractTypeApi.md#apiv2contracttypeidpatch) | **PATCH** /api/v2/contract-type/{id} | Изменение типа договора.
*ContractTypeApi* | [**apiV2ContractTypePost**](docs/Api/ContractTypeApi.md#apiv2contracttypepost) | **POST** /api/v2/contract-type | Создание типа договора.
*DeviceApi* | [**apiV2DeviceIdDelete**](docs/Api/DeviceApi.md#apiv2deviceiddelete) | **DELETE** /api/v2/device/{id} | Удаление идентификатора устройства.
*DeviceApi* | [**apiV2DevicePost**](docs/Api/DeviceApi.md#apiv2devicepost) | **POST** /api/v2/device | Регистрация нового устройства пользователя.
*DictionaryApi* | [**apiV2DictionaryAcContainerTypeGet**](docs/Api/DictionaryApi.md#apiv2dictionaryaccontainertypeget) | **GET** /api/v2/dictionary/ac/container-type | Список видов тары.
*DictionaryApi* | [**apiV2DictionaryAcCountryGet**](docs/Api/DictionaryApi.md#apiv2dictionaryaccountryget) | **GET** /api/v2/dictionary/ac/country | Список стран
*DictionaryApi* | [**apiV2DictionaryExpeditorBranchGet**](docs/Api/DictionaryApi.md#apiv2dictionaryexpeditorbranchget) | **GET** /api/v2/dictionary/expeditor-branch | Вывод списка филиалов.
*DictionaryApi* | [**apiV2DictionaryGet**](docs/Api/DictionaryApi.md#apiv2dictionaryget) | **GET** /api/v2/dictionary | Метод возвращает список словарей
*DictionaryApi* | [**apiV2OrderRefuseReasonGet**](docs/Api/DictionaryApi.md#apiv2orderrefusereasonget) | **GET** /api/v2/order-refuse-reason | Словарь причин для отказа
*DictionaryApi* | [**apiV2PriceTypeGet**](docs/Api/DictionaryApi.md#apiv2pricetypeget) | **GET** /api/v2/price-type | Словарь тип цены
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdApprovePost**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidapprovepost) | **POST** /api/v2/user-certificate/{certificateId}/approve | Подтвердить сертификат.
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdCancelPost**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidcancelpost) | **POST** /api/v2/user-certificate/{certificateId}/cancel | Отмена выдачи сертификата.
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdGet**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidget) | **GET** /api/v2/user-certificate/{certificateId} | Просмотреть информацию о сертификате
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdPut**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidput) | **PUT** /api/v2/user-certificate/{certificateId} | Обновление данных сертификата.
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdRejectPost**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidrejectpost) | **POST** /api/v2/user-certificate/{certificateId}/reject | Сообщить об ошибке в сертификате.
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdRevokePost**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidrevokepost) | **POST** /api/v2/user-certificate/{certificateId}/revoke | Отозвать сертификат.
*DigitalSignatureApi* | [**apiV2UserCertificateCertificateIdSendPost**](docs/Api/DigitalSignatureApi.md#apiv2usercertificatecertificateidsendpost) | **POST** /api/v2/user-certificate/{certificateId}/send | Отправить смс для подвтерждения сертификата.
*DigitalSignatureApi* | [**apiV2UserSelfCertificateGet**](docs/Api/DigitalSignatureApi.md#apiv2userselfcertificateget) | **GET** /api/v2/user/self/certificate | Получить список сертификатов текущего пользователя
*DigitalSignatureApi* | [**apiV2UserSelfDsPhoneVerificationCodePost**](docs/Api/DigitalSignatureApi.md#apiv2userselfdsphoneverificationcodepost) | **POST** /api/v2/user/self/ds-phone-verification-code | deprecated! Выслать код для подтверждения
*DigitalSignatureApi* | [**apiV2WorkerIdCertificateGet**](docs/Api/DigitalSignatureApi.md#apiv2workeridcertificateget) | **GET** /api/v2/worker/{id}/certificate | Получить список сертификатов пользователя
*DigitalSignatureApi* | [**apiV2WorkerIdCertificatePost**](docs/Api/DigitalSignatureApi.md#apiv2workeridcertificatepost) | **POST** /api/v2/worker/{id}/certificate | Выдача сертификата пользователю
*DigitalSignatureApi* | [**apiV2WorkerIdChatGet**](docs/Api/DigitalSignatureApi.md#apiv2workeridchatget) | **GET** /api/v2/worker/{id}/chat | Получение списка комнат сотрудника.
*DraftDocumentsApi* | [**createDraftDocument**](docs/Api/DraftDocumentsApi.md#createdraftdocument) | **POST** /api/v2/draft-document | Создание черновика документа.
*DraftDocumentsApi* | [**deleteDraftDocumentById**](docs/Api/DraftDocumentsApi.md#deletedraftdocumentbyid) | **DELETE** /api/v2/draft-document/{id} | Удаление черновика документа.
*DraftDocumentsApi* | [**getDraftDocumentById**](docs/Api/DraftDocumentsApi.md#getdraftdocumentbyid) | **GET** /api/v2/draft-document/{id} | Получение черновика документа.
*DraftDocumentsApi* | [**getDraftDocumentPdfById**](docs/Api/DraftDocumentsApi.md#getdraftdocumentpdfbyid) | **GET** /api/v2/draft-document/{id}/pdf | Получение печатной формы черновика в формате PDF.
*DraftDocumentsApi* | [**updateDraftDocumentById**](docs/Api/DraftDocumentsApi.md#updatedraftdocumentbyid) | **PUT** /api/v2/draft-document/{id} | Замена данных черновика документа.
*DriverApi* | [**apiV2DriverGet**](docs/Api/DriverApi.md#apiv2driverget) | **GET** /api/v2/driver | Получение списка водителей.
*DriverApi* | [**apiV2DriverIdDelete**](docs/Api/DriverApi.md#apiv2driveriddelete) | **DELETE** /api/v2/driver/{id} | Удаление водителя
*DriverApi* | [**apiV2DriverIdDriverAppInvitePost**](docs/Api/DriverApi.md#apiv2driveriddriverappinvitepost) | **POST** /api/v2/driver/{id}/driver-app-invite | Отправить на номер телефона водителя приглашение на установку &#39;приложения водителя&#39;.
*DriverApi* | [**apiV2DriverIdGet**](docs/Api/DriverApi.md#apiv2driveridget) | **GET** /api/v2/driver/{id} | Получение информации по водителю.
*DriverApi* | [**apiV2DriverIdPatch**](docs/Api/DriverApi.md#apiv2driveridpatch) | **PATCH** /api/v2/driver/{id} | Обновить данные водителя.
*DriverApi* | [**apiV2DriverPost**](docs/Api/DriverApi.md#apiv2driverpost) | **POST** /api/v2/driver | Создание нового водителя.
*DriverAppApi* | [**apiV2DriverAppDetailGet**](docs/Api/DriverAppApi.md#apiv2driverappdetailget) | **GET** /api/v2/driver-app/detail | Получить по группе номеров телефона информацию о статусе установки &#39;приложения водителя&#39;.
*DriverAppApi* | [**apiV2DriverAppInvitePost**](docs/Api/DriverAppApi.md#apiv2driverappinvitepost) | **POST** /api/v2/driver-app/invite | Отправить на номер телефона водителя приглашение на установку &#39;приложения водителя&#39;.
*EdmApi* | [**apiV2EdmDiadocBoxListGet**](docs/Api/EdmApi.md#apiv2edmdiadocboxlistget) | **GET** /api/v2/edm/diadoc-box-list | Получение ящиков контрагента для отправки документов через Диадок
*ExpeditorAnnexToContractApi* | [**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost**](docs/Api/ExpeditorAnnexToContractApi.md#apiv2expeditorannextocontractcontractuuidbankingdetailsapprovepost) | **POST** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details/approve | Отметка банковских реквизитов, как валидных или невалидных и требующих переподписания
*ExpeditorAnnexToContractApi* | [**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete**](docs/Api/ExpeditorAnnexToContractApi.md#apiv2expeditorannextocontractcontractuuidbankingdetailsdelete) | **DELETE** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Удаление (пометка неактивным) приложения договора с банковскими реквизитами
*ExpeditorAnnexToContractApi* | [**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet**](docs/Api/ExpeditorAnnexToContractApi.md#apiv2expeditorannextocontractcontractuuidbankingdetailsget) | **GET** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Получение банковских реквизитов, как приложения к договору
*ExpeditorAnnexToContractApi* | [**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost**](docs/Api/ExpeditorAnnexToContractApi.md#apiv2expeditorannextocontractcontractuuidbankingdetailspost) | **POST** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Создание нового приложения к договору с банковскими реквизитами (+ сразу подписываем)
*ExpeditorAnnexToContractApi* | [**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut**](docs/Api/ExpeditorAnnexToContractApi.md#apiv2expeditorannextocontractcontractuuidbankingdetailsput) | **PUT** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Обновление приложения к договору с банковскими реквизитами (+ сразу подписываем)
*ExpeditorCarrierContractApi* | [**apiV2ExpeditorCarrierContractSelfGet**](docs/Api/ExpeditorCarrierContractApi.md#apiv2expeditorcarriercontractselfget) | **GET** /api/v2/expeditor-carrier-contract/self | Получить список своих договоров с Экспедитором.
*ExpeditorCarrierContractApi* | [**expeditorCarrierContractUpdatesAdditionalAgreementPreview**](docs/Api/ExpeditorCarrierContractApi.md#expeditorcarriercontractupdatesadditionalagreementpreview) | **GET** /api/v2/expeditor-contract-updates/additional-agreement-preview | Предпросмотр файла доп. соглашения
*ExpeditorCarrierContractUpdatesApi* | [**createExpeditorContractUpdates**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#createexpeditorcontractupdates) | **POST** /api/v2/expeditor-contract-updates | Запуск процесса подписания доп. соглашения договора
*ExpeditorCarrierContractUpdatesApi* | [**expeditorCarrierContractUpdatesSendSms**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#expeditorcarriercontractupdatessendsms) | **POST** /api/v2/expeditor-contract-updates/signer/send-code | Подтверждение подписанта через sms
*ExpeditorCarrierContractUpdatesApi* | [**expeditorCarrierContractUpdatesSign**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#expeditorcarriercontractupdatessign) | **POST** /api/v2/expeditor-contract-updates/sign | Подписание доп. соглашения
*ExpeditorCarrierContractUpdatesApi* | [**getExpeditorContractUpdates**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#getexpeditorcontractupdates) | **GET** /api/v2/expeditor-contract-updates | Просмотр текущего состояние обновления договора
*ExpeditorCarrierContractUpdatesApi* | [**updateExpeditorCarrierContractCancel**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#updateexpeditorcarriercontractcancel) | **POST** /api/v2/expeditor-contract-updates/cancel | Отмена обновления договора
*ExpeditorCarrierContractUpdatesApi* | [**updateExpeditorCarrierContractCommercialConditions**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#updateexpeditorcarriercontractcommercialconditions) | **POST** /api/v2/expeditor-contract-updates/commercial-conditions | Коммерческие условия
*ExpeditorCarrierContractUpdatesApi* | [**updateExpeditorCarrierContractSigner**](docs/Api/ExpeditorCarrierContractUpdatesApi.md#updateexpeditorcarriercontractsigner) | **POST** /api/v2/expeditor-contract-updates/signer | Подписант договора
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionContractInfoPost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusioncontractinfopost) | **POST** /api/v2/expeditor-contract-conclusion/contract-info | Добавление данных компании (СНО, адреса, телефоны).
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionDelete**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusiondelete) | **DELETE** /api/v2/expeditor-contract-conclusion | Удаление текущего процесса заключения договора
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionGet**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionget) | **GET** /api/v2/expeditor-contract-conclusion | Получение текущего процесса заключения договора.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionissuecertificatephoneconfirmpost) | **POST** /api/v2/expeditor-contract-conclusion/issue-certificate-phone-confirm | Подтверждение телефона для выдачи ПЭП.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionIssueCertificatePhonePost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionissuecertificatephonepost) | **POST** /api/v2/expeditor-contract-conclusion/issue-certificate-phone | Отправка телефона для получения роли ПЭП-админ на подтверждение.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionIssueCertificatePost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionissuecertificatepost) | **POST** /api/v2/expeditor-contract-conclusion/issue-certificate | Добавление данных для выдачи ПЭП.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionKonturDataApprovePost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionkonturdataapprovepost) | **POST** /api/v2/expeditor-contract-conclusion/kontur-data-approve | Подтверждение данных полученных из контура.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionPost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionpost) | **POST** /api/v2/expeditor-contract-conclusion | Создание нового процесса заключения договора.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionSignerPost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionsignerpost) | **POST** /api/v2/expeditor-contract-conclusion/signer | Выбор подписываещего лица.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionSigningMethodPost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionsigningmethodpost) | **POST** /api/v2/expeditor-contract-conclusion/signing-method | Выбор способа подписания.
*ExpeditorContractConclusionApi* | [**apiV2ExpeditorContractConclusionStatusPost**](docs/Api/ExpeditorContractConclusionApi.md#apiv2expeditorcontractconclusionstatuspost) | **POST** /api/v2/expeditor-contract-conclusion/status | Переход к указанному статусу.
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorConditionsGet**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorconditionsget) | **GET** /api/v2/order-draft-expeditor/conditions | Получить условия перевозки
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorDraftIdDelete**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditordraftiddelete) | **DELETE** /api/v2/order-draft-expeditor/{draftId} | Пометить черновик заказа удалённым
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorDraftIdGet**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditordraftidget) | **GET** /api/v2/order-draft-expeditor/{draftId} | Просмотр черновика заказа
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorDraftIdPublishPost**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditordraftidpublishpost) | **POST** /api/v2/order-draft-expeditor/{draftId}/publish | Публикация черновика заказа.
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorDraftIdPut**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditordraftidput) | **PUT** /api/v2/order-draft-expeditor/{draftId} | Редактирование черновика заказа
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorPost**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorpost) | **POST** /api/v2/order-draft-expeditor | Создать черновик заказа
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorPriceGet**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorpriceget) | **GET** /api/v2/order-draft-expeditor/price | Получить цену по маршруту
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorPriceV2Get**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorpricev2get) | **GET** /api/v2/order-draft-expeditor/price-v2 | Получить цену по маршруту
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorRecommendedPriceGet**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorrecommendedpriceget) | **GET** /api/v2/order-draft-expeditor/recommended-price | Получить рекомендованную цену по маршруту
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorStepBidGet**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorstepbidget) | **GET** /api/v2/order-draft-expeditor/step-bid | Получить шаг ставки по цене
*ExpeditorDraftApi* | [**apiV2OrderDraftExpeditorValidatePost**](docs/Api/ExpeditorDraftApi.md#apiv2orderdraftexpeditorvalidatepost) | **POST** /api/v2/order-draft-expeditor/validate | Бизнес валидация черновика.
*ExpeditorOfferApi* | [**apiV2ExpeditorProposalIdExpeditorOfferGet**](docs/Api/ExpeditorOfferApi.md#apiv2expeditorproposalidexpeditorofferget) | **GET** /api/v2/expeditor-proposal/{id}/expeditor-offer | Список предложений от перевозчиков для экспедитора.
*ExpeditorOfferApi* | [**apiV2OrderOrderIdExpeditorOfferGet**](docs/Api/ExpeditorOfferApi.md#apiv2orderorderidexpeditorofferget) | **GET** /api/v2/order/{orderId}/expeditor-offer | Список предложений от перевозчиков для отправителя.
*ExpeditorOfferApi* | [**apiV2OrderOrderIdExpeditorOfferPost**](docs/Api/ExpeditorOfferApi.md#apiv2orderorderidexpeditorofferpost) | **POST** /api/v2/order/{orderId}/expeditor-offer | Создание или замена предложения перевозчика по заказу
*ExpeditorOfferApi* | [**apiV2OrderOrderIdNegotiatePost**](docs/Api/ExpeditorOfferApi.md#apiv2orderorderidnegotiatepost) | **POST** /api/v2/order/{orderId}/negotiate | Изменение заказчиком условий заказа, чтобы ближе соответствовать поступившим предложениям от перевозчиков
*ExpeditorPaymentApi* | [**apiV2OrderOrderIdExpeditorPaymentGet**](docs/Api/ExpeditorPaymentApi.md#apiv2orderorderidexpeditorpaymentget) | **GET** /api/v2/order/{orderId}/expeditor-payment | Получения списка оплат
*ExpeditorProposalCarrierAskApi* | [**apiV2ExpeditorProposalIdCarrierAskGet**](docs/Api/ExpeditorProposalCarrierAskApi.md#apiv2expeditorproposalidcarrieraskget) | **GET** /api/v2/expeditor-proposal/{id}/carrier-ask | Список ставок от перевозчиков для Экспедитора.
*ExpeditorProposalChatApi* | [**apiV2ExpeditorProposalIdChatGet**](docs/Api/ExpeditorProposalChatApi.md#apiv2expeditorproposalidchatget) | **GET** /api/v2/expeditor-proposal/{id}/chat | Получение списка комнат по заказу Экспедитора.
*ExpeditorProposalCustomerDocsTrackingApi* | [**apiV2ExpeditorProposalIdCustomerDocsTrackingPost**](docs/Api/ExpeditorProposalCustomerDocsTrackingApi.md#apiv2expeditorproposalidcustomerdocstrackingpost) | **POST** /api/v2/expeditor-proposal/{id}/customer-docs-tracking | Добавление трек-номера отслеживания отправления с документами для заказчика
*ExpeditorProposalDowntimeClaimApi* | [**createProposalCarrierDowntimeClaimDirectToThirdParty**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#createproposalcarrierdowntimeclaimdirecttothirdparty) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-direct-to-third-party | Перевыставление Экспедитором претензии о простое Заказчику
*ExpeditorProposalDowntimeClaimApi* | [**createProposalCarrierDowntimeClaimPayment**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#createproposalcarrierdowntimeclaimpayment) | **PUT** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-payment | Создания или обновления информации об оплате Экспедитором претензии о простое со стороны Перевозчика
*ExpeditorProposalDowntimeClaimApi* | [**createProposalCarrierDowntimeClaimReject**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#createproposalcarrierdowntimeclaimreject) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject | Отказ Экспедитором претензии о простое
*ExpeditorProposalDowntimeClaimApi* | [**previewProposalCarrierDowntimeClaimPdf**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#previewproposalcarrierdowntimeclaimpdf) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-pdf | Получить ссылку на превью документа претензии Перевозчика о простое по заявке
*ExpeditorProposalDowntimeClaimApi* | [**previewProposalExpeditorDowntimeClaimReject**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#previewproposalexpeditordowntimeclaimreject) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject-preview | Получить ссылку на превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке
*ExpeditorProposalDowntimeClaimApi* | [**viewPdfProposalExpeditorDowntimeClaim**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#viewpdfproposalexpeditordowntimeclaim) | **GET** /api/v2/expeditor-proposal/{id}/expeditor-downtime-claim-pdf | Превью документа претензии Экспедитора о простое по заявке
*ExpeditorProposalDowntimeClaimApi* | [**viewPdfProposalExpeditorDowntimeClaimReject**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#viewpdfproposalexpeditordowntimeclaimreject) | **GET** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject-pdf | Превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке
*ExpeditorProposalDowntimeClaimApi* | [**viewProposalCarrierDowntimeClaim**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#viewproposalcarrierdowntimeclaim) | **GET** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim | Просмотр претензии о простое
*ExpeditorProposalDowntimeClaimApi* | [**viewProposalClaimList**](docs/Api/ExpeditorProposalDowntimeClaimApi.md#viewproposalclaimlist) | **GET** /api/v2/expeditor-proposal/{id}/claim | Просмотр списка претензий
*ExpeditorProposalItemApi* | [**apiV2ExpeditorEcnGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorecnget) | **GET** /api/v2/expeditor-ecn | Получение списка ЭТрН
*ExpeditorProposalItemApi* | [**apiV2ExpeditorEcnIdGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorecnidget) | **GET** /api/v2/expeditor-ecn/{id} | Получение ЭТрН по ID
*ExpeditorProposalItemApi* | [**apiV2ExpeditorEcnIdHistoryGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorecnidhistoryget) | **GET** /api/v2/expeditor-ecn/{id}/history | История ЭТрН
*ExpeditorProposalItemApi* | [**apiV2ExpeditorEcnIdSignPost**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorecnidsignpost) | **POST** /api/v2/expeditor-ecn/{id}/sign | Подписать ЭТрН
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdBidGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidbidget) | **GET** /api/v2/expeditor-proposal/{id}/bid | Список ставок от перевозчиков.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdDenyBankingDetailsPost**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposaliddenybankingdetailspost) | **POST** /api/v2/expeditor-proposal/{id}/deny-banking-details | Пометить банковские реквизиты ошибочными.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdEcnGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidecnget) | **GET** /api/v2/expeditor-proposal/{id}/ecn | Получение списка ЭТрН у заказа
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdEcnPost**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidecnpost) | **POST** /api/v2/expeditor-proposal/{id}/ecn | Создание ЭТрН для заказа.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdExpeditorOfferGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidexpeditorofferget) | **GET** /api/v2/expeditor-proposal/{id}/expeditor-offer | Список предложений от перевозчиков для экспедитора.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidget) | **GET** /api/v2/expeditor-proposal/{id} | Получение информации для карточки заказа Экспедитора.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdPatchPost**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidpatchpost) | **POST** /api/v2/expeditor-proposal/{id}/patch | Создание запроса на изменение заказа экспедитором.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdPinGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidpinget) | **GET** /api/v2/expeditor-proposal/{id}/pin | Список пользователей, пометивших флагом заказ перевозчика.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdRoadmapGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidroadmapget) | **GET** /api/v2/expeditor-proposal/{id}/roadmap | Получение роадмап
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdRoutePathGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidroutepathget) | **GET** /api/v2/expeditor-proposal/{id}/route-path | Получение данных по точкам маршрута.
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdSignedDocumentGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidsigneddocumentget) | **GET** /api/v2/expeditor-proposal/{id}/signed-document | Получение списка документов заявки со списком титулов
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdSimpleDocumentsGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidsimpledocumentsget) | **GET** /api/v2/expeditor-proposal/{id}/simple-documents | Получение списка документов заявки со списком титулов
*ExpeditorProposalItemApi* | [**apiV2ExpeditorProposalIdVisitorGet**](docs/Api/ExpeditorProposalItemApi.md#apiv2expeditorproposalidvisitorget) | **GET** /api/v2/expeditor-proposal/{id}/visitor | Список пользователей, просмотревших заказ перевозчика.
*ExpeditorProposalItemApi* | [**getProposalActNonDeliveryCar**](docs/Api/ExpeditorProposalItemApi.md#getproposalactnondeliverycar) | **GET** /api/v2/expeditor-proposal/{uuid}/digital-act-non-delivery-car | Получить данные электронного акта о неподаче машины на погрузку
*ExpeditorProposalItemApi* | [**updateExpeditorProposalCarrierTrackingNumber**](docs/Api/ExpeditorProposalItemApi.md#updateexpeditorproposalcarriertrackingnumber) | **POST** /api/v2/expeditor-proposal/{id}/original-docs-tracking-number | Редактирование трек-номера перевозчика
*ExpeditorProposalListApi* | [**apiV2ExpeditorProposalExistsGet**](docs/Api/ExpeditorProposalListApi.md#apiv2expeditorproposalexistsget) | **GET** /api/v2/expeditor-proposal/exists | Метод для существования хоть одной записи по запросу.
*ExpeditorProposalListApi* | [**apiV2ExpeditorProposalGet**](docs/Api/ExpeditorProposalListApi.md#apiv2expeditorproposalget) | **GET** /api/v2/expeditor-proposal | Метод для получения списка заказов Экспедитора согласно фильтру.
*ExpeditorProposalListApi* | [**apiV2ExpeditorProposalIdsGet**](docs/Api/ExpeditorProposalListApi.md#apiv2expeditorproposalidsget) | **GET** /api/v2/expeditor-proposal/ids | Метод для получения списка ids заказов Экспедитора согласно фильтру.
*ExpeditorProposalPaymentApi* | [**apiV2ExpeditorProposalIdCarrierPaymentGet**](docs/Api/ExpeditorProposalPaymentApi.md#apiv2expeditorproposalidcarrierpaymentget) | **GET** /api/v2/expeditor-proposal/{id}/carrier-payment | Получения списка оплат
*ExpeditorProposalPaymentApi* | [**apiV2ExpeditorProposalIdCarrierPaymentPut**](docs/Api/ExpeditorProposalPaymentApi.md#apiv2expeditorproposalidcarrierpaymentput) | **PUT** /api/v2/expeditor-proposal/{id}/carrier-payment | Создание или обновление информации о платеже перевозчику.
*ExpeditorProposalPaymentApi* | [**apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut**](docs/Api/ExpeditorProposalPaymentApi.md#apiv2expeditorproposalidconsignorexpeditorpaymentput) | **PUT** /api/v2/expeditor-proposal/{id}/consignor-expeditor-payment | Создания или обновления информации об оплате заказчиком счёта экспедитора
*ExpeditorProposalPaymentApi* | [**apiV2ExpeditorProposalIdPaymentGet**](docs/Api/ExpeditorProposalPaymentApi.md#apiv2expeditorproposalidpaymentget) | **GET** /api/v2/expeditor-proposal/{id}/payment | Список оплат по счёту
*ExpeditorProposalProxyApi* | [**apiV2ExpeditorProposalIdProxyProxyIdCancellationPost**](docs/Api/ExpeditorProposalProxyApi.md#apiv2expeditorproposalidproxyproxyidcancellationpost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/cancellation | Аннулировать доверенность.
*ExpeditorProposalProxyApi* | [**apiV2ExpeditorProposalIdProxyProxyIdFilePost**](docs/Api/ExpeditorProposalProxyApi.md#apiv2expeditorproposalidproxyproxyidfilepost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/file | Генерация файла доверенности на водителя с данными пользователя из ЭЦП.
*ExpeditorProposalProxyApi* | [**apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost**](docs/Api/ExpeditorProposalProxyApi.md#apiv2expeditorproposalidproxyproxyidsigncancellationpost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign-cancellation | Подписать аннулирование.
*ExpeditorProposalProxyApi* | [**apiV2ExpeditorProposalIdProxyProxyIdSignPost**](docs/Api/ExpeditorProposalProxyApi.md#apiv2expeditorproposalidproxyproxyidsignpost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign | Подписать доверенность.
*ExpeditorProposalRefuseApi* | [**apiV2ExpeditorProposalIdRefuseCarrierPost**](docs/Api/ExpeditorProposalRefuseApi.md#apiv2expeditorproposalidrefusecarrierpost) | **POST** /api/v2/expeditor-proposal/{id}/refuse-carrier | Оформить отказ Экспедитора от Перевозчика.
*ExpeditorProposalRefuseApi* | [**apiV2ExpeditorProposalIdRefusePost**](docs/Api/ExpeditorProposalRefuseApi.md#apiv2expeditorproposalidrefusepost) | **POST** /api/v2/expeditor-proposal/{id}/refuse | Оформить отказ Экспедитора от заказа.
*ExpeditorTaskApi* | [**freezeExpeditorTask**](docs/Api/ExpeditorTaskApi.md#freezeexpeditortask) | **POST** /api/v2/expeditor-task/{taskId}/freeze | Откладывание задачи
*ExpeditorTaskApi* | [**getExpeditorTask**](docs/Api/ExpeditorTaskApi.md#getexpeditortask) | **GET** /api/v2/expeditor-task/{taskId} | Получение информации о задаче
*ExpeditorTaskApi* | [**getExpeditorTaskList**](docs/Api/ExpeditorTaskApi.md#getexpeditortasklist) | **GET** /api/v2/expeditor-task | Получение списка задач
*ExpeditorTaskApi* | [**selfAssignExpeditorTask**](docs/Api/ExpeditorTaskApi.md#selfassignexpeditortask) | **POST** /api/v2/expeditor-task/{taskId}/self-assign | Прикрепление задачи к себе
*ExpeditorTaskApi* | [**sendExpeditorTaskResolution**](docs/Api/ExpeditorTaskApi.md#sendexpeditortaskresolution) | **POST** /api/v2/expeditor-task/{taskId}/resolution | Отправка резолюции
*ExpeditorTaskApi* | [**unassignExpeditorTask**](docs/Api/ExpeditorTaskApi.md#unassignexpeditortask) | **POST** /api/v2/expeditor-task/{taskId}/unassign | Открепление задачи от себя
*ExpeditorUtilsApi* | [**apiV2ExpeditorAcCuratorGet**](docs/Api/ExpeditorUtilsApi.md#apiv2expeditoraccuratorget) | **GET** /api/v2/expeditor/ac/curator | Поиск кураторов заказчика
*FileApi* | [**apiV2FileClearDelete**](docs/Api/FileApi.md#apiv2filecleardelete) | **DELETE** /api/v2/file/clear | Удаление всех временных файлов пользователя, не привязанных к документам.
*FileApi* | [**apiV2FileDelete**](docs/Api/FileApi.md#apiv2filedelete) | **DELETE** /api/v2/file | Удаление списка файлов.
*FileApi* | [**apiV2FileGet**](docs/Api/FileApi.md#apiv2fileget) | **GET** /api/v2/file | Получение списка не привязанных к документам временных файлов
*FileApi* | [**apiV2FileIdDelete**](docs/Api/FileApi.md#apiv2fileiddelete) | **DELETE** /api/v2/file/{id} | Удаление файла по его идентификатору.
*FileApi* | [**apiV2FilePost**](docs/Api/FileApi.md#apiv2filepost) | **POST** /api/v2/file | Загрузка не привязанного к документам файла
*FileApi* | [**apiV2UploadPost**](docs/Api/FileApi.md#apiv2uploadpost) | **POST** /api/v2/upload | Загрузка временного файла, не привязанного ни к чему
*IndexOtherApi* | [**apiV2StatsPriceStatGet**](docs/Api/IndexOtherApi.md#apiv2statspricestatget) | **GET** /api/v2/stats/price-stat | Получить цену по маршруту
*ItineraryApi* | [**apiV2ItineraryByKladrGet**](docs/Api/ItineraryApi.md#apiv2itinerarybykladrget) | **GET** /api/v2/itinerary/by-kladr | Метод возвращает данные маршрута, по точкам кладра.
*LandingApi* | [**apiV2LandingSendEmailPost**](docs/Api/LandingApi.md#apiv2landingsendemailpost) | **POST** /api/v2/landing/send-email | Отправка email.
*LocalityApi* | [**apiV2LocalityGet**](docs/Api/LocalityApi.md#apiv2localityget) | **GET** /api/v2/locality | Поиск по кладру.
*LocalityApi* | [**apiV2LocalityNearestGet**](docs/Api/LocalityApi.md#apiv2localitynearestget) | **GET** /api/v2/locality/nearest | Поиск ближайших локалити в радиусе 50 км от заданных координат
*MessageApi* | [**apiV2MessageCountGet**](docs/Api/MessageApi.md#apiv2messagecountget) | **GET** /api/v2/message/count | Получение количества сообщений
*MessageApi* | [**apiV2MessageGet**](docs/Api/MessageApi.md#apiv2messageget) | **GET** /api/v2/message | Получение всех сообщений
*MessageApi* | [**apiV2MessageIdDelete**](docs/Api/MessageApi.md#apiv2messageiddelete) | **DELETE** /api/v2/message/{id} | Удаление сообщения
*MessageApi* | [**apiV2MessageIdGet**](docs/Api/MessageApi.md#apiv2messageidget) | **GET** /api/v2/message/{id} | Получение сообщения
*MessageApi* | [**apiV2MessageMarkAllAsReadPost**](docs/Api/MessageApi.md#apiv2messagemarkallasreadpost) | **POST** /api/v2/message/mark-all-as-read | Пометить все сообщения как прочитанные
*MetricApi* | [**apiV2MetricsLocalityPost**](docs/Api/MetricApi.md#apiv2metricslocalitypost) | **POST** /api/v2/metrics/locality | Отправка нового события метрики для поиска по пунктам отправления/назначения
*OrderActNonDeliveryCarApi* | [**apiV2OrderCmUuidActNonDeliveryCarGet**](docs/Api/OrderActNonDeliveryCarApi.md#apiv2ordercmuuidactnondeliverycarget) | **GET** /api/v2/order/{cmUuid}/act-non-delivery-car | Скачать акт о неподаче машины на погрузку.
*OrderActNonDeliveryCarApi* | [**cancelDigitalActNonDeliveryCarByUuid**](docs/Api/OrderActNonDeliveryCarApi.md#canceldigitalactnondeliverycarbyuuid) | **POST** /api/v2/act-non-delivery-car/{uuid}/cancel | Отозвать электронный акт о неподаче машины на погрузку по идентификатору
*OrderActNonDeliveryCarApi* | [**createDigitalActNonDeliveryCar**](docs/Api/OrderActNonDeliveryCarApi.md#createdigitalactnondeliverycar) | **POST** /api/v2/order/{cmUuid}/digital-act-non-delivery-car | Создать электронный акт о неподаче машины на погрузку
*OrderActNonDeliveryCarApi* | [**getOrderActNonDeliveryCar**](docs/Api/OrderActNonDeliveryCarApi.md#getorderactnondeliverycar) | **GET** /api/v2/order/{cmUuid}/digital-act-non-delivery-car | Получить данные электронного акта о неподаче машины на погрузку
*OrderActNonDeliveryCarApi* | [**getOrderActNonDeliveryCarByUuid**](docs/Api/OrderActNonDeliveryCarApi.md#getorderactnondeliverycarbyuuid) | **GET** /api/v2/act-non-delivery-car/{uuid} | Получить данные электронного акта о неподаче машины на погрузку по идентификатору
*OrderCarrierAskApi* | [**apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost**](docs/Api/OrderCarrierAskApi.md#apiv2orderorderidcarrieraskcarrieraskidacceptpost) | **POST** /api/v2/order/{orderId}/carrier-ask/{carrierAskId}/accept | Принятие заказчиком ставки перевозчика по заявке
*OrderCarrierAskApi* | [**apiV2OrderOrderIdCarrierAskDelete**](docs/Api/OrderCarrierAskApi.md#apiv2orderorderidcarrieraskdelete) | **DELETE** /api/v2/order/{orderId}/carrier-ask | Отзыв ставки перевозчиком
*OrderCarrierAskApi* | [**apiV2OrderOrderIdCarrierAskPost**](docs/Api/OrderCarrierAskApi.md#apiv2orderorderidcarrieraskpost) | **POST** /api/v2/order/{orderId}/carrier-ask | Создание или замена ставки перевозчика по заявке
*OrderCarrierAskApi* | [**apiV2OrderOrderIdCarrierAskStatGet**](docs/Api/OrderCarrierAskApi.md#apiv2orderorderidcarrieraskstatget) | **GET** /api/v2/order/{orderId}/carrier-ask-stat | Получение информации отправителем информации о текущей минимальной ставке и общей статистики по ставкам
*OrderCategoryStatisticsApi* | [**apiV2OrderCategoryStatisticsGet**](docs/Api/OrderCategoryStatisticsApi.md#apiv2ordercategorystatisticsget) | **GET** /api/v2/order/category-statistics | Получение статистики заказов по категориям
*OrderChatApi* | [**apiV2OrderOrderIdChatGet**](docs/Api/OrderChatApi.md#apiv2orderorderidchatget) | **GET** /api/v2/order/{orderId}/chat | Получение списка комнат по заказу.
*OrderChatApi* | [**apiV2OrderOrderIdChatTypePost**](docs/Api/OrderChatApi.md#apiv2orderorderidchattypepost) | **POST** /api/v2/order/{orderId}/chat/{type} | создание комнаты по типу.
*OrderCommentApi* | [**apiV2OrderOrderIdCommentGet**](docs/Api/OrderCommentApi.md#apiv2orderorderidcommentget) | **GET** /api/v2/order/{orderId}/comment | Метод возвращает список комментариев по заказу.
*OrderCommentApi* | [**apiV2OrderOrderIdCommentIdReplyPost**](docs/Api/OrderCommentApi.md#apiv2orderorderidcommentidreplypost) | **POST** /api/v2/order/{orderId}/comment/{id}/reply | Добавление ответа на комментарий
*OrderCommentApi* | [**apiV2OrderOrderIdCommentPost**](docs/Api/OrderCommentApi.md#apiv2orderorderidcommentpost) | **POST** /api/v2/order/{orderId}/comment | Создание комментария
*OrderConditionsApi* | [**getOrderConditions**](docs/Api/OrderConditionsApi.md#getorderconditions) | **GET** /api/v2/order-conditions | Получить условия перевозки
*OrderDocumentApi* | [**apiV2OrderDocumentDocumentIdDelete**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentdocumentiddelete) | **DELETE** /api/v2/order-document/{documentId} | Удаление документа
*OrderDocumentApi* | [**apiV2OrderDocumentDocumentIdGet**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentdocumentidget) | **GET** /api/v2/order-document/{documentId} | Получение документа
*OrderDocumentApi* | [**apiV2OrderDocumentDocumentIdPut**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentdocumentidput) | **PUT** /api/v2/order-document/{documentId} | Редактирование документа
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdAcceptPost**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageidacceptpost) | **POST** /api/v2/order-document-package/{packageId}/accept | Подтверждение что пакет сканов документов перевозчика принят
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdDocumentPost**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageiddocumentpost) | **POST** /api/v2/order-document-package/{packageId}/document | Создание документа
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdGet**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageidget) | **GET** /api/v2/order-document-package/{packageId} | Получение пакета документов по заказу
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdModerationPost**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageidmoderationpost) | **POST** /api/v2/order-document-package/{packageId}/moderation | Отправка пакета документов на проверку
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdRejectPost**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageidrejectpost) | **POST** /api/v2/order-document-package/{packageId}/reject | Отклонение пакета сканов документов перевозчика
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdShowToCustomerPost**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageidshowtocustomerpost) | **POST** /api/v2/order-document-package/{packageId}/show-to-customer | Установка возможности просмотра документа заказчиком
*OrderDocumentApi* | [**apiV2OrderDocumentPackagePackageIdUpdatePut**](docs/Api/OrderDocumentApi.md#apiv2orderdocumentpackagepackageidupdateput) | **PUT** /api/v2/order-document-package/{packageId}/update | Валидация пакета документов перед сохранением файлов в документы заказа и отправкой на модерацию
*OrderDowntimeClaimApi* | [**approveOrderDowntimeClaim**](docs/Api/OrderDowntimeClaimApi.md#approveorderdowntimeclaim) | **POST** /api/v2/order/{orderId}/expeditor-downtime-claim-approve | Утверждение Заказчиком претензии Экспедитора о простое
*OrderDowntimeClaimApi* | [**cancelOrderDowntimeClaim**](docs/Api/OrderDowntimeClaimApi.md#cancelorderdowntimeclaim) | **POST** /api/v2/order/{orderId}/downtime-claim-cancel | Отмена Перевозчиком претензии о простое
*OrderDowntimeClaimApi* | [**createOrderDowntimeClaim**](docs/Api/OrderDowntimeClaimApi.md#createorderdowntimeclaim) | **POST** /api/v2/order/{orderId}/downtime-claim | Создание претензии о простое
*OrderDowntimeClaimApi* | [**createOrderDowntimeClaimCalculate**](docs/Api/OrderDowntimeClaimApi.md#createorderdowntimeclaimcalculate) | **POST** /api/v2/order/{orderId}/downtime-claim-calculate | Расчёт претензии о простое
*OrderDowntimeClaimApi* | [**createOrderDowntimeClaimProof**](docs/Api/OrderDowntimeClaimApi.md#createorderdowntimeclaimproof) | **POST** /api/v2/order/{orderId}/downtime-claim-proof | Загрузка подтверждений простоя для претензии о простое
*OrderDowntimeClaimApi* | [**getOrderClaim**](docs/Api/OrderDowntimeClaimApi.md#getorderclaim) | **GET** /api/v2/order/{orderId}/claim | Получение списка требований по заказу
*OrderDowntimeClaimApi* | [**previewOrderDowntimeClaimReject**](docs/Api/OrderDowntimeClaimApi.md#previeworderdowntimeclaimreject) | **POST** /api/v2/order/{orderId}/expeditor-downtime-claim-reject-preview | Получить ссылку на превью документа ответа Заказчика в виде отклонения претензии о простое по заявке
*OrderDowntimeClaimApi* | [**rejectOrderDowntimeClaim**](docs/Api/OrderDowntimeClaimApi.md#rejectorderdowntimeclaim) | **POST** /api/v2/order/{orderId}/expeditor-downtime-claim-reject | Отказ Заказчика в согласовании претензии Экспедитора о простое
*OrderDowntimeClaimApi* | [**signOrderDowntimeClaim**](docs/Api/OrderDowntimeClaimApi.md#signorderdowntimeclaim) | **POST** /api/v2/order/{orderId}/downtime-claim-sign | Подписание претензии о простое по заявке
*OrderDowntimeClaimApi* | [**viewPdfOrderDowntimeClaim**](docs/Api/OrderDowntimeClaimApi.md#viewpdforderdowntimeclaim) | **GET** /api/v2/order/{orderId}/downtime-claim-pdf | Превью документа претензии о простое по заявке
*OrderDowntimeClaimApi* | [**viewPdfOrderDowntimeClaimApprove**](docs/Api/OrderDowntimeClaimApi.md#viewpdforderdowntimeclaimapprove) | **GET** /api/v2/order/{orderId}/expeditor-downtime-claim-approve-pdf | Превью документа ответа Заказчика в виде согласования претензии о простое по заявке
*OrderDowntimeClaimApi* | [**viewPdfOrderDowntimeClaimReject**](docs/Api/OrderDowntimeClaimApi.md#viewpdforderdowntimeclaimreject) | **GET** /api/v2/order/{orderId}/expeditor-downtime-claim-reject-pdf | Превью документа ответа Заказчика в виде отклонения претензии о простое по заявке
*OrderDraftApi* | [**apiV2OrderDraftDraftIdDelete**](docs/Api/OrderDraftApi.md#apiv2orderdraftdraftiddelete) | **DELETE** /api/v2/order-draft/{draftId} | Удаление черновика заказа
*OrderDraftApi* | [**apiV2OrderDraftDraftIdGet**](docs/Api/OrderDraftApi.md#apiv2orderdraftdraftidget) | **GET** /api/v2/order-draft/{draftId} | Получение информации о черновике  заказа.
*OrderDraftApi* | [**apiV2OrderDraftDraftIdPut**](docs/Api/OrderDraftApi.md#apiv2orderdraftdraftidput) | **PUT** /api/v2/order-draft/{draftId} | Редактирование черновика заказа
*OrderDraftApi* | [**apiV2OrderDraftGet**](docs/Api/OrderDraftApi.md#apiv2orderdraftget) | **GET** /api/v2/order-draft | Список черновиков
*OrderDraftApi* | [**apiV2OrderDraftPost**](docs/Api/OrderDraftApi.md#apiv2orderdraftpost) | **POST** /api/v2/order-draft | Создание черновика заказа
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlConditionsGet**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftlconditionsget) | **GET** /api/v2/order-draft-ftl/conditions | Получить условия перевозки
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlDraftIdDelete**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftldraftiddelete) | **DELETE** /api/v2/order-draft-ftl/{draftId} | Удаление черновика заказа
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlDraftIdGet**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftldraftidget) | **GET** /api/v2/order-draft-ftl/{draftId} | Получение иформации о черновике FTL заказа.
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlDraftIdPublishPost**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftldraftidpublishpost) | **POST** /api/v2/order-draft-ftl/{draftId}/publish | Публикация черновика FTL заказа.
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlDraftIdPut**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftldraftidput) | **PUT** /api/v2/order-draft-ftl/{draftId} | Редактирование черновика заказа FTL
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlPost**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftlpost) | **POST** /api/v2/order-draft-ftl | Создание черновика заказа FTL
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlStepBidGet**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftlstepbidget) | **GET** /api/v2/order-draft-ftl/step-bid | Получить шаг ставки по цене
*OrderDraftFtlApi* | [**apiV2OrderDraftFtlValidatePost**](docs/Api/OrderDraftFtlApi.md#apiv2orderdraftftlvalidatepost) | **POST** /api/v2/order-draft-ftl/validate | Бизнес валидация черновика FTL.
*OrderEcnApi* | [**apiV2OrderEcnIdCancelPost**](docs/Api/OrderEcnApi.md#apiv2orderecnidcancelpost) | **POST** /api/v2/order-ecn/{id}/cancel | Отмена ЭТрН
*OrderEcnApi* | [**apiV2OrderEcnIdGet**](docs/Api/OrderEcnApi.md#apiv2orderecnidget) | **GET** /api/v2/order-ecn/{id} | Получение объекта ЭТрН
*OrderEcnApi* | [**apiV2OrderEcnIdHistoryGet**](docs/Api/OrderEcnApi.md#apiv2orderecnidhistoryget) | **GET** /api/v2/order-ecn/{id}/history | Получить историю ЭТРН
*OrderEcnApi* | [**apiV2OrderOrderIdCheckDigitalEcnAccessGet**](docs/Api/OrderEcnApi.md#apiv2orderorderidcheckdigitalecnaccessget) | **GET** /api/v2/order/{orderId}/check-digital-ecn-access | Проверка доступа к созданию Электронной ТРН.
*OrderEcnApi* | [**apiV2OrderOrderIdEcnGet**](docs/Api/OrderEcnApi.md#apiv2orderorderidecnget) | **GET** /api/v2/order/{orderId}/ecn | Получение списка ЭТрН у заказа
*OrderEcnApi* | [**apiV2OrderOrderIdEcnPost**](docs/Api/OrderEcnApi.md#apiv2orderorderidecnpost) | **POST** /api/v2/order/{orderId}/ecn | Создание ЭТрН для заказа.
*OrderEcnApi* | [**apiV2OrderOrderIdEcnTemplateGet**](docs/Api/OrderEcnApi.md#apiv2orderorderidecntemplateget) | **GET** /api/v2/order/{orderId}/ecn-template | Скачать транспортную накладную (подготовить ссылку на скачивание)
*OrderEcnApi* | [**apiV2OrderOrderIdValidateEcnDataPost**](docs/Api/OrderEcnApi.md#apiv2orderorderidvalidateecndatapost) | **POST** /api/v2/order/{orderId}/validate-ecn-data | Проверка данных ЭТрН заказа перед созданием.
*OrderEditApi* | [**apiV2OrderOrderIdClientAccessDelete**](docs/Api/OrderEditApi.md#apiv2orderorderidclientaccessdelete) | **DELETE** /api/v2/order/{orderId}/client-access | Удалить список партнеров из исключенных.
*OrderEditApi* | [**apiV2OrderOrderIdClientAccessGet**](docs/Api/OrderEditApi.md#apiv2orderorderidclientaccessget) | **GET** /api/v2/order/{orderId}/client-access | Получение списка исключеных партнеров.
*OrderEditApi* | [**apiV2OrderOrderIdClientAccessPatch**](docs/Api/OrderEditApi.md#apiv2orderorderidclientaccesspatch) | **PATCH** /api/v2/order/{orderId}/client-access | Отправить список партнеров на исключение.
*OrderEditApi* | [**apiV2OrderOrderIdClonePost**](docs/Api/OrderEditApi.md#apiv2orderorderidclonepost) | **POST** /api/v2/order/{orderId}/clone | Создание нового заказа из шаблона или на основании
*OrderEditApi* | [**apiV2OrderOrderIdContactDelete**](docs/Api/OrderEditApi.md#apiv2orderorderidcontactdelete) | **DELETE** /api/v2/order/{orderId}/contact | Список контактов на удаление из заказа.
*OrderEditApi* | [**apiV2OrderOrderIdContactGet**](docs/Api/OrderEditApi.md#apiv2orderorderidcontactget) | **GET** /api/v2/order/{orderId}/contact | Получение списка контактов.
*OrderEditApi* | [**apiV2OrderOrderIdContactPatch**](docs/Api/OrderEditApi.md#apiv2orderorderidcontactpatch) | **PATCH** /api/v2/order/{orderId}/contact | Отправить список контактов для добавления.
*OrderEditApi* | [**apiV2OrderOrderIdDelete**](docs/Api/OrderEditApi.md#apiv2orderorderiddelete) | **DELETE** /api/v2/order/{orderId} | Удаление заказа
*OrderEditApi* | [**apiV2OrderOrderIdEditGet**](docs/Api/OrderEditApi.md#apiv2orderorderideditget) | **GET** /api/v2/order/{orderId}/edit | Получение данных для редактирования заказа
*OrderEditApi* | [**apiV2OrderOrderIdModerationApprovePost**](docs/Api/OrderEditApi.md#apiv2orderorderidmoderationapprovepost) | **POST** /api/v2/order/{orderId}/moderation-approve | Опубликовать заказ под ГП.
*OrderEditApi* | [**apiV2OrderOrderIdModerationDelete**](docs/Api/OrderEditApi.md#apiv2orderorderidmoderationdelete) | **DELETE** /api/v2/order/{orderId}/moderation | Забрать заказ на модерации ГП.
*OrderEditApi* | [**apiV2OrderOrderIdModerationPost**](docs/Api/OrderEditApi.md#apiv2orderorderidmoderationpost) | **POST** /api/v2/order/{orderId}/moderation | Отправка заказа на модерацию ГП.
*OrderEditApi* | [**apiV2OrderOrderIdModerationRejectPost**](docs/Api/OrderEditApi.md#apiv2orderorderidmoderationrejectpost) | **POST** /api/v2/order/{orderId}/moderation-reject | Отклонение модератором заказа.
*OrderEditApi* | [**apiV2OrderOrderIdPatch**](docs/Api/OrderEditApi.md#apiv2orderorderidpatch) | **PATCH** /api/v2/order/{orderId} | Редактирование информации о заказе
*OrderEditApi* | [**apiV2OrderOrderIdPointPointIdDelete**](docs/Api/OrderEditApi.md#apiv2orderorderidpointpointiddelete) | **DELETE** /api/v2/order/{orderId}/point/{pointId} | Удаление маршрутной точки
*OrderEditApi* | [**apiV2OrderOrderIdPointPointIdGet**](docs/Api/OrderEditApi.md#apiv2orderorderidpointpointidget) | **GET** /api/v2/order/{orderId}/point/{pointId} | Получение информации по кокретной точке
*OrderEditApi* | [**apiV2OrderOrderIdPointPointIdPatch**](docs/Api/OrderEditApi.md#apiv2orderorderidpointpointidpatch) | **PATCH** /api/v2/order/{orderId}/point/{pointId} | Редактирование маршрутной точки
*OrderEditApi* | [**apiV2OrderOrderIdPointPost**](docs/Api/OrderEditApi.md#apiv2orderorderidpointpost) | **POST** /api/v2/order/{orderId}/point | Создание новой маршрутной точки
*OrderEditApi* | [**apiV2OrderOrderIdPointSwapPost**](docs/Api/OrderEditApi.md#apiv2orderorderidpointswappost) | **POST** /api/v2/order/{orderId}/point/swap | Изменение последовательности точек.
*OrderEditApi* | [**apiV2OrderOrderIdPublishPost**](docs/Api/OrderEditApi.md#apiv2orderorderidpublishpost) | **POST** /api/v2/order/{orderId}/publish | Публикация заказа
*OrderEditApi* | [**apiV2OrderOrderIdSavePost**](docs/Api/OrderEditApi.md#apiv2orderorderidsavepost) | **POST** /api/v2/order/{orderId}/save | Перевод заказа из времменого в черновики.
*OrderEditApi* | [**apiV2OrderOrderIdTagGet**](docs/Api/OrderEditApi.md#apiv2orderorderidtagget) | **GET** /api/v2/order/{orderId}/tag | Получение списка тэгов заказа.
*OrderEditApi* | [**apiV2OrderOrderIdTagPut**](docs/Api/OrderEditApi.md#apiv2orderorderidtagput) | **PUT** /api/v2/order/{orderId}/tag | Запись списка тэгов.
*OrderEditApi* | [**apiV2OrderOrderIdValidatePost**](docs/Api/OrderEditApi.md#apiv2orderorderidvalidatepost) | **POST** /api/v2/order/{orderId}/validate | Проверка валидности заказа
*OrderEditApi* | [**apiV2OrderPost**](docs/Api/OrderEditApi.md#apiv2orderpost) | **POST** /api/v2/order | Создание нового заказа
*OrderItemApi* | [**apiV2OrderOrderIdAfeerExpressPost**](docs/Api/OrderItemApi.md#apiv2orderorderidafeerexpresspost) | **POST** /api/v2/order/{orderId}/afeer-express | Подтверждение везти экспресс - заказ
*OrderItemApi* | [**apiV2OrderOrderIdArchivePost**](docs/Api/OrderItemApi.md#apiv2orderorderidarchivepost) | **POST** /api/v2/order/{orderId}/archive | Добавление заказа в архив.
*OrderItemApi* | [**apiV2OrderOrderIdBidGet**](docs/Api/OrderItemApi.md#apiv2orderorderidbidget) | **GET** /api/v2/order/{orderId}/bid | получение списка ставок на заказ.
*OrderItemApi* | [**apiV2OrderOrderIdBidLastGet**](docs/Api/OrderItemApi.md#apiv2orderorderidbidlastget) | **GET** /api/v2/order/{orderId}/bid/last | Получение последней информации связанной с торгами.
*OrderItemApi* | [**apiV2OrderOrderIdBidPost**](docs/Api/OrderItemApi.md#apiv2orderorderidbidpost) | **POST** /api/v2/order/{orderId}/bid | Установка ставки на заказ.
*OrderItemApi* | [**apiV2OrderOrderIdBrokerDelete**](docs/Api/OrderItemApi.md#apiv2orderorderidbrokerdelete) | **DELETE** /api/v2/order/{orderId}/broker | Удвление брокера с заказа.
*OrderItemApi* | [**apiV2OrderOrderIdBrokerGet**](docs/Api/OrderItemApi.md#apiv2orderorderidbrokerget) | **GET** /api/v2/order/{orderId}/broker | Получение брокера на заказ.
*OrderItemApi* | [**apiV2OrderOrderIdBrokerPut**](docs/Api/OrderItemApi.md#apiv2orderorderidbrokerput) | **PUT** /api/v2/order/{orderId}/broker | Установка брокера на заказ.
*OrderItemApi* | [**apiV2OrderOrderIdCancelPost**](docs/Api/OrderItemApi.md#apiv2orderorderidcancelpost) | **POST** /api/v2/order/{orderId}/cancel | Отмена опубликованного заказа.
*OrderItemApi* | [**apiV2OrderOrderIdCarrierSignPost**](docs/Api/OrderItemApi.md#apiv2orderorderidcarriersignpost) | **POST** /api/v2/order/{orderId}/carrier-sign | Подписать взятие заказа перевозчиком
*OrderItemApi* | [**apiV2OrderOrderIdCheckDigitalEcnAccessGet**](docs/Api/OrderItemApi.md#apiv2orderorderidcheckdigitalecnaccessget) | **GET** /api/v2/order/{orderId}/check-digital-ecn-access | Проверка доступа к созданию Электронной ТРН.
*OrderItemApi* | [**apiV2OrderOrderIdEcnGet**](docs/Api/OrderItemApi.md#apiv2orderorderidecnget) | **GET** /api/v2/order/{orderId}/ecn | Получение списка ЭТрН у заказа
*OrderItemApi* | [**apiV2OrderOrderIdEcnPost**](docs/Api/OrderItemApi.md#apiv2orderorderidecnpost) | **POST** /api/v2/order/{orderId}/ecn | Создание ЭТрН для заказа.
*OrderItemApi* | [**apiV2OrderOrderIdEcnTemplateGet**](docs/Api/OrderItemApi.md#apiv2orderorderidecntemplateget) | **GET** /api/v2/order/{orderId}/ecn-template | Скачать транспортную накладную (подготовить ссылку на скачивание)
*OrderItemApi* | [**apiV2OrderOrderIdFixPriceGet**](docs/Api/OrderItemApi.md#apiv2orderorderidfixpriceget) | **GET** /api/v2/order/{orderId}/fix-price | Зафиксировать цену заказа
*OrderItemApi* | [**apiV2OrderOrderIdGet**](docs/Api/OrderItemApi.md#apiv2orderorderidget) | **GET** /api/v2/order/{orderId} | Получение информации для карточки заказа.
*OrderItemApi* | [**apiV2OrderOrderIdItineraryGet**](docs/Api/OrderItemApi.md#apiv2orderorderiditineraryget) | **GET** /api/v2/order/{orderId}/itinerary | Получение данных по точкам маршрута.
*OrderItemApi* | [**apiV2OrderOrderIdNegotiatePost**](docs/Api/OrderItemApi.md#apiv2orderorderidnegotiatepost) | **POST** /api/v2/order/{orderId}/negotiate | Изменение заказчиком условий заказа, чтобы ближе соответствовать поступившим предложениям от перевозчиков
*OrderItemApi* | [**apiV2OrderOrderIdOfferGet**](docs/Api/OrderItemApi.md#apiv2orderorderidofferget) | **GET** /api/v2/order/{orderId}/offer | получение списка предложений на заказ.
*OrderItemApi* | [**apiV2OrderOrderIdOfferPost**](docs/Api/OrderItemApi.md#apiv2orderorderidofferpost) | **POST** /api/v2/order/{orderId}/offer | Установка предложения на заказ.
*OrderItemApi* | [**apiV2OrderOrderIdOriginalDocsAcceptPost**](docs/Api/OrderItemApi.md#apiv2orderorderidoriginaldocsacceptpost) | **POST** /api/v2/order/{orderId}/original-docs-accept | Подтвердить принятие оригиналов документов.
*OrderItemApi* | [**apiV2OrderOrderIdOriginalDocsRejectPost**](docs/Api/OrderItemApi.md#apiv2orderorderidoriginaldocsrejectpost) | **POST** /api/v2/order/{orderId}/original-docs-reject | Отклонить оригиналы документов.
*OrderItemApi* | [**apiV2OrderOrderIdOriginalDocsTrackingNumberPost**](docs/Api/OrderItemApi.md#apiv2orderorderidoriginaldocstrackingnumberpost) | **POST** /api/v2/order/{orderId}/original-docs-tracking-number | Указать трек номер отправленных документов.
*OrderItemApi* | [**apiV2OrderOrderIdPinDelete**](docs/Api/OrderItemApi.md#apiv2orderorderidpindelete) | **DELETE** /api/v2/order/{orderId}/pin | Удаление заказа из списка закрепленных.
*OrderItemApi* | [**apiV2OrderOrderIdPinGet**](docs/Api/OrderItemApi.md#apiv2orderorderidpinget) | **GET** /api/v2/order/{orderId}/pin | Получить список пользователей закрепивших заказ
*OrderItemApi* | [**apiV2OrderOrderIdPinPost**](docs/Api/OrderItemApi.md#apiv2orderorderidpinpost) | **POST** /api/v2/order/{orderId}/pin | Добавление заказа в список закрепленных.
*OrderItemApi* | [**apiV2OrderOrderIdSignPost**](docs/Api/OrderItemApi.md#apiv2orderorderidsignpost) | **POST** /api/v2/order/{orderId}/sign | Подписаться на заказ
*OrderItemApi* | [**apiV2OrderOrderIdSignedDocumentGet**](docs/Api/OrderItemApi.md#apiv2orderorderidsigneddocumentget) | **GET** /api/v2/order/{orderId}/signed-document | Получение документов заказа со списком титулов
*OrderItemApi* | [**apiV2OrderOrderIdSimpleDocumentGet**](docs/Api/OrderItemApi.md#apiv2orderorderidsimpledocumentget) | **GET** /api/v2/order/{orderId}/simple-document | Получение документов заказа со списком титулов
*OrderItemApi* | [**apiV2OrderOrderIdUnarchivePost**](docs/Api/OrderItemApi.md#apiv2orderorderidunarchivepost) | **POST** /api/v2/order/{orderId}/unarchive | Возврат заказа из архива.
*OrderItemApi* | [**apiV2OrderOrderIdValidateEcnDataPost**](docs/Api/OrderItemApi.md#apiv2orderorderidvalidateecndatapost) | **POST** /api/v2/order/{orderId}/validate-ecn-data | Проверка данных ЭТрН заказа перед созданием.
*OrderItemApi* | [**apiV2OrderOrderIdVisitorGet**](docs/Api/OrderItemApi.md#apiv2orderorderidvisitorget) | **GET** /api/v2/order/{orderId}/visitor | Получить список пользователей открывавших карточку заказа
*OrderListApi* | [**apiV2OrderBrokerGet**](docs/Api/OrderListApi.md#apiv2orderbrokerget) | **GET** /api/v2/order/broker | Получение списка брокеров.
*OrderListApi* | [**apiV2OrderCountGet**](docs/Api/OrderListApi.md#apiv2ordercountget) | **GET** /api/v2/order/count | Метод для получения количества заказов согласно фильтру.
*OrderListApi* | [**apiV2OrderExistsGet**](docs/Api/OrderListApi.md#apiv2orderexistsget) | **GET** /api/v2/order/exists | Метод для проверки существования хоть одной записи по запросу.
*OrderListApi* | [**apiV2OrderGet**](docs/Api/OrderListApi.md#apiv2orderget) | **GET** /api/v2/order | Метод для получения списка заказов согласно фильтру.
*OrderListApi* | [**apiV2OrderIdsGet**](docs/Api/OrderListApi.md#apiv2orderidsget) | **GET** /api/v2/order/ids | Метод для получения списка идентификаторов (хешей) заказов согласно фильтру.
*OrderPatchApi* | [**apiV2OrderIdPatchPost**](docs/Api/OrderPatchApi.md#apiv2orderidpatchpost) | **POST** /api/v2/order/{id}/patch | Создание запроса на изменение заказа экспедитором.
*OrderPatchApi* | [**apiV2OrderOrderIdCustomerPatchPost**](docs/Api/OrderPatchApi.md#apiv2orderorderidcustomerpatchpost) | **POST** /api/v2/order/{orderId}/customer-patch | Создание запроса на изменение заказа отправителем.
*OrderPatchApi* | [**apiV2OrderOrderIdRefuseRevertPatchPost**](docs/Api/OrderPatchApi.md#apiv2orderorderidrefuserevertpatchpost) | **POST** /api/v2/order/{orderId}/refuse-revert-patch | Создание запроса на возвращение Отправителем заявки Экспедитора с победителем в работу после отказа.
*OrderPatchApi* | [**apiV2OrderOrderIdTruckDriverPatchPost**](docs/Api/OrderPatchApi.md#apiv2orderorderidtruckdriverpatchpost) | **POST** /api/v2/order/{orderId}/truck-driver-patch | Создание запроса на изменение машины и водителя в заказе.
*OrderPatchApi* | [**apiV2OrderPatchPatchIdApprovePost**](docs/Api/OrderPatchApi.md#apiv2orderpatchpatchidapprovepost) | **POST** /api/v2/order-patch/{patchId}/approve | Подтверждение запроса на изменение заказа.
*OrderPatchApi* | [**apiV2OrderPatchPatchIdCancelPost**](docs/Api/OrderPatchApi.md#apiv2orderpatchpatchidcancelpost) | **POST** /api/v2/order-patch/{patchId}/cancel | Отмена запроса на изменение заказа его создателем.
*OrderPatchApi* | [**apiV2OrderPatchPatchIdGet**](docs/Api/OrderPatchApi.md#apiv2orderpatchpatchidget) | **GET** /api/v2/order-patch/{patchId} | Получение данных запроса на изменение заказа.
*OrderPatchApi* | [**apiV2OrderPatchPatchIdRejectPost**](docs/Api/OrderPatchApi.md#apiv2orderpatchpatchidrejectpost) | **POST** /api/v2/order-patch/{patchId}/reject | Отклонение запроса на изменение заказа.
*OrderPortApi* | [**apiV2OrderExcelGet**](docs/Api/OrderPortApi.md#apiv2orderexcelget) | **GET** /api/v2/order/excel | Получение ссылки на excel файл отчета.
*OrderPortApi* | [**apiV2OrderExcelOfferReportGet**](docs/Api/OrderPortApi.md#apiv2orderexcelofferreportget) | **GET** /api/v2/order/excel/offer-report | выгрузка xlsx с отчетом по запросам цен.
*OrderPortApi* | [**apiV2OrderImportGet**](docs/Api/OrderPortApi.md#apiv2orderimportget) | **GET** /api/v2/order/import | Получение шаблона.
*OrderPortApi* | [**apiV2OrderImportPost**](docs/Api/OrderPortApi.md#apiv2orderimportpost) | **POST** /api/v2/order/import | Импорт заказа из xlsx.
*OrderPortApi* | [**apiV2OrderOrderIdOfferExcelGet**](docs/Api/OrderPortApi.md#apiv2orderorderidofferexcelget) | **GET** /api/v2/order/{orderId}/offer/excel | выгрузка xlsx файла со списком предложений.
*OrderProcessApi* | [**apiV2OrderOrderIdCarrierContactPatch**](docs/Api/OrderProcessApi.md#apiv2orderorderidcarriercontactpatch) | **PATCH** /api/v2/order/{orderId}/carrier-contact | Отправить список кураторов перевозчика для добавления.
*OrderProcessApi* | [**apiV2OrderOrderIdCarrierRefusePost**](docs/Api/OrderProcessApi.md#apiv2orderorderidcarrierrefusepost) | **POST** /api/v2/order/{orderId}/carrier-refuse | Оформить отказ перевозчика.
*OrderProcessApi* | [**apiV2OrderOrderIdConsignorContactPut**](docs/Api/OrderProcessApi.md#apiv2orderorderidconsignorcontactput) | **PUT** /api/v2/order/{orderId}/consignor-contact | Заменить список кураторов заказчика.
*OrderProcessApi* | [**apiV2OrderOrderIdConsignorDocumentPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidconsignordocumentpost) | **POST** /api/v2/order/{orderId}/consignor-document | Загрузить документы отправителя.
*OrderProcessApi* | [**apiV2OrderOrderIdConsignorRefusePost**](docs/Api/OrderProcessApi.md#apiv2orderorderidconsignorrefusepost) | **POST** /api/v2/order/{orderId}/consignor-refuse | Оформить отказ отправителя.
*OrderProcessApi* | [**apiV2OrderOrderIdDocumentPost**](docs/Api/OrderProcessApi.md#apiv2orderorderiddocumentpost) | **POST** /api/v2/order/{orderId}/document | Загрузить документы перевозчика.
*OrderProcessApi* | [**apiV2OrderOrderIdExpeditorAssignmentGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidexpeditorassignmentget) | **GET** /api/v2/order/{orderId}/expeditor-assignment | Скачать поручение экспедитору.
*OrderProcessApi* | [**apiV2OrderOrderIdFinishPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidfinishpost) | **POST** /api/v2/order/{orderId}/finish | Ручное завершение заказа
*OrderProcessApi* | [**apiV2OrderOrderIdGeneralPartnerDocumentPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidgeneralpartnerdocumentpost) | **POST** /api/v2/order/{orderId}/general-partner-document | Генеральный партнер прикрепляет документы.
*OrderProcessApi* | [**apiV2OrderOrderIdGeneralPartnerProposalTemplateGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidgeneralpartnerproposaltemplateget) | **GET** /api/v2/order/{orderId}/general-partner-proposal-template | Генеральный партнер. Скачать заяку на заказ для ГП.
*OrderProcessApi* | [**apiV2OrderOrderIdGeneralPartnerProxyTemplateGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidgeneralpartnerproxytemplateget) | **GET** /api/v2/order/{orderId}/general-partner-proxy-template | Генеральный партнер. Скачать доверенность на заказ для ГП.
*OrderProcessApi* | [**apiV2OrderOrderIdGeneralPartnerTemplateApprovePost**](docs/Api/OrderProcessApi.md#apiv2orderorderidgeneralpartnertemplateapprovepost) | **POST** /api/v2/order/{orderId}/general-partner-template-approve | Генеральный партнер создает документы из шаблонов.
*OrderProcessApi* | [**apiV2OrderOrderIdInvoiceGpCarrierGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidinvoicegpcarrierget) | **GET** /api/v2/order/{orderId}/invoice-gp-carrier | Получение данных о платежах генерального партнера для перевозчика
*OrderProcessApi* | [**apiV2OrderOrderIdInvoiceGpCarrierPut**](docs/Api/OrderProcessApi.md#apiv2orderorderidinvoicegpcarrierput) | **PUT** /api/v2/order/{orderId}/invoice-gp-carrier | Добавление данных о платежах генерального партнера для перевозчика
*OrderProcessApi* | [**apiV2OrderOrderIdMonitoringPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidmonitoringpost) | **POST** /api/v2/order/{orderId}/monitoring | Добавить ссылку на отслеживание.
*OrderProcessApi* | [**apiV2OrderOrderIdProposalGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproposalget) | **GET** /api/v2/order/{orderId}/proposal | Скачать заявку на заказ.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorAdditionalInfoGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignoradditionalinfoget) | **GET** /api/v2/order/{orderId}/proxy-consignor-additional-info | Получить добавочные данные, или проверить их наличие.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorAdditionalInfoPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignoradditionalinfopost) | **POST** /api/v2/order/{orderId}/proxy-consignor-additional-info | Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignorcarrieradditionalinfoget) | **GET** /api/v2/order/{orderId}/proxy-consignor-carrier-additional-info | Получить добавочные данные, или проверить их наличие.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignorcarrieradditionalinfopatch) | **PATCH** /api/v2/order/{orderId}/proxy-consignor-carrier-additional-info | Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorCarrierGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignorcarrierget) | **GET** /api/v2/order/{orderId}/proxy-consignor-carrier | Скачать доверенность на заказ для заказчика.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorCarrierSendPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignorcarriersendpost) | **POST** /api/v2/order/{orderId}/proxy-consignor-carrier-send | Отправить ссылку доверенности на самовывоз по email.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignorcarrierwithfacsimileget) | **GET** /api/v2/order/{orderId}/proxy-consignor-carrier-with-facsimile | Скачать доверенность на заказ для заказчика с факсимиле.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorEmailGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignoremailget) | **GET** /api/v2/order/{orderId}/proxy-consignor-email | Получить список email для точки погрузки, для плеча.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyConsignorEmailPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxyconsignoremailpost) | **POST** /api/v2/order/{orderId}/proxy-consignor-email | Отправка доверенности на список email
*OrderProcessApi* | [**apiV2OrderOrderIdProxyPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxypost) | **POST** /api/v2/order/{orderId}/proxy | Загрузить доверенность.
*OrderProcessApi* | [**apiV2OrderOrderIdProxyTemplateGet**](docs/Api/OrderProcessApi.md#apiv2orderorderidproxytemplateget) | **GET** /api/v2/order/{orderId}/proxy-template | Скачать шаблон доверенности.
*OrderProcessApi* | [**apiV2OrderOrderIdRefreshDriverPatch**](docs/Api/OrderProcessApi.md#apiv2orderorderidrefreshdriverpatch) | **PATCH** /api/v2/order/{orderId}/refresh-driver | Обновить данные водителя в заказе
*OrderProcessApi* | [**apiV2OrderOrderIdRefreshTruckPatch**](docs/Api/OrderProcessApi.md#apiv2orderorderidrefreshtruckpatch) | **PATCH** /api/v2/order/{orderId}/refresh-truck | Обновить данные транспортного средства в заказе
*OrderProcessApi* | [**apiV2OrderOrderIdRefuseAppealPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidrefuseappealpost) | **POST** /api/v2/order/{orderId}/refuse-appeal | Жалоба на отказ.
*OrderProcessApi* | [**apiV2OrderOrderIdRefuseCancelPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidrefusecancelpost) | **POST** /api/v2/order/{orderId}/refuse-cancel | Отменить отказ от заказа.
*OrderProcessApi* | [**apiV2OrderOrderIdRefusePost**](docs/Api/OrderProcessApi.md#apiv2orderorderidrefusepost) | **POST** /api/v2/order/{orderId}/refuse | Оформить отказ заказа Экспедитора.
*OrderProcessApi* | [**apiV2OrderOrderIdRepeatPost**](docs/Api/OrderProcessApi.md#apiv2orderorderidrepeatpost) | **POST** /api/v2/order/{orderId}/repeat | Переразместить заказ.
*OrderProcessApi* | [**apiV2OrderOrderIdReusePost**](docs/Api/OrderProcessApi.md#apiv2orderorderidreusepost) | **POST** /api/v2/order/{orderId}/reuse | Переразместить экспедиторский заказ.
*OrderProcessApi* | [**apiV2OrderOrderIdTruckDriverPatch**](docs/Api/OrderProcessApi.md#apiv2orderorderidtruckdriverpatch) | **PATCH** /api/v2/order/{orderId}/truck-driver | Прикрепить к заказу водителя и машину.
*OrderPublishApi* | [**apiV2OrderPublishPost**](docs/Api/OrderPublishApi.md#apiv2orderpublishpost) | **POST** /api/v2/order/publish | Публикация заказа
*OrderRoadmapApi* | [**apiV2OrderOrderIdRoadmapGet**](docs/Api/OrderRoadmapApi.md#apiv2orderorderidroadmapget) | **GET** /api/v2/order/{orderId}/roadmap | Получение роадмап
*OrderRoadmapApi* | [**apiV2RoadmapRoadmapIdHidePost**](docs/Api/OrderRoadmapApi.md#apiv2roadmaproadmapidhidepost) | **POST** /api/v2/roadmap/{roadmapId}/hide | Скрытие динамического типа роадмап
*OrderStepBidApi* | [**getOrderStepBid**](docs/Api/OrderStepBidApi.md#getorderstepbid) | **GET** /api/v2/order-step-bid | Получить шаг ставки по цене
*OrderTrackingApi* | [**apiV2TrackingCountGet**](docs/Api/OrderTrackingApi.md#apiv2trackingcountget) | **GET** /api/v2/tracking/count | Получения количества отслеживаний.
*OrderTrackingApi* | [**apiV2TrackingGet**](docs/Api/OrderTrackingApi.md#apiv2trackingget) | **GET** /api/v2/tracking | Получения списка текущего отслеживания заказов.
*OrderTrackingApi* | [**apiV2TrackingIdActiveDelete**](docs/Api/OrderTrackingApi.md#apiv2trackingidactivedelete) | **DELETE** /api/v2/tracking/{id}/active | Деактивация фильтра отслеживания.
*OrderTrackingApi* | [**apiV2TrackingIdActivePost**](docs/Api/OrderTrackingApi.md#apiv2trackingidactivepost) | **POST** /api/v2/tracking/{id}/active | Активация фильтра отслеживания.
*OrderTrackingApi* | [**apiV2TrackingIdDelete**](docs/Api/OrderTrackingApi.md#apiv2trackingiddelete) | **DELETE** /api/v2/tracking/{id} | Редактирование отслеживания.
*OrderTrackingApi* | [**apiV2TrackingIdGet**](docs/Api/OrderTrackingApi.md#apiv2trackingidget) | **GET** /api/v2/tracking/{id} | Получение данных конкретного отслеживания.
*OrderTrackingApi* | [**apiV2TrackingIdPut**](docs/Api/OrderTrackingApi.md#apiv2trackingidput) | **PUT** /api/v2/tracking/{id} | Редактирование конкретного отслеживания.
*OrderTrackingApi* | [**apiV2TrackingPost**](docs/Api/OrderTrackingApi.md#apiv2trackingpost) | **POST** /api/v2/tracking | Создание нового отслеживания.
*OrderUtilsApi* | [**apiV2OrderAcCompanyGet**](docs/Api/OrderUtilsApi.md#apiv2orderaccompanyget) | **GET** /api/v2/order/ac/company | Поиск по данным контактов точек маршрута текущего клиента.
*OrderUtilsApi* | [**apiV2OrderAcCuratorGet**](docs/Api/OrderUtilsApi.md#apiv2orderaccuratorget) | **GET** /api/v2/order/ac/curator | Поиск кураторов заказов от отправителя
*OrderUtilsApi* | [**apiV2OrderAcDriverGet**](docs/Api/OrderUtilsApi.md#apiv2orderacdriverget) | **GET** /api/v2/order/ac/driver | Поиск водителей по имени, с которыми ранее работал клиент.
*OrderUtilsApi* | [**apiV2OrderAcDriverNameGet**](docs/Api/OrderUtilsApi.md#apiv2orderacdrivernameget) | **GET** /api/v2/order/ac/driver-name | Поиск водителей по имени, с которыми ранее работал клиент
*OrderUtilsApi* | [**apiV2OrderAcPointContactsGet**](docs/Api/OrderUtilsApi.md#apiv2orderacpointcontactsget) | **GET** /api/v2/order/ac/point-contacts | Поиск по данным контактов точек маршурта текущего клиента.
*OrderUtilsApi* | [**apiV2OrderAcTagGet**](docs/Api/OrderUtilsApi.md#apiv2orderactagget) | **GET** /api/v2/order/ac/tag | Поиск по тегам клиента.
*OrderUtilsApi* | [**apiV2OrderAcWorkerGet**](docs/Api/OrderUtilsApi.md#apiv2orderacworkerget) | **GET** /api/v2/order/ac/worker | Поиск контактов для автокомплита при создании заказа
*PaymentApi* | [**apiV2OrderOrderIdPaymentGet**](docs/Api/PaymentApi.md#apiv2orderorderidpaymentget) | **GET** /api/v2/order/{orderId}/payment | Список оплат по счёту
*PredictorApi* | [**apiV2PredictorPriceGet**](docs/Api/PredictorApi.md#apiv2predictorpriceget) | **GET** /api/v2/predictor/price | Возвращает предсказание цены для маршрута
*PriceLocalApi* | [**apiV2AcPriceLocalPoolGet**](docs/Api/PriceLocalApi.md#apiv2acpricelocalpoolget) | **GET** /api/v2/ac/price-local-pool | Поиск пулов.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolGet**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolget) | **GET** /api/v2/expeditor/price-local/pool | Получение списка пулов направлений и цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolPoolIdDirectionDirectionIdDelete**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolpooliddirectiondirectioniddelete) | **DELETE** /api/v2/expeditor/price-local/pool/{poolId}/direction/{directionId} | Открепление направления от данного пула.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolPoolIdDirectionGet**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolpooliddirectionget) | **GET** /api/v2/expeditor/price-local/pool/{poolId}/direction | Получение списка направлений данного пула.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolPoolIdDirectionPost**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolpooliddirectionpost) | **POST** /api/v2/expeditor/price-local/pool/{poolId}/direction | Прикрепление направления к данному пулу направлений и цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolPoolIdGet**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolpoolidget) | **GET** /api/v2/expeditor/price-local/pool/{poolId} | Получение данных конкретного пула направлений и цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolPoolIdPatch**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolpoolidpatch) | **PATCH** /api/v2/expeditor/price-local/pool/{poolId} | Редактирование конкретного пула направлений и цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPoolPost**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpoolpost) | **POST** /api/v2/expeditor/price-local/pool | Создание пула направлений и цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPriceGet**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpriceget) | **GET** /api/v2/expeditor/price-local/price | Получения списка элементов справочника цен
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPricePost**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpricepost) | **POST** /api/v2/expeditor/price-local/price | Создание нового элемента в справочнике цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPricePriceIdDelete**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpricepriceiddelete) | **DELETE** /api/v2/expeditor/price-local/price/{priceId} | Деактивация направления.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPricePriceIdGet**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpricepriceidget) | **GET** /api/v2/expeditor/price-local/price/{priceId} | Получение данных конкретного элемента справочника цен.
*PriceLocalApi* | [**apiV2ExpeditorPriceLocalPricePriceIdPut**](docs/Api/PriceLocalApi.md#apiv2expeditorpricelocalpricepriceidput) | **PUT** /api/v2/expeditor/price-local/price/{priceId} | Редактирование конкретного элемента справочника цен.
*ProductionCalendarApi* | [**apiV2ProductionCalendarGet**](docs/Api/ProductionCalendarApi.md#apiv2productioncalendarget) | **GET** /api/v2/production-calendar | Метод для получения праздничных дней по производственному календарю.
*RegistrationApi* | [**apiV2RegistrationIdConfirmPost**](docs/Api/RegistrationApi.md#apiv2registrationidconfirmpost) | **POST** /api/v2/registration/{id}/confirm | Подтверждение регистрации/ввод проверочного кода.
*RegistrationApi* | [**apiV2RegistrationIdGet**](docs/Api/RegistrationApi.md#apiv2registrationidget) | **GET** /api/v2/registration/{id} | Получение процесса регистрации.
*RegistrationApi* | [**apiV2RegistrationIdResendCodePost**](docs/Api/RegistrationApi.md#apiv2registrationidresendcodepost) | **POST** /api/v2/registration/{id}/resend-code | Повторная отправка проверочного кода.
*RegistrationApi* | [**apiV2RegistrationPost**](docs/Api/RegistrationApi.md#apiv2registrationpost) | **POST** /api/v2/registration | Задание логина пользователя/начало процесса регистрации.
*SearchApi* | [**apiV2SearchGet**](docs/Api/SearchApi.md#apiv2searchget) | **GET** /api/v2/search | Метод для поиска информации в Каргомарте.
*SettingApi* | [**apiV2SettingGet**](docs/Api/SettingApi.md#apiv2settingget) | **GET** /api/v2/setting | Получение списка настроек пользователя
*SettingApi* | [**apiV2SettingNamePatch**](docs/Api/SettingApi.md#apiv2settingnamepatch) | **PATCH** /api/v2/setting/{name} | Изменение значения настройки
*SignedDocumentApi* | [**apiV2OrderOrderIdSignedDocumentGet**](docs/Api/SignedDocumentApi.md#apiv2orderorderidsigneddocumentget) | **GET** /api/v2/order/{orderId}/signed-document | Получение документов заказа со списком титулов
*SignedDocumentsApi* | [**getSignedDocumentById**](docs/Api/SignedDocumentsApi.md#getsigneddocumentbyid) | **GET** /api/v2/signed-document/{id} | Детали подписанного документу.
*SignedDocumentsApi* | [**getSignedDocumentPdfById**](docs/Api/SignedDocumentsApi.md#getsigneddocumentpdfbyid) | **GET** /api/v2/signed-document/{id}/pdf | Просмотр печатной формы документа в формате PDF.
*SimpleDocumentApi* | [**apiV2ExpeditorProposalIdSimpleDocumentGet**](docs/Api/SimpleDocumentApi.md#apiv2expeditorproposalidsimpledocumentget) | **GET** /api/v2/expeditor-proposal/{id}/simple-document | Получение иформации для карточки заказа Экспедитора.
*SimpleDocumentApi* | [**apiV2ExpeditorProposalIdSimpleDocumentsGet**](docs/Api/SimpleDocumentApi.md#apiv2expeditorproposalidsimpledocumentsget) | **GET** /api/v2/expeditor-proposal/{id}/simple-documents | Получение списка документов заявки со списком титулов
*SimpleDocumentApi* | [**apiV2OrderOrderIdSimpleDocumentGet**](docs/Api/SimpleDocumentApi.md#apiv2orderorderidsimpledocumentget) | **GET** /api/v2/order/{orderId}/simple-document | Получение документов заказа со списком титулов
*SimpleDocumentsApi* | [**apiV2SimpleDocumentPreviewGet**](docs/Api/SimpleDocumentsApi.md#apiv2simpledocumentpreviewget) | **GET** /api/v2/simple-document/preview | Превью PDF-файла для титула ЭДО-документа перед подписанием им.
*SimpleDocumentsApi* | [**apiV2SimpleDocumentRootIdGet**](docs/Api/SimpleDocumentsApi.md#apiv2simpledocumentrootidget) | **GET** /api/v2/simple-document/{rootId} | Детали по подписанному документу заказа.
*SmallCarrierApi* | [**apiV2OrderSearchTruckGet**](docs/Api/SmallCarrierApi.md#apiv2ordersearchtruckget) | **GET** /api/v2/order-search/truck | Получение списка машин и критериев поиска для них по заказам
*SmallCarrierApi* | [**apiV2OrderSearchTruckTruckIdDelete**](docs/Api/SmallCarrierApi.md#apiv2ordersearchtrucktruckiddelete) | **DELETE** /api/v2/order-search/truck/{truckId} | Удаление критерия поиска
*SmallCarrierApi* | [**apiV2OrderSearchTruckTruckIdPut**](docs/Api/SmallCarrierApi.md#apiv2ordersearchtrucktruckidput) | **PUT** /api/v2/order-search/truck/{truckId} | Создание/редактирование критерия поиска машины
*SmallCarrierApi* | [**apiV2TruckOrderQueueTruckIdGet**](docs/Api/SmallCarrierApi.md#apiv2truckorderqueuetruckidget) | **GET** /api/v2/truck-order-queue/{truckId} | Получение списка заказов в очереди и в рейсе для выбранной машины
*SmallCarrierApi* | [**apiV2TruckOrderSearchTruckIdGet**](docs/Api/SmallCarrierApi.md#apiv2truckordersearchtruckidget) | **GET** /api/v2/truck-order-search/{truckId} | Найти заказы подходящие для выбранной машины по ранее созданным криитериям
*StoragePointApi* | [**apiV2AcStoragePointGet**](docs/Api/StoragePointApi.md#apiv2acstoragepointget) | **GET** /api/v2/ac/storage-point | Поиск пунктов погрузки/выгрузки.
*StoragePointApi* | [**apiV2StoragePointDelete**](docs/Api/StoragePointApi.md#apiv2storagepointdelete) | **DELETE** /api/v2/storage-point | Групповое удаление пунктов погрузки/выгрузки.
*StoragePointApi* | [**apiV2StoragePointGet**](docs/Api/StoragePointApi.md#apiv2storagepointget) | **GET** /api/v2/storage-point | Метод возвращает список пунктов погрузки/выгрузки.
*StoragePointApi* | [**apiV2StoragePointIdContactContactIdDelete**](docs/Api/StoragePointApi.md#apiv2storagepointidcontactcontactiddelete) | **DELETE** /api/v2/storage-point/{id}/contact/{contactId} | @deprecated. Использовать вместе с редактированием SP. Удаление одного контакта пункта погрузки/выгрузки
*StoragePointApi* | [**apiV2StoragePointIdContactContactIdPut**](docs/Api/StoragePointApi.md#apiv2storagepointidcontactcontactidput) | **PUT** /api/v2/storage-point/{id}/contact/{contactId} | @deprecated. Использовать вместе с редактированием SP. Редактирование контакта пункта погрузки/выгрузки
*StoragePointApi* | [**apiV2StoragePointIdContactGet**](docs/Api/StoragePointApi.md#apiv2storagepointidcontactget) | **GET** /api/v2/storage-point/{id}/contact | @deprecated. Использовать вместе с редактированием SP. Получение списка контактов пункта погрузки/выгрузки
*StoragePointApi* | [**apiV2StoragePointIdContactPost**](docs/Api/StoragePointApi.md#apiv2storagepointidcontactpost) | **POST** /api/v2/storage-point/{id}/contact | @deprecated. Использовать вместе с редактированием SP. Создание контакта пункта погрузки выгрузки
*StoragePointApi* | [**apiV2StoragePointIdDelete**](docs/Api/StoragePointApi.md#apiv2storagepointiddelete) | **DELETE** /api/v2/storage-point/{id} | Удаление пункта погрузки/выгрузки
*StoragePointApi* | [**apiV2StoragePointIdGet**](docs/Api/StoragePointApi.md#apiv2storagepointidget) | **GET** /api/v2/storage-point/{id} | Информация о конкретном пункте погрузки/выгрузки
*StoragePointApi* | [**apiV2StoragePointIdPut**](docs/Api/StoragePointApi.md#apiv2storagepointidput) | **PUT** /api/v2/storage-point/{id} | Редактирование пункта погрузки/выгрузки
*StoragePointApi* | [**apiV2StoragePointPost**](docs/Api/StoragePointApi.md#apiv2storagepointpost) | **POST** /api/v2/storage-point | Создание нового пункта погрузки/выгрузки
*TenderDraftApi* | [**apiV2TenderDraftDraftIdDelete**](docs/Api/TenderDraftApi.md#apiv2tenderdraftdraftiddelete) | **DELETE** /api/v2/tender/draft/{draftId} | Удаление черновика тендера
*TenderDraftApi* | [**apiV2TenderDraftDraftIdGet**](docs/Api/TenderDraftApi.md#apiv2tenderdraftdraftidget) | **GET** /api/v2/tender/draft/{draftId} | Получение черновика тендера
*TenderDraftApi* | [**apiV2TenderDraftDraftIdPublishPost**](docs/Api/TenderDraftApi.md#apiv2tenderdraftdraftidpublishpost) | **POST** /api/v2/tender/draft/{draftId}/publish | Публикация черновика
*TenderDraftApi* | [**apiV2TenderDraftDraftIdPut**](docs/Api/TenderDraftApi.md#apiv2tenderdraftdraftidput) | **PUT** /api/v2/tender/draft/{draftId} | Сохранение черновика тендера
*TenderDraftApi* | [**apiV2TenderDraftGet**](docs/Api/TenderDraftApi.md#apiv2tenderdraftget) | **GET** /api/v2/tender/draft | Получение списка черновиков тендера
*TenderDraftApi* | [**apiV2TenderDraftPost**](docs/Api/TenderDraftApi.md#apiv2tenderdraftpost) | **POST** /api/v2/tender/draft | Создание черновика тендера
*TenderRequestApi* | [**apiV2TenderRequestGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequestget) | **GET** /api/v2/tender/request | Получение списка тендеров в статусе запроса цены
*TenderRequestApi* | [**apiV2TenderRequestLotGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequestlotget) | **GET** /api/v2/tender/request/lot | Получение списка лотов по тендеру в статусе запроса цены
*TenderRequestApi* | [**apiV2TenderRequestLotLotIdCompanyStatsGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequestlotlotidcompanystatsget) | **GET** /api/v2/tender/request/lot/{lotId}/company-stats | Получить список компаний со статистикой по лоту
*TenderRequestApi* | [**apiV2TenderRequestLotLotIdGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequestlotlotidget) | **GET** /api/v2/tender/request/lot/{lotId} | Получение лота по тендеру в статусе запроса цены
*TenderRequestApi* | [**apiV2TenderRequestLotLotIdOfferDelete**](docs/Api/TenderRequestApi.md#apiv2tenderrequestlotlotidofferdelete) | **DELETE** /api/v2/tender/request/lot/{lotId}/offer | Удаление отклика лота
*TenderRequestApi* | [**apiV2TenderRequestLotLotIdOfferPost**](docs/Api/TenderRequestApi.md#apiv2tenderrequestlotlotidofferpost) | **POST** /api/v2/tender/request/lot/{lotId}/offer | Разместить отклик на лот
*TenderRequestApi* | [**apiV2TenderRequestLotLotIdProposalGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequestlotlotidproposalget) | **GET** /api/v2/tender/request/lot/{lotId}/proposal | Получить список предложений по лоту
*TenderRequestApi* | [**apiV2TenderRequestTenderIdCancelPost**](docs/Api/TenderRequestApi.md#apiv2tenderrequesttenderidcancelpost) | **POST** /api/v2/tender/request/{tenderId}/cancel | Отмена тендера
*TenderRequestApi* | [**apiV2TenderRequestTenderIdCompanyStatsGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequesttenderidcompanystatsget) | **GET** /api/v2/tender/request/{tenderId}/company-stats | Получить список компаний со статистикой вовлеченности
*TenderRequestApi* | [**apiV2TenderRequestTenderIdGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequesttenderidget) | **GET** /api/v2/tender/request/{tenderId} | Получение тендера в статусе запроса цены
*TenderRequestApi* | [**apiV2TenderRequestTenderIdResultsGet**](docs/Api/TenderRequestApi.md#apiv2tenderrequesttenderidresultsget) | **GET** /api/v2/tender/request/{tenderId}/results | Получить результаты приема заявок в формате xlsx
*TrailerApi* | [**apiV2TrailerGet**](docs/Api/TrailerApi.md#apiv2trailerget) | **GET** /api/v2/trailer | Метод поиска тягачей и прицепов.
*TruckApi* | [**apiV2TruckDelete**](docs/Api/TruckApi.md#apiv2truckdelete) | **DELETE** /api/v2/truck | Групповое удаление ТС
*TruckApi* | [**apiV2TruckGet**](docs/Api/TruckApi.md#apiv2truckget) | **GET** /api/v2/truck | Метод возращает список ТС
*TruckApi* | [**apiV2TruckIdActivationDelete**](docs/Api/TruckApi.md#apiv2truckidactivationdelete) | **DELETE** /api/v2/truck/{id}/activation | Удаление возможности создавать фильтр на машину для поиска заказов
*TruckApi* | [**apiV2TruckIdActivationPost**](docs/Api/TruckApi.md#apiv2truckidactivationpost) | **POST** /api/v2/truck/{id}/activation | Разрешить создавать фильтр на машину для поиска заказов
*TruckApi* | [**apiV2TruckIdDelete**](docs/Api/TruckApi.md#apiv2truckiddelete) | **DELETE** /api/v2/truck/{id} | Удаление ТС
*TruckApi* | [**apiV2TruckIdGet**](docs/Api/TruckApi.md#apiv2truckidget) | **GET** /api/v2/truck/{id} | Информация о конкретном ТС
*TruckApi* | [**apiV2TruckIdPut**](docs/Api/TruckApi.md#apiv2truckidput) | **PUT** /api/v2/truck/{id} | Редактирование ТС
*TruckApi* | [**apiV2TruckPost**](docs/Api/TruckApi.md#apiv2truckpost) | **POST** /api/v2/truck | Создание нового ТС
*UserApi* | [**apiV2UserCountActiveGet**](docs/Api/UserApi.md#apiv2usercountactiveget) | **GET** /api/v2/user/count-active | Количество активных пользователей
*UserApi* | [**apiV2UserLoginPost**](docs/Api/UserApi.md#apiv2userloginpost) | **POST** /api/v2/user/login | Авторизация пользователя и выдача токена.
*UserApi* | [**apiV2UserLogoutPost**](docs/Api/UserApi.md#apiv2userlogoutpost) | **POST** /api/v2/user/logout | Завершение сеанса работы.
*UserApi* | [**apiV2UserRecoveryIdConfirmPost**](docs/Api/UserApi.md#apiv2userrecoveryidconfirmpost) | **POST** /api/v2/user/recovery/{id}/confirm | Подтверждение восстановления/ввод проверочного кода.
*UserApi* | [**apiV2UserRecoveryIdGet**](docs/Api/UserApi.md#apiv2userrecoveryidget) | **GET** /api/v2/user/recovery/{id} | Получение процесса восстановления пароля.
*UserApi* | [**apiV2UserRecoveryIdResendCodePost**](docs/Api/UserApi.md#apiv2userrecoveryidresendcodepost) | **POST** /api/v2/user/recovery/{id}/resend-code | Повторная отправка проверочного кода.
*UserApi* | [**apiV2UserRecoveryPost**](docs/Api/UserApi.md#apiv2userrecoverypost) | **POST** /api/v2/user/recovery | Запрос на восстановление пароля.
*UserApi* | [**apiV2UserSelfCertificateGet**](docs/Api/UserApi.md#apiv2userselfcertificateget) | **GET** /api/v2/user/self/certificate | Получить список сертификатов текущего пользователя
*UserApi* | [**apiV2UserSelfContactEmailConfirmPost**](docs/Api/UserApi.md#apiv2userselfcontactemailconfirmpost) | **POST** /api/v2/user/self/contact-email-confirm | Подтерждение контактного email.
*UserApi* | [**apiV2UserSelfContactEmailDelete**](docs/Api/UserApi.md#apiv2userselfcontactemaildelete) | **DELETE** /api/v2/user/self/contact-email | Удаление контактного email.
*UserApi* | [**apiV2UserSelfContactEmailPost**](docs/Api/UserApi.md#apiv2userselfcontactemailpost) | **POST** /api/v2/user/self/contact-email | Создание контактного email.
*UserApi* | [**apiV2UserSelfContactEmailResendPost**](docs/Api/UserApi.md#apiv2userselfcontactemailresendpost) | **POST** /api/v2/user/self/contact-email-resend | Запрос на повторную отправку кода.
*UserApi* | [**apiV2UserSelfDelete**](docs/Api/UserApi.md#apiv2userselfdelete) | **DELETE** /api/v2/user/self | Удаление пользователя самим собой.
*UserApi* | [**apiV2UserSelfDsPhoneVerificationCodePost**](docs/Api/UserApi.md#apiv2userselfdsphoneverificationcodepost) | **POST** /api/v2/user/self/ds-phone-verification-code | deprecated! Выслать код для подтверждения
*UserApi* | [**apiV2UserSelfEmailChangeDelete**](docs/Api/UserApi.md#apiv2userselfemailchangedelete) | **DELETE** /api/v2/user/self/email-change | Отмена запроса на изменение почты.
*UserApi* | [**apiV2UserSelfEmailChangePost**](docs/Api/UserApi.md#apiv2userselfemailchangepost) | **POST** /api/v2/user/self/email-change | Посылает email на подтверждение почты.
*UserApi* | [**apiV2UserSelfEmailCodeConfirmPost**](docs/Api/UserApi.md#apiv2userselfemailcodeconfirmpost) | **POST** /api/v2/user/self/email-code-confirm | Подтверждение телефона по коду из email.
*UserApi* | [**apiV2UserSelfEmailCodeSendPost**](docs/Api/UserApi.md#apiv2userselfemailcodesendpost) | **POST** /api/v2/user/self/email-code-send | Посылает повторные email с кодом подтверждения.
*UserApi* | [**apiV2UserSelfGet**](docs/Api/UserApi.md#apiv2userselfget) | **GET** /api/v2/user/self | Возвращает реквизиты своей организации.
*UserApi* | [**apiV2UserSelfPasswordChangePut**](docs/Api/UserApi.md#apiv2userselfpasswordchangeput) | **PUT** /api/v2/user/self/password-change | Меняет пароль пользователю.
*UserApi* | [**apiV2UserSelfPhoneChangeDelete**](docs/Api/UserApi.md#apiv2userselfphonechangedelete) | **DELETE** /api/v2/user/self/phone-change | Отменяет запроса на изменение телефона.
*UserApi* | [**apiV2UserSelfPhoneChangePost**](docs/Api/UserApi.md#apiv2userselfphonechangepost) | **POST** /api/v2/user/self/phone-change | Запрос на изменение телефона.
*UserApi* | [**apiV2UserSelfPut**](docs/Api/UserApi.md#apiv2userselfput) | **PUT** /api/v2/user/self | Сохраняет данные пользователя.
*UserApi* | [**apiV2UserSelfSmsCodeConfirmPost**](docs/Api/UserApi.md#apiv2userselfsmscodeconfirmpost) | **POST** /api/v2/user/self/sms-code-confirm | Подтверждение телефона по коду из смс.
*UserApi* | [**apiV2UserSelfSmsCodeSendPost**](docs/Api/UserApi.md#apiv2userselfsmscodesendpost) | **POST** /api/v2/user/self/sms-code-send | Посылает повторную смс.
*UserApi* | [**apiV2UserSelfTokenPost**](docs/Api/UserApi.md#apiv2userselftokenpost) | **POST** /api/v2/user/self/token | Создание одноразового токена
*UserApi* | [**apiV2UserSelfUsedeskTokenPut**](docs/Api/UserApi.md#apiv2userselfusedesktokenput) | **PUT** /api/v2/user/self/usedesk-token | Обновляет токен с useDesk.
*WorkerApi* | [**apiV2WorkerDelete**](docs/Api/WorkerApi.md#apiv2workerdelete) | **DELETE** /api/v2/worker | Удаление списка сотрудников.
*WorkerApi* | [**apiV2WorkerGet**](docs/Api/WorkerApi.md#apiv2workerget) | **GET** /api/v2/worker | Вывод списка сотрудников компании.
*WorkerApi* | [**apiV2WorkerIdCertificateGet**](docs/Api/WorkerApi.md#apiv2workeridcertificateget) | **GET** /api/v2/worker/{id}/certificate | Получить список сертификатов пользователя
*WorkerApi* | [**apiV2WorkerIdCertificatePost**](docs/Api/WorkerApi.md#apiv2workeridcertificatepost) | **POST** /api/v2/worker/{id}/certificate | Выдача сертификата пользователю
*WorkerApi* | [**apiV2WorkerIdChatGet**](docs/Api/WorkerApi.md#apiv2workeridchatget) | **GET** /api/v2/worker/{id}/chat | Получение списка комнат сотрудника.
*WorkerApi* | [**apiV2WorkerIdContactComplainPost**](docs/Api/WorkerApi.md#apiv2workeridcontactcomplainpost) | **POST** /api/v2/worker/{id}/contact-complain | Оставить жалобу на контакты сотрудника.
*WorkerApi* | [**apiV2WorkerIdDelete**](docs/Api/WorkerApi.md#apiv2workeriddelete) | **DELETE** /api/v2/worker/{id} | Удаление выбранного сотрудника
*WorkerApi* | [**apiV2WorkerIdGet**](docs/Api/WorkerApi.md#apiv2workeridget) | **GET** /api/v2/worker/{id} | Получение информации по указанному сотруднику компании.
*WorkerApi* | [**apiV2WorkerIdPut**](docs/Api/WorkerApi.md#apiv2workeridput) | **PUT** /api/v2/worker/{id} | Обновить данные сотрудника.
*WorkerApi* | [**apiV2WorkerIdResendInvitePost**](docs/Api/WorkerApi.md#apiv2workeridresendinvitepost) | **POST** /api/v2/worker/{id}/resend-invite | Повторно отправть письмо с приглашением в сотрудники.
*WorkerApi* | [**apiV2WorkerPost**](docs/Api/WorkerApi.md#apiv2workerpost) | **POST** /api/v2/worker | Создание нового сотрудника.
*WsApi* | [**apiV2WsConfigPost**](docs/Api/WsApi.md#apiv2wsconfigpost) | **POST** /api/v2/ws/config | Возвращает конфигурацию для WS.

## Models

- [AcClientTypeEnum](docs/Model/AcClientTypeEnum.md)
- [AcCuratorResponse](docs/Model/AcCuratorResponse.md)
- [AcDriverNameResponse](docs/Model/AcDriverNameResponse.md)
- [AcDriverResponse](docs/Model/AcDriverResponse.md)
- [AcPointContact](docs/Model/AcPointContact.md)
- [AcPointListResponse](docs/Model/AcPointListResponse.md)
- [AcTagResponse](docs/Model/AcTagResponse.md)
- [AcWorkerResponse](docs/Model/AcWorkerResponse.md)
- [ActivityType](docs/Model/ActivityType.md)
- [ActualCarrier](docs/Model/ActualCarrier.md)
- [Ad](docs/Model/Ad.md)
- [AdItem](docs/Model/AdItem.md)
- [Address](docs/Model/Address.md)
- [AddressInfo](docs/Model/AddressInfo.md)
- [AddressItem](docs/Model/AddressItem.md)
- [AddressItems](docs/Model/AddressItems.md)
- [ApiV2SimpleDocumentPreviewGetQParameter](docs/Model/ApiV2SimpleDocumentPreviewGetQParameter.md)
- [ApiV2TruckDeleteRequest](docs/Model/ApiV2TruckDeleteRequest.md)
- [ApiV2TruckPostRequest](docs/Model/ApiV2TruckPostRequest.md)
- [ApiV2WorkerDeleteRequest](docs/Model/ApiV2WorkerDeleteRequest.md)
- [AuthTokenResponse](docs/Model/AuthTokenResponse.md)
- [BankingDetails](docs/Model/BankingDetails.md)
- [BankingDetailsApproveRequest](docs/Model/BankingDetailsApproveRequest.md)
- [BankingDetailsApproveStatus](docs/Model/BankingDetailsApproveStatus.md)
- [BankingDetailsRequest](docs/Model/BankingDetailsRequest.md)
- [BankingDetailsResponse](docs/Model/BankingDetailsResponse.md)
- [BankingDetailsUpdateRequest](docs/Model/BankingDetailsUpdateRequest.md)
- [BankingDetailsValue](docs/Model/BankingDetailsValue.md)
- [BaseMessageResponse](docs/Model/BaseMessageResponse.md)
- [BidItem](docs/Model/BidItem.md)
- [BidLastResponse](docs/Model/BidLastResponse.md)
- [BidListResponse](docs/Model/BidListResponse.md)
- [BidPullInfoItem](docs/Model/BidPullInfoItem.md)
- [BidPushRequest](docs/Model/BidPushRequest.md)
- [BranchItem](docs/Model/BranchItem.md)
- [BranchItemScheduleInner](docs/Model/BranchItemScheduleInner.md)
- [BranchList](docs/Model/BranchList.md)
- [BrokerInfoItem](docs/Model/BrokerInfoItem.md)
- [BrokerListResponse](docs/Model/BrokerListResponse.md)
- [BrokerPutRequest](docs/Model/BrokerPutRequest.md)
- [BrokerResponse](docs/Model/BrokerResponse.md)
- [BrokerStatusEnum](docs/Model/BrokerStatusEnum.md)
- [Candidate](docs/Model/Candidate.md)
- [CandidateAccess](docs/Model/CandidateAccess.md)
- [CandidateCountResponse](docs/Model/CandidateCountResponse.md)
- [CandidateListResponse](docs/Model/CandidateListResponse.md)
- [CandidateRequest](docs/Model/CandidateRequest.md)
- [CandidateResponse](docs/Model/CandidateResponse.md)
- [CarCountUnitEnum](docs/Model/CarCountUnitEnum.md)
- [CarPark](docs/Model/CarPark.md)
- [CarParkAccess](docs/Model/CarParkAccess.md)
- [CarParkResponse](docs/Model/CarParkResponse.md)
- [CarPerPeriod](docs/Model/CarPerPeriod.md)
- [CarriageDirection](docs/Model/CarriageDirection.md)
- [CarriageDirectionAccess](docs/Model/CarriageDirectionAccess.md)
- [CarriageRegion](docs/Model/CarriageRegion.md)
- [CarriageRegionAccess](docs/Model/CarriageRegionAccess.md)
- [CarrierAbilityType](docs/Model/CarrierAbilityType.md)
- [CarrierAskAccess](docs/Model/CarrierAskAccess.md)
- [CarrierAskCurrent](docs/Model/CarrierAskCurrent.md)
- [CarrierAskInfoResponse](docs/Model/CarrierAskInfoResponse.md)
- [CarrierAskStat](docs/Model/CarrierAskStat.md)
- [CarrierAskStatus](docs/Model/CarrierAskStatus.md)
- [CarrierContactRequest](docs/Model/CarrierContactRequest.md)
- [CarrierCountRelateTypeEnum](docs/Model/CarrierCountRelateTypeEnum.md)
- [CarrierCountResponse](docs/Model/CarrierCountResponse.md)
- [Certificate](docs/Model/Certificate.md)
- [CertificateContract](docs/Model/CertificateContract.md)
- [Chat](docs/Model/Chat.md)
- [ChatListResponse](docs/Model/ChatListResponse.md)
- [ChatPost](docs/Model/ChatPost.md)
- [ChatPostAccess](docs/Model/ChatPostAccess.md)
- [ChatPostCreator](docs/Model/ChatPostCreator.md)
- [ChatPostDefaultPayload](docs/Model/ChatPostDefaultPayload.md)
- [ChatPostDriverAppOrderPointStatusEnum](docs/Model/ChatPostDriverAppOrderPointStatusEnum.md)
- [ChatPostKindEnum](docs/Model/ChatPostKindEnum.md)
- [ChatPostListResponse](docs/Model/ChatPostListResponse.md)
- [ChatPostOperationEnum](docs/Model/ChatPostOperationEnum.md)
- [ChatPostOrderTypeEnum](docs/Model/ChatPostOrderTypeEnum.md)
- [ChatPostPayload](docs/Model/ChatPostPayload.md)
- [ChatPostPayloadBooking](docs/Model/ChatPostPayloadBooking.md)
- [ChatPostPayloadBookingCarrier](docs/Model/ChatPostPayloadBookingCarrier.md)
- [ChatPostPayloadComment](docs/Model/ChatPostPayloadComment.md)
- [ChatPostPayloadCompany](docs/Model/ChatPostPayloadCompany.md)
- [ChatPostPayloadContactChange](docs/Model/ChatPostPayloadContactChange.md)
- [ChatPostPayloadContactChangeCreate](docs/Model/ChatPostPayloadContactChangeCreate.md)
- [ChatPostPayloadContactChangeCreateUsersInner](docs/Model/ChatPostPayloadContactChangeCreateUsersInner.md)
- [ChatPostPayloadContractorUpdate](docs/Model/ChatPostPayloadContractorUpdate.md)
- [ChatPostPayloadDigitalActNonDeliveryCar](docs/Model/ChatPostPayloadDigitalActNonDeliveryCar.md)
- [ChatPostPayloadDocumentChange](docs/Model/ChatPostPayloadDocumentChange.md)
- [ChatPostPayloadDriverAppOrderFinished](docs/Model/ChatPostPayloadDriverAppOrderFinished.md)
- [ChatPostPayloadDriverAppOrderPointStatus](docs/Model/ChatPostPayloadDriverAppOrderPointStatus.md)
- [ChatPostPayloadDriverAppOrderTaken](docs/Model/ChatPostPayloadDriverAppOrderTaken.md)
- [ChatPostPayloadDriverChange](docs/Model/ChatPostPayloadDriverChange.md)
- [ChatPostPayloadDriverChangeDriver](docs/Model/ChatPostPayloadDriverChangeDriver.md)
- [ChatPostPayloadEmails](docs/Model/ChatPostPayloadEmails.md)
- [ChatPostPayloadEmpty](docs/Model/ChatPostPayloadEmpty.md)
- [ChatPostPayloadExpeditorProxyCancellationSigned](docs/Model/ChatPostPayloadExpeditorProxyCancellationSigned.md)
- [ChatPostPayloadExpeditorProxySigned](docs/Model/ChatPostPayloadExpeditorProxySigned.md)
- [ChatPostPayloadExpeditorTask](docs/Model/ChatPostPayloadExpeditorTask.md)
- [ChatPostPayloadExpeditorTaskFreeze](docs/Model/ChatPostPayloadExpeditorTaskFreeze.md)
- [ChatPostPayloadExpeditorTaskResolution](docs/Model/ChatPostPayloadExpeditorTaskResolution.md)
- [ChatPostPayloadInvoice](docs/Model/ChatPostPayloadInvoice.md)
- [ChatPostPayloadInvoicePaymentsInner](docs/Model/ChatPostPayloadInvoicePaymentsInner.md)
- [ChatPostPayloadIssueCertificate](docs/Model/ChatPostPayloadIssueCertificate.md)
- [ChatPostPayloadModelFieldChange](docs/Model/ChatPostPayloadModelFieldChange.md)
- [ChatPostPayloadModelFieldChangeChangesInner](docs/Model/ChatPostPayloadModelFieldChangeChangesInner.md)
- [ChatPostPayloadModelFieldChangeChangesInnerNew](docs/Model/ChatPostPayloadModelFieldChangeChangesInnerNew.md)
- [ChatPostPayloadModelFieldChangeChangesInnerOld](docs/Model/ChatPostPayloadModelFieldChangeChangesInnerOld.md)
- [ChatPostPayloadOrder](docs/Model/ChatPostPayloadOrder.md)
- [ChatPostPayloadOrderCorrection](docs/Model/ChatPostPayloadOrderCorrection.md)
- [ChatPostPayloadOrderDocumentPackage](docs/Model/ChatPostPayloadOrderDocumentPackage.md)
- [ChatPostPayloadOrderEcnCancel](docs/Model/ChatPostPayloadOrderEcnCancel.md)
- [ChatPostPayloadOrderEcnCreate](docs/Model/ChatPostPayloadOrderEcnCreate.md)
- [ChatPostPayloadOrderExpeditorPaymentCarrierUpdate](docs/Model/ChatPostPayloadOrderExpeditorPaymentCarrierUpdate.md)
- [ChatPostPayloadOrderNegotiatePriceStrategyUpdate](docs/Model/ChatPostPayloadOrderNegotiatePriceStrategyUpdate.md)
- [ChatPostPayloadOrderPatch](docs/Model/ChatPostPayloadOrderPatch.md)
- [ChatPostPayloadOrderPatchNewValues](docs/Model/ChatPostPayloadOrderPatchNewValues.md)
- [ChatPostPayloadOrderPointInner](docs/Model/ChatPostPayloadOrderPointInner.md)
- [ChatPostPayloadOrderPriceChange](docs/Model/ChatPostPayloadOrderPriceChange.md)
- [ChatPostPayloadOrderRefuse](docs/Model/ChatPostPayloadOrderRefuse.md)
- [ChatPostPayloadOrderTruckDriverCorrection](docs/Model/ChatPostPayloadOrderTruckDriverCorrection.md)
- [ChatPostPayloadOriginalDocumentsReject](docs/Model/ChatPostPayloadOriginalDocumentsReject.md)
- [ChatPostPayloadOriginalDocumentsTrackingNumberChange](docs/Model/ChatPostPayloadOriginalDocumentsTrackingNumberChange.md)
- [ChatPostPayloadPaymentConsignorToExpeditor](docs/Model/ChatPostPayloadPaymentConsignorToExpeditor.md)
- [ChatPostPayloadPaymentConsignorToExpeditorTransactionsInner](docs/Model/ChatPostPayloadPaymentConsignorToExpeditorTransactionsInner.md)
- [ChatPostPayloadTruckChange](docs/Model/ChatPostPayloadTruckChange.md)
- [ChatPostPayloadTruckChangeTruck](docs/Model/ChatPostPayloadTruckChangeTruck.md)
- [ChatPostPayloadTruckChangeV2](docs/Model/ChatPostPayloadTruckChangeV2.md)
- [ChatPostPayloadTruckChangeV2Truck](docs/Model/ChatPostPayloadTruckChangeV2Truck.md)
- [ChatPostPayloadUrlChange](docs/Model/ChatPostPayloadUrlChange.md)
- [ChatPostPayloadWorkerIssueCertificate](docs/Model/ChatPostPayloadWorkerIssueCertificate.md)
- [ChatPostTypeEnum](docs/Model/ChatPostTypeEnum.md)
- [ChatPostUserData](docs/Model/ChatPostUserData.md)
- [ChatResponse](docs/Model/ChatResponse.md)
- [CheckItem](docs/Model/CheckItem.md)
- [ClaimCommonMixin](docs/Model/ClaimCommonMixin.md)
- [ClaimFilterTypeEnum](docs/Model/ClaimFilterTypeEnum.md)
- [ClaimItem](docs/Model/ClaimItem.md)
- [ClaimListResponse](docs/Model/ClaimListResponse.md)
- [ClaimStatus](docs/Model/ClaimStatus.md)
- [ClaimantType](docs/Model/ClaimantType.md)
- [ClientRoleEnum](docs/Model/ClientRoleEnum.md)
- [Comment](docs/Model/Comment.md)
- [CommentAccess](docs/Model/CommentAccess.md)
- [CommentListResponse](docs/Model/CommentListResponse.md)
- [CommentResponse](docs/Model/CommentResponse.md)
- [CommercialCondition](docs/Model/CommercialCondition.md)
- [CommunicationContactGroup](docs/Model/CommunicationContactGroup.md)
- [CommunicationContactsRequest](docs/Model/CommunicationContactsRequest.md)
- [CommunicationContactsRequestCommunicationContactGroupsInner](docs/Model/CommunicationContactsRequestCommunicationContactGroupsInner.md)
- [CommunicationContactsRequestCommunicationContactGroupsInnerId](docs/Model/CommunicationContactsRequestCommunicationContactGroupsInnerId.md)
- [CommunicationContactsResponse](docs/Model/CommunicationContactsResponse.md)
- [Company](docs/Model/Company.md)
- [CompanyAccess](docs/Model/CompanyAccess.md)
- [CompanyAdditionalRelationsEnum](docs/Model/CompanyAdditionalRelationsEnum.md)
- [CompanyBranch](docs/Model/CompanyBranch.md)
- [CompanyBranchAc](docs/Model/CompanyBranchAc.md)
- [CompanyBranchChild](docs/Model/CompanyBranchChild.md)
- [CompanyBranchConsignorBranchParamAdvertiseSettings](docs/Model/CompanyBranchConsignorBranchParamAdvertiseSettings.md)
- [CompanyBranchConsignorParamAdvertiseStatusEnum](docs/Model/CompanyBranchConsignorParamAdvertiseStatusEnum.md)
- [CompanyBranchHighlighted](docs/Model/CompanyBranchHighlighted.md)
- [CompanyBranchHighlightedResponse](docs/Model/CompanyBranchHighlightedResponse.md)
- [CompanyBranchListAcResponse](docs/Model/CompanyBranchListAcResponse.md)
- [CompanyBranchResponse](docs/Model/CompanyBranchResponse.md)
- [CompanyCarPark](docs/Model/CompanyCarPark.md)
- [CompanyCarriageDirectionResponse](docs/Model/CompanyCarriageDirectionResponse.md)
- [CompanyCarriageRegionResponse](docs/Model/CompanyCarriageRegionResponse.md)
- [CompanyConfirmation](docs/Model/CompanyConfirmation.md)
- [CompanyConfirmationAccess](docs/Model/CompanyConfirmationAccess.md)
- [CompanyConfirmationCompany](docs/Model/CompanyConfirmationCompany.md)
- [CompanyConfirmationMessage](docs/Model/CompanyConfirmationMessage.md)
- [CompanyConfirmationMessageType](docs/Model/CompanyConfirmationMessageType.md)
- [CompanyConfirmationStatusEnum](docs/Model/CompanyConfirmationStatusEnum.md)
- [CompanyCreateRequest](docs/Model/CompanyCreateRequest.md)
- [CompanyDetails](docs/Model/CompanyDetails.md)
- [CompanyDisabledType](docs/Model/CompanyDisabledType.md)
- [CompanyDocument](docs/Model/CompanyDocument.md)
- [CompanyDocumentAccess](docs/Model/CompanyDocumentAccess.md)
- [CompanyDocumentItem](docs/Model/CompanyDocumentItem.md)
- [CompanyDocumentList](docs/Model/CompanyDocumentList.md)
- [CompanyExpeditorContract](docs/Model/CompanyExpeditorContract.md)
- [CompanyExpeditorContractResponse](docs/Model/CompanyExpeditorContractResponse.md)
- [CompanyInfo](docs/Model/CompanyInfo.md)
- [CompanyInfoCarrierCarOwnershipTypeEnum](docs/Model/CompanyInfoCarrierCarOwnershipTypeEnum.md)
- [CompanyInfoResponse](docs/Model/CompanyInfoResponse.md)
- [CompanyKonturReportResponse](docs/Model/CompanyKonturReportResponse.md)
- [CompanyListResponse](docs/Model/CompanyListResponse.md)
- [CompanyLocalityResponse](docs/Model/CompanyLocalityResponse.md)
- [CompanyMetrics](docs/Model/CompanyMetrics.md)
- [CompanyOtherShort](docs/Model/CompanyOtherShort.md)
- [CompanyPartnerStatusFilterEnum](docs/Model/CompanyPartnerStatusFilterEnum.md)
- [CompanyPatchRequest](docs/Model/CompanyPatchRequest.md)
- [CompanyProfile](docs/Model/CompanyProfile.md)
- [CompanyProfileBankingDetails](docs/Model/CompanyProfileBankingDetails.md)
- [CompanyProfileBookkeeperDetails](docs/Model/CompanyProfileBookkeeperDetails.md)
- [CompanyProfileCarryingOption](docs/Model/CompanyProfileCarryingOption.md)
- [CompanyProfileCompany](docs/Model/CompanyProfileCompany.md)
- [CompanyProfilePassport](docs/Model/CompanyProfilePassport.md)
- [CompanyPutRequest](docs/Model/CompanyPutRequest.md)
- [CompanyRequirementResponse](docs/Model/CompanyRequirementResponse.md)
- [CompanyResponse](docs/Model/CompanyResponse.md)
- [CompanyReview](docs/Model/CompanyReview.md)
- [CompanyReviewAccess](docs/Model/CompanyReviewAccess.md)
- [CompanyReviewComment](docs/Model/CompanyReviewComment.md)
- [CompanyReviewCommentListResponse](docs/Model/CompanyReviewCommentListResponse.md)
- [CompanyReviewCommentRequest](docs/Model/CompanyReviewCommentRequest.md)
- [CompanyReviewCommentResponse](docs/Model/CompanyReviewCommentResponse.md)
- [CompanyReviewListResponse](docs/Model/CompanyReviewListResponse.md)
- [CompanyReviewRequest](docs/Model/CompanyReviewRequest.md)
- [CompanySettingsResponse](docs/Model/CompanySettingsResponse.md)
- [CompanyShort](docs/Model/CompanyShort.md)
- [CompanyShortSessionValues](docs/Model/CompanyShortSessionValues.md)
- [CompanyStatusEnum](docs/Model/CompanyStatusEnum.md)
- [CompanyTypeEnum](docs/Model/CompanyTypeEnum.md)
- [CompanyUpdateRequest](docs/Model/CompanyUpdateRequest.md)
- [ConfigurationCommercialConditions](docs/Model/ConfigurationCommercialConditions.md)
- [ConfigurationCommercialConditionsInternal](docs/Model/ConfigurationCommercialConditionsInternal.md)
- [ConfigurationCommercialConditionsInternational](docs/Model/ConfigurationCommercialConditionsInternational.md)
- [ConfigurationConsignorContractManager](docs/Model/ConfigurationConsignorContractManager.md)
- [ConfigurationExpeditorContractStatusEnum](docs/Model/ConfigurationExpeditorContractStatusEnum.md)
- [ConfigurationFeatures](docs/Model/ConfigurationFeatures.md)
- [ConfigurationFiles](docs/Model/ConfigurationFiles.md)
- [ConfigurationMobileApp](docs/Model/ConfigurationMobileApp.md)
- [ConfigurationPermissions](docs/Model/ConfigurationPermissions.md)
- [ConfigurationResponse](docs/Model/ConfigurationResponse.md)
- [ConfigurationSimpleSignatureStatusEnum](docs/Model/ConfigurationSimpleSignatureStatusEnum.md)
- [ConsignorContactRequest](docs/Model/ConsignorContactRequest.md)
- [ConsignorMarkEnum](docs/Model/ConsignorMarkEnum.md)
- [Contact](docs/Model/Contact.md)
- [ContactComplainRequest](docs/Model/ContactComplainRequest.md)
- [ContactComplainRequestReasonEnum](docs/Model/ContactComplainRequestReasonEnum.md)
- [ContactItem](docs/Model/ContactItem.md)
- [ContactList](docs/Model/ContactList.md)
- [ContainerTypeItem](docs/Model/ContainerTypeItem.md)
- [ContainerTypeList](docs/Model/ContainerTypeList.md)
- [ContractBankingDetails](docs/Model/ContractBankingDetails.md)
- [ContractDetails](docs/Model/ContractDetails.md)
- [ContractItem](docs/Model/ContractItem.md)
- [ContractRoleFilterEnum](docs/Model/ContractRoleFilterEnum.md)
- [ContractType](docs/Model/ContractType.md)
- [ContractTypeAccess](docs/Model/ContractTypeAccess.md)
- [ContractTypeItem](docs/Model/ContractTypeItem.md)
- [ContractTypeList](docs/Model/ContractTypeList.md)
- [ContractTypeRequest](docs/Model/ContractTypeRequest.md)
- [Coordinate](docs/Model/Coordinate.md)
- [CountryItem](docs/Model/CountryItem.md)
- [CountryListResponse](docs/Model/CountryListResponse.md)
- [Curator](docs/Model/Curator.md)
- [Currency](docs/Model/Currency.md)
- [CustomContactInner](docs/Model/CustomContactInner.md)
- [DateRange](docs/Model/DateRange.md)
- [DateTimeRange](docs/Model/DateTimeRange.md)
- [DateTimeSeparate](docs/Model/DateTimeSeparate.md)
- [DateTimeSeparateRequired](docs/Model/DateTimeSeparateRequired.md)
- [DatetimeInterval](docs/Model/DatetimeInterval.md)
- [DenyBankingDetailsRequest](docs/Model/DenyBankingDetailsRequest.md)
- [DeviceTypeEnum](docs/Model/DeviceTypeEnum.md)
- [DiadocBoxIdData](docs/Model/DiadocBoxIdData.md)
- [DictionaryDayOfWeekEnums](docs/Model/DictionaryDayOfWeekEnums.md)
- [DictionaryList](docs/Model/DictionaryList.md)
- [DictionaryTypeEnum](docs/Model/DictionaryTypeEnum.md)
- [DigitalActNonDeliveryCar](docs/Model/DigitalActNonDeliveryCar.md)
- [DigitalActNonDeliveryCarCompany](docs/Model/DigitalActNonDeliveryCarCompany.md)
- [DigitalActNonDeliveryCarFields](docs/Model/DigitalActNonDeliveryCarFields.md)
- [DigitalActNonDeliveryCarMixin](docs/Model/DigitalActNonDeliveryCarMixin.md)
- [DigitalActNonDeliveryCarMixinDriver](docs/Model/DigitalActNonDeliveryCarMixinDriver.md)
- [DigitalActNonDeliveryCarMixinVehicle](docs/Model/DigitalActNonDeliveryCarMixinVehicle.md)
- [DigitalActNonDeliveryCarOrder](docs/Model/DigitalActNonDeliveryCarOrder.md)
- [DisabledFull](docs/Model/DisabledFull.md)
- [DisabledRequest](docs/Model/DisabledRequest.md)
- [Document](docs/Model/Document.md)
- [DocumentAccess](docs/Model/DocumentAccess.md)
- [DocumentFile](docs/Model/DocumentFile.md)
- [DocumentType](docs/Model/DocumentType.md)
- [DocumentTypeShort](docs/Model/DocumentTypeShort.md)
- [Downtime](docs/Model/Downtime.md)
- [DowntimeClaimResponse](docs/Model/DowntimeClaimResponse.md)
- [DowntimeClaimResponseData](docs/Model/DowntimeClaimResponseData.md)
- [DraftDocument](docs/Model/DraftDocument.md)
- [DraftDocumentAccess](docs/Model/DraftDocumentAccess.md)
- [DraftDocumentActNonDeliveryCar](docs/Model/DraftDocumentActNonDeliveryCar.md)
- [DraftDocumentActNonDeliveryCarFields](docs/Model/DraftDocumentActNonDeliveryCarFields.md)
- [DraftDocumentDowntimeClaim](docs/Model/DraftDocumentDowntimeClaim.md)
- [DraftDocumentDowntimeClaimFields](docs/Model/DraftDocumentDowntimeClaimFields.md)
- [DraftDocumentDowntimeClaimResponse](docs/Model/DraftDocumentDowntimeClaimResponse.md)
- [DraftDocumentDowntimeClaimResponseFields](docs/Model/DraftDocumentDowntimeClaimResponseFields.md)
- [DraftDocumentIdAccessMixin](docs/Model/DraftDocumentIdAccessMixin.md)
- [DraftDocumentRequest](docs/Model/DraftDocumentRequest.md)
- [DraftDocumentResponse](docs/Model/DraftDocumentResponse.md)
- [Driver](docs/Model/Driver.md)
- [DriverAccess](docs/Model/DriverAccess.md)
- [DriverAppDetail](docs/Model/DriverAppDetail.md)
- [DriverAppInvitePostRequest](docs/Model/DriverAppInvitePostRequest.md)
- [DriverAppPhoneItemResponse](docs/Model/DriverAppPhoneItemResponse.md)
- [DriverAppPhoneListResponse](docs/Model/DriverAppPhoneListResponse.md)
- [DriverAppStatus](docs/Model/DriverAppStatus.md)
- [DriverLicense](docs/Model/DriverLicense.md)
- [DriverListResponse](docs/Model/DriverListResponse.md)
- [DriverOld](docs/Model/DriverOld.md)
- [DriverOldDriverLicenseInner](docs/Model/DriverOldDriverLicenseInner.md)
- [DriverPostRequest](docs/Model/DriverPostRequest.md)
- [DriverResponse](docs/Model/DriverResponse.md)
- [DriverValidationStatus](docs/Model/DriverValidationStatus.md)
- [EcnAdditionalData](docs/Model/EcnAdditionalData.md)
- [EcnAdditionalDataDocuments](docs/Model/EcnAdditionalDataDocuments.md)
- [EcnAdditionalDataLoaderPerson](docs/Model/EcnAdditionalDataLoaderPerson.md)
- [EcnHistoryStatus](docs/Model/EcnHistoryStatus.md)
- [EcnHistoryType](docs/Model/EcnHistoryType.md)
- [EcnLogisticsStatus](docs/Model/EcnLogisticsStatus.md)
- [EcnLogisticsStatusContainer](docs/Model/EcnLogisticsStatusContainer.md)
- [EcnOperatorEnum](docs/Model/EcnOperatorEnum.md)
- [EcnSbisStatusContainer](docs/Model/EcnSbisStatusContainer.md)
- [EcnSbisStatusEnum](docs/Model/EcnSbisStatusEnum.md)
- [EcnStatus](docs/Model/EcnStatus.md)
- [EcnStatusGroup](docs/Model/EcnStatusGroup.md)
- [EcnTemplateFormatEnum](docs/Model/EcnTemplateFormatEnum.md)
- [EcnType](docs/Model/EcnType.md)
- [EdmBoxListResponse](docs/Model/EdmBoxListResponse.md)
- [EmptyDataResponse](docs/Model/EmptyDataResponse.md)
- [ExistsResponse](docs/Model/ExistsResponse.md)
- [ExistsResponseData](docs/Model/ExistsResponseData.md)
- [ExpeditorAssignmentPayload](docs/Model/ExpeditorAssignmentPayload.md)
- [ExpeditorCarrierContractList](docs/Model/ExpeditorCarrierContractList.md)
- [ExpeditorContract](docs/Model/ExpeditorContract.md)
- [ExpeditorContractConclusion](docs/Model/ExpeditorContractConclusion.md)
- [ExpeditorContractConclusionAccess](docs/Model/ExpeditorContractConclusionAccess.md)
- [ExpeditorContractConclusionContract](docs/Model/ExpeditorContractConclusionContract.md)
- [ExpeditorContractConclusionContractInfo](docs/Model/ExpeditorContractConclusionContractInfo.md)
- [ExpeditorContractConclusionContractInfoRequest](docs/Model/ExpeditorContractConclusionContractInfoRequest.md)
- [ExpeditorContractConclusionFileGenerateInfo](docs/Model/ExpeditorContractConclusionFileGenerateInfo.md)
- [ExpeditorContractConclusionHistory](docs/Model/ExpeditorContractConclusionHistory.md)
- [ExpeditorContractConclusionIssueCertificate](docs/Model/ExpeditorContractConclusionIssueCertificate.md)
- [ExpeditorContractConclusionIssueCertificateConfirmRequest](docs/Model/ExpeditorContractConclusionIssueCertificateConfirmRequest.md)
- [ExpeditorContractConclusionIssueCertificatePhoneRequest](docs/Model/ExpeditorContractConclusionIssueCertificatePhoneRequest.md)
- [ExpeditorContractConclusionIssueCertificateRequest](docs/Model/ExpeditorContractConclusionIssueCertificateRequest.md)
- [ExpeditorContractConclusionKonturData](docs/Model/ExpeditorContractConclusionKonturData.md)
- [ExpeditorContractConclusionKonturDataSignersInner](docs/Model/ExpeditorContractConclusionKonturDataSignersInner.md)
- [ExpeditorContractConclusionResponse](docs/Model/ExpeditorContractConclusionResponse.md)
- [ExpeditorContractConclusionSettings](docs/Model/ExpeditorContractConclusionSettings.md)
- [ExpeditorContractConclusionSigner](docs/Model/ExpeditorContractConclusionSigner.md)
- [ExpeditorContractConclusionSignerRequest](docs/Model/ExpeditorContractConclusionSignerRequest.md)
- [ExpeditorContractConclusionSigningMethod](docs/Model/ExpeditorContractConclusionSigningMethod.md)
- [ExpeditorContractConclusionSigningMethodRequest](docs/Model/ExpeditorContractConclusionSigningMethodRequest.md)
- [ExpeditorContractConclusionStatus](docs/Model/ExpeditorContractConclusionStatus.md)
- [ExpeditorContractConclusionStatusRequest](docs/Model/ExpeditorContractConclusionStatusRequest.md)
- [ExpeditorContractConclusionValidation](docs/Model/ExpeditorContractConclusionValidation.md)
- [ExpeditorContractStatus](docs/Model/ExpeditorContractStatus.md)
- [ExpeditorContractUpdatesCommercialCondition](docs/Model/ExpeditorContractUpdatesCommercialCondition.md)
- [ExpeditorContractUpdatesCommercialConditionFull](docs/Model/ExpeditorContractUpdatesCommercialConditionFull.md)
- [ExpeditorContractUpdatesCommercialConditionFullContentFile](docs/Model/ExpeditorContractUpdatesCommercialConditionFullContentFile.md)
- [ExpeditorContractUpdatesCommercialConditionFullSignFile](docs/Model/ExpeditorContractUpdatesCommercialConditionFullSignFile.md)
- [ExpeditorContractUpdatesCommercialConditionType](docs/Model/ExpeditorContractUpdatesCommercialConditionType.md)
- [ExpeditorContractUpdatesCommercialConditionsRequest](docs/Model/ExpeditorContractUpdatesCommercialConditionsRequest.md)
- [ExpeditorContractUpdatesFoundationDocument](docs/Model/ExpeditorContractUpdatesFoundationDocument.md)
- [ExpeditorContractUpdatesProxy](docs/Model/ExpeditorContractUpdatesProxy.md)
- [ExpeditorContractUpdatesProxyRequest](docs/Model/ExpeditorContractUpdatesProxyRequest.md)
- [ExpeditorContractUpdatesResponse](docs/Model/ExpeditorContractUpdatesResponse.md)
- [ExpeditorContractUpdatesSignRequest](docs/Model/ExpeditorContractUpdatesSignRequest.md)
- [ExpeditorContractUpdatesSigner](docs/Model/ExpeditorContractUpdatesSigner.md)
- [ExpeditorContractUpdatesSignerRequest](docs/Model/ExpeditorContractUpdatesSignerRequest.md)
- [ExpeditorContractUpdatesState](docs/Model/ExpeditorContractUpdatesState.md)
- [ExpeditorContractUpdatesStatus](docs/Model/ExpeditorContractUpdatesStatus.md)
- [ExpeditorEcnSignRequest](docs/Model/ExpeditorEcnSignRequest.md)
- [ExpeditorOffer](docs/Model/ExpeditorOffer.md)
- [ExpeditorOfferCarrierCurrent](docs/Model/ExpeditorOfferCarrierCurrent.md)
- [ExpeditorOfferRequest](docs/Model/ExpeditorOfferRequest.md)
- [ExpeditorOffersResponse](docs/Model/ExpeditorOffersResponse.md)
- [ExpeditorPayment](docs/Model/ExpeditorPayment.md)
- [ExpeditorPaymentResponse](docs/Model/ExpeditorPaymentResponse.md)
- [ExpeditorPaymentTransaction](docs/Model/ExpeditorPaymentTransaction.md)
- [ExpeditorPriceStrategyType](docs/Model/ExpeditorPriceStrategyType.md)
- [ExpeditorProposalConsignorExpeditorPaymentRequest](docs/Model/ExpeditorProposalConsignorExpeditorPaymentRequest.md)
- [ExpeditorProposalPaymentResponse](docs/Model/ExpeditorProposalPaymentResponse.md)
- [ExpeditorProposalSignedDocumentListResponse](docs/Model/ExpeditorProposalSignedDocumentListResponse.md)
- [ExpeditorTask](docs/Model/ExpeditorTask.md)
- [ExpeditorTaskAccess](docs/Model/ExpeditorTaskAccess.md)
- [ExpeditorTaskFreezeRequest](docs/Model/ExpeditorTaskFreezeRequest.md)
- [ExpeditorTaskListResponse](docs/Model/ExpeditorTaskListResponse.md)
- [ExpeditorTaskResolutionEnum](docs/Model/ExpeditorTaskResolutionEnum.md)
- [ExpeditorTaskResolutionRequest](docs/Model/ExpeditorTaskResolutionRequest.md)
- [ExpeditorTaskResponse](docs/Model/ExpeditorTaskResponse.md)
- [ExpeditorTaskResponseData](docs/Model/ExpeditorTaskResponseData.md)
- [ExpeditorTaskStatusEnum](docs/Model/ExpeditorTaskStatusEnum.md)
- [ExpeditorTaskType](docs/Model/ExpeditorTaskType.md)
- [ExpeditorTaskTypeEnum](docs/Model/ExpeditorTaskTypeEnum.md)
- [FileIds](docs/Model/FileIds.md)
- [FileItem](docs/Model/FileItem.md)
- [FileLinkResponse](docs/Model/FileLinkResponse.md)
- [FileLinkResponseData](docs/Model/FileLinkResponseData.md)
- [FileList](docs/Model/FileList.md)
- [FileOnValidation](docs/Model/FileOnValidation.md)
- [FileOnValidationAccess](docs/Model/FileOnValidationAccess.md)
- [FileShort](docs/Model/FileShort.md)
- [FileType](docs/Model/FileType.md)
- [FileUrl](docs/Model/FileUrl.md)
- [FileV1](docs/Model/FileV1.md)
- [FileV2](docs/Model/FileV2.md)
- [FileV2Item](docs/Model/FileV2Item.md)
- [FilterIntegerBooleanEnum](docs/Model/FilterIntegerBooleanEnum.md)
- [FilterStringBooleanEnum](docs/Model/FilterStringBooleanEnum.md)
- [GeneralPartnerContract](docs/Model/GeneralPartnerContract.md)
- [GeneralPartnerFee](docs/Model/GeneralPartnerFee.md)
- [GeneralPartnerFeeTypeEnum](docs/Model/GeneralPartnerFeeTypeEnum.md)
- [GeneralPartnerFeeValue](docs/Model/GeneralPartnerFeeValue.md)
- [HashListRequest](docs/Model/HashListRequest.md)
- [IdIntName](docs/Model/IdIntName.md)
- [IdListRequest](docs/Model/IdListRequest.md)
- [IdName](docs/Model/IdName.md)
- [IncomeRequest](docs/Model/IncomeRequest.md)
- [InfoCarrierCar](docs/Model/InfoCarrierCar.md)
- [InvoiceStatusEnum](docs/Model/InvoiceStatusEnum.md)
- [IssueCertificate](docs/Model/IssueCertificate.md)
- [Itinerary](docs/Model/Itinerary.md)
- [ItineraryListResponse](docs/Model/ItineraryListResponse.md)
- [LandingMessage](docs/Model/LandingMessage.md)
- [LegalFormEnum](docs/Model/LegalFormEnum.md)
- [LegalStatus](docs/Model/LegalStatus.md)
- [LicenseType](docs/Model/LicenseType.md)
- [ListFilterRequest](docs/Model/ListFilterRequest.md)
- [LoadingType](docs/Model/LoadingType.md)
- [Locality](docs/Model/Locality.md)
- [LocalityCoordinates](docs/Model/LocalityCoordinates.md)
- [LocalityFilterEnum](docs/Model/LocalityFilterEnum.md)
- [LocalityMetricRequest](docs/Model/LocalityMetricRequest.md)
- [LocalityResponse](docs/Model/LocalityResponse.md)
- [LocalitySortTypeEnum](docs/Model/LocalitySortTypeEnum.md)
- [LoginPasswordRequest](docs/Model/LoginPasswordRequest.md)
- [LoginTypeEnum](docs/Model/LoginTypeEnum.md)
- [LogoutRequest](docs/Model/LogoutRequest.md)
- [LotOfferPushRequest](docs/Model/LotOfferPushRequest.md)
- [LotsAdditionalRelationsEnum](docs/Model/LotsAdditionalRelationsEnum.md)
- [Message](docs/Model/Message.md)
- [MessageAccess](docs/Model/MessageAccess.md)
- [MessageCountResponse](docs/Model/MessageCountResponse.md)
- [MessageListResponse](docs/Model/MessageListResponse.md)
- [MessageRequest](docs/Model/MessageRequest.md)
- [MessageResponse](docs/Model/MessageResponse.md)
- [MessageTypeEnum](docs/Model/MessageTypeEnum.md)
- [MessageV2](docs/Model/MessageV2.md)
- [ModerationMessage](docs/Model/ModerationMessage.md)
- [MonitoringItem](docs/Model/MonitoringItem.md)
- [MonitoringRequest](docs/Model/MonitoringRequest.md)
- [NotifyParamItem](docs/Model/NotifyParamItem.md)
- [ObjectReg](docs/Model/ObjectReg.md)
- [OfferPushRequest](docs/Model/OfferPushRequest.md)
- [OrderAccess](docs/Model/OrderAccess.md)
- [OrderAccessType](docs/Model/OrderAccessType.md)
- [OrderActNonDeliveryCarResponse](docs/Model/OrderActNonDeliveryCarResponse.md)
- [OrderActNonDeliveryCarStatusEnum](docs/Model/OrderActNonDeliveryCarStatusEnum.md)
- [OrderActNonDeliveryCarTypeEnum](docs/Model/OrderActNonDeliveryCarTypeEnum.md)
- [OrderAdditionalDataTypeEnum](docs/Model/OrderAdditionalDataTypeEnum.md)
- [OrderAdditionalInfo](docs/Model/OrderAdditionalInfo.md)
- [OrderAdditionalInfoRequest](docs/Model/OrderAdditionalInfoRequest.md)
- [OrderAdditionalInfoResponse](docs/Model/OrderAdditionalInfoResponse.md)
- [OrderArchiveStatus](docs/Model/OrderArchiveStatus.md)
- [OrderBanking](docs/Model/OrderBanking.md)
- [OrderBiddingType](docs/Model/OrderBiddingType.md)
- [OrderCardFull](docs/Model/OrderCardFull.md)
- [OrderCardResponse](docs/Model/OrderCardResponse.md)
- [OrderCarrierAskRequest](docs/Model/OrderCarrierAskRequest.md)
- [OrderCarrierPaymentType](docs/Model/OrderCarrierPaymentType.md)
- [OrderCategoryStatisticsItem](docs/Model/OrderCategoryStatisticsItem.md)
- [OrderCategoryStatisticsResponse](docs/Model/OrderCategoryStatisticsResponse.md)
- [OrderChatTypeEnum](docs/Model/OrderChatTypeEnum.md)
- [OrderClaimListResponse](docs/Model/OrderClaimListResponse.md)
- [OrderClientAccessListResponse](docs/Model/OrderClientAccessListResponse.md)
- [OrderCommentReplyRequest](docs/Model/OrderCommentReplyRequest.md)
- [OrderCommentRequest](docs/Model/OrderCommentRequest.md)
- [OrderCondition](docs/Model/OrderCondition.md)
- [OrderConditions](docs/Model/OrderConditions.md)
- [OrderConditionsExpeditor](docs/Model/OrderConditionsExpeditor.md)
- [OrderConditionsResponse](docs/Model/OrderConditionsResponse.md)
- [OrderContactListResponse](docs/Model/OrderContactListResponse.md)
- [OrderCountResponse](docs/Model/OrderCountResponse.md)
- [OrderCreateRequest](docs/Model/OrderCreateRequest.md)
- [OrderCustomerPatchRequest](docs/Model/OrderCustomerPatchRequest.md)
- [OrderDefaultPatchItem](docs/Model/OrderDefaultPatchItem.md)
- [OrderDetails](docs/Model/OrderDetails.md)
- [OrderDetailsTypeEnum](docs/Model/OrderDetailsTypeEnum.md)
- [OrderDocument](docs/Model/OrderDocument.md)
- [OrderDocumentAccess](docs/Model/OrderDocumentAccess.md)
- [OrderDocumentFileIdRequest](docs/Model/OrderDocumentFileIdRequest.md)
- [OrderDocumentIdRequest](docs/Model/OrderDocumentIdRequest.md)
- [OrderDocumentPackage](docs/Model/OrderDocumentPackage.md)
- [OrderDocumentPackageAccess](docs/Model/OrderDocumentPackageAccess.md)
- [OrderDocumentPackageMixin](docs/Model/OrderDocumentPackageMixin.md)
- [OrderDocumentPackageResponse](docs/Model/OrderDocumentPackageResponse.md)
- [OrderDocumentPackageStatus](docs/Model/OrderDocumentPackageStatus.md)
- [OrderDocumentRejectPackageRequest](docs/Model/OrderDocumentRejectPackageRequest.md)
- [OrderDocumentRejectPackageRequestOrderDocumentsInner](docs/Model/OrderDocumentRejectPackageRequestOrderDocumentsInner.md)
- [OrderDocumentRejectPackageStatus](docs/Model/OrderDocumentRejectPackageStatus.md)
- [OrderDocumentResponse](docs/Model/OrderDocumentResponse.md)
- [OrderDocumentShowToCustomerRequest](docs/Model/OrderDocumentShowToCustomerRequest.md)
- [OrderDocumentShowToCustomerRequestOrderDocumentsInner](docs/Model/OrderDocumentShowToCustomerRequestOrderDocumentsInner.md)
- [OrderDocumentStatusEnum](docs/Model/OrderDocumentStatusEnum.md)
- [OrderDocumentType](docs/Model/OrderDocumentType.md)
- [OrderDocumentTypeEnum](docs/Model/OrderDocumentTypeEnum.md)
- [OrderDocumentUpdateAllRequest](docs/Model/OrderDocumentUpdateAllRequest.md)
- [OrderDocumentUpdateRequest](docs/Model/OrderDocumentUpdateRequest.md)
- [OrderDocumentUpdateRequestCustomMixin](docs/Model/OrderDocumentUpdateRequestCustomMixin.md)
- [OrderDocumentUpdateRequestDefaultMixin](docs/Model/OrderDocumentUpdateRequestDefaultMixin.md)
- [OrderDowntime](docs/Model/OrderDowntime.md)
- [OrderDowntimeClaim](docs/Model/OrderDowntimeClaim.md)
- [OrderDowntimeClaimAccess](docs/Model/OrderDowntimeClaimAccess.md)
- [OrderDowntimeClaimCreateProofRequest](docs/Model/OrderDowntimeClaimCreateProofRequest.md)
- [OrderDowntimeClaimCreateProofRequestCustomItem](docs/Model/OrderDowntimeClaimCreateProofRequestCustomItem.md)
- [OrderDowntimeClaimCreateProofRequestTrnItem](docs/Model/OrderDowntimeClaimCreateProofRequestTrnItem.md)
- [OrderDowntimeClaimCreateRequest](docs/Model/OrderDowntimeClaimCreateRequest.md)
- [OrderDowntimeClaimCreateRequestV2](docs/Model/OrderDowntimeClaimCreateRequestV2.md)
- [OrderDowntimeClaimPoint](docs/Model/OrderDowntimeClaimPoint.md)
- [OrderDowntimeClaimPointFields](docs/Model/OrderDowntimeClaimPointFields.md)
- [OrderDowntimeClaimPointFieldsData](docs/Model/OrderDowntimeClaimPointFieldsData.md)
- [OrderDowntimeClaimProof](docs/Model/OrderDowntimeClaimProof.md)
- [OrderDowntimeClaimRejectRequest](docs/Model/OrderDowntimeClaimRejectRequest.md)
- [OrderDowntimeClaimResponse](docs/Model/OrderDowntimeClaimResponse.md)
- [OrderDowntimeClaimResponseData](docs/Model/OrderDowntimeClaimResponseData.md)
- [OrderDowntimeClaimResponseStatus](docs/Model/OrderDowntimeClaimResponseStatus.md)
- [OrderDowntimeClaimType](docs/Model/OrderDowntimeClaimType.md)
- [OrderDowntimeClaimTypeEnum](docs/Model/OrderDowntimeClaimTypeEnum.md)
- [OrderDowntimeCommonMixin](docs/Model/OrderDowntimeCommonMixin.md)
- [OrderDowntimePoint](docs/Model/OrderDowntimePoint.md)
- [OrderDowntimeResponse](docs/Model/OrderDowntimeResponse.md)
- [OrderDowntimeResponseMixin](docs/Model/OrderDowntimeResponseMixin.md)
- [OrderDraft](docs/Model/OrderDraft.md)
- [OrderDraftAccess](docs/Model/OrderDraftAccess.md)
- [OrderDraftBiddingMixin](docs/Model/OrderDraftBiddingMixin.md)
- [OrderDraftBiddingPermissionsMixin](docs/Model/OrderDraftBiddingPermissionsMixin.md)
- [OrderDraftCommonMixin](docs/Model/OrderDraftCommonMixin.md)
- [OrderDraftExpeditor](docs/Model/OrderDraftExpeditor.md)
- [OrderDraftExpeditorBidding](docs/Model/OrderDraftExpeditorBidding.md)
- [OrderDraftExpeditorConditions](docs/Model/OrderDraftExpeditorConditions.md)
- [OrderDraftExpeditorConditionsResponse](docs/Model/OrderDraftExpeditorConditionsResponse.md)
- [OrderDraftExpeditorCruResponse](docs/Model/OrderDraftExpeditorCruResponse.md)
- [OrderDraftExpeditorEditItem](docs/Model/OrderDraftExpeditorEditItem.md)
- [OrderDraftExpeditorFields](docs/Model/OrderDraftExpeditorFields.md)
- [OrderDraftExpeditorPriceResponse](docs/Model/OrderDraftExpeditorPriceResponse.md)
- [OrderDraftExpeditorPriceV2Response](docs/Model/OrderDraftExpeditorPriceV2Response.md)
- [OrderDraftExpeditorPriceValue](docs/Model/OrderDraftExpeditorPriceValue.md)
- [OrderDraftExpeditorPriceValueV2](docs/Model/OrderDraftExpeditorPriceValueV2.md)
- [OrderDraftExpeditorRecommendedPriceResponse](docs/Model/OrderDraftExpeditorRecommendedPriceResponse.md)
- [OrderDraftExpeditorUpdateRequest](docs/Model/OrderDraftExpeditorUpdateRequest.md)
- [OrderDraftExpeditorValidateResponse](docs/Model/OrderDraftExpeditorValidateResponse.md)
- [OrderDraftFtl](docs/Model/OrderDraftFtl.md)
- [OrderDraftFtlAccess](docs/Model/OrderDraftFtlAccess.md)
- [OrderDraftFtlConditions](docs/Model/OrderDraftFtlConditions.md)
- [OrderDraftFtlConditionsResponse](docs/Model/OrderDraftFtlConditionsResponse.md)
- [OrderDraftFtlEditItem](docs/Model/OrderDraftFtlEditItem.md)
- [OrderDraftFtlFields](docs/Model/OrderDraftFtlFields.md)
- [OrderDraftFtlRequest](docs/Model/OrderDraftFtlRequest.md)
- [OrderDraftFtlResponse](docs/Model/OrderDraftFtlResponse.md)
- [OrderDraftFtlValidateResponse](docs/Model/OrderDraftFtlValidateResponse.md)
- [OrderDraftIdAccessMixin](docs/Model/OrderDraftIdAccessMixin.md)
- [OrderDraftKind](docs/Model/OrderDraftKind.md)
- [OrderDraftKindEnum](docs/Model/OrderDraftKindEnum.md)
- [OrderDraftListResponse](docs/Model/OrderDraftListResponse.md)
- [OrderDraftProgressValueEnum](docs/Model/OrderDraftProgressValueEnum.md)
- [OrderDraftProject](docs/Model/OrderDraftProject.md)
- [OrderDraftProjectFields](docs/Model/OrderDraftProjectFields.md)
- [OrderDraftRequest](docs/Model/OrderDraftRequest.md)
- [OrderDraftResponse](docs/Model/OrderDraftResponse.md)
- [OrderDraftRoutePoint](docs/Model/OrderDraftRoutePoint.md)
- [OrderDraftStepBidResponse](docs/Model/OrderDraftStepBidResponse.md)
- [OrderDriver](docs/Model/OrderDriver.md)
- [OrderDriverResponse](docs/Model/OrderDriverResponse.md)
- [OrderEcn](docs/Model/OrderEcn.md)
- [OrderEcnAccess](docs/Model/OrderEcnAccess.md)
- [OrderEcnCheckAccessResponse](docs/Model/OrderEcnCheckAccessResponse.md)
- [OrderEcnHistory](docs/Model/OrderEcnHistory.md)
- [OrderEcnHistoryResponse](docs/Model/OrderEcnHistoryResponse.md)
- [OrderEcnItem](docs/Model/OrderEcnItem.md)
- [OrderEcnItemEdmOperatorStatus](docs/Model/OrderEcnItemEdmOperatorStatus.md)
- [OrderEcnListResponse](docs/Model/OrderEcnListResponse.md)
- [OrderEcnResponse](docs/Model/OrderEcnResponse.md)
- [OrderEditItem](docs/Model/OrderEditItem.md)
- [OrderEditParams](docs/Model/OrderEditParams.md)
- [OrderEditRequest](docs/Model/OrderEditRequest.md)
- [OrderEditResponse](docs/Model/OrderEditResponse.md)
- [OrderEditTagRequest](docs/Model/OrderEditTagRequest.md)
- [OrderExpeditorPriceType](docs/Model/OrderExpeditorPriceType.md)
- [OrderFilterBelongEnum](docs/Model/OrderFilterBelongEnum.md)
- [OrderFilterBiddingTypeEnum](docs/Model/OrderFilterBiddingTypeEnum.md)
- [OrderFilterCarrierPaidStatusEnum](docs/Model/OrderFilterCarrierPaidStatusEnum.md)
- [OrderFilterConsignorPaidStatusEnum](docs/Model/OrderFilterConsignorPaidStatusEnum.md)
- [OrderFilterDocumentOriginalStatusEnum](docs/Model/OrderFilterDocumentOriginalStatusEnum.md)
- [OrderFilterDocumentPackageStatusEnum](docs/Model/OrderFilterDocumentPackageStatusEnum.md)
- [OrderFilterDriverStatus](docs/Model/OrderFilterDriverStatus.md)
- [OrderFilterExpeditorRefuseTypeEnum](docs/Model/OrderFilterExpeditorRefuseTypeEnum.md)
- [OrderFilterPatchStatusEnum](docs/Model/OrderFilterPatchStatusEnum.md)
- [OrderFilterPortKindEnum](docs/Model/OrderFilterPortKindEnum.md)
- [OrderFilterPortOrderTypeEnum](docs/Model/OrderFilterPortOrderTypeEnum.md)
- [OrderFilterPortStateEnum](docs/Model/OrderFilterPortStateEnum.md)
- [OrderFilterProxyStatusEnum](docs/Model/OrderFilterProxyStatusEnum.md)
- [OrderFilterSignStatusEnum](docs/Model/OrderFilterSignStatusEnum.md)
- [OrderFilterStateEnum](docs/Model/OrderFilterStateEnum.md)
- [OrderFilterStatusEnum](docs/Model/OrderFilterStatusEnum.md)
- [OrderFixPriceResponse](docs/Model/OrderFixPriceResponse.md)
- [OrderFixedPrice](docs/Model/OrderFixedPrice.md)
- [OrderIdsResponse](docs/Model/OrderIdsResponse.md)
- [OrderImport](docs/Model/OrderImport.md)
- [OrderInvoice](docs/Model/OrderInvoice.md)
- [OrderInvoicePayment](docs/Model/OrderInvoicePayment.md)
- [OrderInvoiceRequest](docs/Model/OrderInvoiceRequest.md)
- [OrderInvoiceResponse](docs/Model/OrderInvoiceResponse.md)
- [OrderKind](docs/Model/OrderKind.md)
- [OrderListResponse](docs/Model/OrderListResponse.md)
- [OrderNegotiateOfferPoint](docs/Model/OrderNegotiateOfferPoint.md)
- [OrderNegotiatePriceStrategyType](docs/Model/OrderNegotiatePriceStrategyType.md)
- [OrderNegotiateRequest](docs/Model/OrderNegotiateRequest.md)
- [OrderOffer](docs/Model/OrderOffer.md)
- [OrderOfferCarRequest](docs/Model/OrderOfferCarRequest.md)
- [OrderOfferCurrent](docs/Model/OrderOfferCurrent.md)
- [OrderOfferListResponse](docs/Model/OrderOfferListResponse.md)
- [OrderPatchAccess](docs/Model/OrderPatchAccess.md)
- [OrderPatchCancelRequest](docs/Model/OrderPatchCancelRequest.md)
- [OrderPatchDiffItem](docs/Model/OrderPatchDiffItem.md)
- [OrderPatchDiffValuesEnum](docs/Model/OrderPatchDiffValuesEnum.md)
- [OrderPatchItem](docs/Model/OrderPatchItem.md)
- [OrderPatchLastItem](docs/Model/OrderPatchLastItem.md)
- [OrderPatchRejectRequest](docs/Model/OrderPatchRejectRequest.md)
- [OrderPatchRequest](docs/Model/OrderPatchRequest.md)
- [OrderPatchResponse](docs/Model/OrderPatchResponse.md)
- [OrderPatchRoutePointCard](docs/Model/OrderPatchRoutePointCard.md)
- [OrderPatchStatus](docs/Model/OrderPatchStatus.md)
- [OrderPatchStatusType](docs/Model/OrderPatchStatusType.md)
- [OrderPatchType](docs/Model/OrderPatchType.md)
- [OrderPayload](docs/Model/OrderPayload.md)
- [OrderPayment](docs/Model/OrderPayment.md)
- [OrderPaymentResponse](docs/Model/OrderPaymentResponse.md)
- [OrderPaymentTypeEnum](docs/Model/OrderPaymentTypeEnum.md)
- [OrderPinItem](docs/Model/OrderPinItem.md)
- [OrderPinResponse](docs/Model/OrderPinResponse.md)
- [OrderPointAccess](docs/Model/OrderPointAccess.md)
- [OrderPointCreateRequest](docs/Model/OrderPointCreateRequest.md)
- [OrderPointEditRequest](docs/Model/OrderPointEditRequest.md)
- [OrderPointEditResponse](docs/Model/OrderPointEditResponse.md)
- [OrderPointEditSwapRequest](docs/Model/OrderPointEditSwapRequest.md)
- [OrderPrevDoc](docs/Model/OrderPrevDoc.md)
- [OrderPriceStrategyType](docs/Model/OrderPriceStrategyType.md)
- [OrderPriceType](docs/Model/OrderPriceType.md)
- [OrderPriceTypeItem](docs/Model/OrderPriceTypeItem.md)
- [OrderPriceTypeResponse](docs/Model/OrderPriceTypeResponse.md)
- [OrderProxyEmailItem](docs/Model/OrderProxyEmailItem.md)
- [OrderProxyEmailRequest](docs/Model/OrderProxyEmailRequest.md)
- [OrderProxyEmailResponse](docs/Model/OrderProxyEmailResponse.md)
- [OrderProxyInfoItem](docs/Model/OrderProxyInfoItem.md)
- [OrderProxyInfoRequest](docs/Model/OrderProxyInfoRequest.md)
- [OrderProxyInfoResponse](docs/Model/OrderProxyInfoResponse.md)
- [OrderPublicLink](docs/Model/OrderPublicLink.md)
- [OrderPublishBiddingMixin](docs/Model/OrderPublishBiddingMixin.md)
- [OrderPublishBiddingPermissionsMixin](docs/Model/OrderPublishBiddingPermissionsMixin.md)
- [OrderPublishCommonMixin](docs/Model/OrderPublishCommonMixin.md)
- [OrderPublishExpeditorFields](docs/Model/OrderPublishExpeditorFields.md)
- [OrderPublishFtlFields](docs/Model/OrderPublishFtlFields.md)
- [OrderPublishProjectFields](docs/Model/OrderPublishProjectFields.md)
- [OrderPublishRequest](docs/Model/OrderPublishRequest.md)
- [OrderPublishRequestData](docs/Model/OrderPublishRequestData.md)
- [OrderRefuseReasonCode](docs/Model/OrderRefuseReasonCode.md)
- [OrderRefuseReasonItem](docs/Model/OrderRefuseReasonItem.md)
- [OrderRefuseReasonTypeEnum](docs/Model/OrderRefuseReasonTypeEnum.md)
- [OrderRefuseReasonsResponse](docs/Model/OrderRefuseReasonsResponse.md)
- [OrderRefuseRevertPatchDiffItem](docs/Model/OrderRefuseRevertPatchDiffItem.md)
- [OrderRefuseRevertPatchItem](docs/Model/OrderRefuseRevertPatchItem.md)
- [OrderRefuseRevertPatchRequest](docs/Model/OrderRefuseRevertPatchRequest.md)
- [OrderReusePoint](docs/Model/OrderReusePoint.md)
- [OrderReuseRequest](docs/Model/OrderReuseRequest.md)
- [OrderRoadmapItem](docs/Model/OrderRoadmapItem.md)
- [OrderRoadmapListResponse](docs/Model/OrderRoadmapListResponse.md)
- [OrderRoadmapType](docs/Model/OrderRoadmapType.md)
- [OrderRoutePoint](docs/Model/OrderRoutePoint.md)
- [OrderSearchCriteria](docs/Model/OrderSearchCriteria.md)
- [OrderSearchCriteriaListResponse](docs/Model/OrderSearchCriteriaListResponse.md)
- [OrderSearchCriteriaResponse](docs/Model/OrderSearchCriteriaResponse.md)
- [OrderSearchTruckFilter](docs/Model/OrderSearchTruckFilter.md)
- [OrderSearchTruckFilterAccess](docs/Model/OrderSearchTruckFilterAccess.md)
- [OrderSearchUpdateCriteriaRequest](docs/Model/OrderSearchUpdateCriteriaRequest.md)
- [OrderShort](docs/Model/OrderShort.md)
- [OrderShortListItem](docs/Model/OrderShortListItem.md)
- [OrderSignCreateRequest](docs/Model/OrderSignCreateRequest.md)
- [OrderSignedDocumentListResponse](docs/Model/OrderSignedDocumentListResponse.md)
- [OrderSimpleDocument](docs/Model/OrderSimpleDocument.md)
- [OrderSimpleDocumentResponse](docs/Model/OrderSimpleDocumentResponse.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [OrderStatusEnum](docs/Model/OrderStatusEnum.md)
- [OrderStepBidResponse](docs/Model/OrderStepBidResponse.md)
- [OrderTagListResponse](docs/Model/OrderTagListResponse.md)
- [OrderTrackingAdditionalDataTypeEnum](docs/Model/OrderTrackingAdditionalDataTypeEnum.md)
- [OrderTruck](docs/Model/OrderTruck.md)
- [OrderTruckDriverPatchDiffItem](docs/Model/OrderTruckDriverPatchDiffItem.md)
- [OrderTruckDriverPatchItem](docs/Model/OrderTruckDriverPatchItem.md)
- [OrderTruckDriverPatchRequest](docs/Model/OrderTruckDriverPatchRequest.md)
- [OrderTruckOrderSearchFilterKindEnum](docs/Model/OrderTruckOrderSearchFilterKindEnum.md)
- [OrderTruckResponse](docs/Model/OrderTruckResponse.md)
- [OrderType](docs/Model/OrderType.md)
- [OrderUsersResponse](docs/Model/OrderUsersResponse.md)
- [OrderValidateEcnResponse](docs/Model/OrderValidateEcnResponse.md)
- [OriginalDocument](docs/Model/OriginalDocument.md)
- [OriginalDocumentStatus](docs/Model/OriginalDocumentStatus.md)
- [Owner](docs/Model/Owner.md)
- [Pagination](docs/Model/Pagination.md)
- [PaginationNoTotal](docs/Model/PaginationNoTotal.md)
- [PartnerConditions](docs/Model/PartnerConditions.md)
- [PartnerConditionsRequest](docs/Model/PartnerConditionsRequest.md)
- [PartnerConditionsResponse](docs/Model/PartnerConditionsResponse.md)
- [PartnerContract](docs/Model/PartnerContract.md)
- [PartnerContractForm](docs/Model/PartnerContractForm.md)
- [PartnerContractRequest](docs/Model/PartnerContractRequest.md)
- [PartnerContractWithType](docs/Model/PartnerContractWithType.md)
- [PartnerFormRequest](docs/Model/PartnerFormRequest.md)
- [PartnerMessage](docs/Model/PartnerMessage.md)
- [PartnerMessageResponse](docs/Model/PartnerMessageResponse.md)
- [PartnerMessageTypeEnum](docs/Model/PartnerMessageTypeEnum.md)
- [PartnerShortFormRequest](docs/Model/PartnerShortFormRequest.md)
- [PartnerShortItem](docs/Model/PartnerShortItem.md)
- [PartnerStatusEnum](docs/Model/PartnerStatusEnum.md)
- [PartnerStatusResponse](docs/Model/PartnerStatusResponse.md)
- [PassportType](docs/Model/PassportType.md)
- [PayValue](docs/Model/PayValue.md)
- [PayValueTypeEnum](docs/Model/PayValueTypeEnum.md)
- [PayloadChunkCancellation](docs/Model/PayloadChunkCancellation.md)
- [PayloadChunkCargo](docs/Model/PayloadChunkCargo.md)
- [PayloadChunkClient](docs/Model/PayloadChunkClient.md)
- [PayloadChunkCommunicationContactGroups](docs/Model/PayloadChunkCommunicationContactGroups.md)
- [PayloadChunkConsignorOrConsignee](docs/Model/PayloadChunkConsignorOrConsignee.md)
- [PayloadChunkContract](docs/Model/PayloadChunkContract.md)
- [PayloadChunkDocument](docs/Model/PayloadChunkDocument.md)
- [PayloadChunkESign](docs/Model/PayloadChunkESign.md)
- [PayloadChunkPoints](docs/Model/PayloadChunkPoints.md)
- [PayloadChunkTitleCancel](docs/Model/PayloadChunkTitleCancel.md)
- [PayloadChunkTitleClient](docs/Model/PayloadChunkTitleClient.md)
- [PayloadChunkTitleExpeditor](docs/Model/PayloadChunkTitleExpeditor.md)
- [Payment](docs/Model/Payment.md)
- [PaymentAccess](docs/Model/PaymentAccess.md)
- [PaymentInvoiceStatus](docs/Model/PaymentInvoiceStatus.md)
- [PaymentStatusEnum](docs/Model/PaymentStatusEnum.md)
- [PaymentTransaction](docs/Model/PaymentTransaction.md)
- [PaymentType](docs/Model/PaymentType.md)
- [PaymentTypeEnum](docs/Model/PaymentTypeEnum.md)
- [PersonalManager](docs/Model/PersonalManager.md)
- [PersonalManagerContact](docs/Model/PersonalManagerContact.md)
- [PersonalManagerContactTypeEnum](docs/Model/PersonalManagerContactTypeEnum.md)
- [PointAccess](docs/Model/PointAccess.md)
- [PointEmailContact](docs/Model/PointEmailContact.md)
- [PointItem](docs/Model/PointItem.md)
- [PointList](docs/Model/PointList.md)
- [PointOne](docs/Model/PointOne.md)
- [PointShipper](docs/Model/PointShipper.md)
- [Points](docs/Model/Points.md)
- [Prediction](docs/Model/Prediction.md)
- [PredictorAvailableTruckTypeEnum](docs/Model/PredictorAvailableTruckTypeEnum.md)
- [PriceLocal](docs/Model/PriceLocal.md)
- [PriceLocalAccess](docs/Model/PriceLocalAccess.md)
- [PriceLocalCreateRequest](docs/Model/PriceLocalCreateRequest.md)
- [PriceLocalDirection](docs/Model/PriceLocalDirection.md)
- [PriceLocalDirectionAccess](docs/Model/PriceLocalDirectionAccess.md)
- [PriceLocalDirectionCreateRequest](docs/Model/PriceLocalDirectionCreateRequest.md)
- [PriceLocalDirectionItemResponse](docs/Model/PriceLocalDirectionItemResponse.md)
- [PriceLocalDirectionListResponse](docs/Model/PriceLocalDirectionListResponse.md)
- [PriceLocalEditRequest](docs/Model/PriceLocalEditRequest.md)
- [PriceLocalItemResponse](docs/Model/PriceLocalItemResponse.md)
- [PriceLocalListResponse](docs/Model/PriceLocalListResponse.md)
- [PriceLocalPool](docs/Model/PriceLocalPool.md)
- [PriceLocalPoolAccess](docs/Model/PriceLocalPoolAccess.md)
- [PriceLocalPoolCreateRequest](docs/Model/PriceLocalPoolCreateRequest.md)
- [PriceLocalPoolEditRequest](docs/Model/PriceLocalPoolEditRequest.md)
- [PriceLocalPoolItemResponse](docs/Model/PriceLocalPoolItemResponse.md)
- [PriceLocalPoolListResponse](docs/Model/PriceLocalPoolListResponse.md)
- [PricePredictorResponse](docs/Model/PricePredictorResponse.md)
- [PriceStatResponse](docs/Model/PriceStatResponse.md)
- [PriceValue](docs/Model/PriceValue.md)
- [ProductionCalendarResponse](docs/Model/ProductionCalendarResponse.md)
- [ProgressItem](docs/Model/ProgressItem.md)
- [ProposalAccess](docs/Model/ProposalAccess.md)
- [ProposalCardFull](docs/Model/ProposalCardFull.md)
- [ProposalCardResponse](docs/Model/ProposalCardResponse.md)
- [ProposalCargo](docs/Model/ProposalCargo.md)
- [ProposalCarrier](docs/Model/ProposalCarrier.md)
- [ProposalCarrierAsk](docs/Model/ProposalCarrierAsk.md)
- [ProposalCarrierAsksResponse](docs/Model/ProposalCarrierAsksResponse.md)
- [ProposalCarrierDowntimeClaimRejectRequest](docs/Model/ProposalCarrierDowntimeClaimRejectRequest.md)
- [ProposalCarrierPaymentTypeEnum](docs/Model/ProposalCarrierPaymentTypeEnum.md)
- [ProposalClaimListResponse](docs/Model/ProposalClaimListResponse.md)
- [ProposalCustomerDocsTrackingRequest](docs/Model/ProposalCustomerDocsTrackingRequest.md)
- [ProposalDowntimeClaimResponse](docs/Model/ProposalDowntimeClaimResponse.md)
- [ProposalDriver](docs/Model/ProposalDriver.md)
- [ProposalDriverDriverAppDetailInner](docs/Model/ProposalDriverDriverAppDetailInner.md)
- [ProposalExpeditorOffer](docs/Model/ProposalExpeditorOffer.md)
- [ProposalFilterCarrierPaidStatusEnum](docs/Model/ProposalFilterCarrierPaidStatusEnum.md)
- [ProposalFilterConsignorPaidStatusEnum](docs/Model/ProposalFilterConsignorPaidStatusEnum.md)
- [ProposalFilterDocumentOriginalStatusEnum](docs/Model/ProposalFilterDocumentOriginalStatusEnum.md)
- [ProposalFilterDocumentPackageStatusEnum](docs/Model/ProposalFilterDocumentPackageStatusEnum.md)
- [ProposalFilterDriverStatusEnum](docs/Model/ProposalFilterDriverStatusEnum.md)
- [ProposalFilterOrderStatusEnum](docs/Model/ProposalFilterOrderStatusEnum.md)
- [ProposalFilterPatchStatusEnum](docs/Model/ProposalFilterPatchStatusEnum.md)
- [ProposalFilterSignStatusEnum](docs/Model/ProposalFilterSignStatusEnum.md)
- [ProposalListIdsResponse](docs/Model/ProposalListIdsResponse.md)
- [ProposalListResponse](docs/Model/ProposalListResponse.md)
- [ProposalLoadingDateRecommendation](docs/Model/ProposalLoadingDateRecommendation.md)
- [ProposalOffersListResponse](docs/Model/ProposalOffersListResponse.md)
- [ProposalOrderRefuseTypeEnum](docs/Model/ProposalOrderRefuseTypeEnum.md)
- [ProposalPaymentRequest](docs/Model/ProposalPaymentRequest.md)
- [ProposalPaymentResponse](docs/Model/ProposalPaymentResponse.md)
- [ProposalPoint](docs/Model/ProposalPoint.md)
- [ProposalPriceOrProposalAuctionPriceRecommendation](docs/Model/ProposalPriceOrProposalAuctionPriceRecommendation.md)
- [ProposalProxy](docs/Model/ProposalProxy.md)
- [ProposalProxyAccess](docs/Model/ProposalProxyAccess.md)
- [ProposalProxyRequest](docs/Model/ProposalProxyRequest.md)
- [ProposalProxySignRequest](docs/Model/ProposalProxySignRequest.md)
- [ProposalProxyStatusEnum](docs/Model/ProposalProxyStatusEnum.md)
- [ProposalRecommendation](docs/Model/ProposalRecommendation.md)
- [ProposalRecommendationTypeEnum](docs/Model/ProposalRecommendationTypeEnum.md)
- [ProposalRefuse](docs/Model/ProposalRefuse.md)
- [ProposalRefuseCarrierRequest](docs/Model/ProposalRefuseCarrierRequest.md)
- [ProposalRefuseRequest](docs/Model/ProposalRefuseRequest.md)
- [ProposalSimpleDocumentsResponse](docs/Model/ProposalSimpleDocumentsResponse.md)
- [ProposalStatusEnum](docs/Model/ProposalStatusEnum.md)
- [ProposalTruck](docs/Model/ProposalTruck.md)
- [ProposalUsersListResponse](docs/Model/ProposalUsersListResponse.md)
- [ProtectedBidReason](docs/Model/ProtectedBidReason.md)
- [ProtectedBidReasonComment](docs/Model/ProtectedBidReasonComment.md)
- [ProxyPublicLinkDataRequest](docs/Model/ProxyPublicLinkDataRequest.md)
- [ReasonRequest](docs/Model/ReasonRequest.md)
- [RefreshTokenRequest](docs/Model/RefreshTokenRequest.md)
- [Reg](docs/Model/Reg.md)
- [RegisterDevice](docs/Model/RegisterDevice.md)
- [RegistrationBaseRequest](docs/Model/RegistrationBaseRequest.md)
- [RegistrationConfirmRequest](docs/Model/RegistrationConfirmRequest.md)
- [RejectDocumentRequest](docs/Model/RejectDocumentRequest.md)
- [RequestAdditionalRelationsEnum](docs/Model/RequestAdditionalRelationsEnum.md)
- [Requirement](docs/Model/Requirement.md)
- [RequirementAccess](docs/Model/RequirementAccess.md)
- [RoadmapAccess](docs/Model/RoadmapAccess.md)
- [RoleSetRequest](docs/Model/RoleSetRequest.md)
- [RoutePointCard](docs/Model/RoutePointCard.md)
- [RoutePointContactInner](docs/Model/RoutePointContactInner.md)
- [RoutePointEdit](docs/Model/RoutePointEdit.md)
- [RoutePointShort](docs/Model/RoutePointShort.md)
- [RoutePointType](docs/Model/RoutePointType.md)
- [SearchElementTypeEnum](docs/Model/SearchElementTypeEnum.md)
- [SearchItem](docs/Model/SearchItem.md)
- [SearchItemPayload](docs/Model/SearchItemPayload.md)
- [SearchOrderStatusEnum](docs/Model/SearchOrderStatusEnum.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [Section](docs/Model/Section.md)
- [SendEmailRequest](docs/Model/SendEmailRequest.md)
- [SettingChild](docs/Model/SettingChild.md)
- [SettingGroup](docs/Model/SettingGroup.md)
- [SettingList](docs/Model/SettingList.md)
- [SettingRequest](docs/Model/SettingRequest.md)
- [Settings](docs/Model/Settings.md)
- [SettingsAccess](docs/Model/SettingsAccess.md)
- [SettingsCategoryEnum](docs/Model/SettingsCategoryEnum.md)
- [SettingsDataRequest](docs/Model/SettingsDataRequest.md)
- [ShortListItem](docs/Model/ShortListItem.md)
- [SignedDocument](docs/Model/SignedDocument.md)
- [SignedDocumentAccess](docs/Model/SignedDocumentAccess.md)
- [SignedDocumentMixin](docs/Model/SignedDocumentMixin.md)
- [SignedDocumentResponse](docs/Model/SignedDocumentResponse.md)
- [SignedDocumentSignerRoleEnum](docs/Model/SignedDocumentSignerRoleEnum.md)
- [SignedDocumentTitle](docs/Model/SignedDocumentTitle.md)
- [SignedDocumentTitleSign](docs/Model/SignedDocumentTitleSign.md)
- [SignedDocumentTitleTypeEnum](docs/Model/SignedDocumentTitleTypeEnum.md)
- [SignedDocumentUserCertificate](docs/Model/SignedDocumentUserCertificate.md)
- [SignerDocumentType](docs/Model/SignerDocumentType.md)
- [SimpleDocument](docs/Model/SimpleDocument.md)
- [SimpleDocumentAssignment](docs/Model/SimpleDocumentAssignment.md)
- [SimpleDocumentResponse](docs/Model/SimpleDocumentResponse.md)
- [SimpleDocumentTitle](docs/Model/SimpleDocumentTitle.md)
- [SimpleDocumentTitleResolution](docs/Model/SimpleDocumentTitleResolution.md)
- [SimpleDocumentTitleSigner](docs/Model/SimpleDocumentTitleSigner.md)
- [SimpleDocumentTitleType](docs/Model/SimpleDocumentTitleType.md)
- [SimpleDocumentTitleTypeItem](docs/Model/SimpleDocumentTitleTypeItem.md)
- [SimpleDocumentType](docs/Model/SimpleDocumentType.md)
- [SimpleDoumentDocumentType](docs/Model/SimpleDoumentDocumentType.md)
- [SimpleSignatureRoleEnum](docs/Model/SimpleSignatureRoleEnum.md)
- [SpBatchDeleteRequest](docs/Model/SpBatchDeleteRequest.md)
- [SpContact](docs/Model/SpContact.md)
- [SpPoint](docs/Model/SpPoint.md)
- [StatsPrecisionEnum](docs/Model/StatsPrecisionEnum.md)
- [StatusResponse](docs/Model/StatusResponse.md)
- [StatusUsingEcnEnum](docs/Model/StatusUsingEcnEnum.md)
- [StoragePointExport](docs/Model/StoragePointExport.md)
- [StoragePointItem](docs/Model/StoragePointItem.md)
- [StoragePointItemDiff](docs/Model/StoragePointItemDiff.md)
- [StoragePointItemPenaltyCalculable](docs/Model/StoragePointItemPenaltyCalculable.md)
- [StoragePointList](docs/Model/StoragePointList.md)
- [StoragePointStatusEnum](docs/Model/StoragePointStatusEnum.md)
- [StringBooleanEnum](docs/Model/StringBooleanEnum.md)
- [TaxSystem](docs/Model/TaxSystem.md)
- [TaxSystemType](docs/Model/TaxSystemType.md)
- [TemperatureRange](docs/Model/TemperatureRange.md)
- [TemporaryFileType](docs/Model/TemporaryFileType.md)
- [TenderCarriage](docs/Model/TenderCarriage.md)
- [TenderCompanyStat](docs/Model/TenderCompanyStat.md)
- [TenderCompanyStatListResponse](docs/Model/TenderCompanyStatListResponse.md)
- [TenderDraft](docs/Model/TenderDraft.md)
- [TenderDraftAccess](docs/Model/TenderDraftAccess.md)
- [TenderDraftItemResponse](docs/Model/TenderDraftItemResponse.md)
- [TenderDraftListResponse](docs/Model/TenderDraftListResponse.md)
- [TenderDraftLot](docs/Model/TenderDraftLot.md)
- [TenderDraftRequestResponse](docs/Model/TenderDraftRequestResponse.md)
- [TenderDraftUpdateRequest](docs/Model/TenderDraftUpdateRequest.md)
- [TenderInfo](docs/Model/TenderInfo.md)
- [TenderLotCargo](docs/Model/TenderLotCargo.md)
- [TenderLotCarriage](docs/Model/TenderLotCarriage.md)
- [TenderLotOfferRestrictionEnum](docs/Model/TenderLotOfferRestrictionEnum.md)
- [TenderLotPayment](docs/Model/TenderLotPayment.md)
- [TenderLotPoint](docs/Model/TenderLotPoint.md)
- [TenderLotUnitEnum](docs/Model/TenderLotUnitEnum.md)
- [TenderPermission](docs/Model/TenderPermission.md)
- [TenderPermissionEnum](docs/Model/TenderPermissionEnum.md)
- [TenderRequest](docs/Model/TenderRequest.md)
- [TenderRequestAccess](docs/Model/TenderRequestAccess.md)
- [TenderRequestInfo](docs/Model/TenderRequestInfo.md)
- [TenderRequestItemResponse](docs/Model/TenderRequestItemResponse.md)
- [TenderRequestListResponse](docs/Model/TenderRequestListResponse.md)
- [TenderRequestLot](docs/Model/TenderRequestLot.md)
- [TenderRequestLotAccess](docs/Model/TenderRequestLotAccess.md)
- [TenderRequestLotItemResponse](docs/Model/TenderRequestLotItemResponse.md)
- [TenderRequestLotListResponse](docs/Model/TenderRequestLotListResponse.md)
- [TenderRequestLotOffer](docs/Model/TenderRequestLotOffer.md)
- [TenderRequestLotOfferItemResponse](docs/Model/TenderRequestLotOfferItemResponse.md)
- [TenderRequestLotProposal](docs/Model/TenderRequestLotProposal.md)
- [TenderRequestLotProposalListResponse](docs/Model/TenderRequestLotProposalListResponse.md)
- [TenderRequestLotStats](docs/Model/TenderRequestLotStats.md)
- [TenderRequestStats](docs/Model/TenderRequestStats.md)
- [TenderSortTypeEnum](docs/Model/TenderSortTypeEnum.md)
- [Timezone](docs/Model/Timezone.md)
- [Tracking](docs/Model/Tracking.md)
- [TrackingAccess](docs/Model/TrackingAccess.md)
- [TrackingCountResponse](docs/Model/TrackingCountResponse.md)
- [TrackingEdit](docs/Model/TrackingEdit.md)
- [TrackingItem](docs/Model/TrackingItem.md)
- [TrackingList](docs/Model/TrackingList.md)
- [TrackingNumberRequest](docs/Model/TrackingNumberRequest.md)
- [TractorVehicle](docs/Model/TractorVehicle.md)
- [TrailerFilterTypeEnum](docs/Model/TrailerFilterTypeEnum.md)
- [TrailerListResponse](docs/Model/TrailerListResponse.md)
- [TrailerOne](docs/Model/TrailerOne.md)
- [TrailerType](docs/Model/TrailerType.md)
- [TruckAccess](docs/Model/TruckAccess.md)
- [TruckAffiliationType](docs/Model/TruckAffiliationType.md)
- [TruckDevice](docs/Model/TruckDevice.md)
- [TruckDriver](docs/Model/TruckDriver.md)
- [TruckForFilter](docs/Model/TruckForFilter.md)
- [TruckItem](docs/Model/TruckItem.md)
- [TruckItemInV1](docs/Model/TruckItemInV1.md)
- [TruckItemInV2](docs/Model/TruckItemInV2.md)
- [TruckList](docs/Model/TruckList.md)
- [TruckMode](docs/Model/TruckMode.md)
- [TruckOld](docs/Model/TruckOld.md)
- [TruckOneV1](docs/Model/TruckOneV1.md)
- [TruckOneV2](docs/Model/TruckOneV2.md)
- [TruckOwnershipType](docs/Model/TruckOwnershipType.md)
- [TruckStatusEnum](docs/Model/TruckStatusEnum.md)
- [TruckType](docs/Model/TruckType.md)
- [TruckValidationStatus](docs/Model/TruckValidationStatus.md)
- [UseDeskTokenResponse](docs/Model/UseDeskTokenResponse.md)
- [UsedeskTokenRequest](docs/Model/UsedeskTokenRequest.md)
- [UserAccess](docs/Model/UserAccess.md)
- [UserCertificate](docs/Model/UserCertificate.md)
- [UserCertificateAccess](docs/Model/UserCertificateAccess.md)
- [UserCertificateContractTypeEnum](docs/Model/UserCertificateContractTypeEnum.md)
- [UserCertificateIssue](docs/Model/UserCertificateIssue.md)
- [UserCertificateIssueApproveRequest](docs/Model/UserCertificateIssueApproveRequest.md)
- [UserCertificateIssueRejectRequest](docs/Model/UserCertificateIssueRejectRequest.md)
- [UserCertificateListResponse](docs/Model/UserCertificateListResponse.md)
- [UserCertificateProxyTypeEnum](docs/Model/UserCertificateProxyTypeEnum.md)
- [UserCertificateResponse](docs/Model/UserCertificateResponse.md)
- [UserCertificateRevoke](docs/Model/UserCertificateRevoke.md)
- [UserCertificateRevokeRequest](docs/Model/UserCertificateRevokeRequest.md)
- [UserCertificateShort](docs/Model/UserCertificateShort.md)
- [UserCertificateShortIssue](docs/Model/UserCertificateShortIssue.md)
- [UserCertificateStatusEnum](docs/Model/UserCertificateStatusEnum.md)
- [UserCertificateUpdateRequest](docs/Model/UserCertificateUpdateRequest.md)
- [UserCodeSuccessResponse](docs/Model/UserCodeSuccessResponse.md)
- [UserConfirmEmailRequest](docs/Model/UserConfirmEmailRequest.md)
- [UserConfirmPhoneRequest](docs/Model/UserConfirmPhoneRequest.md)
- [UserContactEmailConfirmRequest](docs/Model/UserContactEmailConfirmRequest.md)
- [UserContactEmailRequest](docs/Model/UserContactEmailRequest.md)
- [UserContactEmailStatusEnum](docs/Model/UserContactEmailStatusEnum.md)
- [UserContactShort](docs/Model/UserContactShort.md)
- [UserCountActive](docs/Model/UserCountActive.md)
- [UserEmailChangeRequest](docs/Model/UserEmailChangeRequest.md)
- [UserFullResponse](docs/Model/UserFullResponse.md)
- [UserLoginRequest](docs/Model/UserLoginRequest.md)
- [UserLoginResponse](docs/Model/UserLoginResponse.md)
- [UserOneTimeTokenResponse](docs/Model/UserOneTimeTokenResponse.md)
- [UserParams](docs/Model/UserParams.md)
- [UserPasswordChangeRequest](docs/Model/UserPasswordChangeRequest.md)
- [UserPhoneChangeRequest](docs/Model/UserPhoneChangeRequest.md)
- [UserProfileFull](docs/Model/UserProfileFull.md)
- [UserProfileRequest](docs/Model/UserProfileRequest.md)
- [UserRecovery](docs/Model/UserRecovery.md)
- [UserRecoveryConfirmRequest](docs/Model/UserRecoveryConfirmRequest.md)
- [UserRecoveryCreateRequest](docs/Model/UserRecoveryCreateRequest.md)
- [UserRecoveryResponse](docs/Model/UserRecoveryResponse.md)
- [UserRefuseProfile](docs/Model/UserRefuseProfile.md)
- [UserRoleEnum](docs/Model/UserRoleEnum.md)
- [ValueWithCodeVerification](docs/Model/ValueWithCodeVerification.md)
- [Vat](docs/Model/Vat.md)
- [Vehicle](docs/Model/Vehicle.md)
- [VehicleOwner](docs/Model/VehicleOwner.md)
- [WaybillDate](docs/Model/WaybillDate.md)
- [WaybillDocument](docs/Model/WaybillDocument.md)
- [WaybillWeight](docs/Model/WaybillWeight.md)
- [WealthItem](docs/Model/WealthItem.md)
- [WorkSchedule](docs/Model/WorkSchedule.md)
- [WorkScheduleDay](docs/Model/WorkScheduleDay.md)
- [WorkScheduleDays](docs/Model/WorkScheduleDays.md)
- [WorkScheduleExceptionDate](docs/Model/WorkScheduleExceptionDate.md)
- [Worker](docs/Model/Worker.md)
- [WorkerAccess](docs/Model/WorkerAccess.md)
- [WorkerBlockedStatusEnum](docs/Model/WorkerBlockedStatusEnum.md)
- [WorkerCertificateCreateRequest](docs/Model/WorkerCertificateCreateRequest.md)
- [WorkerChangeRequest](docs/Model/WorkerChangeRequest.md)
- [WorkerInviteStatusEnum](docs/Model/WorkerInviteStatusEnum.md)
- [WorkerListResponse](docs/Model/WorkerListResponse.md)
- [WorkerResponse](docs/Model/WorkerResponse.md)
- [WorkingHours](docs/Model/WorkingHours.md)
- [WsConfig](docs/Model/WsConfig.md)
- [WsConfigResponse](docs/Model/WsConfigResponse.md)

## Authorization

### HeaderAuthorizationAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### CookieTokenAuth

- **Type**: API key
- **API key parameter name**: token
- **Location**: 


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@cargomart.ru

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
    - Generator version: `7.11.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
