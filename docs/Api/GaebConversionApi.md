# Dangl\AVACloud\GaebConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gaebConversionConvertToAva**](GaebConversionApi.md#gaebConversionConvertToAva) | **POST** /conversion/gaeb/ava | Converts GAEB files to Dangl.AVA projects
[**gaebConversionConvertToExcel**](GaebConversionApi.md#gaebConversionConvertToExcel) | **POST** /conversion/gaeb/excel | Converts GAEB files to Excel
[**gaebConversionConvertToGaeb**](GaebConversionApi.md#gaebConversionConvertToGaeb) | **POST** /conversion/gaeb/gaeb | Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files.
[**gaebConversionConvertToOenorm**](GaebConversionApi.md#gaebConversionConvertToOenorm) | **POST** /conversion/gaeb/oenorm | Converts GAEB files to Oenorm files


# **gaebConversionConvertToAva**
> \Dangl\AVACloud\Model\ProjectDto gaebConversionConvertToAva($gaeb_file, $support_skipped_item_number_levels_in_positions, $remove_plain_text_long_texts, $remove_html_long_texts)

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
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$remove_plain_text_long_texts = true; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = true; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->gaebConversionConvertToAva($gaeb_file, $support_skipped_item_number_levels_in_positions, $remove_plain_text_long_texts, $remove_html_long_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **remove_plain_text_long_texts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional]
 **remove_html_long_texts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional]

### Return type

[**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/vnd.com.dangl-it.ProjectDto.v1+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToExcel**
> \SplFileObject gaebConversionConvertToExcel($gaeb_file, $support_skipped_item_number_levels_in_positions, $write_prices, $write_long_texts, $conversion_culture)

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
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$write_prices = true; // bool | Defaults to true
$write_long_texts = true; // bool | Defaults to true
$conversion_culture = "conversion_culture_example"; // string | The culture that should be used for the conversion process, to have localized Excel files

try {
    $result = $apiInstance->gaebConversionConvertToExcel($gaeb_file, $support_skipped_item_number_levels_in_positions, $write_prices, $write_long_texts, $conversion_culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **write_prices** | **bool**| Defaults to true | [optional]
 **write_long_texts** | **bool**| Defaults to true | [optional]
 **conversion_culture** | **string**| The culture that should be used for the conversion process, to have localized Excel files | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToGaeb**
> \SplFileObject gaebConversionConvertToGaeb($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions)

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
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$destination_gaeb_type = "destination_gaeb_type_example"; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = "target_exchange_phase_transform_example"; // string | Defaults to none, meaning no transformation will be done
$enforce_strict_offer_phase_long_text_output = true; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$export_quantity_determination = true; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$remove_unprintable_characters_from_texts = true; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats.
$force_include_descriptions = true; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.

try {
    $result = $apiInstance->gaebConversionConvertToGaeb($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **destination_gaeb_type** | **string**| Defaults to GAEB XML V3.2 | [optional]
 **target_exchange_phase_transform** | **string**| Defaults to none, meaning no transformation will be done | [optional]
 **enforce_strict_offer_phase_long_text_output** | **bool**| Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | [optional]
 **export_quantity_determination** | **bool**| Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | [optional]
 **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. | [optional]
 **force_include_descriptions** | **bool**| If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToOenorm**
> \SplFileObject gaebConversionConvertToOenorm($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts)

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
$gaeb_file = "/path/to/file.txt"; // \SplFileObject | The input file
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$destination_oenorm_type = "destination_oenorm_type_example"; // string | Defaults to Lv2015
$try_repair_project_structure = true; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skip_try_enforce_schema_compliant_xml_output = true; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$remove_unprintable_characters_from_texts = true; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats.

try {
    $result = $apiInstance->gaebConversionConvertToOenorm($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position levels - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **destination_oenorm_type** | **string**| Defaults to Lv2015 | [optional]
 **try_repair_project_structure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional]
 **skip_try_enforce_schema_compliant_xml_output** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional]
 **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

