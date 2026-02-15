# Dangl\AVACloud\FlatAvaConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**flatAvaConversionConvertToAva()**](FlatAvaConversionApi.md#flatAvaConversionConvertToAva) | **POST** /conversion/flat-ava/ava | Converts flat Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties. |
| [**flatAvaConversionConvertToDatanorm()**](FlatAvaConversionApi.md#flatAvaConversionConvertToDatanorm) | **POST** /conversion/flat-ava/datanorm | Converts flat Dangl.AVA projects to Datanorm |
| [**flatAvaConversionConvertToExcel()**](FlatAvaConversionApi.md#flatAvaConversionConvertToExcel) | **POST** /conversion/flat-ava/excel | Converts flat Dangl.AVA projects to Excel |
| [**flatAvaConversionConvertToFlatAva()**](FlatAvaConversionApi.md#flatAvaConversionConvertToFlatAva) | **POST** /conversion/flat-ava/flat-ava | Converts flat Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties. |
| [**flatAvaConversionConvertToGaeb()**](FlatAvaConversionApi.md#flatAvaConversionConvertToGaeb) | **POST** /conversion/flat-ava/gaeb | Converts flat Dangl.AVA projects to GAEB |
| [**flatAvaConversionConvertToIdsConnect()**](FlatAvaConversionApi.md#flatAvaConversionConvertToIdsConnect) | **POST** /conversion/flat-ava/ids-connect | Converts flat Dangl.AVA projects to IDS Connect files |
| [**flatAvaConversionConvertToOenorm()**](FlatAvaConversionApi.md#flatAvaConversionConvertToOenorm) | **POST** /conversion/flat-ava/oenorm | Converts flat Dangl.AVA projects to Oenorm |
| [**flatAvaConversionConvertToReb()**](FlatAvaConversionApi.md#flatAvaConversionConvertToReb) | **POST** /conversion/flat-ava/reb | Converts flat Dangl.AVA projects to REB |
| [**flatAvaConversionConvertToSia()**](FlatAvaConversionApi.md#flatAvaConversionConvertToSia) | **POST** /conversion/flat-ava/sia | Converts flat Dangl.AVA projects to SIA 451 |
| [**flatAvaConversionConvertToUgl()**](FlatAvaConversionApi.md#flatAvaConversionConvertToUgl) | **POST** /conversion/flat-ava/ugl | Converts flat Dangl.AVA projects to UGL |


## `flatAvaConversionConvertToAva()`

```php
flatAvaConversionConvertToAva($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $removePlainTextLongTexts, $removeHtmlLongTexts): \Dangl\AVACloud\Model\ProjectDto
```

Converts flat Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$removePlainTextLongTexts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$removeHtmlLongTexts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->flatAvaConversionConvertToAva($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $removePlainTextLongTexts, $removeHtmlLongTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **removePlainTextLongTexts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional] |
| **removeHtmlLongTexts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional] |

### Return type

[**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/vnd.com.dangl-it.ProjectDto.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToDatanorm()`

```php
flatAvaConversionConvertToDatanorm($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $datanormDestinationVersion): \SplFileObject
```

Converts flat Dangl.AVA projects to Datanorm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$datanormDestinationVersion = 'datanormDestinationVersion_example'; // string | The Datanorm version to convert to. Defaults to V4.

try {
    $result = $apiInstance->flatAvaConversionConvertToDatanorm($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $datanormDestinationVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToDatanorm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **datanormDestinationVersion** | **string**| The Datanorm version to convert to. Defaults to V4. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToExcel()`

```php
flatAvaConversionConvertToExcel($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $writePrices, $writeLongTexts, $conversionCulture, $includeArticleNumbers, $lockAllCellsButPrices): \SplFileObject
```

Converts flat Dangl.AVA projects to Excel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$writePrices = True; // bool | Defaults to true
$writeLongTexts = True; // bool | Defaults to true
$conversionCulture = 'conversionCulture_example'; // string | The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: 'en' for English, 'de' for German, 'fr' for French, ' it' for Italian and ' es' for Spanish. If the culture is not supported, 'en' will be used.
$includeArticleNumbers = True; // bool | If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from 'position.commerceProperties.articleNumber'
$lockAllCellsButPrices = True; // bool | If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields.

try {
    $result = $apiInstance->flatAvaConversionConvertToExcel($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $writePrices, $writeLongTexts, $conversionCulture, $includeArticleNumbers, $lockAllCellsButPrices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
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

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToFlatAva()`

```php
flatAvaConversionConvertToFlatAva($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts flat Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.

try {
    $result = $apiInstance->flatAvaConversionConvertToFlatAva($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |

### Return type

[**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToGaeb()`

```php
flatAvaConversionConvertToGaeb($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $destinationGaebType, $targetExchangePhaseTransform, $enforceStrictOfferPhaseLongTextOutput, $exportQuantityDetermination, $removeUnprintableCharactersFromTexts, $forceIncludeDescriptions, $treatNullItemNumberSchemaAsInvalid): \SplFileObject
```

Converts flat Dangl.AVA projects to GAEB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$destinationGaebType = 'destinationGaebType_example'; // string | Defaults to GAEB XML V3.2
$targetExchangePhaseTransform = 'targetExchangePhaseTransform_example'; // string | Defaults to none, meaning no transformation will be done. The phases are: Base = 81 CostEstimate = 82 OfferRequest = 83 Offer = 84 SideOffer = 85 Grant = 86
$enforceStrictOfferPhaseLongTextOutput = True; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$exportQuantityDetermination = True; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$removeUnprintableCharactersFromTexts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$forceIncludeDescriptions = True; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
$treatNullItemNumberSchemaAsInvalid = True; // bool | When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons.

try {
    $result = $apiInstance->flatAvaConversionConvertToGaeb($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $destinationGaebType, $targetExchangePhaseTransform, $enforceStrictOfferPhaseLongTextOutput, $exportQuantityDetermination, $removeUnprintableCharactersFromTexts, $forceIncludeDescriptions, $treatNullItemNumberSchemaAsInvalid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
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

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToIdsConnect()`

```php
flatAvaConversionConvertToIdsConnect($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $version): \SplFileObject
```

Converts flat Dangl.AVA projects to IDS Connect files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$version = 'version_example'; // string | The IDS Connect version to convert to. Defaults to V2_5.

try {
    $result = $apiInstance->flatAvaConversionConvertToIdsConnect($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToIdsConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **version** | **string**| The IDS Connect version to convert to. Defaults to V2_5. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToOenorm()`

```php
flatAvaConversionConvertToOenorm($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $destinationOenormType, $tryRepairProjectStructure, $skipTryEnforceSchemaCompliantXmlOutput, $removeUnprintableCharactersFromTexts): \SplFileObject
```

Converts flat Dangl.AVA projects to Oenorm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$destinationOenormType = 'destinationOenormType_example'; // string | Defaults to Lv2015
$tryRepairProjectStructure = True; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skipTryEnforceSchemaCompliantXmlOutput = True; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$removeUnprintableCharactersFromTexts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.

try {
    $result = $apiInstance->flatAvaConversionConvertToOenorm($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $destinationOenormType, $tryRepairProjectStructure, $skipTryEnforceSchemaCompliantXmlOutput, $removeUnprintableCharactersFromTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **destinationOenormType** | **string**| Defaults to Lv2015 | [optional] |
| **tryRepairProjectStructure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional] |
| **skipTryEnforceSchemaCompliantXmlOutput** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional] |
| **removeUnprintableCharactersFromTexts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToReb()`

```php
flatAvaConversionConvertToReb($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $destinationRebType, $lastRowAddress): \SplFileObject
```

Converts flat Dangl.AVA projects to REB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$destinationRebType = 'destinationRebType_example'; // string | Defaults to D11
$lastRowAddress = 'lastRowAddress_example'; // string | If this is present, the export to REB will be started from the next available row address after the given one. This must be a valid 6 character address, e.g. \"1234A0\"

try {
    $result = $apiInstance->flatAvaConversionConvertToReb($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $destinationRebType, $lastRowAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToReb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **destinationRebType** | **string**| Defaults to D11 | [optional] |
| **lastRowAddress** | **string**| If this is present, the export to REB will be started from the next available row address after the given one. This must be a valid 6 character address, e.g. \&quot;1234A0\&quot; | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToSia()`

```php
flatAvaConversionConvertToSia($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $siaDestinationType): \SplFileObject
```

Converts flat Dangl.AVA projects to SIA 451

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$siaDestinationType = 'siaDestinationType_example'; // string | Defaults to Sia451

try {
    $result = $apiInstance->flatAvaConversionConvertToSia($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $siaDestinationType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToSia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **siaDestinationType** | **string**| Defaults to Sia451 | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flatAvaConversionConvertToUgl()`

```php
flatAvaConversionConvertToUgl($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $uglDestinationVersion): \SplFileObject
```

Converts flat Dangl.AVA projects to UGL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\FlatAvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flatAvaProject = new \Dangl\AVACloud\Model\FlatAvaProject(); // \Dangl\AVACloud\Model\FlatAvaProject | The flat Dangl.AVA project
$tryAutoGenerateItemNumbersAndSchema = True; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$uglDestinationVersion = 'uglDestinationVersion_example'; // string | The UGL version to convert to. Defaults to V1.

try {
    $result = $apiInstance->flatAvaConversionConvertToUgl($flatAvaProject, $tryAutoGenerateItemNumbersAndSchema, $uglDestinationVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlatAvaConversionApi->flatAvaConversionConvertToUgl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flatAvaProject** | [**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)| The flat Dangl.AVA project | |
| **tryAutoGenerateItemNumbersAndSchema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional] |
| **uglDestinationVersion** | **string**| The UGL version to convert to. Defaults to V1. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
