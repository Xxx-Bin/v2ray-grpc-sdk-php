<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/kcp/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Kcp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.kcp.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.MTU mtu = 1;</code>
     */
    private $mtu = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.TTI tti = 2;</code>
     */
    private $tti = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.UplinkCapacity uplink_capacity = 3;</code>
     */
    private $uplink_capacity = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.DownlinkCapacity downlink_capacity = 4;</code>
     */
    private $downlink_capacity = null;
    /**
     * Generated from protobuf field <code>bool congestion = 5;</code>
     */
    private $congestion = false;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.WriteBuffer write_buffer = 6;</code>
     */
    private $write_buffer = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.ReadBuffer read_buffer = 7;</code>
     */
    private $read_buffer = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage header_config = 8;</code>
     */
    private $header_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Kcp\MTU $mtu
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Kcp\TTI $tti
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Kcp\UplinkCapacity $uplink_capacity
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Kcp\DownlinkCapacity $downlink_capacity
     *     @type bool $congestion
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Kcp\WriteBuffer $write_buffer
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Kcp\ReadBuffer $read_buffer
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage $header_config
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Transport\Internet\Kcp\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.MTU mtu = 1;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Kcp\MTU
     */
    public function getMtu()
    {
        return $this->mtu;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.MTU mtu = 1;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Kcp\MTU $var
     * @return $this
     */
    public function setMtu($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Kcp\MTU::class);
        $this->mtu = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.TTI tti = 2;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Kcp\TTI
     */
    public function getTti()
    {
        return $this->tti;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.TTI tti = 2;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Kcp\TTI $var
     * @return $this
     */
    public function setTti($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Kcp\TTI::class);
        $this->tti = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.UplinkCapacity uplink_capacity = 3;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Kcp\UplinkCapacity
     */
    public function getUplinkCapacity()
    {
        return $this->uplink_capacity;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.UplinkCapacity uplink_capacity = 3;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Kcp\UplinkCapacity $var
     * @return $this
     */
    public function setUplinkCapacity($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Kcp\UplinkCapacity::class);
        $this->uplink_capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.DownlinkCapacity downlink_capacity = 4;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Kcp\DownlinkCapacity
     */
    public function getDownlinkCapacity()
    {
        return $this->downlink_capacity;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.DownlinkCapacity downlink_capacity = 4;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Kcp\DownlinkCapacity $var
     * @return $this
     */
    public function setDownlinkCapacity($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Kcp\DownlinkCapacity::class);
        $this->downlink_capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool congestion = 5;</code>
     * @return bool
     */
    public function getCongestion()
    {
        return $this->congestion;
    }

    /**
     * Generated from protobuf field <code>bool congestion = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCongestion($var)
    {
        GPBUtil::checkBool($var);
        $this->congestion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.WriteBuffer write_buffer = 6;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Kcp\WriteBuffer
     */
    public function getWriteBuffer()
    {
        return $this->write_buffer;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.WriteBuffer write_buffer = 6;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Kcp\WriteBuffer $var
     * @return $this
     */
    public function setWriteBuffer($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Kcp\WriteBuffer::class);
        $this->write_buffer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.ReadBuffer read_buffer = 7;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Kcp\ReadBuffer
     */
    public function getReadBuffer()
    {
        return $this->read_buffer;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.kcp.ReadBuffer read_buffer = 7;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Kcp\ReadBuffer $var
     * @return $this
     */
    public function setReadBuffer($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Kcp\ReadBuffer::class);
        $this->read_buffer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage header_config = 8;</code>
     * @return \Bluehead\V2ray\Core\Common\Serial\TypedMessage
     */
    public function getHeaderConfig()
    {
        return $this->header_config;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage header_config = 8;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setHeaderConfig($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->header_config = $var;

        return $this;
    }

}

