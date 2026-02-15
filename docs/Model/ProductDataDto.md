# # ProductDataDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**vendor** | [**\Dangl\AVACloud\Model\PartyInformationDto**](PartyInformationDto.md) |  | [optional]
**articles** | [**\Dangl\AVACloud\Model\ArticleDataDto[]**](ArticleDataDto.md) | The collection of ArticleData that describe this product, e.g. a pipe product could be composed out of multiple pipe segments and fittings. | [optional]
**shortText** | **string** | Short description for this ITextElement element. | [optional]
**longText** | **string** | Detailed description for this ITextElement element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional]
**htmlLongText** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
