# # SupportingDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentReference** | **string** | BT-122 This is typically an id or a name | [optional]
**description** | **string** | BT-123 A description of the document | [optional]
**externalDocumentUrl** | **string** | BT-124 A link to the document in case this is an external reference | [optional]
**documentBase64** | **string** | BT-125 The document in base64 encoded form as binary data. This is ignored if you set PlaceholderId. | [optional]
**fileName** | **string** | BT-125 This should be present if DocumentBase64 is set. | [optional]
**documentMimeType** | [**\Dangl\AVACloud\Model\AttachmentMimeType**](AttachmentMimeType.md) |  |
**placeholderId** | **string** | This is placeholder id to use instead of DocumentBase64 property for lazy-loading of documents. The use case of this is to avoid having the documents be processed in memory when they might be handled by the calling code. For example, in the AVACloud webservice, this placeholder can be used to avoid having to send the Base64 encoded document to the server and then downloading it again in the result. If this is given, the generated XML file will not be valid, since it will include the literal Guid value as a placeholder. You can use the &#39;xmlExportCallback&#39; parameter in the XRechnungWriter to replace the placeholder with the actual Base64 contents of the file in this library, or just use a string replace method if you&#39;re working with the XML in a different context. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
