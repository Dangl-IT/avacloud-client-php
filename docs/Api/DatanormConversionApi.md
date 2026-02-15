# Dangl\AVACloud\DatanormConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**datanormConversionConvertToAva()**](DatanormConversionApi.md#datanormConversionConvertToAva) | **POST** /conversion/datanorm/ava | Converts Datanorm files to Dangl.AVA projects |
| [**datanormConversionConvertToFlatAva()**](DatanormConversionApi.md#datanormConversionConvertToFlatAva) | **POST** /conversion/datanorm/flat-ava | Converts Datanorm files to Dangl.AVA projects |


## `datanormConversionConvertToAva()`

```php
datanormConversionConvertToAva($datanormFile, $removePlainTextLongTexts, $removeHtmlLongTexts): \Dangl\AVACloud\Model\ProjectDto
```

Converts Datanorm files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\DatanormConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datanormFile = '/path/to/file.txt'; // \SplFileObject | The input file
$removePlainTextLongTexts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$removeHtmlLongTexts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->datanormConversionConvertToAva($datanormFile, $removePlainTextLongTexts, $removeHtmlLongTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatanormConversionApi->datanormConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datanormFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
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

## `datanormConversionConvertToFlatAva()`

```php
datanormConversionConvertToFlatAva($datanormFile): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts Datanorm files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\DatanormConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datanormFile = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->datanormConversionConvertToFlatAva($datanormFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatanormConversionApi->datanormConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datanormFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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
