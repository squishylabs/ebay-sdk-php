<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Negotiation\Types;

/**
 *
 * @property boolean $allowCounterOffer
 * @property BuyerType[] $buyer
 * @property string $offerId
 * @property string $message
 * @property string $offerType
 * @property string $offerStatus
 * @property string $initiatedBy
 * @property string $creationDate
 * @property string $lastModifiedDate
 * @property string $revision
 * @property TimeDurationType $offerDuration
 * @property OfferedItemType[] $offeredItems
 *
 */
class OffersType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'offers' => [
            'type' => 'DTS\eBaySDK\Negotiation\Types\OfferType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'offers'
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