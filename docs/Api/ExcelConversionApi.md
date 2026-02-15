# Dangl\AVACloud\ExcelConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**excelConversionConvertToAva()**](ExcelConversionApi.md#excelConversionConvertToAva) | **POST** /conversion/excel/ava | Converts Excel files to Dangl.AVA projects. |
| [**excelConversionConvertToExcel()**](ExcelConversionApi.md#excelConversionConvertToExcel) | **POST** /conversion/excel/excel | Converts Excel files to Excel files. Used, for example, when elements were added in excel to generate or modify a project. The Excel file can then be shared containing the full project with all formattings, formulas and styles applied. |
| [**excelConversionConvertToFlatAva()**](ExcelConversionApi.md#excelConversionConvertToFlatAva) | **POST** /conversion/excel/flat-ava | Converts Excel files to Dangl.AVA projects. |
| [**excelConversionConvertToGaeb()**](ExcelConversionApi.md#excelConversionConvertToGaeb) | **POST** /conversion/excel/gaeb | Converts Excel files to GAEB files. |
| [**excelConversionConvertToOenorm()**](ExcelConversionApi.md#excelConversionConvertToOenorm) | **POST** /conversion/excel/oenorm | Converts Excel files to Oenorm files. |


## `excelConversionConvertToAva()`

```php
excelConversionConvertToAva($excelFile, $readNewElements, $rebuildItemNumberSchema, $removePlainTextLongTexts, $removeHtmlLongTexts): \Dangl\AVACloud\Model\ProjectDto
```

Converts Excel files to Dangl.AVA projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excelFile = '/path/to/file.txt'; // \SplFileObject | The input file
$readNewElements = True; // bool | Defaults to false
$rebuildItemNumberSchema = True; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$removePlainTextLongTexts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$removeHtmlLongTexts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->excelConversionConvertToAva($excelFile, $readNewElements, $rebuildItemNumberSchema, $removePlainTextLongTexts, $removeHtmlLongTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **excelFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **readNewElements** | **bool**| Defaults to false | [optional] |
| **rebuildItemNumberSchema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional] |
| **removePlainTextLongTexts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional] |
| **removeHtmlLongTexts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional] |

### Return type

[**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/vnd.com.dangl-it.ProjectDto.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excelConversionConvertToExcel()`

```php
excelConversionConvertToExcel($excelFile, $readNewElements, $rebuildItemNumberSchema, $writePrices, $writeLongTexts, $conversionCulture, $includeArticleNumbers, $lockAllCellsButPrices): \SplFileObject
```

Converts Excel files to Excel files. Used, for example, when elements were added in excel to generate or modify a project. The Excel file can then be shared containing the full project with all formattings, formulas and styles applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excelFile = '/path/to/file.txt'; // \SplFileObject | The input file
$readNewElements = True; // bool | Defaults to false
$rebuildItemNumberSchema = True; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$writePrices = True; // bool | Defaults to true
$writeLongTexts = True; // bool | Defaults to true
$conversionCulture = 'conversionCulture_example'; // string | The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: 'en' for English, 'de' for German, 'fr' for French, ' it' for Italian and ' es' for Spanish. If the culture is not supported, 'en' will be used.
$includeArticleNumbers = True; // bool | If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from 'position.commerceProperties.articleNumber'
$lockAllCellsButPrices = True; // bool | If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields.

try {
    $result = $apiInstance->excelConversionConvertToExcel($excelFile, $readNewElements, $rebuildItemNumberSchema, $writePrices, $writeLongTexts, $conversionCulture, $includeArticleNumbers, $lockAllCellsButPrices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **excelFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **readNewElements** | **bool**| Defaults to false | [optional] |
| **rebuildItemNumberSchema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional] |
| **writePrices** | **bool**| Defaults to true | [optional] |
| **writeLongTexts** | **bool**| Defaults to true | [optional] |
| **conversionCulture** | **string**| The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: &#39;en&#39; for English, &#39;de&#39; for German, &#39;fr&#39; for French, &#39; it&#39; for Italian and &#39; es&#39; for Spanish. If the culture is not supported, &#39;en&#39; will be used. | [optional] |
| **includeArticleNumbers** | **bool**| If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from &#39;position.commerceProperties.articleNumber&#39; | [optional] |
| **lockAllCellsButPrices** | **bool**| If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excelConversionConvertToFlatAva()`

```php
excelConversionConvertToFlatAva($excelFile, $readNewElements, $rebuildItemNumberSchema): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts Excel files to Dangl.AVA projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excelFile = '/path/to/file.txt'; // \SplFileObject | The input file
$readNewElements = True; // bool | Defaults to false
$rebuildItemNumberSchema = True; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.

try {
    $result = $apiInstance->excelConversionConvertToFlatAva($excelFile, $readNewElements, $rebuildItemNumberSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **excelFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **readNewElements** | **bool**| Defaults to false | [optional] |
| **rebuildItemNumberSchema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional] |

### Return type

[**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excelConversionConvertToGaeb()`

```php
excelConversionConvertToGaeb($excelFile, $readNewElements, $rebuildItemNumberSchema, $destinationGaebType, $targetExchangePhaseTransform, $enforceStrictOfferPhaseLongTextOutput, $exportQuantityDetermination, $removeUnprintableCharactersFromTexts, $forceIncludeDescriptions, $treatNullItemNumberSchemaAsInvalid): \SplFileObject
```

Converts Excel files to GAEB files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excelFile = '/path/to/file.txt'; // \SplFileObject | The input file
$readNewElements = True; // bool | Defaults to false
$rebuildItemNumberSchema = True; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$destinationGaebType = 'destinationGaebType_example'; // string | Defaults to GAEB XML V3.2
$targetExchangePhaseTransform = 'targetExchangePhaseTransform_example'; // string | Defaults to none, meaning no transformation will be done. The phases are: Base = 81 CostEstimate = 82 OfferRequest = 83 Offer = 84 SideOffer = 85 Grant = 86
$enforceStrictOfferPhaseLongTextOutput = True; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$exportQuantityDetermination = True; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$removeUnprintableCharactersFromTexts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$forceIncludeDescriptions = True; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
$treatNullItemNumberSchemaAsInvalid = True; // bool | When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons.

try {
    $result = $apiInstance->excelConversionConvertToGaeb($excelFile, $readNewElements, $rebuildItemNumberSchema, $destinationGaebType, $targetExchangePhaseTransform, $enforceStrictOfferPhaseLongTextOutput, $exportQuantityDetermination, $removeUnprintableCharactersFromTexts, $forceIncludeDescriptions, $treatNullItemNumberSchemaAsInvalid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **excelFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **readNewElements** | **bool**| Defaults to false | [optional] |
| **rebuildItemNumberSchema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional] |
| **destinationGaebType** | **string**| Defaults to GAEB XML V3.2 | [optional] |
| **targetExchangePhaseTransform** | **string**| Defaults to none, meaning no transformation will be done. The phases are: Base &#x3D; 81 CostEstimate &#x3D; 82 OfferRequest &#x3D; 83 Offer &#x3D; 84 SideOffer &#x3D; 85 Grant &#x3D; 86 | [optional] |
| **enforceStrictOfferPhaseLongTextOutput** | **bool**| Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | [optional] |
| **exportQuantityDetermination** | **bool**| Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | [optional] |
| **removeUnprintableCharactersFromTexts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |
| **forceIncludeDescriptions** | **bool**| If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | [optional] |
| **treatNullItemNumberSchemaAsInvalid** | **bool**| When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excelConversionConvertToOenorm()`

```php
excelConversionConvertToOenorm($excelFile, $readNewElements, $rebuildItemNumberSchema, $destinationOenormType, $tryRepairProjectStructure, $skipTryEnforceSchemaCompliantXmlOutput, $removeUnprintableCharactersFromTexts): \SplFileObject
```

Converts Excel files to Oenorm files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\ExcelConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excelFile = '/path/to/file.txt'; // \SplFileObject | The input file
$readNewElements = True; // bool | Defaults to false
$rebuildItemNumberSchema = True; // bool | When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false.
$destinationOenormType = 'destinationOenormType_example'; // string | Defaults to Lv2015
$tryRepairProjectStructure = True; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skipTryEnforceSchemaCompliantXmlOutput = True; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$removeUnprintableCharactersFromTexts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.

try {
    $result = $apiInstance->excelConversionConvertToOenorm($excelFile, $readNewElements, $rebuildItemNumberSchema, $destinationOenormType, $tryRepairProjectStructure, $skipTryEnforceSchemaCompliantXmlOutput, $removeUnprintableCharactersFromTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExcelConversionApi->excelConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **excelFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **readNewElements** | **bool**| Defaults to false | [optional] |
| **rebuildItemNumberSchema** | **bool**| When importing new elements from Excel, sometimes the ItemNumberSchema in the file is not in compliance with the GAEB requirements. Enabling this option tries to repair the ItemNumberSchema. Defaults to false. | [optional] |
| **destinationOenormType** | **string**| Defaults to Lv2015 | [optional] |
| **tryRepairProjectStructure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional] |
| **skipTryEnforceSchemaCompliantXmlOutput** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional] |
| **removeUnprintableCharactersFromTexts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
