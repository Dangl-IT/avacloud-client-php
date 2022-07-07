# ServiceSpecificationGroupDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_hourly_wage** | **float** | The hourly wage that is used within this ElementContainerBase. Will be propagated to child elements. | 
**project_tax_rate** | **float** | The tax rate that is used within this ElementContainerBase. Will be propagated to child elements. | 
**project_price_components** | **string[]** | The price components that are used within this project. They are ignored during Json deserialization because they will be set from the parent project. | [optional] 
**project_item_number_schema** | [**\Dangl\AVACloud\Model\ItemNumberSchemaDto**](ItemNumberSchemaDto.md) | The ItemNumberSchema that is used within this project. | [optional] 
**elements** | [**\Dangl\AVACloud\Model\IElementDto[]**](IElementDto.md) | The IElements within this ElementContainerBase. | [optional] 
**project_labour_time_label** | **string** | The label used in the parent Project to mark labour time, e.g. \&quot;Hours\&quot; or \&quot;Stunden\&quot;. | [optional] 
**contains_duplicate_item_numbers** | **bool** | Indicates if there are child IElements that have conflicting, duplicated ItemNumbers or if any child ElementContainerBase elements themselves contain duplicate ItemNumber s. Will always indicate false when told to ignore duplicate item numbers. | 
**contains_duplicate_element_ids** | **bool** | Indicates if there are child IElements that have conflicting, duplicated Ids or if any child ElementContainerBase elements themselves contain duplicate Id s. Will always indicate false when told to ignore duplicate item numbers. | 
**ignore_duplicate_item_numbers** | **bool** | Indicate if duplicated ItemNumbers within child elements are to be ignored. Will not perform checks for duplicates if yes. | 
**ignore_duplicate_element_ids** | **bool** | Indicate if duplicated Ids within child elements are to be ignored. Will not perform checks for duplicates if yes. | 
**total_price_gross_by_tax_rate** | [**\Dangl\AVACloud\Model\GrossPriceComponentDto[]**](GrossPriceComponentDto.md) | Price composition by tax rate. | [optional] 
**ignore_child_price_updates** | **bool** | Internally used to indicate that a propagation is currently done, this is done to not recalculate every single result from a lot of changes when it is sufficient to calculate the total price at once. | 
**deducted_price** | **float** | Net price after applied deductions. | 
**deduction_factor** | **float** | Factor of applied deductions to the total price. For example, \&quot;0.03\&quot; means that a 3% deduction is to be applied. | 
**absolute_deduction** | **float** | The exact amount of the discount as an absolute value. For backwards compatibility reasons, setting this value will also set a calculated value to DeductionFactor, which will also be updated in case the total price is changed to reflect a relative value of the absolute discount sum. | [optional] 
**total_price** | **float** | Will return this ElementContainerBase&#39;s total price. | 
**total_price_gross** | **float** | The total gross price for this ElementContainerBase including all child elements. | 
**total_price_gross_deducted** | **float** | Total gross price after applied deductions. | 
**price_type** | [**\Dangl\AVACloud\Model\PriceTypeDto**](PriceTypeDto.md) | Indicates the PriceType of this ElementContainerBase, whether it should factor into total costs or not. | 
**short_text** | **string** | Description for this ServiceSpecificationGroup. | [optional] 
**comission_status** | [**\Dangl\AVACloud\Model\ComissionStatusDto**](ComissionStatusDto.md) | Indicates if this service specification group is commissioned (and therefore should be executed), postponed for later or undefined. | 
**item_number** | [**\Dangl\AVACloud\Model\ItemNumberDto**](ItemNumberDto.md) | The ItemNumber for this INumberedElement interface. | [optional] 
**element_type** | **string** |  | [optional] 
**is_lot** | **bool** | This indicates if this group is the parent of a lot. See the documentation for more information about working with lots. | 
**alternative_to** | **string** | If this group is an alternative for a base group, then this property should point to the id of the group in this service specification that it can replace. If this is an alternative group to a base group, the PriceType should typically be set to \&quot;WithoutTotal\&quot; so this group does not factor into total costs. The PriceType is not changed when this property is set | [optional] 
**type** | **string** |  | [optional] 
**project_catalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogue that are used within this ElementContainerBase. Catalogue references are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. | [optional] 
**catalogue_references** | [**\Dangl\AVACloud\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) | Referenced catalogues for this ElementContainerBase. | [optional] 
**oenorm_properties** | [**\Dangl\AVACloud\Model\OenormPropertiesDto**](OenormPropertiesDto.md) | This class models special properties that only apply to some exchange scenarios where ÖNorm is used. | [optional] 
**hierarchy_level** | **int** | This is a zero based hierarchy level. It&#39;s set automatically when used in the context of a Project, and can be used to identify the hierarchy level of the current element. | 
**addendum_status** | [**\Dangl\AVACloud\Model\AddendumStatusDto**](AddendumStatusDto.md) | This indicates, if this element is part of an addendum an, if yes, with what status. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


