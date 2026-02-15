# Dangl\AVACloud\XRechnungConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**xRechnungConversionConvertAvaToPdfInvoice()**](XRechnungConversionApi.md#xRechnungConversionConvertAvaToPdfInvoice) | **POST** /conversion/xrechnung/ava-wrapper/pdf | This will convert an AVA wrapper object to a PDF file |
| [**xRechnungConversionConvertAvaToXRechnung()**](XRechnungConversionApi.md#xRechnungConversionConvertAvaToXRechnung) | **POST** /conversion/xrechnung/ava-wrapper/xrechnung | This will convert an AVA wrapper object to an XRechnung file |
| [**xRechnungConversionConvertInvoiceToPdfInvoice()**](XRechnungConversionApi.md#xRechnungConversionConvertInvoiceToPdfInvoice) | **POST** /conversion/xrechnung/invoice/pdf | This will convert an Invoice object to a PDF file |
| [**xRechnungConversionConvertInvoiceToXRechnung()**](XRechnungConversionApi.md#xRechnungConversionConvertInvoiceToXRechnung) | **POST** /conversion/xrechnung/invoice/xrechnung | This will convert an Invoice object to an XRechnung file |
| [**xRechnungConversionConvertXRechnungToAva()**](XRechnungConversionApi.md#xRechnungConversionConvertXRechnungToAva) | **POST** /conversion/xrechnung/ava-wrapper | This will read an XRechnung file and convert it to an AVA wrapper object |
| [**xRechnungConversionConvertXRechnungToInvoice()**](XRechnungConversionApi.md#xRechnungConversionConvertXRechnungToInvoice) | **POST** /conversion/xrechnung/invoice | This will read an XRechnung file and convert it to an Invoice object |
| [**xRechnungConversionMergeInvoiceIntoPdfFile()**](XRechnungConversionApi.md#xRechnungConversionMergeInvoiceIntoPdfFile) | **POST** /conversion/xrechnung/merge | This will embedd an XRechnung file into an existing PDF file as an attachment. |


## `xRechnungConversionConvertAvaToPdfInvoice()`

```php
xRechnungConversionConvertAvaToPdfInvoice($avaWrapper): \SplFileObject
```

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
$avaWrapper = new \Dangl\AVACloud\Model\AvaProjectWrapper(); // \Dangl\AVACloud\Model\AvaProjectWrapper

try {
    $result = $apiInstance->xRechnungConversionConvertAvaToPdfInvoice($avaWrapper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertAvaToPdfInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **avaWrapper** | [**\Dangl\AVACloud\Model\AvaProjectWrapper**](../Model/AvaProjectWrapper.md)|  | |

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

## `xRechnungConversionConvertAvaToXRechnung()`

```php
xRechnungConversionConvertAvaToXRechnung($avaWrapper, $targetFormat, $disablePriceRounding, $disableBrandingComment): \SplFileObject
```

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
$avaWrapper = new \Dangl\AVACloud\Model\AvaProjectWrapper(); // \Dangl\AVACloud\Model\AvaProjectWrapper
$targetFormat = 'targetFormat_example'; // string | The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd)
$disablePriceRounding = True; // bool | If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places.
$disableBrandingComment = True; // bool | If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included.

try {
    $result = $apiInstance->xRechnungConversionConvertAvaToXRechnung($avaWrapper, $targetFormat, $disablePriceRounding, $disableBrandingComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertAvaToXRechnung: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **avaWrapper** | [**\Dangl\AVACloud\Model\AvaProjectWrapper**](../Model/AvaProjectWrapper.md)|  | |
| **targetFormat** | **string**| The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd) | [optional] |
| **disablePriceRounding** | **bool**| If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places. | [optional] |
| **disableBrandingComment** | **bool**| If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included. | [optional] |

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

## `xRechnungConversionConvertInvoiceToPdfInvoice()`

```php
xRechnungConversionConvertInvoiceToPdfInvoice($invoice): \SplFileObject
```

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
$invoice = new \Dangl\AVACloud\Model\Invoice(); // \Dangl\AVACloud\Model\Invoice

try {
    $result = $apiInstance->xRechnungConversionConvertInvoiceToPdfInvoice($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertInvoiceToPdfInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice** | [**\Dangl\AVACloud\Model\Invoice**](../Model/Invoice.md)|  | |

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

## `xRechnungConversionConvertInvoiceToXRechnung()`

```php
xRechnungConversionConvertInvoiceToXRechnung($invoice, $targetFormat, $disablePriceRounding, $disableBrandingComment): \SplFileObject
```

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
$invoice = new \Dangl\AVACloud\Model\Invoice(); // \Dangl\AVACloud\Model\Invoice
$targetFormat = 'targetFormat_example'; // string | The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd)
$disablePriceRounding = True; // bool | If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places.
$disableBrandingComment = True; // bool | If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included.

try {
    $result = $apiInstance->xRechnungConversionConvertInvoiceToXRechnung($invoice, $targetFormat, $disablePriceRounding, $disableBrandingComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertInvoiceToXRechnung: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice** | [**\Dangl\AVACloud\Model\Invoice**](../Model/Invoice.md)|  | |
| **targetFormat** | **string**| The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd) | [optional] |
| **disablePriceRounding** | **bool**| If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places. | [optional] |
| **disableBrandingComment** | **bool**| If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included. | [optional] |

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

## `xRechnungConversionConvertXRechnungToAva()`

```php
xRechnungConversionConvertXRechnungToAva($xrechnungFile): \Dangl\AVACloud\Model\AvaProjectWrapper
```

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
$xrechnungFile = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->xRechnungConversionConvertXRechnungToAva($xrechnungFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertXRechnungToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xrechnungFile** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Dangl\AVACloud\Model\AvaProjectWrapper**](../Model/AvaProjectWrapper.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xRechnungConversionConvertXRechnungToInvoice()`

```php
xRechnungConversionConvertXRechnungToInvoice($xrechnungFile): \Dangl\AVACloud\Model\Invoice
```

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
$xrechnungFile = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->xRechnungConversionConvertXRechnungToInvoice($xrechnungFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionConvertXRechnungToInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xrechnungFile** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Dangl\AVACloud\Model\Invoice**](../Model/Invoice.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xRechnungConversionMergeInvoiceIntoPdfFile()`

```php
xRechnungConversionMergeInvoiceIntoPdfFile($pdfEmbeddModel, $targetFormat, $disablePriceRounding, $disableBrandingComment): \SplFileObject
```

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
$pdfEmbeddModel = new \Dangl\AVACloud\Model\PostXRechnungPdfEmbedd(); // \Dangl\AVACloud\Model\PostXRechnungPdfEmbedd
$targetFormat = 'targetFormat_example'; // string | The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd)
$disablePriceRounding = True; // bool | If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places.
$disableBrandingComment = True; // bool | If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included.

try {
    $result = $apiInstance->xRechnungConversionMergeInvoiceIntoPdfFile($pdfEmbeddModel, $targetFormat, $disablePriceRounding, $disableBrandingComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRechnungConversionApi->xRechnungConversionMergeInvoiceIntoPdfFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pdfEmbeddModel** | [**\Dangl\AVACloud\Model\PostXRechnungPdfEmbedd**](../Model/PostXRechnungPdfEmbedd.md)|  | |
| **targetFormat** | **string**| The target format for the XRechnung export. Defaults to Ubl. Options are: Ubl, CrossIndustryInvoice and FacturX (ZUGFerd) | [optional] |
| **disablePriceRounding** | **bool**| If this is enabled, then the price values in the XRechnung export will not be rounded. Otherwise, prices will by default be rounded to two decimal places. | [optional] |
| **disableBrandingComment** | **bool**| If this is set to true, exported XRechnung files will not contain an XML comment indicating their origin. This is false by default, meaning the comment will be included. | [optional] |

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
