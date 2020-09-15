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
 * @property string $href
 * @property integer $limit
 * @property string $next
 * @property integer $offset
 * @property \DTS\eBaySDK\Finance\Types\PayoutArrayType $payouts
 * @property string $prev
 * @property integer $total
 */
class PayoutsRestResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'href' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'href'
        ],
        'limit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'next' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'next'
        ],
        'offset' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'payouts' => [
            'type' => 'DTS\eBaySDK\Finance\Types\Payout'
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'payouts'
        ],
        'prev' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'prev'
        ],
        'total' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     * @param int $statusCode Status code
     * @param array $headers HTTP Response headers.
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
