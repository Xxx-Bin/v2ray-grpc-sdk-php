<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/config.proto

namespace Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyRefresh</code>
 */
class AllocationStrategyRefresh extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 value = 1;</code>
     */
    private $value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Proxyman\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 value = 1;</code>
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>uint32 value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllocationStrategyRefresh::class, \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy_AllocationStrategyRefresh::class);

