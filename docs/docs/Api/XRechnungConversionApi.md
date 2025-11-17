# Dangl\AVACloud\XRechnungConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**xRechnungConversionConvertAvaToPdfInvoice**](XRechnungConversionApi.md#xRechnungConversionConvertAvaToPdfInvoice) | **POST** /conversion/xrechnung/ava-wrapper/pdf | This will convert an AVA wrapper object to a PDF file
[**xRechnungConversionConvertAvaToXRechnung**](XRechnungConversionApi.md#xRechnungConversionConvertAvaToXRechnung) | **POST** /conversion/xrechnung/ava-wrapper/xrechnung | This will convert an AVA wrapper object to an XRechnung file
[**xRechnungConversionConvertInvoiceToPdfInvoice**](XRechnungConversionApi.md#xRechnungConversionConvertInvoiceToPdfInvoice) | **POST** /conversion/xrechnung/invoice/pdf | This will convert an Invoice object to a PDF file
[**xRechnungConversionConvertInvoiceToXRechnung**](XRechnungConversionApi.md#xRechnungConversionConvertInvoiceToXRechnung) | **POST** /conversion/xrechnung/invoice/xrechnung | This will convert an Invoice object to an XRechnung file
[**xRechnungConversionConvertXRechnungToAva**](XRechnungConversionApi.md#xRechnungConversionConvertXRechnungToAva) | **POST** /conversion/xrechnung/ava-wrapper | This will read an XRechnung file and convert it to an AVA wrapper object
[**xRechnungConversionConvertXRechnungToInvoice**](XRechnungConversionApi.md#xRechnungConversionConvertXRechnungToInvoice) | **POST** /conversion/xrechnung/invoice | This will read an XRechnung file and convert it to an Invoice object
[**xRechnungConversionMergeInvoiceIntoPdfFile**](XRechnungConversionApi.md#xRechnungConversionMergeInvoiceIntoPdfFile) | **POST** /conversion/xrechnung/merge | This will embedd an XRechnung file into an existing PDF file as an attachment.


# **xRechnungConversionConvertAvaToPdfInvoice**
> \SplFileObject xRechnungConversionConvertAvaToPdfInvoice($ava_wrapper)

This will convert an AVA wrapper object to a PDF file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_wrapper = new \Dangl\AVACloud\Model\AvaProjectWrapper(); // \Dangl\AVACloud\Model\AvaProjectWrapper | 

try {
    $result = $apiInstance->xRechnungConversionConvertAvaToPdfInvoice($ava_wrapper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertAvaToPdfInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_wrapper** | [**\Dangl\AVACloud\Model\AvaProjectWrapper**](../Model/AvaProjectWrapper.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionConvertAvaToXRechnung**
> \SplFileObject xRechnungConversionConvertAvaToXRechnung($ava_wrapper, $target_format, $disable_price_rounding, $disable_branding_comment)

This will convert an AVA wrapper object to an XRechnung file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_wrapper = new \Dangl\AVACloud\Model\AvaProjectWrapper(); // \Dangl\AVACloud\Model\AvaProjectWrapper | 
$target_format = "target_format_example"; // string | The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd)
$disable_price_rounding = true; // bool | If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places.
$disable_branding_comment = true; // bool | If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included.

try {
    $result = $apiInstance->xRechnungConversionConvertAvaToXRechnung($ava_wrapper, $target_format, $disable_price_rounding, $disable_branding_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertAvaToXRechnung: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_wrapper** | [**\Dangl\AVACloud\Model\AvaProjectWrapper**](../Model/AvaProjectWrapper.md)|  |
 **target_format** | **string**| The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd) | [optional]
 **disable_price_rounding** | **bool**| If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places. | [optional]
 **disable_branding_comment** | **bool**| If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionConvertInvoiceToPdfInvoice**
> \SplFileObject xRechnungConversionConvertInvoiceToPdfInvoice($invoice)

This will convert an Invoice object to a PDF file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \Dangl\AVACloud\Model\Invoice(); // \Dangl\AVACloud\Model\Invoice | 

try {
    $result = $apiInstance->xRechnungConversionConvertInvoiceToPdfInvoice($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertInvoiceToPdfInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice** | [**\Dangl\AVACloud\Model\Invoice**](../Model/Invoice.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionConvertInvoiceToXRechnung**
> \SplFileObject xRechnungConversionConvertInvoiceToXRechnung($invoice, $target_format, $disable_price_rounding, $disable_branding_comment)

This will convert an Invoice object to an XRechnung file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \Dangl\AVACloud\Model\Invoice(); // \Dangl\AVACloud\Model\Invoice | 
$target_format = "target_format_example"; // string | The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd)
$disable_price_rounding = true; // bool | If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places.
$disable_branding_comment = true; // bool | If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included.

try {
    $result = $apiInstance->xRechnungConversionConvertInvoiceToXRechnung($invoice, $target_format, $disable_price_rounding, $disable_branding_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertInvoiceToXRechnung: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice** | [**\Dangl\AVACloud\Model\Invoice**](../Model/Invoice.md)|  |
 **target_format** | **string**| The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd) | [optional]
 **disable_price_rounding** | **bool**| If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places. | [optional]
 **disable_branding_comment** | **bool**| If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionConvertXRechnungToAva**
> \Dangl\AVACloud\Model\AvaProjectWrapper xRechnungConversionConvertXRechnungToAva($xrechnung_file)

This will read an XRechnung file and convert it to an AVA wrapper object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xrechnung_file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->xRechnungConversionConvertXRechnungToAva($xrechnung_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertXRechnungToAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xrechnung_file** | **\SplFileObject**|  | [optional]

### Return type

[**\Dangl\AVACloud\Model\AvaProjectWrapper**](../Model/AvaProjectWrapper.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionConvertXRechnungToInvoice**
> \Dangl\AVACloud\Model\Invoice xRechnungConversionConvertXRechnungToInvoice($xrechnung_file)

This will read an XRechnung file and convert it to an Invoice object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xrechnung_file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->xRechnungConversionConvertXRechnungToInvoice($xrechnung_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertXRechnungToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xrechnung_file** | **\SplFileObject**|  | [optional]

### Return type

[**\Dangl\AVACloud\Model\Invoice**](../Model/Invoice.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionMergeInvoiceIntoPdfFile**
> \SplFileObject xRechnungConversionMergeInvoiceIntoPdfFile($pdf_embedd_model, $target_format, $disable_price_rounding, $disable_branding_comment)

This will embedd an XRechnung file into an existing PDF file as an attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\XRechnungConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pdf_embedd_model = new \Dangl\AVACloud\Model\PostXRechnungPdfEmbedd(); // \Dangl\AVACloud\Model\PostXRechnungPdfEmbedd | 
$target_format = "target_format_example"; // string | The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd)
$disable_price_rounding = true; // bool | If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places.
$disable_branding_comment = true; // bool | If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included.

try {
    $result = $apiInstance->xRechnungConversionMergeInvoiceIntoPdfFile($pdf_embedd_model, $target_format, $disable_price_rounding, $disable_branding_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionMergeInvoiceIntoPdfFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_embedd_model** | [**\Dangl\AVACloud\Model\PostXRechnungPdfEmbedd**](../Model/PostXRechnungPdfEmbedd.md)|  |
 **target_format** | **string**| The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd) | [optional]
 **disable_price_rounding** | **bool**| If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places. | [optional]
 **disable_branding_comment** | **bool**| If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

