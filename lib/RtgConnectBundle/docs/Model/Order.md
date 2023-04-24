# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**customersCustomerId** | **int** |  | [optional]
**carrierId** | **int** |  | [optional]
**orderNo** | **string** |  | [optional]
**currentStatusId** | **int** |  | [optional]
**isPDFDelivered** | **bool** |  | [optional]
**paymentMethod** | **string** |  | [optional]
**totalShippingCosts** | **float** |  | [optional]
**totalPaid** | **float** |  | [optional]
**comment** | **string** |  | [optional]
**deliveryNote** | **string** |  | [optional]
**reference** | **string** |  | [optional]
**discountName** | **string** |  | [optional]
**discountCode** | **string** |  | [optional]
**discountValue** | **float** |  | [optional]
**sentToDatahub** | **\DateTime** |  | [optional]
**positions** | [**\RtgConnector\RtgConnectBundle\Model\OrderDetailPosition[]**](OrderDetailPosition.md) |  | [optional]
**invoice** | [**\RtgConnector\RtgConnectBundle\Model\OrderDetailInvoice**](OrderDetailInvoice.md) |  | [optional]
**invoiceAddress** | [**\RtgConnector\RtgConnectBundle\Model\OrderDetailInvoiceAddress**](OrderDetailInvoiceAddress.md) |  | [optional]
**deliveryAddress** | [**\RtgConnector\RtgConnectBundle\Model\OrderDetailDeliveryAddress**](OrderDetailDeliveryAddress.md) |  | [optional]
**statusHistories** | [**\RtgConnector\RtgConnectBundle\Model\OrderDetailStatusHistoryEntry[]**](OrderDetailStatusHistoryEntry.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]
**deletedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
