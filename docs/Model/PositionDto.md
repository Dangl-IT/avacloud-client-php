# PositionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_price** | **float** | Will return the price per unit, rounded according to the project settings or the default value of three decimal places | 
**unit_price_override** | **float** | You can use this property to directly set the unit price for this position. This will override any given PriceComponents | [optional] 
**quantity** | **float** | Will return this Position&#39;s total quantity, rounded to three decimal places. | 
**quantity_override** | **float** | You can use this property to directly set the quantity for this position. This will override any given QuantityComponents | [optional] 
**unit_tag** | **string** | The tag of the unit used for this positions quantity. | [optional] 
**labour_components** | [**\Dangl\AVACloud\Model\LabourPriceComponentDto**](LabourPriceComponentDto.md) | The components for labour time in this Position. | [optional] 
**price_components** | [**\Dangl\AVACloud\Model\PriceComponentDto[]**](PriceComponentDto.md) | The single price components in this Position. Price components should not be handled directly on a per-position basis but set globally in the parent Projects ProjectInformation. | [optional] 
**quantity_components** | [**\Dangl\AVACloud\Model\CalculationDto[]**](CalculationDto.md) | The quantity components of this Position. | [optional] 
**sub_descriptions** | [**\Dangl\AVACloud\Model\SubDescriptionDto[]**](SubDescriptionDto.md) | Further structuring of this Position. | [optional] 
**comission_status** | [**\Dangl\AVACloud\Model\ComissionStatusDto**](ComissionStatusDto.md) | Indicates the status of this Position&#39;s comission. | 
**complemented_by** | **string[]** | A list of positions that complement this Position. The positions are referenced by their GUIDs. It might be used together with ComplementedByQuantities in case that only a given quantity is complemented by positions. | [optional] 
**complemented** | **bool** | Will indicate if this Position is complemented in this ServiceSpecification by other Positions. It can not be set to false when there are entries in the ComplementedBy property. | 
**amount_to_be_entered_by_bidder** | **bool** | Indicates that the amount for this Position is to be set by the bidder. | 
**price_composition_required** | **bool** | Indicates if the bidder demands for prices to be broken up into their price components. | 
**use_different_tax_rate** | **bool** | Indicates if this Position should use a different TaxRate than what is the default for the Project. | 
**tax_rate** | **float** | Will return either the parent ServiceSpecification&#39;s TaxRate or it&#39;s own if it has a different value. (For example, in Germany Water has a different TaxRate than regular Positions) | 
**item_number** | [**\Dangl\AVACloud\Model\ItemNumberDto**](ItemNumberDto.md) | The ItemNumber for this Position. | [optional] 
**deduction_factor** | **float** | The rate of deductions, i.e. 0.12m means 12% price deduction. | 
**total_price** | **float** | Returns the product of UnitPrice times Quantity. | 
**total_price_gross** | **float** | The total gross price for this Position. | 
**total_price_gross_deducted** | **float** | Total gross price after applied deductions. | 
**deducted_price** | **float** | Net price after applied deductions. | 
**position_type** | [**\Dangl\AVACloud\Model\PositionTypeDto**](PositionTypeDto.md) | This indicates the type of a position. If this is an alternative position, its AlternativeTo property should be set to the id of the position it can replace. | 
**price_type** | [**\Dangl\AVACloud\Model\PriceTypeDto**](PriceTypeDto.md) | Indicates the PriceType of this Position. | 
**service_type** | [**\Dangl\AVACloud\Model\ServiceTypeDto**](ServiceTypeDto.md) | This indicates if this position is regular or describing a labour / hourly paid work service | 
**product_data** | [**\Dangl\AVACloud\Model\ProductDataDto**](ProductDataDto.md) | This property describes additional information about a product being used within this Position. For example, a pipe position, per length unit, could be composed of different pipe segments, fitting and other accessory articles. | [optional] 
**short_text** | **string** | Short description for this DescriptionBase element. | [optional] 
**long_text** | **string** | Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional] 
**html_long_text** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional] 
**addition_type** | [**\Dangl\AVACloud\Model\AdditionTypeDto**](AdditionTypeDto.md) | Indicates if this DescriptionBase element contains Buyer or Bidder additions to the text. | 
**element_type** | **string** |  | [optional] 
**quantity_assignments** | [**\Dangl\AVACloud\Model\QuantityAssignmentDto[]**](QuantityAssignmentDto.md) | Quantity assignments are, in contrast to SubDescriptions, used to categorize parts of this Position. For example, it could be categorized by cost group - e.g. a Position describing concrete walls could follow the German DIN 276 Cost Groups Standard and specify that of the total 1.000m² wall, 500m² are classified as exterior walls and 500m² are classified as interior walls. They would then have different cost groups associated, e.g. for accounting purposes. | [optional] 
**commerce_properties** | [**\Dangl\AVACloud\Model\CommercePropertiesDto**](CommercePropertiesDto.md) | The CommerceProperties support specialized information that is only useful in GAEB XML 9x data exchange phases. It is intended to provide article information. | [optional] 
**alternative_to** | **string** | If this position is an Alternative, then this property should point to the id of the position in this service specification that it can replace. | [optional] 
**is_lump_sum** | **bool** | If this is true, it indicates that the position is intended to be a lump sum, \&quot;Pauschal\&quot; in German. This means the position total price that is being invoiced should not depend on the actual quantity. In practice, partial invoices are still often used for partial services rendered. This property does not affect the price calculation for this position. Typically, the Quantity should be set to 1.0 when this flag is used. | 
**repetition_to** | **string** | This identifier can be used to point to the Id of a position in the same ServiceSpecification that acts as a base position. It matches \&quot;Bezugsposition\&quot; in GAEB. This can be used for positions that repeat partially or are linked together | [optional] 
**project_catalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogues that are used within this Position. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection. | [optional] 
**catalogue_references** | [**\Dangl\AVACloud\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) | Referenced catalogues for this Position. | [optional] 
**type** | **string** |  | [optional] 
**standardized_description** | [**\Dangl\AVACloud\Model\StandardizedDescriptionDto**](StandardizedDescriptionDto.md) | This represents a standardized description. This means that instead of solely relying on texts to describe a service, external standards and definitions are referenced for a common understanding. | [optional] 
**complemented_by_quantities** | [**\Dangl\AVACloud\Model\ComplementedByQuantityDto[]**](ComplementedByQuantityDto.md) | This list contains references to positions that complement this one, additionally also specifying a quantity for which the addition is intended. This does not replace the ComplementedBy property and there are no automatic checks being done between these two properties, so it&#39;s up to the user code to ensure deletions (and additions, if desired) are performed for both properties. When copying withing keeping Ids, this list will not be part of the copy process, since it would only contain quantities without actual position references. Containers, however, will rebuild the list with updated position references when copying positions that contain entries here. | [optional] 
**execution_description_reference** | **string** | This identifier can be used to point to the Id of an ExecutionDescription in the same ServiceSpecification. ExecutionDescriptions act as a way to centrally describe how positions should be executed in practice. Often, the position itself still has text of its own to highlight deviations from that or add more details. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


