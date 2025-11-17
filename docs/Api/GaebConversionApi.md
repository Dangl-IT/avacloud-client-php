# Dangl\AVACloud\GaebConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gaebConversionConvertToAva**](GaebConversionApi.md#gaebConversionConvertToAva) | **POST** /conversion/gaeb/ava | Converts GAEB files to Dangl.AVA projects
[**gaebConversionConvertToExcel**](GaebConversionApi.md#gaebConversionConvertToExcel) | **POST** /conversion/gaeb/excel | Converts GAEB files to Excel
[**gaebConversionConvertToFlatAva**](GaebConversionApi.md#gaebConversionConvertToFlatAva) | **POST** /conversion/gaeb/flat-ava | Converts GAEB files to Dangl.AVA projects
[**gaebConversionConvertToGaeb**](GaebConversionApi.md#gaebConversionConvertToGaeb) | **POST** /conversion/gaeb/gaeb | Converts GAEB files to GAEB files. Used for example when transforming or repairing GAEB files.
[**gaebConversionConvertToOenorm**](GaebConversionApi.md#gaebConversionConvertToOenorm) | **POST** /conversion/gaeb/oenorm | Converts GAEB files to Oenorm files


# **gaebConversionConvertToAva**
> \Dangl\AVACloud\Model\ProjectDto gaebConversionConvertToAva($gaeb_file, $support_skipped_item_number_levels_in_positions, $remove_plain_text_long_texts, $remove_html_long_texts, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations)

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
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$remove_plain_text_long_texts = true; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = true; // bool | If set to true, html long texts will be removed from the output to reduce response sizes
$output_html_as_xml = true; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keep_empty_html_text = true; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allow_upper_case_item_numbers = true; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allow_lump_sum_items_with_differing_quantities = true; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disable_item_number_identifier_transformations = true; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToAva($gaeb_file, $support_skipped_item_number_levels_in_positions, $remove_plain_text_long_texts, $remove_html_long_texts, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations);
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
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **remove_plain_text_long_texts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional]
 **remove_html_long_texts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional]
 **output_html_as_xml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional]
 **keep_empty_html_text** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional]
 **allow_upper_case_item_numbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional]
 **allow_lump_sum_items_with_differing_quantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional]
 **disable_item_number_identifier_transformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional]

### Return type

[**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/vnd.com.dangl-it.ProjectDto.v1+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToExcel**
> \SplFileObject gaebConversionConvertToExcel($gaeb_file, $support_skipped_item_number_levels_in_positions, $write_prices, $write_long_texts, $conversion_culture, $include_article_numbers, $lock_all_cells_but_prices, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations)

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
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$write_prices = true; // bool | Defaults to true
$write_long_texts = true; // bool | Defaults to true
$conversion_culture = "conversion_culture_example"; // string | The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: 'en' for English, 'de' for German, 'fr' for French, ' it' for Italian and ' es' for Spanish. If the culture is not supported, 'en' will be used.
$include_article_numbers = true; // bool | If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from 'position.commerceProperties.articleNumber'
$lock_all_cells_but_prices = true; // bool | If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields.
$output_html_as_xml = true; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keep_empty_html_text = true; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allow_upper_case_item_numbers = true; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allow_lump_sum_items_with_differing_quantities = true; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disable_item_number_identifier_transformations = true; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToExcel($gaeb_file, $support_skipped_item_number_levels_in_positions, $write_prices, $write_long_texts, $conversion_culture, $include_article_numbers, $lock_all_cells_but_prices, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations);
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
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **write_prices** | **bool**| Defaults to true | [optional]
 **write_long_texts** | **bool**| Defaults to true | [optional]
 **conversion_culture** | **string**| The culture that should be used for the conversion process, to have localized Excel files. The following conversion cultures are available: &#39;en&#39; for English, &#39;de&#39; for German, &#39;fr&#39; for French, &#39; it&#39; for Italian and &#39; es&#39; for Spanish. If the culture is not supported, &#39;en&#39; will be used. | [optional]
 **include_article_numbers** | **bool**| If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from &#39;position.commerceProperties.articleNumber&#39; | [optional]
 **lock_all_cells_but_prices** | **bool**| If this is enabled, then all cells except the unit price cells will be locked, so users can not accidentally modify other fields. | [optional]
 **output_html_as_xml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional]
 **keep_empty_html_text** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional]
 **allow_upper_case_item_numbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional]
 **allow_lump_sum_items_with_differing_quantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional]
 **disable_item_number_identifier_transformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToFlatAva**
> \Dangl\AVACloud\Model\FlatAvaProject gaebConversionConvertToFlatAva($gaeb_file, $support_skipped_item_number_levels_in_positions, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations)

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
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$output_html_as_xml = true; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keep_empty_html_text = true; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allow_upper_case_item_numbers = true; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allow_lump_sum_items_with_differing_quantities = true; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disable_item_number_identifier_transformations = true; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToFlatAva($gaeb_file, $support_skipped_item_number_levels_in_positions, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GaebConversionApi->gaebConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gaeb_file** | **\SplFileObject**| The input file | [optional]
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **output_html_as_xml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional]
 **keep_empty_html_text** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional]
 **allow_upper_case_item_numbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional]
 **allow_lump_sum_items_with_differing_quantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional]
 **disable_item_number_identifier_transformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional]

### Return type

