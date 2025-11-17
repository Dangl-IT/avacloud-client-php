# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** | BT-1 The number of the invoice | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) | BT-2 The date of the invoice | [optional] 
**invoice_type** | [**\Dangl\AVACloud\Model\InvoiceType**](InvoiceType.md) | BT-3 The type of the invoice | [optional] 
**currency_code** | **string** | BT-5 The three letter ISO currency code | [optional] 
**payment_due_date** | [**\DateTime**](\DateTime.md) | BT-9 Until when the payment is due | [optional] 
**references** | [**\Dangl\AVACloud\Model\References**](References.md) | An object holding reference used in this invoice | [optional] 
**payment_terms** | **string** | BT-20 A text description of payment terms, e.g. cash discounts or payment conditions | [optional] 
**parsed_payment_terms** | [**\Dangl\AVACloud\Model\PaymentTerm[]**](PaymentTerm.md) | If the PaymentTerms are present and in a correct format, this read-only property can be used to get the actual parsed payment terms in a deserialized and structured format. This will be null if PaymentTerms are not present or not in the correct format | [optional] 
**previous_invoices** | [**\Dangl\AVACloud\Model\PreviousInvoice[]**](PreviousInvoice.md) | BG-3 In case of partial or final invoices, it&#39;s possible to reference the previous invoice numbers | [optional] 
**buyer** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) | BG-7 Information about the buyer | [optional] 
**seller** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) | BG-4 Information about the seller | [optional] 
**seller_tax_representative** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) | BG-11 Information about the sellers tax representative | [optional] 
**payee** | [**\Dangl\AVACloud\Model\Payee**](Payee.md) | BG-10 A payee is someone who receives the payment that is different from the seller | [optional] 
**invoice_notes** | [**\Dangl\AVACloud\Model\InvoiceNote[]**](InvoiceNote.md) | BG-1 If present, this is an unstructured text that can be used to give additional information about the invoice. Field BG-1 | [optional] 
**invoice_period** | [**\Dangl\AVACloud\Model\InvoicePeriod**](InvoicePeriod.md) | BG-14 The period during which the services or goods were delivered | [optional] 
**delivery_information** | [**\Dangl\AVACloud\Model\DeliveryInformation**](DeliveryInformation.md) | BG-13 Information about the delivery BG-13 in XRechnung | [optional] 
**totals** | [**\Dangl\AVACloud\Model\InvoiceTotals**](InvoiceTotals.md) | BG-22 Totals for the invoice | [optional] 
**payment_instructions** | [**\Dangl\AVACloud\Model\PaymentInstructions**](PaymentInstructions.md) | Instructions how to perform the payment | [optional] 
**documents** | [**\Dangl\AVACloud\Model\SupportingDocument[]**](SupportingDocument.md) | BG-24 Attached documents to the invoice | [optional] 
**vat_breakdown** | [**\Dangl\AVACloud\Model\VatBreakdown[]**](VatBreakdown.md) | BG-23 This is used to list VAT by category, e.g. for invoices where parts are in different VAT categories | [optional] 
**allowances** | [**\Dangl\AVACloud\Model\InvoiceAllowance[]**](InvoiceAllowance.md) | BG-20 Allowances / deductions on the invoice | [optional] 
**charges** | [**\Dangl\AVACloud\Model\InvoiceCharge[]**](InvoiceCharge.md) | BG-21 Charges / additional costs on the invoice | [optional] 
**line_items** | [**\Dangl\AVACloud\Model\InvoiceLineItem[]**](InvoiceLineItem.md) | BG-25 Single line items in the invoice | [optional] 
**source_type** | [**\Dangl\AVACloud\Model\SourceType**](SourceType.md) | The source type from which the invoice was created | 
**factur_x_data** | [**\Dangl\AVACloud\Model\FacturXData**](FacturXData.md) | In case the original invoice document was in Factur-X / ZUGFeRD format, this property can hold additional Factur-X specific data that is not part of the XRechnung specification | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


