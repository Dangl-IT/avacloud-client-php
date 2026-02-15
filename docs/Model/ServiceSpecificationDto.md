# # ServiceSpecificationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
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
**bidder** | [**\Dangl\AVACloud\Model\PartyInformationDto**](PartyInformationDto.md) |  | [optional]
**bidderDiscriminator** | **string** | This discriminator is used to identify different bidders in a project. It is different from the Identifier property in the Bidder in that the BidderDiscriminator is intended to be a numerical identifier within a project, while the Identifier does uniquely identify a bidder in the system independent of a specific project. This property should map to \&quot;Bieternummer\&quot; or \&quot;BidderNo\&quot; in GAEB. | [optional]
**gaebXmlId** | **string** | This is used to store the GAEB XML Id within this ServiceSpecification. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization. | [optional]
**projectInformation** | [**\Dangl\AVACloud\Model\ProjectInformationDto**](ProjectInformationDto.md) |  | [optional]
**exchangePhase** | [**\Dangl\AVACloud\Model\ExchangePhaseDto**](ExchangePhaseDto.md) |  |
**origin** | [**\Dangl\AVACloud\Model\OriginDto**](OriginDto.md) |  |
**originDetail** | **string** | This property complements the Origin property. Some formats, e.g. GaebXml might have additional information attached, e.g. GAEB XML V3.2 oder GAEB XML V3.1. This string property is used to hold such data. The Dangl.AVA module does not have a list of possible values, since this is defined in the native format assemblies, e.g. Dangl.GAEB or Dangl.Oenorm. | [optional]
**creationDate** | **\DateTime** | Creation date of this ServiceSpecification. | [optional]
**offerByDate** | **\DateTime** | Date indicating until when an offer has to be submitted. In German, this is often called the \&quot;Eröffnungstermin\&quot; | [optional]
**decisionDate** | **\DateTime** | Date indicating by when the buyer will select a contractor. | [optional]
**bidDate** | **\DateTime** | Date of when the offer / bid was created | [optional]
**warrantyBondPercentage** | **float** | If a construction project requires a warranty bond, this property indicates the amount as a percentage, e.g. &#39;0.15m&#39; means 15% of the construction total amount as a warranty bond. |
**executionGuaranteePercentage** | **float** | If a construction project requires an execution guarantty, this property indicates the amount as a percentage, e.g. &#39;0.15m&#39; means 15% of the construction total amount as an execution guarantee. In practice, this percentage is usually deducted from intermediate invoices and only billed in the final invoice. |
**submissionLocation** | **string** | String indicating where the physical submission of the offer is taking place. | [optional]
**description** | **string** | Description of this ServiceSpecification. | [optional]
**name** | **string** | The name of this ServiceSpecification. | [optional]
**priceInformation** | [**\Dangl\AVACloud\Model\PriceInformationDto**](PriceInformationDto.md) |  | [optional]
**projectCatalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogue that are used within this ElementContainerBase. Catalogue references are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. | [optional]
**catalogueReferences** | [**\Dangl\AVACloud\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) | Referenced catalogues for this ElementContainerBase. | [optional]
**plannedExecutionStart** | **\DateTime** | The date when the execution of the services is scheduled to start | [optional]
**plannedExecutionEnd** | **\DateTime** | The date then the execution of the services is scheduled to be finished | [optional]
**contractDate** | **\DateTime** | The date on which the contract has been awarded. This matches \&quot;Auftragsdatum\&quot; in GAEB | [optional]
**contractIdentifier** | **string** | This value can be used to indicate the number or identifier of the contract. It matches \&quot;Auftragsnummer\&quot; in GAEB | [optional]
**warrantyDuration** | [**\Dangl\AVACloud\Model\WarrantyDurationDto**](WarrantyDurationDto.md) |  | [optional]
**warrantyEnd** | **\DateTime** | The date on which the warranty period ends | [optional]
**approvalDate** | **\DateTime** | The date on which the services rendered by the bidder are scheduled to be approved by the buyer | [optional]
**typeOfApproval** | **string** | This should specify how the approval is performed by the buyer. This matches \&quot;AcceptType\&quot; in GAEB | [optional]
**addendumNumber** | **string** | This optional string property is shared by all IElements, and indicates if the element is part of an addendum, a &#39;Nachtrag&#39; in German. | [optional]
**addendumStatus** | [**\Dangl\AVACloud\Model\AddendumStatusDto**](AddendumStatusDto.md) |  | [optional]
**commerceProperties** | [**\Dangl\AVACloud\Model\ServiceSpecificationCommercePropertiesDto**](ServiceSpecificationCommercePropertiesDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
