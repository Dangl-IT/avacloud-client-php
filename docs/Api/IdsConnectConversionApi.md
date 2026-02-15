# Dangl\AVACloud\IdsConnectConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**idsConnectConversionConvertToAva()**](IdsConnectConversionApi.md#idsConnectConversionConvertToAva) | **POST** /conversion/ids-connect/ava | Converts IDS Connect files to Dangl.AVA projects |
| [**idsConnectConversionConvertToFlatAva()**](IdsConnectConversionApi.md#idsConnectConversionConvertToFlatAva) | **POST** /conversion/ids-connect/flat-ava | Converts IDS Connect files to Dangl.AVA projects |


## `idsConnectConversionConvertToAva()`

```php
idsConnectConversionConvertToAva($idsConnectFile, $removePlainTextLongTexts, $removeHtmlLongTexts): \Dangl\AVACloud\Model\ProjectDto
```

Converts IDS Connect files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\IdsConnectConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsConnectFile = '/path/to/file.txt'; // \SplFileObject | The input file
$removePlainTextLongTexts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$removeHtmlLongTexts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes

try {
    $result = $apiInstance->idsConnectConversionConvertToAva($idsConnectFile, $removePlainTextLongTexts, $removeHtmlLongTexts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdsConnectConversionApi->idsConnectConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsConnectFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |
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

## `idsConnectConversionConvertToFlatAva()`

```php
idsConnectConversionConvertToFlatAva($idsConnectFile): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts IDS Connect files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\IdsConnectConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsConnectFile = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->idsConnectConversionConvertToFlatAva($idsConnectFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdsConnectConversionApi->idsConnectConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsConnectFile** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

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
