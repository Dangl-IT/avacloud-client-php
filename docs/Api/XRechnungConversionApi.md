# Dangl\AVACloud\XRechnungConversionApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**xRechnungConversionConvertAvaToXRechnung**](XRechnungConversionApi.md#xRechnungConversionConvertAvaToXRechnung) | **POST** /conversion/xrechnung/ava-wrapper/xrechnung | This will convert an AVA wrapper object to an XRechnung file
[**xRechnungConversionConvertInvoiceToXRechnung**](XRechnungConversionApi.md#xRechnungConversionConvertInvoiceToXRechnung) | **POST** /conversion/xrechnung/invoice/xrechnung | This will convert an Invoice object to an XRechnung file
[**xRechnungConversionConvertXRechnungToAva**](XRechnungConversionApi.md#xRechnungConversionConvertXRechnungToAva) | **POST** /conversion/xrechnung/ava-wrapper | This will read an XRechnung file and convert it to an AVA wrapper object
[**xRechnungConversionConvertXRechnungToInvoice**](XRechnungConversionApi.md#xRechnungConversionConvertXRechnungToInvoice) | **POST** /conversion/xrechnung/invoice | This will read an XRechnung file and convert it to an Invoice object


# **xRechnungConversionConvertAvaToXRechnung**
> \SplFileObject xRechnungConversionConvertAvaToXRechnung($ava_wrapper)

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

try {
    $result = $apiInstance->xRechnungConversionConvertAvaToXRechnung($ava_wrapper);
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

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xRechnungConversionConvertInvoiceToXRechnung**
> \SplFileObject xRechnungConversionConvertInvoiceToXRechnung($invoice)

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

try {
    $result = $apiInstance->xRechnungConversionConvertInvoiceToXRechnung($invoice);
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

