# FacturXData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**routing_id** | **string** | Factur-X specific routing ID, \&quot;Leitweg-ID\&quot; in German. This is typically required in public administration invoicing in Germany. | [optional] 
**factur_x_payment_terms** | [**\Dangl\AVACloud\Model\FacturXPaymentTerm[]**](FacturXPaymentTerm.md) | The field BT-20 in XRechnung can only hold one payment term, but Factur-X / ZUGFeRD allows multiple payment terms. If the invoice was originally created in Factur-X / ZUGFeRD format, then this property holds all additional payment terms except the first one. Similar, on export, this property is used to export additional payment terms to Factur-X / ZUGFeRD. Factur-X / ZUGFeRD also allows a more detailled representation of payment terms, so they are given in a special object instead of just a string. If those are present, the regular PaymentTerms will be ignored on export to the CII / Factur-X format, as the information in this object is more detailled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


