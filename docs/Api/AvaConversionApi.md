# Dangl\AVACloud\AvaConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**avaConversionConvertToAva**](AvaConversionApi.md#avaConversionConvertToAva) | **POST** /conversion/ava/ava | Converts Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.
[**avaConversionConvertToDatanorm**](AvaConversionApi.md#avaConversionConvertToDatanorm) | **POST** /conversion/ava/datanorm | Converts Dangl.AVA projects to Datanorm
[**avaConversionConvertToExcel**](AvaConversionApi.md#avaConversionConvertToExcel) | **POST** /conversion/ava/excel | Converts Dangl.AVA projects to Excel
[**avaConversionConvertToFlatAva**](AvaConversionApi.md#avaConversionConvertToFlatAva) | **POST** /conversion/ava/flat-ava | Converts Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.
[**avaConversionConvertToGaeb**](AvaConversionApi.md#avaConversionConvertToGaeb) | **POST** /conversion/ava/gaeb | Converts Dangl.AVA projects to GAEB
[**avaConversionConvertToIdsConnect**](AvaConversionApi.md#avaConversionConvertToIdsConnect) | **POST** /conversion/ava/ids-connect | Converts Dangl.AVA projects to IDS Connect files
[**avaConversionConvertToOenorm**](AvaConversionApi.md#avaConversionConvertToOenorm) | **POST** /conversion/ava/oenorm | Converts Dangl.AVA projects to Oenorm
[**avaConversionConvertToReb**](AvaConversionApi.md#avaConversionConvertToReb) | **POST** /conversion/ava/reb | Converts Dangl.AVA projects to REB
[**avaConversionConvertToSia**](AvaConversionApi.md#avaConversionConvertToSia) | **POST** /conversion/ava/sia | Converts Dangl.AVA projects to SIA 451
[**avaConversionConvertToUgl**](AvaConversionApi.md#avaConversionConvertToUgl) | **POST** /conversion/ava/ugl | Converts Dangl.AVA projects to UGL


# **avaConversionConvertToAva**
> \Dangl\AVACloud\Model\ProjectDto avaConversionConvertToAva($ava_project, $try_auto_generate_item_numbers_and_schema, $remove_plain_text_long_texts, $remove_html_long_texts)

Converts Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$remove_plain_text_long_texts = true; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = true; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->avaConversionConvertToAva($ava_project, $try_auto_generate_item_numbers_and_schema, $remove_plain_text_long_texts, $remove_html_long_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **remove_plain_text_long_texts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional]
 **remove_html_long_texts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional]

### Return type

[**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/vnd.com.dangl-it.ProjectDto.v1+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToDatanorm**
> \SplFileObject avaConversionConvertToDatanorm($ava_project, $try_auto_generate_item_numbers_and_schema, $datanorm_destination_version)

Converts Dangl.AVA projects to Datanorm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$datanorm_destination_version = "datanorm_destination_version_example"; // string | The Datanorm version to convert to. Defaults to V4.

try {
    $result = $apiInstance->avaConversionConvertToDatanorm($ava_project, $try_auto_generate_item_numbers_and_schema, $datanorm_destination_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToDatanorm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **datanorm_destination_version** | **string**| The Datanorm version to convert to. Defaults to V4. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToExcel**
> \SplFileObject avaConversionConvertToExcel($ava_project, $try_auto_generate_item_numbers_and_schema, $write_prices, $write_long_texts, $conversion_culture, $include_article_numbers)

Converts Dangl.AVA projects to Excel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$write_prices = true; // bool | Defaults to true
$write_long_texts = true; // bool | Defaults to true
$conversion_culture = "conversion_culture_example"; // string | The culture that should be used for the conversion process, to have localized Excel files
$include_article_numbers = true; // bool | If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from 'position.commerceProperties.articleNumber'

try {
    $result = $apiInstance->avaConversionConvertToExcel($ava_project, $try_auto_generate_item_numbers_and_schema, $write_prices, $write_long_texts, $conversion_culture, $include_article_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToExcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **write_prices** | **bool**| Defaults to true | [optional]
 **write_long_texts** | **bool**| Defaults to true | [optional]
 **conversion_culture** | **string**| The culture that should be used for the conversion process, to have localized Excel files | [optional]
 **include_article_numbers** | **bool**| If this is enabled, then a new column will be created in the overview worksheet that contains the article numbers for positions. Article numbers will be read from &#39;position.commerceProperties.articleNumber&#39; | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToFlatAva**
> \Dangl\AVACloud\Model\FlatAvaProject avaConversionConvertToFlatAva($ava_project, $try_auto_generate_item_numbers_and_schema)

Converts Dangl.AVA projects to Dangl.AVA. This is useful when you want to generate the calculated properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.

try {
    $result = $apiInstance->avaConversionConvertToFlatAva($ava_project, $try_auto_generate_item_numbers_and_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]

### Return type

[**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToGaeb**
> \SplFileObject avaConversionConvertToGaeb($ava_project, $try_auto_generate_item_numbers_and_schema, $destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions, $treat_null_item_number_schema_as_invalid)

Converts Dangl.AVA projects to GAEB

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$destination_gaeb_type = "destination_gaeb_type_example"; // string | Defaults to GAEB XML V3.2
$target_exchange_phase_transform = "target_exchange_phase_transform_example"; // string | Defaults to none, meaning no transformation will be done. The phases are: Base = 81 CostEstimate = 82 OfferRequest = 83 Offer = 84 SideOffer = 85 Grant = 86
$enforce_strict_offer_phase_long_text_output = true; // bool | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
$export_quantity_determination = true; // bool | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
$remove_unprintable_characters_from_texts = true; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
$force_include_descriptions = true; // bool | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
$treat_null_item_number_schema_as_invalid = true; // bool | When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons.

try {
    $result = $apiInstance->avaConversionConvertToGaeb($ava_project, $try_auto_generate_item_numbers_and_schema, $destination_gaeb_type, $target_exchange_phase_transform, $enforce_strict_offer_phase_long_text_output, $export_quantity_determination, $remove_unprintable_characters_from_texts, $force_include_descriptions, $treat_null_item_number_schema_as_invalid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToGaeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **destination_gaeb_type** | **string**| Defaults to GAEB XML V3.2 | [optional]
 **target_exchange_phase_transform** | **string**| Defaults to none, meaning no transformation will be done. The phases are: Base &#x3D; 81 CostEstimate &#x3D; 82 OfferRequest &#x3D; 83 Offer &#x3D; 84 SideOffer &#x3D; 85 Grant &#x3D; 86 | [optional]
 **enforce_strict_offer_phase_long_text_output** | **bool**| Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | [optional]
 **export_quantity_determination** | **bool**| Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | [optional]
 **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional]
 **force_include_descriptions** | **bool**| If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | [optional]
 **treat_null_item_number_schema_as_invalid** | **bool**| When exporting to GAEB, an item number schema is usually required. AVACloud will try to fix invalid item number schemas. With this setting, you can also tell AVACloud to treat a null value as invalid. Otherwise, null schemas will simply be ignored and not lead to any schema being generated. It is recommended to enable this option, but it is disabled by default for compatibility reasons. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToIdsConnect**
> \SplFileObject avaConversionConvertToIdsConnect($ava_project, $try_auto_generate_item_numbers_and_schema, $version)

Converts Dangl.AVA projects to IDS Connect files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$version = "version_example"; // string | The IDS Connect version to convert to. Defaults to V2_5.

try {
    $result = $apiInstance->avaConversionConvertToIdsConnect($ava_project, $try_auto_generate_item_numbers_and_schema, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToIdsConnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **version** | **string**| The IDS Connect version to convert to. Defaults to V2_5. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToOenorm**
> \SplFileObject avaConversionConvertToOenorm($ava_project, $try_auto_generate_item_numbers_and_schema, $destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts)

Converts Dangl.AVA projects to Oenorm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$destination_oenorm_type = "destination_oenorm_type_example"; // string | Defaults to Lv2015
$try_repair_project_structure = true; // bool | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
$skip_try_enforce_schema_compliant_xml_output = true; // bool | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
$remove_unprintable_characters_from_texts = true; // bool | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.

try {
    $result = $apiInstance->avaConversionConvertToOenorm($ava_project, $try_auto_generate_item_numbers_and_schema, $destination_oenorm_type, $try_repair_project_structure, $skip_try_enforce_schema_compliant_xml_output, $remove_unprintable_characters_from_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToOenorm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **destination_oenorm_type** | **string**| Defaults to Lv2015 | [optional]
 **try_repair_project_structure** | **bool**| Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | [optional]
 **skip_try_enforce_schema_compliant_xml_output** | **bool**| If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | [optional]
 **remove_unprintable_characters_from_texts** | **bool**| If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToReb**
> \SplFileObject avaConversionConvertToReb($ava_project, $try_auto_generate_item_numbers_and_schema, $destination_reb_type, $last_row_address)

Converts Dangl.AVA projects to REB

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$destination_reb_type = "destination_reb_type_example"; // string | Defaults to D11
$last_row_address = "last_row_address_example"; // string | If this is present, the export to REB will be started from the next available row address after the given one. This must be a valid 6 character address, e.g. \"1234A0\"

try {
    $result = $apiInstance->avaConversionConvertToReb($ava_project, $try_auto_generate_item_numbers_and_schema, $destination_reb_type, $last_row_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToReb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **destination_reb_type** | **string**| Defaults to D11 | [optional]
 **last_row_address** | **string**| If this is present, the export to REB will be started from the next available row address after the given one. This must be a valid 6 character address, e.g. \&quot;1234A0\&quot; | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToSia**
> \SplFileObject avaConversionConvertToSia($ava_project, $try_auto_generate_item_numbers_and_schema, $sia_destination_type)

Converts Dangl.AVA projects to SIA 451

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$sia_destination_type = "sia_destination_type_example"; // string | Defaults to Sia451

try {
    $result = $apiInstance->avaConversionConvertToSia($ava_project, $try_auto_generate_item_numbers_and_schema, $sia_destination_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToSia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **sia_destination_type** | **string**| Defaults to Sia451 | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avaConversionConvertToUgl**
> \SplFileObject avaConversionConvertToUgl($ava_project, $try_auto_generate_item_numbers_and_schema, $ugl_destination_version)

Converts Dangl.AVA projects to UGL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project = new \Dangl\AVACloud\Model\ProjectDto(); // \Dangl\AVACloud\Model\ProjectDto | The Dangl.AVA project
$try_auto_generate_item_numbers_and_schema = true; // bool | If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number.
$ugl_destination_version = "ugl_destination_version_example"; // string | The UGL version to convert to. Defaults to V1.

try {
    $result = $apiInstance->avaConversionConvertToUgl($ava_project, $try_auto_generate_item_numbers_and_schema, $ugl_destination_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaConversionApi->avaConversionConvertToUgl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)| The Dangl.AVA project |
 **try_auto_generate_item_numbers_and_schema** | **bool**| If this is set to true, AVACloud will try to generate item numbers and an item number schema automatically for the input project. The operation will not have any effect if either an item number schema is already present, or if any of the elements already has an item number. | [optional]
 **ugl_destination_version** | **string**| The UGL version to convert to. Defaults to V1. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

