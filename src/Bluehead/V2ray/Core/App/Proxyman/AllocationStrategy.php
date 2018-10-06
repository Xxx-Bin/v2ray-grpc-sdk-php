<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/config.proto

namespace Bluehead\V2ray\Core\App\Proxyman;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.proxyman.AllocationStrategy</code>
 */
class AllocationStrategy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Number of handlers (ports) running in parallel.
     * Default value is 3 if unset.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyConcurrency concurrency = 2;</code>
     */
    private $concurrency = null;
    /**
     * Number of minutes before a handler is regenerated.
     * Default value is 5 if unset.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyRefresh refresh = 3;</code>
     */
    private $refresh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy\AllocationStrategyConcurrency $concurrency
     *           Number of handlers (ports) running in parallel.
     *           Default value is 3 if unset.
     *     @type \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy\AllocationStrategyRefresh $refresh
     *           Number of minutes before a handler is regenerated.
     *           Default value is 5 if unset.
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\App\Proxyman\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Number of handlers (ports) running in parallel.
     * Default value is 3 if unset.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyConcurrency concurrency = 2;</code>
     * @return \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy\AllocationStrategyConcurrency
     */
    public function getConcurrency()
    {
        return $this->concurrency;
    }

    /**
     * Number of handlers (ports) running in parallel.
     * Default value is 3 if unset.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyConcurrency concurrency = 2;</code>
     * @param \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy\AllocationStrategyConcurrency $var
     * @return $this
     */
    public function setConcurrency($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy_AllocationStrategyConcurrency::class);
        $this->concurrency = $var;

        return $this;
    }

    /**
     * Number of minutes before a handler is regenerated.
     * Default value is 5 if unset.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyRefresh refresh = 3;</code>
     * @return \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy\AllocationStrategyRefresh
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * Number of minutes before a handler is regenerated.
     * Default value is 5 if unset.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy.AllocationStrategyRefresh refresh = 3;</code>
     * @param \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy\AllocationStrategyRefresh $var
     * @return $this
     */
    public function setRefresh($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy_AllocationStrategyRefresh::class);
        $this->refresh = $var;

        return $this;
    }

}

