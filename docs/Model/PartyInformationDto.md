# PartyInformationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. | 
**name** | **string** | This party&#39;s name. | [optional] 
**street** | **string** | This party&#39;s street. | [optional] 
**zip_code** | **string** | This party&#39;s ZipCode. | [optional] 
**city** | **string** | This party&#39;s City. | [optional] 
**country** | **string** | This party&#39;s Country. | [optional] 
**identifier** | **string** | This party&#39;s Identifier. | [optional] 
**remarks** | **string** | Remarks for this party. | [optional] 
**email** | **string** | An email address for this party. | [optional] 
**phone** | **string** | A phone number for this party. | [optional] 
**contact_person_name** | **string** | The name of a contact person. | [optional] 
**award_identifier** | **string** | This is an identifier related to this PartyInformation and their internal reference of the tender (or award). This might be used to assign an identifier (German \&quot;Vergabenummer\&quot;) for the current project. This is typically only used in Buyer and Bidder representations and should map to the concept of \&quot;Vergabenummer\&quot; or \&quot;AwardNo\&quot; in GAEB. | [optional] 
**is_in_european_economic_area** | **bool** | This property indicates if the party is registered within the European Economic Area. | 
**vat_id** | **string** | If this is within the European Economic Area (see IsInEuropeanEconomicArea, then as a business entity it likely has an EU VAT Id. | [optional] 
**fax** | **string** | The fax number for this party. | [optional] 
**country_code** | **string** | The two letter ISO country code, e.g. DE for Germany. | [optional] 
**creditor_or_debtor_identifier** | **string** | Depending on which party this class represents, it might have either a &#39;creditor&#39; or &#39;debtor&#39; number. This is often used in internal accounting systems. | [optional] 
**global_location_number** | **string** | The Global Location Number (GLN) is issued by GS1 and is intended to be a unique identifier for the physical address of a party, e.g. a business office. | [optional] 
**banking_information** | [**\Dangl\AVACloud\Model\BankingInformationDto[]**](BankingInformationDto.md) | This list contains information about bank accounts associated with this PartyInformation. It&#39;s typically used for buyers and bidders. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


