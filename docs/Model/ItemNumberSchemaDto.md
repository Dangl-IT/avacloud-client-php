# ItemNumberSchemaDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_length** | **int** | The count of tiers in the ItemNumberSchema | 
**tiers** | [**\Dangl\AVACloud\Model\ItemNumberSchemaTierDto[]**](ItemNumberSchemaTierDto.md) | The collection of tiers for this ItemNumberSchema. | [optional] 
**separator** | **string** | The separator to use for separiting the different levels in an ItemNumber. Defaults to DEFAULT_SEPARATOR, which is a point &#39;.&#39;. Setting this to a space or other whitespaces is discouraged, as this might not work correct in all situations and item numbers could be displayed not as intended. This can not be set to an empty or null string, trying that will default to the DEFAULT_SEPARATOR. If a value is set that has a different length than one &#39;1&#39;, the DEFAULT_SEPARATOR will be used instead. You should also not use values for the separator that are also valid for the item numbers themselves, as that might also lead to incorrect results | [optional] 
**filler** | **string** | This string is used to fill (left-pad) item numbers. For example, if a tier has a length of &#39;4&#39; but the given item number is &#39;12&#39;, with a Filler of &#39;0&#39;, then the final item number will be represented as &#39;0&#39;. This must be a single character string, if a value is given where the Length property does not evaluate to &#39;1&#39;, the DEFAULT_FILLER &#39;0&#39; is used. A space is fine to use. You should ensure that you use a value different than Separator, as that might produce unexpected results. No attempt is done by the code to recover from such ambiguous configurations | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


