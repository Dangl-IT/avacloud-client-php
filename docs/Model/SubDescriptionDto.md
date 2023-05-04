# SubDescriptionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**quantity** | **float** | Returns the total calculated sum of all quantity assignments. Will return the result rounded to three decimal places. | 
**quantity_override** | **float** | You can use this property to directly set the quantity for this sub description. This will override any given QuantityComponents | [optional] 
**quantity_components** | [**\Dangl\AVACloud\Model\CalculationDto[]**](CalculationDto.md) | Holds quantity information for this sub description. Quantity is listening to changes here and is reporting the total sum of all quantity components. | [optional] 
**amount_to_be_entered_by_bidder** | **bool** | Indicates if the bidder is asked to specify an amount. | 
**identifier** | **string** | Identifier for this SubDescription. | [optional] 
**short_text** | **string** | Short description for this DescriptionBase element. | [optional] 
**long_text** | **string** | Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional] 
**unit_tag** | **string** | If this is given, then the sub description has a different unit tag than the parent position. | [optional] 
**html_long_text** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional] 
**addition_type** | [**\Dangl\AVACloud\Model\AdditionTypeDto**](AdditionTypeDto.md) | Indicates if this DescriptionBase element contains Buyer or Bidder additions to the text. | 
**standardized_description** | [**\Dangl\AVACloud\Model\StandardizedDescriptionDto**](StandardizedDescriptionDto.md) | This represents a standardized description. This means that instead of solely relying on texts to describe a service, external standards and definitions are referenced for a common understanding. | [optional] 
**execution_description_reference** | **string** | This identifier can be used to point to the Id of an ExecutionDescription in the same ServiceSpecification. ExecutionDescriptions act as a way to centrally describe how positions (or sub descriptions) should be executed in practice. Often, the position (or sub description) itself still has text of its own to highlight deviations from that or add more details. When working with import and export features, this property is only supported in GAEB 90 data exchange. | [optional] 
**project_catalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogues that are used within this Calculation. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection. | [optional] 
**description_id** | **string** | This is an identifier specific for this description. Some exchange formats, like GAEB XML, use it to identify descriptions. It&#39;s different to an elements identifier in that it should only apply to the description component, meaning the text itself. | [optional] 
**has_bidder_comment_in_html_long_text** | **bool** |  | 
**element_type** | **string** |  | [optional] 
**element_type_discriminator** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


