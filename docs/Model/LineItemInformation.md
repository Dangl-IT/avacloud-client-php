# # LineItemInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | BT-153 A name for the line item | [optional]
**description** | **string** | BT-154 A description for the line item | [optional]
**sellerIdentifier** | **string** | BT-155 An identifier assigned by the seller, e.g. an internal article number | [optional]
**buyerIdentifier** | **string** | BT-156 An identifier assigned by the buyer, e.g. an internal article number | [optional]
**standardIdentifier** | **string** | BT-157 A standard identifier for the line item, e.g. an EAN or a GTIN | [optional]
**standardSchemeId** | **string** | BT-157 If used together with StandardIdentifier, this is the scheme identifier for which standard is used. | [optional]
**classificationIdentifiers** | **string[]** | BT-158 A list of classification identifiers for the line item. You can further use ClassificationTypes to specify the scheme identifier for each classification identifier. | [optional]
**classificationTypes** | **string[]** | BT-158 This is used in connection with ClassificationIdentifiers. It is the scheme identifier for each identifier. If this list is used, it should have the same length as ClassificationIdentifiers, with null or empty values used for non-existing scheme identifiers. | [optional]
**countryOfOrigin** | **string** | BT-159 The origin country code according to ISO 3166-1 in 2 letter format | [optional]
**attributes** | [**\Dangl\AVACloud\Model\LineItemAttribute[]**](LineItemAttribute.md) | BG-32 Optional additional attributes for this line item | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
