# # ServiceSpecificationGroupDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**projectHourlyWage** | **float** | The hourly wage that is used within this ElementContainerBase. Will be propagated to child elements. | [readonly]
**projectTaxRate** | **float** | The tax rate that is used within this ElementContainerBase. Will be propagated to child elements. |
**projectPriceComponents** | **string[]** | The price components that are used within this project. They are ignored during Json deserialization because they will be set from the parent project. | [optional]
**projectItemNumberSchema** | [**\Dangl\AVACloud\Model\ItemNumberSchemaDto**](ItemNumberSchemaDto.md) |  | [optional]
**elements** | [**\Dangl\AVACloud\Model\IElementDto[]**](IElementDto.md) | The IElements within this ElementContainerBase. | [optional]
**projectLabourTimeLabel** | **string** | The label used in the parent Project to mark labour time, e.g. \&quot;Hours\&quot; or \&quot;Stunden\&quot;. | [optional] [readonly]
**containsDuplicateItemNumbers** | **bool** | Indicates if there are child IElements that have conflicting, duplicated ItemNumbers or if any child ElementContainerBase elements themselves contain duplicate ItemNumber s. Will always indicate false when told to ignore duplicate item numbers. | [readonly]
**containsDuplicateElementIds** | **bool** | Indicates if there are child IElements that have conflicting, duplicated Ids or if any child ElementContainerBase elements themselves contain duplicate Id s. Will always indicate false when told to ignore duplicate item numbers. | [readonly]
**ignoreDuplicateItemNumbers** | **bool** | Indicate if duplicated ItemNumbers within child elements are to be ignored. Will not perform checks for duplicates if yes. |
**ignoreProjectCataloguePropagation** | **bool** | If this is set to true, the ProjectCatalogues property will not be propagated to child elements. This is useful in mapping scenarios, where you want to disable propagation for multiple changes, and only enable it once you have mapped all properties |
**ignoreDuplicateElementIds** | **bool** | Indicate if duplicated Ids within child elements are to be ignored. Will not perform checks for duplicates if yes. |
**totalPriceGrossByTaxRate** | [**\Dangl\AVACloud\Model\GrossPriceComponentDto[]**](GrossPriceComponentDto.md) | Price composition by tax rate. | [optional]
**ignoreChildPriceUpdates** | **bool** | Internally used to indicate that a propagation is currently done, this is done to not recalculate every single result from a lot of changes when it is sufficient to calculate the total price at once. |
**deductedPrice** | **float** | Net price after applied deductions. | [readonly]
**deductionFactor** | **float** | Factor of applied deductions to the total price. For example, \&quot;0.03\&quot; means that a 3% deduction is to be applied. |
**absoluteDeduction** | **float** | The exact amount of the discount as an absolute value. For backwards compatibility reasons, setting this value will also set a calculated value to DeductionFactor, which will also be updated in case the total price is changed to reflect a relative value of the absolute discount sum. | [optional]
**totalPrice** | **float** | Will return this ElementContainerBase&#39;s total price. | [readonly]
**totalPriceGross** | **float** | The total gross price for this ElementContainerBase including all child elements. | [readonly]
**totalPriceGrossDeducted** | **float** | Total gross price after applied deductions. | [readonly]
**priceType** | [**\Dangl\AVACloud\Model\PriceTypeDto**](PriceTypeDto.md) |  |
**shortText** | **string** | Description for this ServiceSpecificationGroup. | [optional]
**comissionStatus** | [**\Dangl\AVACloud\Model\ComissionStatusDto**](ComissionStatusDto.md) |  |
**itemNumber** | [**\Dangl\AVACloud\Model\ItemNumberDto**](ItemNumberDto.md) |  | [optional]
**elementType** | **string** |  | [optional]
**isLot** | **bool** | This indicates if this group is the parent of a lot. See the documentation for more information about working with lots. | [readonly]
**alternativeTo** | **string** | If this group is an alternative for a base group, then this property should point to the id of the group in this service specification that it can replace. If this is an alternative group to a base group, the PriceType should typically be set to \&quot;WithoutTotal\&quot; so this group does not factor into total costs. The PriceType is not changed when this property is set | [optional]
**oenormProperties** | [**\Dangl\AVACloud\Model\OenormPropertiesDto**](OenormPropertiesDto.md) |  | [optional]
**hierarchyLevel** | **int** | This is a zero based hierarchy level. It&#39;s set automatically when used in the context of a Project, and can be used to identify the hierarchy level of the current element. |
**addendumStatus** | [**\Dangl\AVACloud\Model\AddendumStatusDto**](AddendumStatusDto.md) |  | [optional]
**alternativeIdentifier** | **int** | This is an optional property that can be used together with AlternativeTo. If this is set, you can indicate which alternative group a specific group is assigned to. That way, if you specifiy multiple alternative ServiceSpecificationGroups with the same AlternativeIdentifier, you can indicate that to replace a single base ServiceSpecificationGroup, multiple alternative ServiceSpecificationGroups should be used. This property is not checked or managed automatically, so it is possible for this property to become invalid, by for example setting this property but not setting a base group via AlternativeTo. | [optional]
**alternativeGroupIdentifier** | **int** | This is an optional property that can be used together with AlternativeTo and AlternativeGroupIdentifier. If this is set, you can indicate which alternative group a specific group is assigned to. That way, you can specify the id (in integer format) for the alternative group this group belongs to. It&#39;s different to AlternativeIdentifier in that the other property describes the id of the group, while this property here describes the group itself. If a group only has set AlternativeGroupIdentifier but not AlternativeIdentifier, then it likely is a base group for a specific group. This property is not checked or managed automatically, so it is possible for this property to become invalid, by for example setting this property but not setting a base group via AlternativeTo. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
