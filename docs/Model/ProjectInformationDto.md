# # ProjectInformationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer** | [**\Dangl\AVACloud\Model\PartyInformationDto**](PartyInformationDto.md) |  | [optional]
**description** | **string** | Description for the project. | [optional]
**descriptionShort** | **string** | Short description for the project. | [optional]
**name** | **string** | Name of the project. | [optional]
**site** | [**\Dangl\AVACloud\Model\PartyInformationDto**](PartyInformationDto.md) |  | [optional]
**itemNumberSchema** | [**\Dangl\AVACloud\Model\ItemNumberSchemaDto**](ItemNumberSchemaDto.md) |  | [optional]
**currencyShort** | **string** | Short label for the currency used. | [optional]
**currencyLong** | **string** | Full label of the currency used. | [optional]
**labourTimeLabel** | **string** | Label for the labour time part of prices used in the project. | [optional]
**priceComponents** | **string[]** | Labels for the price components used in the project. Caution: Removal of a price component will trigger to have dependent price informations be deleted in IElements that use this property. If this property is changed or altered after the project has already been used, it is strongly advised to do operations step by step, e.g. if renaming and reordering multiple price components, this should be done one by one. Otherwise, a combination of rename and reordering will not be correctly propagated downwards to child objects in this Project. | [optional]
**priceComponentTypes** | [**array<string,\Dangl\AVACloud\Model\PriceComponentTypeDto>**](PriceComponentTypeDto.md) | This dictionary specifies actual types used for the PriceComponents. For example, a single price component might have the name &#39;Material&#39; as a string, ans this dictionary would then have a key &#39;Material&#39; and a value of Materials. You can not add keys here that are not also present in the PriceComponents property, and removing price components will also remove them from this dictionary here. | [optional] [readonly]
**bidderCommentAllowed** | **bool** | This bool indicates if this project allows the bidder to add bidder comments. Bidder comments are a way to attach clarifying information when submitting an offer. |
**sideOffersAllowed** | **bool** | This property indicates if the project should allow side offers from contractors. In GAEB, a side offer would typically be in exchange phase 85. |
**awardType** | [**\Dangl\AVACloud\Model\AwardTypeDto**](AwardTypeDto.md) |  |
**specialAwardKind** | [**\Dangl\AVACloud\Model\SpecialAwardKindDto**](SpecialAwardKindDto.md) |  |
**requesters** | [**\Dangl\AVACloud\Model\PartyInformationDto[]**](PartyInformationDto.md) | Requesters in a construction project, in German also called &#39;Bedarfsträger&#39;, are parties connected to the building process, e.g. architects or planners. | [optional]
**notificationSites** | [**\Dangl\AVACloud\Model\PartyInformationDto[]**](PartyInformationDto.md) | Notification sites are addresses that are used for delivering messages in the context of construction projects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
