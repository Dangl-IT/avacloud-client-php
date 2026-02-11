# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** | BT-1 The number of the invoice | [optional]
**invoice_date** | **\DateTime** | BT-2 The date of the invoice | [optional]
**invoice_type** | [**\Dangl\AVACloud\Model\InvoiceType**](InvoiceType.md) |  | [optional]
**currency_code** | **string** | BT-5 The three letter ISO currency code | [optional]
**payment_due_date** | **\DateTime** | BT-9 Until when the payment is due | [optional]
**references** | [**\Dangl\AVACloud\Model\References**](References.md) |  | [optional]
**payment_terms** | **string** | BT-20 A text description of payment terms, e.g. cash discounts or payment conditions | [optional]
**parsed_payment_terms** | [**\Dangl\AVACloud\Model\PaymentTerm[]**](PaymentTerm.md) | If the PaymentTerms are present and in a correct format, this read-only property can be used to get the actual parsed payment terms in a deserialized and structured format. This will be null if PaymentTerms are not present or not in the correct format | [optional]
**previous_invoices** | [**\Dangl\AVACloud\Model\PreviousInvoice[]**](PreviousInvoice.md) | BG-3 In case of partial or final invoices, it&#39;s possible to reference the previous invoice numbers | [optional]
**buyer** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) |  | [optional]
**seller** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) |  | [optional]
**seller_tax_representative** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) |  | [optional]
**payee** | [**\Dangl\AVACloud\Model\Payee**](Payee.md) |  | [optional]
**invoice_notes** | [**\Dangl\AVACloud\Model\InvoiceNote[]**](InvoiceNote.md) | BG-1 If present, this is an unstructured text that can be used to give additional information about the invoice. Field BG-1 | [optional]
**invoice_period** | [**\Dangl\AVACloud\Model\InvoicePeriod**](InvoicePeriod.md) |  | [optional]
**delivery_information** | [**\Dangl\AVACloud\Model\DeliveryInformation**](DeliveryInformation.md) |  | [optional]
**totals** | [**\Dangl\AVACloud\Model\InvoiceTotals**](InvoiceTotals.md) |  | [optional]
**payment_instructions** | [**\Dangl\AVACloud\Model\PaymentInstructions**](PaymentInstructions.md) |  | [optional]
**documents** | [**\Dangl\AVACloud\Model\SupportingDocument[]**](SupportingDocument.md) | BG-24 Attached documents to the invoice | [optional]
**vat_breakdown** | [**\Dangl\AVACloud\Model\VatBreakdown[]**](VatBreakdown.md) | BG-23 This is used to list VAT by category, e.g. for invoices where parts are in different VAT categories | [optional]
**allowances** | [**\Dangl\AVACloud\Model\InvoiceAllowance[]**](InvoiceAllowance.md) | BG-20 Allowances / deductions on the invoice | [optional]
**charges** | [**\Dangl\AVACloud\Model\InvoiceCharge[]**](InvoiceCharge.md) | BG-21 Charges / additional costs on the invoice | [optional]
**line_items** | [**\Dangl\AVACloud\Model\InvoiceLineItem[]**](InvoiceLineItem.md) | BG-25 Single line items in the invoice | [optional]
**source_type** | [**\Dangl\AVACloud\Model\SourceType**](SourceType.md) |  |
**factur_x_data** | [**\Dangl\AVACloud\Model\FacturXData**](FacturXData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
