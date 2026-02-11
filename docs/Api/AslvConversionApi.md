# Dangl\AVACloud\AslvConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aslvConversionConvertToAva()**](AslvConversionApi.md#aslvConversionConvertToAva) | **POST** /conversion/aslv/ava | Converts Aslv files to Dangl.AVA projects |
| [**aslvConversionConvertToExcel()**](AslvConversionApi.md#aslvConversionConvertToExcel) | **POST** /conversion/aslv/excel | Converts Aslv files to Excel |
| [**aslvConversionConvertToFlatAva()**](AslvConversionApi.md#aslvConversionConvertToFlatAva) | **POST** /conversion/aslv/flat-ava | Converts Aslv files to Dangl.AVA projects |
| [**aslvConversionConvertToGaeb()**](AslvConversionApi.md#aslvConversionConvertToGaeb) | **POST** /conversion/aslv/gaeb | Converts Aslv files to GAEB files |
| [**aslvConversionConvertToOenorm()**](AslvConversionApi.md#aslvConversionConvertToOenorm) | **POST** /conversion/aslv/oenorm | Converts Aslv files to Oenorm files |


## `aslvConversionConvertToAva()`

```php
aslvConversionConvertToAva($remove_plain_text_long_texts, $remove_html_long_texts, $aslv_file): \Dangl\AVACloud\Model\ProjectDto
```

Converts Aslv files to Dangl.AVA projects

### Example

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
$remove_plain_text_long_texts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes
$aslv_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->aslvConversionConvertToAva($remove_plain_text_long_texts, $remove_html_long_texts, $aslv_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AslvConversionApi->aslvConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remove_plain_text_long_texts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional] |
| **remove_html_long_texts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional] |
| **aslv_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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

## `aslvConversionConvertToExcel()`

```php
aslvConversionConvertToExcel($write_prices, $write_long_texts, $conversion_culture, $include_article_numbers, $lock_all_cells_but_prices, $aslv_file): \SplFileObject
```

Converts Aslv files to Excel

### Example

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
$write_prices = True; // bool | Defaults to true
$write_long_texts = True; // bool | Defaults to true
$conversion_culture = 'conversion_culture_example'; // string | The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: 'en' for English, 'de' for German, 'fr' for French, ' it' for Italian and ' es' for Spanish. If the culture is not supported, 'en' will be used.
$include_article_numbers = True; // bool | If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from 'position.commerceProperties.articleNumber'
$lock_all_cells_but_prices = True; // bool | If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields.
$aslv_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->aslvConversionConvertToExcel($write_prices, $write_long_texts, $conversion_culture, $include_article_numbers, $lock_all_cells_but_prices, $aslv_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AslvConversionApi->aslvConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **write_prices** | **bool**| Defaults to true | [optional] |
| **write_long_texts** | **bool**| Defaults to true | [optional] |
| **conversion_culture** | **string**| The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: &#39;en&#39; for English, &#39;de&#39; for German, &#39;fr&#39; for French, &#39; it&#39; for Italian and &#39; es&#39; for Spanish. If the culture is not supported, &#39;en&#39; will be used. | [optional] |
| **include_article_numbers** | **bool**| If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from &#39;position.commerceProperties.articleNumber&#39; | [optional] |
| **lock_all_cells_but_prices** | **bool**| If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields. | [optional] |
| **aslv_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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

## `aslvConversionConvertToFlatAva()`

```php
aslvConversionConvertToFlatAva($aslv_file): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts Aslv files to Dangl.AVA projects

### Example

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
$aslv_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->aslvConversionConvertToFlatAva($aslv_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AslvConversionApi->aslvConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **aslv_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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

## `aslvConversionConvertToGaeb()`

```php
aslvConversionConvertToGaeb($destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions, $treat_null_item_number_schema_as_invalid, $aslv_file): \SplFileObject
```

Converts Aslv files to GAEB files

### Example

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
$destination_gaeb_type = 'destination_gaeb_type_example'; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = 'target_exchange_phase_transform_example'; // string | Defaults to none, meaning no transformation will be done. The phases are: Base = 81 CostEstimate = 82 OfferRequest = 83 Offer = 84 SideOffer = 85 Grant = 86
$enforce_strict_offer_phase_long_text_output = True; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$export_quantity_determination = True; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$remove_unprintable_characters_from_texts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$force_include_descriptions = True; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
$treat_null_item_number_schema_as_invalid = True; // bool | When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons.
$aslv_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->aslvConversionConvertToGaeb($destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions, $treat_null_item_number_schema_as_invalid, $aslv_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AslvConversionApi->aslvConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_gaeb_type** | **string**| Defaults to GAEB XML V3.2 | [optional] |
| **target_exchange_phase_transform** | **string**| Defaults to none, meaning no transformation will be done. The phases are: Base &#x3D; 81 CostEstimate &#x3D; 82 OfferRequest &#x3D; 83 Offer &#x3D; 84 SideOffer &#x3D; 85 Grant &#x3D; 86 | [optional] |
| **enforce_strict_offer_phase_long_text_output** | **bool**| Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | [optional] |
| **export_quantity_determination** | **bool**| Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | [optional] |
| **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |
| **force_include_descriptions** | **bool**| If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | [optional] |
| **treat_null_item_number_schema_as_invalid** | **bool**| When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons. | [optional] |
| **aslv_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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

## `aslvConversionConvertToOenorm()`

```php
aslvConversionConvertToOenorm($destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts, $aslv_file): \SplFileObject
```

Converts Aslv files to Oenorm files

### Example

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
$destination_oenorm_type = 'destination_oenorm_type_example'; // string | Defaults to Lv2015
$try_repair_project_structure = True; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skip_try_enforce_schema_compliant_xml_output = True; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$remove_unprintable_characters_from_texts = True; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$aslv_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->aslvConversionConvertToOenorm($destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts, $aslv_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AslvConversionApi->aslvConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_oenorm_type** | **string**| Defaults to Lv2015 | [optional] |
| **try_repair_project_structure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional] |
| **skip_try_enforce_schema_compliant_xml_output** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional] |
| **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional] |
| **aslv_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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
