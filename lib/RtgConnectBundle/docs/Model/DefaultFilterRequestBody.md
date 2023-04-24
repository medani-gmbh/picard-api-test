# # DefaultFilterRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **int** | Limit responsedataamount | [optional] [default to 100]
**offset** | **int** | Responsedata offset | [optional] [default to 0]
**requestId** | **int** | request_id to identify report request status | [optional]
**forceFullData** | **string** | Force full dataset, otherwise increment | [optional] [default to 'false']
**dateLimitValue** | **\DateTime** | Datefilter value - &#x60;default &#x3D; null &#x3D; timestamp of last successfull import&#x60; | [optional]
**dateLimitOperator** | **string** | Set AND or OR operator for datefilters | [optional] [default to 'AND']
**dateLimitUpdated** | **string** | Filter updated_at date | [optional] [default to 'true']
**dateLimitCreated** | **string** | Filter created_at date | [optional] [default to 'true']
**dateLimitDeleted** | **string** | Filter deleted_at date | [optional] [default to 'false']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
