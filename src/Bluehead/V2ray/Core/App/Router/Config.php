<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/config.proto

namespace Bluehead\V2ray\Core\App\Router;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.router.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.router.Config.DomainStrategy domain_strategy = 1;</code>
     */
    private $domain_strategy = 0;
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.router.RoutingRule rule = 2;</code>
     */
    private $rule;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $domain_strategy
     *     @type \Bluehead\V2ray\Core\App\Router\RoutingRule[]|\Google\Protobuf\Internal\RepeatedField $rule
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\App\Router\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.router.Config.DomainStrategy domain_strategy = 1;</code>
     * @return int
     */
    public function getDomainStrategy()
    {
        return $this->domain_strategy;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.router.Config.DomainStrategy domain_strategy = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDomainStrategy($var)
    {
        GPBUtil::checkEnum($var, \Bluehead\V2ray\Core\App\Router\Config_DomainStrategy::class);
        $this->domain_strategy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.router.RoutingRule rule = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.router.RoutingRule rule = 2;</code>
     * @param \Bluehead\V2ray\Core\App\Router\RoutingRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRule($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\App\Router\RoutingRule::class);
        $this->rule = $arr;

        return $this;
    }

}

