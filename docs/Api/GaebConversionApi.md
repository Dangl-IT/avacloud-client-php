# Dangl\AVACloud\GaebConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gaebConversionConvertToAva()**](GaebConversionApi.md#gaebConversionConvertToAva) | **POST** /conversion/gaeb/ava | Converts GAEB files to Dangl.AVA projects |
| [**gaebConversionConvertToExcel()**](GaebConversionApi.md#gaebConversionConvertToExcel) | **POST** /conversion/gaeb/excel | Converts GAEB files to Excel |
| [**gaebConversionConvertToFlatAva()**](GaebConversionApi.md#gaebConversionConvertToFlatAva) | **POST** /conversion/gaeb/flat-ava | Converts GAEB files to Dangl.AVA projects |
| [**gaebConversionConvertToGaeb()**](GaebConversionApi.md#gaebConversionConvertToGaeb) | **POST** /conversion/gaeb/gaeb | Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files. |
| [**gaebConversionConvertToOenorm()**](GaebConversionApi.md#gaebConversionConvertToOenorm) | **POST** /conversion/gaeb/oenorm | Converts GAEB files to Oenorm files |


## `gaebConversionConvertToAva()`

```php
gaebConversionConvertToAva($gaebFile, $supportSkippedItemNumberLevelsInPositions, $removePlainTextLongTexts, $removeHtmlLongTexts, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations): \Dangl\AVACloud\Model\ProjectDto
```

Converts GAEB files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaebFile = '/path/to/file.txt'; // \SplFileObject | The input file
$supportSkippedItemNumberLevelsInPositions = True; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$removePlainTextLongTexts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$removeHtmlLongTexts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes
$outputHtmlAsXml = True; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keepEmptyHtmlText = True; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allowUpperCaseItemNumbers = True; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allowLumpSumItemsWithDifferingQuantities = True; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disableItemNumberIdentifierTransformations = True; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToAva($gaebFile, $supportSkippedItemNumberLevelsInPositions, $removePlainTextLongTexts, $removeHtmlLongTexts, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gaebFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **supportSkippedItemNumberLevelsInPositions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional] |
| **removePlainTextLongTexts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional] |
| **removeHtmlLongTexts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional] |
| **outputHtmlAsXml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional] |
| **keepEmptyHtmlText** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional] |
| **allowUpperCaseItemNumbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional] |
| **allowLumpSumItemsWithDifferingQuantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional] |
| **disableItemNumberIdentifierTransformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional] |

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

## `gaebConversionConvertToExcel()`

```php
gaebConversionConvertToExcel($gaebFile, $supportSkippedItemNumberLevelsInPositions, $writePrices, $writeLongTexts, $conversionCulture, $includeArticleNumbers, $lockAllCellsButPrices, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations): \SplFileObject
```

Converts GAEB files to Excel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaebFile = '/path/to/file.txt'; // \SplFileObject | The input file
$supportSkippedItemNumberLevelsInPositions = True; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$writePrices = True; // bool | Defaults to true
$writeLongTexts = True; // bool | Defaults to true
$conversionCulture = 'conversionCulture_example'; // string | The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: 'en' for English, 'de' for German, 'fr' for French, ' it' for Italian and ' es' for Spanish. If the culture is not supported, 'en' will be used.
$includeArticleNumbers = True; // bool | If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from 'position.commerceProperties.articleNumber'
$lockAllCellsButPrices = True; // bool | If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields.
$outputHtmlAsXml = True; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keepEmptyHtmlText = True; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allowUpperCaseItemNumbers = True; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allowLumpSumItemsWithDifferingQuantities = True; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disableItemNumberIdentifierTransformations = True; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToExcel($gaebFile, $supportSkippedItemNumberLevelsInPositions, $writePrices, $writeLongTexts, $conversionCulture, $includeArticleNumbers, $lockAllCellsButPrices, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gaebFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **supportSkippedItemNumberLevelsInPositions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional] |
| **writePrices** | **bool**| Defaults to true | [optional] |
| **writeLongTexts** | **bool**| Defaults to true | [optional] |
| **conversionCulture** | **string**| The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: &#39;en&#39; for English, &#39;de&#39; for German, &#39;fr&#39; for French, &#39; it&#39; for Italian and &#39; es&#39; for Spanish. If the culture is not supported, &#39;en&#39; will be used. | [optional] |
| **includeArticleNumbers** | **bool**| If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from &#39;position.commerceProperties.articleNumber&#39; | [optional] |
| **lockAllCellsButPrices** | **bool**| If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields. | [optional] |
| **outputHtmlAsXml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional] |
| **keepEmptyHtmlText** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional] |
| **allowUpperCaseItemNumbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional] |
| **allowLumpSumItemsWithDifferingQuantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional] |
| **disableItemNumberIdentifierTransformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional] |

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

## `gaebConversionConvertToFlatAva()`