[**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToGaeb**
> \SplFileObject gaebConversionConvertToGaeb($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions, $treat_null_item_number_schema_as_invalid, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations)

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
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$destination_gaeb_type = "destination_gaeb_type_example"; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = "target_exchange_phase_transform_example"; // string | Defaults to none, meaning no transformation will be done. The phases are: Base = 81 CostEstimate = 82 OfferRequest = 83 Offer = 84 SideOffer = 85 Grant = 86
$enforce_strict_offer_phase_long_text_output = true; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$export_quantity_determination = true; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$remove_unprintable_characters_from_texts = true; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$force_include_descriptions = true; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
$treat_null_item_number_schema_as_invalid = true; // bool | When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons.
$output_html_as_xml = true; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keep_empty_html_text = true; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allow_upper_case_item_numbers = true; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allow_lump_sum_items_with_differing_quantities = true; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disable_item_number_identifier_transformations = true; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToGaeb($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions, $treat_null_item_number_schema_as_invalid, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations);
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
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **destination_gaeb_type** | **string**| Defaults to GAEB XML V3.2 | [optional]
 **target_exchange_phase_transform** | **string**| Defaults to none, meaning no transformation will be done. The phases are: Base &#x3D; 81 CostEstimate &#x3D; 82 OfferRequest &#x3D; 83 Offer &#x3D; 84 SideOffer &#x3D; 85 Grant &#x3D; 86 | [optional]
 **enforce_strict_offer_phase_long_text_output** | **bool**| Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | [optional]
 **export_quantity_determination** | **bool**| Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | [optional]
 **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional]
 **force_include_descriptions** | **bool**| If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | [optional]
 **treat_null_item_number_schema_as_invalid** | **bool**| When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons. | [optional]
 **output_html_as_xml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional]
 **keep_empty_html_text** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional]
 **allow_upper_case_item_numbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional]
 **allow_lump_sum_items_with_differing_quantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional]
 **disable_item_number_identifier_transformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gaebConversionConvertToOenorm**
> \SplFileObject gaebConversionConvertToOenorm($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations)

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
$support_skipped_item_number_levels_in_positions = true; // bool | Defaults to 'false'. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just '01.02', then it will be displayed as '01.__.02' if this is set to true.
$destination_oenorm_type = "destination_oenorm_type_example"; // string | Defaults to Lv2015
$try_repair_project_structure = true; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skip_try_enforce_schema_compliant_xml_output = true; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$remove_unprintable_characters_from_texts = true; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$output_html_as_xml = true; // bool | Defaults to 'false'. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce '<br />' instead of '<br>'.
$keep_empty_html_text = true; // bool | Defaults to 'false'. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output.
$allow_upper_case_item_numbers = true; // bool | Defaults to 'false'. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well.
$allow_lump_sum_items_with_differing_quantities = true; // bool | Defaults to 'false'. By default, the GAEB standard requires lump sum items ('Pauschalpositionen' in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to 'true', then differing quantities will be kept during the import.
$disable_item_number_identifier_transformations = true; // bool | If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to 'false'. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported.

try {
    $result = $apiInstance->gaebConversionConvertToOenorm($gaeb_file, $support_skipped_item_number_levels_in_positions, $destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts, $output_html_as_xml, $keep_empty_html_text, $allow_upper_case_item_numbers, $allow_lump_sum_items_with_differing_quantities, $disable_item_number_identifier_transformations);
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
 **support_skipped_item_number_levels_in_positions** | **bool**| Defaults to &#39;false&#39;. This controls if, when deserializing GAEB files, skipped levels in position item numbers should be supported. For example, if an ItemNumberSchema defines three levels - two group levels and one position level - but the ItemNumber of the position is just &#39;01.02&#39;, then it will be displayed as &#39;01.__.02&#39; if this is set to true. | [optional]
 **destination_oenorm_type** | **string**| Defaults to Lv2015 | [optional]
 **try_repair_project_structure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional]
 **skip_try_enforce_schema_compliant_xml_output** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional]
 **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional]
 **output_html_as_xml** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text will be output as XML in the output. This means that e.g. void Html tags will always be output with their closing tag, e.g. it will produce &#39;&lt;br /&gt;&#39; instead of &#39;&lt;br&gt;&#39;. | [optional]
 **keep_empty_html_text** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then Html text that is empty will be kept in the output. Otherwise, Html text without any plain text will be removed. This is useful for example if you want to keep texts that only consist of empty paragraphs in the output. | [optional]
 **allow_upper_case_item_numbers** | **bool**| Defaults to &#39;false&#39;. If this is enabled, then the ItemNumber of positions will be in uppercase format if the source file has them. By default, all item numbers will be converted to lowercase, but this option will enable the option to support uppercase item numbers as well. | [optional]
 **allow_lump_sum_items_with_differing_quantities** | **bool**| Defaults to &#39;false&#39;. By default, the GAEB standard requires lump sum items (&#39;Pauschalpositionen&#39; in German) to have a quantity of exactly 1. AVACloud does enforce this convention, but if you set this property to &#39;true&#39;, then differing quantities will be kept during the import. | [optional]
 **disable_item_number_identifier_transformations** | **bool**| If this is enabled, single item number tiers will only be left padded with spaces  to their respective length, but spaces will not be filled with zeroes at the  beginning. Defaults to &#39;false&#39;. This can be used to preserve item numbers exactly as they are in the source file, but it is not recommended to use this option since it may also allow incorrect or non schema compliant item numbers to be imported. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

