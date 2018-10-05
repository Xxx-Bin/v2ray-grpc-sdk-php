<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

namespace Bluehead\V2ray\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OutboundHandlerConfig is the configuration for outbound handler.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.OutboundHandlerConfig</code>
 */
class OutboundHandlerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Tag of this outbound handler.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    private $tag = '';
    /**
     * Settings for how to dial connection for this outbound handler.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage sender_settings = 2;</code>
     */
    private $sender_settings = null;
    /**
     * Settings for this outbound proxy. Must be one of the outbound proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage proxy_settings = 3;</code>
     */
    private $proxy_settings = null;
    /**
     * If not zero, this outbound will be expired in seconds. Not used for now.
     *
     * Generated from protobuf field <code>int64 expire = 4;</code>
     */
    private $expire = 0;
    /**
     * Comment of this outbound handler. Not used for now.
     *
     * Generated from protobuf field <code>string comment = 5;</code>
     */
    private $comment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag
     *           Tag of this outbound handler.
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage $sender_settings
     *           Settings for how to dial connection for this outbound handler.
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage $proxy_settings
     *           Settings for this outbound proxy. Must be one of the outbound proxies.
     *     @type int|string $expire
     *           If not zero, this outbound will be expired in seconds. Not used for now.
     *     @type string $comment
     *           Comment of this outbound handler. Not used for now.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\V2ray\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Tag of this outbound handler.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Tag of this outbound handler.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Settings for how to dial connection for this outbound handler.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage sender_settings = 2;</code>
     * @return \Bluehead\V2ray\Core\Common\Serial\TypedMessage
     */
    public function getSenderSettings()
    {
        return $this->sender_settings;
    }

    /**
     * Settings for how to dial connection for this outbound handler.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage sender_settings = 2;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setSenderSettings($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->sender_settings = $var;

        return $this;
    }

    /**
     * Settings for this outbound proxy. Must be one of the outbound proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage proxy_settings = 3;</code>
     * @return \Bluehead\V2ray\Core\Common\Serial\TypedMessage
     */
    public function getProxySettings()
    {
        return $this->proxy_settings;
    }

    /**
     * Settings for this outbound proxy. Must be one of the outbound proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage proxy_settings = 3;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setProxySettings($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->proxy_settings = $var;

        return $this;
    }

    /**
     * If not zero, this outbound will be expired in seconds. Not used for now.
     *
     * Generated from protobuf field <code>int64 expire = 4;</code>
     * @return int|string
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * If not zero, this outbound will be expired in seconds. Not used for now.
     *
     * Generated from protobuf field <code>int64 expire = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpire($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire = $var;

        return $this;
    }

    /**
     * Comment of this outbound handler. Not used for now.
     *
     * Generated from protobuf field <code>string comment = 5;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Comment of this outbound handler. Not used for now.
     *
     * Generated from protobuf field <code>string comment = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

}

