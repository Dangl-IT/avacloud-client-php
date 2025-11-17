# CommercePropertiesDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**article_number** | **string** | This maps to ArtNo in GAEB XML and represents an article number given by the supplier. | [optional] 
**ean_gtin_article_number** | **string** | This maps to EAN in GAEB XML and represents an GTIN (formerly EAN) article number. | [optional] 
**iln_article_number** | **string** | This maps to ArtNoID in GAEB XML and represents an ILN article number. | [optional] 
**catalogue_number** | **string** | This maps to CatalogNo in GAEB XML and represents an identifier of a specific catalogue. The referenced catalogue is usually a customer specific one, not related to CatalogueReferences. | [optional] 
**catalogue_article_number** | **string** | This maps to CatalogArtNo in GAEB XML and represents a key that maps to an entry in a specific catalogue. The referenced catalogue is usually a customer specific one, not related to CatalogueReferences. | [optional] 
**price_basis** | **float** | This optional property can be used to indicate the basis for prices for a single position. Price basis means that the price is given per unit of the basis, e.g. per a pack of five when this property is set to &#39;5&#39;. | [optional] 
**sub_position_identifier** | **string** | This optional property can be used to indicate a sub position identifier specific for the commerce exchange | [optional] 
**customer_base_item_number** | **string** | In a commerce exchange, this property is usually used to reference the base item number of an underlying phase 83 exchange file | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


