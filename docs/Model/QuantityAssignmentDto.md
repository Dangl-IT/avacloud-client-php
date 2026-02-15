# # QuantityAssignmentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**quantity** | **float** | The total quantity in this quantity assignment |
**projectCatalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogue that are used within this ServiceSpecification. Catalogue references are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. | [optional]
**catalogueReferences** | [**\Dangl\AVACloud\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) | Referenced catalogues for this QuantityAssignment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
