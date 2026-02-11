# # NoteTextDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_opening_text** | **bool** | If this is set to true, this text is meant to not be seen as part of the regular elements hierarchy but as a special opening text at the beginning of the project. For example, in GAEB XML, this would map to the GAEB.Award.AddText. Typically, such texts describe project-wide contractual definitions. If this is set to true, this NoteText should be placed at the top of the elements hierarchy directly in the ServiceSpecification.Elements group, otherwise it will likely not be treated correctly when exporting to GAEB. You can only set IsOpeningText or IsClosingText to true. |
**is_closing_text** | **bool** | If this is set to true, this text is meant to not be seen as part of the regular elements hierarchy but as a special closing text at the end of the project. For Example, in GAEB XML, this would map to the GAEB.AddText. Typically, such texts are used to describe project wide finishing descriptions. If this is set to true, this NoteText should be placed at the top of the elements hierarchy directly in the ServiceSpecification.Elements group, otherwise it will likely not be treated correctly when exporting to GAEB. You can only set IsOpeningText or IsClosingText to true. |
**short_text** | **string** | Short description for this DescriptionBase element. Please note that by default, this property takes precedence over the &#x60;HtmlShortText&#x60; property. If you want to convert from DTO objects, and you want to work with the &#x60;HtmlShortText&#x60; property, you need to set this property to null. | [optional]
**html_short_text** | **string** | This contains the Html representation of the Shorttext. When the ShortText is set, this property will be set to contain the plain text representation of the Html text and vice versa. In practice, it&#39;s recommended to always use the plain text representations for short texts. This property is used to store the short text in HTML format. If you want to convert from DTO objects, and you want to use this property, then you need to ensure that &#x60;ShortText&#x60; is set to null, otherwise the plain text takes precedence over the HTML text. | [optional]
**addition_type** | [**\Dangl\AVACloud\Model\AdditionTypeDto**](AdditionTypeDto.md) |  |
**long_text** | **string** | Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText. | [optional]
**html_long_text** | **string** | This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out. | [optional]
**identifier** | **string** | This is an optional internal identifier that may be used to add additional information to this NoteText. It is not supported in GAEB import or export. | [optional]
**standardized_description** | [**\Dangl\AVACloud\Model\StandardizedDescriptionDto**](StandardizedDescriptionDto.md) |  | [optional]
**element_type** | **string** |  | [optional]
**description_id** | **string** | This is an identifier specific for this description. Some exchange formats, like GAEB XML, use it to identify descriptions. It&#39;s different to an elements identifier in that it should only apply to the description component, meaning the text itself. | [optional]
**oenorm_note_text_properties** | [**\Dangl\AVACloud\Model\OenormNoteTextPropertiesDto**](OenormNoteTextPropertiesDto.md) |  | [optional]
**has_bidder_comment_in_html_long_text** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