```php
gaebConversionConvertToFlatAva($gaebFile, $supportSkippedItemNumberLevelsInPositions, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts GAEB files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaebFile = '/path/to/file.txt'; // \SplFileObject | The input file
$supportSkippedItemNumberLevelsInPositions = True; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$outputHtmlAsXml = True; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keepEmptyHtmlText = True; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allowUpperCaseItemNumbers = True; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allowLumpSumItemsWithDifferingQuantities = True; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disableItemNumberIdentifierTransformations = True; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToFlatAva($gaebFile, $supportSkippedItemNumberLevelsInPositions, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gaebFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **supportSkippedItemNumberLevelsInPositions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional] |
| **outputHtmlAsXml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional] |
| **keepEmptyHtmlText** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional] |
| **allowUpperCaseItemNumbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional] |
| **allowLumpSumItemsWithDifferingQuantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional] |
| **disableItemNumberIdentifierTransformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional] |

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

## `gaebConversionConvertToGaeb()`

```php
gaebConversionConvertToGaeb($gaebFile, $supportSkippedItemNumberLevelsInPositions, $destinationGaebType, $targetExchangePhaseTransform, $enforceStrictOfferPhaseLongTextOutput, $exportQuantityDetermination, $removeUnprintableCharactersFromTexts, $forceIncludeDescriptions, $treatNullItemNumberSchemaAsInvalid, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations): \SplFileObject
```

Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaebFile = '/path/to/file.txt'; // \SplFileObject | The input file
$supportSkippedItemNumberLevelsInPositions = True; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$destinationGaebType = 'destinationGaebType_example'; // string | Defaults to GAEB XML V3.2
$targetExchangePhaseTransform = 'targetExchangePhaseTransform_example'; // string | Defaults to none, meaning no transformation will be done. The phases are: Base = 81 CostEstimate = 82 OfferRequest = 83 Offer = 84 SideOffer = 85 Grant = 86
$enforceStrictOfferPhaseLongTextOutput = True; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$exportQuantityDetermination = True; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$removeUnprintableCharactersFromTexts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$forceIncludeDescriptions = True; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
$treatNullItemNumberSchemaAsInvalid = True; // bool | When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons.
$outputHtmlAsXml = True; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keepEmptyHtmlText = True; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allowUpperCaseItemNumbers = True; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allowLumpSumItemsWithDifferingQuantities = True; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disableItemNumberIdentifierTransformations = True; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToGaeb($gaebFile, $supportSkippedItemNumberLevelsInPositions, $destinationGaebType, $targetExchangePhaseTransform, $enforceStrictOfferPhaseLongTextOutput, $exportQuantityDetermination, $removeUnprintableCharactersFromTexts, $forceIncludeDescriptions, $treatNullItemNumberSchemaAsInvalid, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gaebFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **supportSkippedItemNumberLevelsInPositions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional] |
| **destinationGaebType** | **string**| Defaults to GAEB XML V3.2 | [optional] |
| **targetExchangePhaseTransform** | **string**| Defaults to none, meaning no transformation will be done. The phases are: Base &#x3D; 81 CostEstimate &#x3D; 82 OfferRequest &#x3D; 83 Offer &#x3D; 84 SideOffer &#x3D; 85 Grant &#x3D; 86 | [optional] |
| **enforceStrictOfferPhaseLongTextOutput** | **bool**| Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | [optional] |
| **exportQuantityDetermination** | **bool**| Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | [optional] |
| **removeUnprintableCharactersFromTexts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |
| **forceIncludeDescriptions** | **bool**| If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | [optional] |
| **treatNullItemNumberSchemaAsInvalid** | **bool**| When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons. | [optional] |
| **outputHtmlAsXml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional] |
| **keepEmptyHtmlText** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional] |
| **allowUpperCaseItemNumbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional] |
| **allowLumpSumItemsWithDifferingQuantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional] |
| **disableItemNumberIdentifierTransformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional] |

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

## `gaebConversionConvertToOenorm()`

```php
gaebConversionConvertToOenorm($gaebFile, $supportSkippedItemNumberLevelsInPositions, $destinationOenormType, $tryRepairProjectStructure, $skipTryEnforceSchemaCompliantXmlOutput, $removeUnprintableCharactersFromTexts, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations): \SplFileObject
```

Converts GAEB files to Oenorm files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\GaebConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gaebFile = '/path/to/file.txt'; // \SplFileObject | The input file
$supportSkippedItemNumberLevelsInPositions = True; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$destinationOenormType = 'destinationOenormType_example'; // string | Defaults to Lv2015
$tryRepairProjectStructure = True; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skipTryEnforceSchemaCompliantXmlOutput = True; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$removeUnprintableCharactersFromTexts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$outputHtmlAsXml = True; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keepEmptyHtmlText = True; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allowUpperCaseItemNumbers = True; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allowLumpSumItemsWithDifferingQuantities = True; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disableItemNumberIdentifierTransformations = True; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToOenorm($gaebFile, $supportSkippedItemNumberLevelsInPositions, $destinationOenormType, $tryRepairProjectStructure, $skipTryEnforceSchemaCompliantXmlOutput, $removeUnprintableCharactersFromTexts, $outputHtmlAsXml, $keepEmptyHtmlText, $allowUpperCaseItemNumbers, $allowLumpSumItemsWithDifferingQuantities, $disableItemNumberIdentifierTransformations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gaebFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
| **supportSkippedItemNumberLevelsInPositions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional] |
| **destinationOenormType** | **string**| Defaults to Lv2015 | [optional] |
| **tryRepairProjectStructure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional] |
| **skipTryEnforceSchemaCompliantXmlOutput** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional] |
| **removeUnprintableCharactersFromTexts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |
| **outputHtmlAsXml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional] |
| **keepEmptyHtmlText** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional] |
| **allowUpperCaseItemNumbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional] |
| **allowLumpSumItemsWithDifferingQuantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional] |
| **disableItemNumberIdentifierTransformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional] |

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
