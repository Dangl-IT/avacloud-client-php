# # ItemNumberDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**stringRepresentation** | **string** | Will return this ItemNumber as point delimited string. Will not distinguish between upper- and lowercase and return an all-lowercase representation. Will consider first numbers, then characters, e.g. 1a is considered preceding aa. Transformation to all lowercase can be configured in the ItemNumberSchema property. | [optional]
**isSchemaCompliant** | **bool** | Indicates if the characters and the length of the Identifiers match the current ItemNumberSchema. | [readonly]
**itemNumberSchema** | [**\Dangl\AVACloud\Model\ItemNumberSchemaDto**](ItemNumberSchemaDto.md) |  | [optional]
**identifiers** | **string[]** | Collection of the single identifiers in this ItemNumber. P.e., \&quot;02.03.004\&quot; will have three elements \&quot;02\&quot;, \&quot;03\&quot;, and \&quot;004\&quot;. Since ReadOnlyObservableCollection&#x60;1 does have the event set to protected, it can be accessed like this: (itemNumber.Identifiers as INotifyCollectionChanged).CollectionChanged | [optional]
**isLot** | **bool** | This indicates if this item number is at the lot level. Find out more about lots in the documentation. | [readonly]
**hierarchyLevel** | **int** | This is a zero based hierarchy level. It&#39;s set automatically when used in the context of a Project, and can be used to identify the hierarchy level of the current element. |
**isAttachedToPosition** | **bool** | This property indicates if this ItemNumber is attached to an object of the Position type. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
