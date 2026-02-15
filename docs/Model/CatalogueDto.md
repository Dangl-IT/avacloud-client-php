# # CatalogueDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**gaebXmlId** | **string** | This is used to store the GAEB XML Id within this Catalogue. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization. | [optional]
**name** | **string** | The name that is given for this catalogue. | [optional]
**description** | **string** | Additional information about this catalogue. | [optional]
**catalogueType** | [**\Dangl\AVACloud\Model\CatalogueTypeDto**](CatalogueTypeDto.md) |  |
**catalogueTypeDetail** | **string** | This property may hold additional information about the catalogue type. It is currently only used in GAEB XML exchange to carry detailed information about a catalogue type, but it&#39;s otherwise just a free text field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
