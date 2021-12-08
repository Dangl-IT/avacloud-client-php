# ItemNumberSchemaTierDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**length** | **int** | The (maximum) length for this tier. Will not accept a length less than 1. Defaults to 1 if length less than one is specified. | 
**type** | [**\Dangl\AVACloud\Model\ItemNumberTypeDto**](ItemNumberTypeDto.md) | This ItemNumberSchemaTier&#39;s type. | 
**tier_type** | [**\Dangl\AVACloud\Model\ItemNumberSchemaTierTypeDto**](ItemNumberSchemaTierTypeDto.md) | This specifies which ItemNumberSchemaTierType this tier represents. This can be, for example, a group tier / level, a position level or a lot level. | 
**is_lot** | **bool** | Indicates if this tier represents a lot. See the documentation for more information about lots. | 
**increment** | **int** | This value is the increment, or step size, that should be used for new item numbers. It defaults to DEFAULT_INCREMENT, but can be changed to any other positive number greater than zero. Invalid values make this be set to one &#39;1&#39; | 
**tier_name** | **string** | This is an optional name for the given tier | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


