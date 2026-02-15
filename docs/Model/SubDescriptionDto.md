# # SubDescriptionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**quantity** | **float** | Returns the total calculated sum of all quantity assignments. Will return the result rounded to three decimal places. | [readonly]
**quantityOverride** | **float** | You can use this property to directly set the quantity for this sub description. This will override any given QuantityComponents | [optional]
**quantityComponents** | [**\Dangl\AVACloud\Model\CalculationDto[]**](CalculationDto.md) | Holds quantity information for this sub description. Quantity is listening to changes here and is reporting the total sum of all quantity components. | [optional]
**amountToBeEnteredByBidder** | **bool** | Indicates if the bidder is asked to specify an amount. |
**identifier** | **string** | Identifier for this SubDescription. | [optional]
**shortText** | **string** | Short description for this DescriptionBase element. Please note that by default, this property takes precedence over the &#x60;HtmlShortText&#x60; property. If you want to convert from DTO objects, and you want to work with the &#x60;HtmlShortText&#x60; property, you need to set this property to null. | [optional]
**htmlShortText** | **string** | This contains the Html representation of the Shorttext. When the ShortText is set, this property will be set to contain the plain text representation of the Html text and vice versa. In practice, it&#39;s recommended to always use the plain text representations for short texts. This property is used to store the short text in HTML format. If you want to convert from DTO objects, and you want to use this property, then you need to ensure that &#x60;ShortText&#x60; is set to null, otherwise the plain text takes precedence over the HTML text. | [optional]
**longText** | **string** | Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional]
**unitTag** | **string** | If this is given, then the sub description has a different unit tag than the parent position. | [optional]
**htmlLongText** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional]
**additionType** | [**\Dangl\AVACloud\Model\AdditionTypeDto**](AdditionTypeDto.md) |  |
**standardizedDescription** | [**\Dangl\AVACloud\Model\StandardizedDescriptionDto**](StandardizedDescriptionDto.md) |  | [optional]
**executionDescriptionReference** | **string** | This identifier can be used to point to the Id of an ExecutionDescription in the same ServiceSpecification. ExecutionDescriptions act as a way to centrally describe how positions (or sub descriptions) should be executed in practice. Often, the position (or sub description) itself still has text of its own to highlight deviations from that or add more details. When working with import and export features, this property is only supported in GAEB 90 data exchange. | [optional]
**projectCatalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogues that are used within this Calculation. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection. | [optional]
**descriptionId** | **string** | This is an identifier specific for this description. Some exchange formats, like GAEB XML, use it to identify descriptions. It&#39;s different to an elements identifier in that it should only apply to the description component, meaning the text itself. | [optional]
**hasBidderCommentInHtmlLongText** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
