# # LineItemInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | BT-153 A name for the line item | [optional]
**description** | **string** | BT-154 A description for the line item | [optional]
**seller_identifier** | **string** | BT-155 An identifier assigned by the seller, e.g. an internal article number | [optional]
**buyer_identifier** | **string** | BT-156 An identifier assigned by the buyer, e.g. an internal article number | [optional]
**standard_identifier** | **string** | BT-157 A standard identifier for the line item, e.g. an EAN or a GTIN | [optional]
**standard_scheme_id** | **string** | BT-157 If used together with StandardIdentifier, this is the scheme identifier for which standard is used. | [optional]
**classification_identifiers** | **string[]** | BT-158 A list of classification identifiers for the line item. You can further use ClassificationTypes to specify the scheme identifier for each classification identifier. | [optional]
**classification_types** | **string[]** | BT-158 This is used in connection with ClassificationIdentifiers. It is the scheme identifier for each identifier. If this list is used, it should have the same length as ClassificationIdentifiers, with null or empty values used for non-existing scheme identifiers. | [optional]
**country_of_origin** | **string** | BT-159 The origin country code according to ISO 3166-1 in 2 letter format | [optional]
**attributes** | [**\Dangl\AVACloud\Model\LineItemAttribute[]**](LineItemAttribute.md) | BG-32 Optional additional attributes for this line item | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
