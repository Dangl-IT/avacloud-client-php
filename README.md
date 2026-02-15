# Dangl\AVACloud
Please see the offical site for more information and further documentation: [https://www.dangl-it.com/products/avacloud-gaeb-saas/](https://www.dangl-it.com/products/avacloud-gaeb-saas/)  
To get started, you can use the PHP demo application: [https://github.com/Dangl-IT/avacloud-demo-php](https://github.com/Dangl-IT/avacloud-demo-php)


AVACloud API specification


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Dangl-IT/avacloud-client-php.git"
    }
  ],
  "require": {
    "dangl/avacloud": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/dangl/avacloud/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\AslvConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aslvFile = '/path/to/file.txt'; // \SplFileObject | The input file
$removePlainTextLongTexts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$removeHtmlLongTexts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->aslvConversionConvertToAva($aslvFile, $removePlainTextLongTexts, $removeHtmlLongTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AslvConversionApi->aslvConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://avacloud-api.dangl-it.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AslvConversionApi* | [**aslvConversionConvertToAva**](docs/Api/AslvConversionApi.md#aslvconversionconverttoava) | **POST** /conversion/aslv/ava | Converts Aslv files to Dangl.AVA projects
*AslvConversionApi* | [**aslvConversionConvertToExcel**](docs/Api/AslvConversionApi.md#aslvconversionconverttoexcel) | **POST** /conversion/aslv/excel | Converts Aslv files to Excel
*AslvConversionApi* | [**aslvConversionConvertToFlatAva**](docs/Api/AslvConversionApi.md#aslvconversionconverttoflatava) | **POST** /conversion/aslv/flat-ava | Converts Aslv files to Dangl.AVA projects
*AslvConversionApi* | [**aslvConversionConvertToGaeb**](docs/Api/AslvConversionApi.md#aslvconversionconverttogaeb) | **POST** /conversion/aslv/gaeb | Converts Aslv files to GAEB files
*AslvConversionApi* | [**aslvConversionConvertToOenorm**](docs/Api/AslvConversionApi.md#aslvconversionconverttooenorm) | **POST** /conversion/aslv/oenorm | Converts Aslv files to Oenorm files
*AvaConversionApi* | [**avaConversionConvertToAva**](docs/Api/AvaConversionApi.md#avaconversionconverttoava) | **POST** /conversion/ava/ava | Converts Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.
*AvaConversionApi* | [**avaConversionConvertToDatanorm**](docs/Api/AvaConversionApi.md#avaconversionconverttodatanorm) | **POST** /conversion/ava/datanorm | Converts Dangl.AVA projects to Datanorm
*AvaConversionApi* | [**avaConversionConvertToExcel**](docs/Api/AvaConversionApi.md#avaconversionconverttoexcel) | **POST** /conversion/ava/excel | Converts Dangl.AVA projects to Excel
*AvaConversionApi* | [**avaConversionConvertToFlatAva**](docs/Api/AvaConversionApi.md#avaconversionconverttoflatava) | **POST** /conversion/ava/flat-ava | Converts Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.
*AvaConversionApi* | [**avaConversionConvertToGaeb**](docs/Api/AvaConversionApi.md#avaconversionconverttogaeb) | **POST** /conversion/ava/gaeb | Converts Dangl.AVA projects to GAEB
*AvaConversionApi* | [**avaConversionConvertToIdsConnect**](docs/Api/AvaConversionApi.md#avaconversionconverttoidsconnect) | **POST** /conversion/ava/ids-connect | Converts Dangl.AVA projects to IDS Connect files
*AvaConversionApi* | [**avaConversionConvertToOenorm**](docs/Api/AvaConversionApi.md#avaconversionconverttooenorm) | **POST** /conversion/ava/oenorm | Converts Dangl.AVA projects to Oenorm
*AvaConversionApi* | [**avaConversionConvertToReb**](docs/Api/AvaConversionApi.md#avaconversionconverttoreb) | **POST** /conversion/ava/reb | Converts Dangl.AVA projects to REB
*AvaConversionApi* | [**avaConversionConvertToSia**](docs/Api/AvaConversionApi.md#avaconversionconverttosia) | **POST** /conversion/ava/sia | Converts Dangl.AVA projects to SIA 451
*AvaConversionApi* | [**avaConversionConvertToUgl**](docs/Api/AvaConversionApi.md#avaconversionconverttougl) | **POST** /conversion/ava/ugl | Converts Dangl.AVA projects to UGL
*AvaMergeApi* | [**avaMergeConvertToAva**](docs/Api/AvaMergeApi.md#avamergeconverttoava) | **POST** /ava-merge | This will merge two AVA projects into one. Typically this is used for merging offers into a base project, which preserves the base projects structure and adds prices and text additions from the offer project. This is currently in a preview phase, and the endpoint and its models are subject to change in the next versions of AVACloud.
*DanglIdentityApi* | [**danglIdentityGetUserInfo**](docs/Api/DanglIdentityApi.md#danglidentitygetuserinfo) | **GET** /identity/user-info | 
*DanglIdentityApi* | [**danglIdentityLoginAndReturnToken**](docs/Api/DanglIdentityApi.md#danglidentityloginandreturntoken) | **POST** /identity/token-login | 
*DanglIdentityApi* | [**danglIdentityLoginWithCookie**](docs/Api/DanglIdentityApi.md#danglidentityloginwithcookie) | **POST** /identity/login | 
*DanglIdentityApi* | [**danglIdentityRefreshToken**](docs/Api/DanglIdentityApi.md#danglidentityrefreshtoken) | **POST** /identity/token-refresh | 
*DanglIdentityApi* | [**danglIdentityRegister**](docs/Api/DanglIdentityApi.md#danglidentityregister) | **POST** /identity/register | 
*DanglIdentityApi* | [**danglIdentityRequestPasswordReset**](docs/Api/DanglIdentityApi.md#danglidentityrequestpasswordreset) | **POST** /identity/password-forgotten | 
*DanglIdentityApi* | [**danglIdentitySignOutWithSignInManager**](docs/Api/DanglIdentityApi.md#danglidentitysignoutwithsigninmanager) | **DELETE** /identity/login | 
*DatanormConversionApi* | [**datanormConversionConvertToAva**](docs/Api/DatanormConversionApi.md#datanormconversionconverttoava) | **POST** /conversion/datanorm/ava | Converts Datanorm files to Dangl.AVA projects
*DatanormConversionApi* | [**datanormConversionConvertToFlatAva**](docs/Api/DatanormConversionApi.md#datanormconversionconverttoflatava) | **POST** /conversion/datanorm/flat-ava | Converts Datanorm files to Dangl.AVA projects
*ExcelConversionApi* | [**excelConversionConvertToAva**](docs/Api/ExcelConversionApi.md#excelconversionconverttoava) | **POST** /conversion/excel/ava | Converts Excel files to Dangl.AVA projects.
*ExcelConversionApi* | [**excelConversionConvertToExcel**](docs/Api/ExcelConversionApi.md#excelconversionconverttoexcel) | **POST** /conversion/excel/excel | Converts Excel files to Excel files. Used, for example, when elements were added in excel to generate or modify a project. The Excel file can then be shared containing the full project with all formattings, formulas and styles applied.
*ExcelConversionApi* | [**excelConversionConvertToFlatAva**](docs/Api/ExcelConversionApi.md#excelconversionconverttoflatava) | **POST** /conversion/excel/flat-ava | Converts Excel files to Dangl.AVA projects.
*ExcelConversionApi* | [**excelConversionConvertToGaeb**](docs/Api/ExcelConversionApi.md#excelconversionconverttogaeb) | **POST** /conversion/excel/gaeb | Converts Excel files to GAEB files.
*ExcelConversionApi* | [**excelConversionConvertToOenorm**](docs/Api/ExcelConversionApi.md#excelconversionconverttooenorm) | **POST** /conversion/excel/oenorm | Converts Excel files to Oenorm files.
*FlatAvaConversionApi* | [**flatAvaConversionConvertToAva**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttoava) | **POST** /conversion/flat-ava/ava | Converts flat Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.
*FlatAvaConversionApi* | [**flatAvaConversionConvertToDatanorm**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttodatanorm) | **POST** /conversion/flat-ava/datanorm | Converts flat Dangl.AVA projects to Datanorm
*FlatAvaConversionApi* | [**flatAvaConversionConvertToExcel**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttoexcel) | **POST** /conversion/flat-ava/excel | Converts flat Dangl.AVA projects to Excel
*FlatAvaConversionApi* | [**flatAvaConversionConvertToFlatAva**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttoflatava) | **POST** /conversion/flat-ava/flat-ava | Converts flat Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.
*FlatAvaConversionApi* | [**flatAvaConversionConvertToGaeb**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttogaeb) | **POST** /conversion/flat-ava/gaeb | Converts flat Dangl.AVA projects to GAEB
*FlatAvaConversionApi* | [**flatAvaConversionConvertToIdsConnect**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttoidsconnect) | **POST** /conversion/flat-ava/ids-connect | Converts flat Dangl.AVA projects to IDS Connect files
*FlatAvaConversionApi* | [**flatAvaConversionConvertToOenorm**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttooenorm) | **POST** /conversion/flat-ava/oenorm | Converts flat Dangl.AVA projects to Oenorm
*FlatAvaConversionApi* | [**flatAvaConversionConvertToReb**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttoreb) | **POST** /conversion/flat-ava/reb | Converts flat Dangl.AVA projects to REB
*FlatAvaConversionApi* | [**flatAvaConversionConvertToSia**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttosia) | **POST** /conversion/flat-ava/sia | Converts flat Dangl.AVA projects to SIA 451
*FlatAvaConversionApi* | [**flatAvaConversionConvertToUgl**](docs/Api/FlatAvaConversionApi.md#flatavaconversionconverttougl) | **POST** /conversion/flat-ava/ugl | Converts flat Dangl.AVA projects to UGL
*GaebConversionApi* | [**gaebConversionConvertToAva**](docs/Api/GaebConversionApi.md#gaebconversionconverttoava) | **POST** /conversion/gaeb/ava | Converts GAEB files to Dangl.AVA projects
*GaebConversionApi* | [**gaebConversionConvertToExcel**](docs/Api/GaebConversionApi.md#gaebconversionconverttoexcel) | **POST** /conversion/gaeb/excel | Converts GAEB files to Excel
*GaebConversionApi* | [**gaebConversionConvertToFlatAva**](docs/Api/GaebConversionApi.md#gaebconversionconverttoflatava) | **POST** /conversion/gaeb/flat-ava | Converts GAEB files to Dangl.AVA projects
*GaebConversionApi* | [**gaebConversionConvertToGaeb**](docs/Api/GaebConversionApi.md#gaebconversionconverttogaeb) | **POST** /conversion/gaeb/gaeb | Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files.
*GaebConversionApi* | [**gaebConversionConvertToOenorm**](docs/Api/GaebConversionApi.md#gaebconversionconverttooenorm) | **POST** /conversion/gaeb/oenorm | Converts GAEB files to Oenorm files
*IdsConnectConversionApi* | [**idsConnectConversionConvertToAva**](docs/Api/IdsConnectConversionApi.md#idsconnectconversionconverttoava) | **POST** /conversion/ids-connect/ava | Converts IDS Connect files to Dangl.AVA projects
*IdsConnectConversionApi* | [**idsConnectConversionConvertToFlatAva**](docs/Api/IdsConnectConversionApi.md#idsconnectconversionconverttoflatava) | **POST** /conversion/ids-connect/flat-ava | Converts IDS Connect files to Dangl.AVA projects
*OenormConversionApi* | [**oenormConversionConvertToAva**](docs/Api/OenormConversionApi.md#oenormconversionconverttoava) | **POST** /conversion/oenorm/ava | Converts ÖNorm files to Dangl.AVA projects
*OenormConversionApi* | [**oenormConversionConvertToExcel**](docs/Api/OenormConversionApi.md#oenormconversionconverttoexcel) | **POST** /conversion/oenorm/excel | Converts ÖNorm files to Excel
*OenormConversionApi* | [**oenormConversionConvertToFlatAva**](docs/Api/OenormConversionApi.md#oenormconversionconverttoflatava) | **POST** /conversion/oenorm/flat-ava | Converts ÖNorm files to Dangl.AVA projects
*OenormConversionApi* | [**oenormConversionConvertToGaeb**](docs/Api/OenormConversionApi.md#oenormconversionconverttogaeb) | **POST** /conversion/oenorm/gaeb | Converts ÖNorm files to GAEB files.
*OenormConversionApi* | [**oenormConversionConvertToOenorm**](docs/Api/OenormConversionApi.md#oenormconversionconverttooenorm) | **POST** /conversion/oenorm/oenorm | Converts ÖNorm files to Oenorm files.
*RebConversionApi* | [**rebConversionConvertToAva**](docs/Api/RebConversionApi.md#rebconversionconverttoava) | **POST** /conversion/reb/ava | Converts REB files to Dangl.AVA projects
*RebConversionApi* | [**rebConversionConvertToExcel**](docs/Api/RebConversionApi.md#rebconversionconverttoexcel) | **POST** /conversion/reb/excel | Converts REB files to Excel
*RebConversionApi* | [**rebConversionConvertToFlatAva**](docs/Api/RebConversionApi.md#rebconversionconverttoflatava) | **POST** /conversion/reb/flat-ava | Converts REB files to Dangl.AVA projects
*RebConversionApi* | [**rebConversionConvertToGaeb**](docs/Api/RebConversionApi.md#rebconversionconverttogaeb) | **POST** /conversion/reb/gaeb | Converts REB files to GAEB files
*RebConversionApi* | [**rebConversionConvertToOenorm**](docs/Api/RebConversionApi.md#rebconversionconverttooenorm) | **POST** /conversion/reb/oenorm | Converts REB files to Oenorm
*SiaConversionApi* | [**siaConversionConvertToAva**](docs/Api/SiaConversionApi.md#siaconversionconverttoava) | **POST** /conversion/sia/ava | Converts SIA 451 files to Dangl.AVA projects
*SiaConversionApi* | [**siaConversionConvertToExcel**](docs/Api/SiaConversionApi.md#siaconversionconverttoexcel) | **POST** /conversion/sia/excel | Converts SIA 451 files to Excel
*SiaConversionApi* | [**siaConversionConvertToFlatAva**](docs/Api/SiaConversionApi.md#siaconversionconverttoflatava) | **POST** /conversion/sia/flat-ava | Converts SIA 451 files to Dangl.AVA projects
*SiaConversionApi* | [**siaConversionConvertToGaeb**](docs/Api/SiaConversionApi.md#siaconversionconverttogaeb) | **POST** /conversion/sia/gaeb | Converts SIA 451 files to GAEB files
*SiaConversionApi* | [**siaConversionConvertToOenorm**](docs/Api/SiaConversionApi.md#siaconversionconverttooenorm) | **POST** /conversion/sia/oenorm | Converts SIA 451 files to Oenorm files
*StatusApi* | [**statusGetStatus**](docs/Api/StatusApi.md#statusgetstatus) | **GET** /status | Reports the health status of the AVACloud API
*UglConversionApi* | [**uglConversionConvertToAva**](docs/Api/UglConversionApi.md#uglconversionconverttoava) | **POST** /conversion/ugl/ava | Converts Ugl files to Dangl.AVA projects
*UglConversionApi* | [**uglConversionConvertToFlatAva**](docs/Api/UglConversionApi.md#uglconversionconverttoflatava) | **POST** /conversion/ugl/flat-ava | Converts Ugl files to Dangl.AVA projects
*ValidationApi* | [**validationValidateFile**](docs/Api/ValidationApi.md#validationvalidatefile) | **POST** /validation/file | This endpoint validates AVA files, typically GAEB or ÖNorm. The type of file needs to be provided as a query parameter, since there is no auto detection of the uploaded file type.
*ValidationApi* | [**validationValidateProject**](docs/Api/ValidationApi.md#validationvalidateproject) | **POST** /validation/project | This endpoint provides a full validation of a provided ProjectDto. It will take the given exchange phase into account and do some general project validation. Optionally, a conversion to a desired target can also be done, in which case the target file will also be validated.
*XRechnungConversionApi* | [**xRechnungConversionConvertAvaToPdfInvoice**](docs/Api/XRechnungConversionApi.md#xrechnungconversionconvertavatopdfinvoice) | **POST** /conversion/xrechnung/ava-wrapper/pdf | This will convert an AVA wrapper object to a PDF file
*XRechnungConversionApi* | [**xRechnungConversionConvertAvaToXRechnung**](docs/Api/XRechnungConversionApi.md#xrechnungconversionconvertavatoxrechnung) | **POST** /conversion/xrechnung/ava-wrapper/xrechnung | This will convert an AVA wrapper object to an XRechnung file
*XRechnungConversionApi* | [**xRechnungConversionConvertInvoiceToPdfInvoice**](docs/Api/XRechnungConversionApi.md#xrechnungconversionconvertinvoicetopdfinvoice) | **POST** /conversion/xrechnung/invoice/pdf | This will convert an Invoice object to a PDF file
*XRechnungConversionApi* | [**xRechnungConversionConvertInvoiceToXRechnung**](docs/Api/XRechnungConversionApi.md#xrechnungconversionconvertinvoicetoxrechnung) | **POST** /conversion/xrechnung/invoice/xrechnung | This will convert an Invoice object to an XRechnung file
*XRechnungConversionApi* | [**xRechnungConversionConvertXRechnungToAva**](docs/Api/XRechnungConversionApi.md#xrechnungconversionconvertxrechnungtoava) | **POST** /conversion/xrechnung/ava-wrapper | This will read an XRechnung file and convert it to an AVA wrapper object
*XRechnungConversionApi* | [**xRechnungConversionConvertXRechnungToInvoice**](docs/Api/XRechnungConversionApi.md#xrechnungconversionconvertxrechnungtoinvoice) | **POST** /conversion/xrechnung/invoice | This will read an XRechnung file and convert it to an Invoice object
*XRechnungConversionApi* | [**xRechnungConversionMergeInvoiceIntoPdfFile**](docs/Api/XRechnungConversionApi.md#xrechnungconversionmergeinvoiceintopdffile) | **POST** /conversion/xrechnung/merge | This will embedd an XRechnung file into an existing PDF file as an attachment.

## Models

- [AddendumStatusDto](docs/Model/AddendumStatusDto.md)
- [AdditionTypeDto](docs/Model/AdditionTypeDto.md)
- [AllowanceReasonType](docs/Model/AllowanceReasonType.md)
- [ApiError](docs/Model/ApiError.md)
- [ArticleDataDto](docs/Model/ArticleDataDto.md)
- [AttachmentMimeType](docs/Model/AttachmentMimeType.md)
- [AvaProjectWrapper](docs/Model/AvaProjectWrapper.md)
- [AwardTypeDto](docs/Model/AwardTypeDto.md)
- [BankingInformationDto](docs/Model/BankingInformationDto.md)
- [CalculationDto](docs/Model/CalculationDto.md)
- [CatalogueDto](docs/Model/CatalogueDto.md)
- [CatalogueReferenceDto](docs/Model/CatalogueReferenceDto.md)
- [CatalogueTypeDto](docs/Model/CatalogueTypeDto.md)
- [ChargeReasonType](docs/Model/ChargeReasonType.md)
- [ClaimGet](docs/Model/ClaimGet.md)
- [ComissionStatusDto](docs/Model/ComissionStatusDto.md)
- [CommerceInquiryTypeDto](docs/Model/CommerceInquiryTypeDto.md)
- [CommercePropertiesDto](docs/Model/CommercePropertiesDto.md)
- [ComplementedByQuantityDto](docs/Model/ComplementedByQuantityDto.md)
- [DatanormDestinationVersion](docs/Model/DatanormDestinationVersion.md)
- [DeliveryAddress](docs/Model/DeliveryAddress.md)
- [DeliveryInformation](docs/Model/DeliveryInformation.md)
- [DestinationGaebExchangePhase](docs/Model/DestinationGaebExchangePhase.md)
- [DestinationGaebType](docs/Model/DestinationGaebType.md)
- [DestinationOenormType](docs/Model/DestinationOenormType.md)
- [DestinationRebType](docs/Model/DestinationRebType.md)
- [DestinationXRechnungFormat](docs/Model/DestinationXRechnungFormat.md)
- [DurationUnitDto](docs/Model/DurationUnitDto.md)
- [ExchangePhaseDto](docs/Model/ExchangePhaseDto.md)
- [ExecutionDescriptionDto](docs/Model/ExecutionDescriptionDto.md)
- [FacturXData](docs/Model/FacturXData.md)
- [FacturXPaymentTerm](docs/Model/FacturXPaymentTerm.md)
- [FileValidationSourceType](docs/Model/FileValidationSourceType.md)
- [FlatAvaProject](docs/Model/FlatAvaProject.md)
- [FlatElementDto](docs/Model/FlatElementDto.md)
- [ForgotPasswordPost](docs/Model/ForgotPasswordPost.md)
- [GetProjectMergeResult](docs/Model/GetProjectMergeResult.md)
- [GetStatus](docs/Model/GetStatus.md)
- [GrossPriceComponentDto](docs/Model/GrossPriceComponentDto.md)
- [HoldOutDurationUnitDto](docs/Model/HoldOutDurationUnitDto.md)
- [HoldOutTypeDto](docs/Model/HoldOutTypeDto.md)
- [HttpStatusCode](docs/Model/HttpStatusCode.md)
- [IElementDto](docs/Model/IElementDto.md)
- [IdsConnectVersion](docs/Model/IdsConnectVersion.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceAllowance](docs/Model/InvoiceAllowance.md)
- [InvoiceCharge](docs/Model/InvoiceCharge.md)
- [InvoiceLineItem](docs/Model/InvoiceLineItem.md)
- [InvoiceNote](docs/Model/InvoiceNote.md)
- [InvoicePeriod](docs/Model/InvoicePeriod.md)
- [InvoiceTotals](docs/Model/InvoiceTotals.md)
- [InvoiceType](docs/Model/InvoiceType.md)
- [ItemNumberDto](docs/Model/ItemNumberDto.md)
- [ItemNumberSchemaDto](docs/Model/ItemNumberSchemaDto.md)
- [ItemNumberSchemaTierAlignmentDto](docs/Model/ItemNumberSchemaTierAlignmentDto.md)
- [ItemNumberSchemaTierDto](docs/Model/ItemNumberSchemaTierDto.md)
- [ItemNumberSchemaTierTypeDto](docs/Model/ItemNumberSchemaTierTypeDto.md)
- [ItemNumberTypeDto](docs/Model/ItemNumberTypeDto.md)
- [LabourPriceComponentDto](docs/Model/LabourPriceComponentDto.md)
- [LineItemAllowance](docs/Model/LineItemAllowance.md)
- [LineItemAttribute](docs/Model/LineItemAttribute.md)
- [LineItemCharge](docs/Model/LineItemCharge.md)
- [LineItemInformation](docs/Model/LineItemInformation.md)
- [LineItemPriceDetail](docs/Model/LineItemPriceDetail.md)
- [LineItemVatInformation](docs/Model/LineItemVatInformation.md)
- [LoginPost](docs/Model/LoginPost.md)
- [NoteTextDto](docs/Model/NoteTextDto.md)
- [ObjectValidationCheckDetails](docs/Model/ObjectValidationCheckDetails.md)
- [OenormNoteTextPropertiesDto](docs/Model/OenormNoteTextPropertiesDto.md)
- [OenormOriginCodeDto](docs/Model/OenormOriginCodeDto.md)
- [OenormPositionPropertiesDto](docs/Model/OenormPositionPropertiesDto.md)
- [OenormPropertiesDto](docs/Model/OenormPropertiesDto.md)
- [Organization](docs/Model/Organization.md)
- [OriginDto](docs/Model/OriginDto.md)
- [PartyInformationDto](docs/Model/PartyInformationDto.md)
- [Payee](docs/Model/Payee.md)
- [PaymentInstructions](docs/Model/PaymentInstructions.md)
- [PaymentMeans](docs/Model/PaymentMeans.md)
- [PaymentTerm](docs/Model/PaymentTerm.md)
- [PaymentType](docs/Model/PaymentType.md)
- [PositionComplementingTypeDto](docs/Model/PositionComplementingTypeDto.md)
- [PositionDto](docs/Model/PositionDto.md)
- [PositionHoldOutPropertiesDto](docs/Model/PositionHoldOutPropertiesDto.md)
- [PositionTypeDto](docs/Model/PositionTypeDto.md)
- [PostAvaProjectMerge](docs/Model/PostAvaProjectMerge.md)
- [PostAvaProjectValidationSourceOptions](docs/Model/PostAvaProjectValidationSourceOptions.md)
- [PostAvaSourceOptions](docs/Model/PostAvaSourceOptions.md)
- [PostGaebDestinationOptions](docs/Model/PostGaebDestinationOptions.md)
- [PostOenormDestinationOptions](docs/Model/PostOenormDestinationOptions.md)
- [PostXRechnungPdfEmbedd](docs/Model/PostXRechnungPdfEmbedd.md)
- [PreviousInvoice](docs/Model/PreviousInvoice.md)
- [PriceCatalogueDataDto](docs/Model/PriceCatalogueDataDto.md)
- [PriceComponentDto](docs/Model/PriceComponentDto.md)
- [PriceComponentTypeDto](docs/Model/PriceComponentTypeDto.md)
- [PriceInformationDto](docs/Model/PriceInformationDto.md)
- [PriceRoundingModeDto](docs/Model/PriceRoundingModeDto.md)
- [PriceTypeDto](docs/Model/PriceTypeDto.md)
- [ProductDataDto](docs/Model/ProductDataDto.md)
- [ProjectDto](docs/Model/ProjectDto.md)
- [ProjectInformationDto](docs/Model/ProjectInformationDto.md)
- [ProjectValidationCheckDetails](docs/Model/ProjectValidationCheckDetails.md)
- [QuantityAssignmentDto](docs/Model/QuantityAssignmentDto.md)
- [References](docs/Model/References.md)
- [RegisterPost](docs/Model/RegisterPost.md)
- [ResponseErrorType](docs/Model/ResponseErrorType.md)
- [STLBKeyDto](docs/Model/STLBKeyDto.md)
- [STLBReferenceDto](docs/Model/STLBReferenceDto.md)
- [ServiceSpecificationCommercePropertiesDto](docs/Model/ServiceSpecificationCommercePropertiesDto.md)
- [ServiceSpecificationDto](docs/Model/ServiceSpecificationDto.md)
- [ServiceSpecificationGroupDto](docs/Model/ServiceSpecificationGroupDto.md)
- [ServiceTypeDto](docs/Model/ServiceTypeDto.md)
- [ShortTextType](docs/Model/ShortTextType.md)
- [SiaDestinationType](docs/Model/SiaDestinationType.md)
- [SourceType](docs/Model/SourceType.md)
- [SpecialAwardKindDto](docs/Model/SpecialAwardKindDto.md)
- [StandardReferenceTypeDto](docs/Model/StandardReferenceTypeDto.md)
- [StandardizedDescriptionDto](docs/Model/StandardizedDescriptionDto.md)
- [SubDescriptionDto](docs/Model/SubDescriptionDto.md)
- [SupportingDocument](docs/Model/SupportingDocument.md)
- [TokenLoginPost](docs/Model/TokenLoginPost.md)
- [TokenRefreshPost](docs/Model/TokenRefreshPost.md)
- [TokenResponseGet](docs/Model/TokenResponseGet.md)
- [TradeDiscountDto](docs/Model/TradeDiscountDto.md)
- [UglDestinationVersion](docs/Model/UglDestinationVersion.md)
- [UserInfoGet](docs/Model/UserInfoGet.md)
- [ValidationCheckResult](docs/Model/ValidationCheckResult.md)
- [ValidationCheckType](docs/Model/ValidationCheckType.md)
- [ValidationResult](docs/Model/ValidationResult.md)
- [ValidationSeverity](docs/Model/ValidationSeverity.md)
- [ValidationType](docs/Model/ValidationType.md)
- [VatBreakdown](docs/Model/VatBreakdown.md)
- [VatCategory](docs/Model/VatCategory.md)
- [WarrantyDurationDto](docs/Model/WarrantyDurationDto.md)
- [XmlSchemaValidationCheckDetails](docs/Model/XmlSchemaValidationCheckDetails.md)

## Authorization

Authentication schemes defined for the API:
### Dangl.Identity

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://identity.dangl-it.com/connect/authorize`
- **Scopes**: 
    - **avacloud**: Access to the AVACloud API

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.64.1`
    - Package version: `1.64.1`
    - Generator version: `7.20.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
