# ItemNumberDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**string_representation** | **string** | Will return this ItemNumber as point delimited string. Will not distinguish between upper- and lowercase and return an all-lowercase representation. Will consider first numbers, then characters, e.g. 1a is considered preceding aa. Transformation to all lowercase can be configured in the ItemNumberSchema property. | [optional] 
**is_schema_compliant** | **bool** | Indicates if the characters and the length of the Identifiers match the current ItemNumberSchema. | 
**item_number_schema** | [**\Dangl\AVACloud\Model\ItemNumberSchemaDto**](ItemNumberSchemaDto.md) | Used for representing and validating this ItemNumber. | [optional] 
**identifiers** | **string[]** | Collection of the single identifiers in this ItemNumber. P.e., \&quot;02.03.004\&quot; will have three elements \&quot;02\&quot;, \&quot;03\&quot;, and \&quot;004\&quot;. Since ReadOnlyObservableCollection&#x60;1 does have the event set to protected, it can be accessed like this: (itemNumber.Identifiers as INotifyCollectionChanged).CollectionChanged | [optional] 
**is_lot** | **bool** | This indicates if this item number is at the lot level. Find out more about lots in the documentation. | 
**hierarchy_level** | **int** | This is a zero based hierarchy level. It&#39;s set automatically when used in the context of a Project, and can be used to identify the hierarchy level of the current element. | 
**is_attached_to_position** | **bool** | This property indicates if this ItemNumber is attached to an object of the Position type. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


