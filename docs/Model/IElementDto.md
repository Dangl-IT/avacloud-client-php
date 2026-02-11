# # IElementDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**gaeb_xml_id** | **string** | This is used to store the GAEB XML Id within this IElement. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization. | [optional]
**addendum_number** | **string** | This optional string property is shared by all IElements, and indicates if the element is part of an addendum, a &#39;Nachtrag&#39; in German. | [optional]
**project_catalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) |  | [optional]
**catalogue_references** | [**\Dangl\AVACloud\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) |  | [optional]
**element_type_discriminator** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
