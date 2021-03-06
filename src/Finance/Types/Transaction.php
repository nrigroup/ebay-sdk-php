<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Finance\Types;

/**
 *
 * @property \DTS\eBaySDK\Finance\Types\Amount $amount
 * @property \DTS\eBaySDK\Finance\Enums\BookingEntryEnum $bookingEntry
 * @property \DTS\eBaySDK\Finance\Types\Buyer $buyer
 * @property string $orderId
 * @property \DTS\eBaySDK\Finance\Types\OrderLineItem $orderLineItems
 * @property string $paymentsEntity
 * @property string $payoutId
 * @property string $salesRecordReference
 * @property \DTS\eBaySDK\Finance\Types\Amount $totalFeeBasisAmount
 * @property \DTS\eBaySDK\Finance\Types\Amount $totalFeeAmount
 * @property string $transactionDate
 * @property string $transactionId
 * @property string $transactionMemo
 * @property \DTS\eBaySDK\Finance\Enums\TransactionStatusEnum $transactionStatus
 * @property \DTS\eBaySDK\Finance\Enums\TransactionTypeEnum $transactionType
 */
class Transaction extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'amount' => [
            'type' => 'DTS\eBaySDK\Finance\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ],
        'bookingEntry' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bookingEntry'
        ],
        'buyer' => [
            'type' => 'DTS\eBaySDK\Finance\Types\Buyer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyer'
        ],
        'orderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderId'
        ],
        'orderLineItems' => [
            'type' => 'DTS\eBaySDK\Finance\Types\OrderLineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'orderLineItems'
        ],
        'paymentsEntity' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentsEntity'
        ],
        'payoutId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'payoutId'
        ],
        'salesRecordReference' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'salesRecordReference'
        ],
        'totalFeeBasisAmount' => [
            'type' => 'DTS\eBaySDK\Finance\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalFeeBasisAmount'
        ],
        'totalFeeAmount' => [
            'type' => 'DTS\eBaySDK\Finance\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalFeeAmount'
        ],
        'transactionDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionDate'
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
        ],
        'transactionMemo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionMemo'
        ],
        'transactionStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionStatus'
        ],
        'transactionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionType'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
