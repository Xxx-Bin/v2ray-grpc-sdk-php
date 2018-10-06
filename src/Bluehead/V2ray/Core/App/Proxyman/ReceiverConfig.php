<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/config.proto

namespace Bluehead\V2ray\Core\App\Proxyman;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.proxyman.ReceiverConfig</code>
 */
class ReceiverConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * PortRange specifies the ports which the Receiver should listen on.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.net.PortRange port_range = 1;</code>
     */
    private $port_range = null;
    /**
     * Listen specifies the IP address that the Receiver should listen on.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.net.IPOrDomain listen = 2;</code>
     */
    private $listen = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy allocation_strategy = 3;</code>
     */
    private $allocation_strategy = null;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.StreamConfig stream_settings = 4;</code>
     */
    private $stream_settings = null;
    /**
     * Generated from protobuf field <code>bool receive_original_destination = 5;</code>
     */
    private $receive_original_destination = false;
    /**
     * Override domains for the given protocol.
     * Deprecated. Use sniffing_settings.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.proxyman.KnownProtocols domain_override = 7 [deprecated = true];</code>
     */
    private $domain_override;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.SniffingConfig sniffing_settings = 8;</code>
     */
    private $sniffing_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Common\Net\PortRange $port_range
     *           PortRange specifies the ports which the Receiver should listen on.
     *     @type \Bluehead\V2ray\Core\Common\Net\IPOrDomain $listen
     *           Listen specifies the IP address that the Receiver should listen on.
     *     @type \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy $allocation_strategy
     *     @type \Bluehead\V2ray\Core\Transport\Internet\StreamConfig $stream_settings
     *     @type bool $receive_original_destination
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $domain_override
     *           Override domains for the given protocol.
     *           Deprecated. Use sniffing_settings.
     *     @type \Bluehead\V2ray\Core\App\Proxyman\SniffingConfig $sniffing_settings
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\App\Proxyman\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * PortRange specifies the ports which the Receiver should listen on.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.net.PortRange port_range = 1;</code>
     * @return \Bluehead\V2ray\Core\Common\Net\PortRange
     */
    public function getPortRange()
    {
        return $this->port_range;
    }

    /**
     * PortRange specifies the ports which the Receiver should listen on.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.net.PortRange port_range = 1;</code>
     * @param \Bluehead\V2ray\Core\Common\Net\PortRange $var
     * @return $this
     */
    public function setPortRange($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Net\PortRange::class);
        $this->port_range = $var;

        return $this;
    }

    /**
     * Listen specifies the IP address that the Receiver should listen on.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.net.IPOrDomain listen = 2;</code>
     * @return \Bluehead\V2ray\Core\Common\Net\IPOrDomain
     */
    public function getListen()
    {
        return $this->listen;
    }

    /**
     * Listen specifies the IP address that the Receiver should listen on.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.net.IPOrDomain listen = 2;</code>
     * @param \Bluehead\V2ray\Core\Common\Net\IPOrDomain $var
     * @return $this
     */
    public function setListen($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Net\IPOrDomain::class);
        $this->listen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy allocation_strategy = 3;</code>
     * @return \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy
     */
    public function getAllocationStrategy()
    {
        return $this->allocation_strategy;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.AllocationStrategy allocation_strategy = 3;</code>
     * @param \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy $var
     * @return $this
     */
    public function setAllocationStrategy($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy::class);
        $this->allocation_strategy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.StreamConfig stream_settings = 4;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\StreamConfig
     */
    public function getStreamSettings()
    {
        return $this->stream_settings;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.StreamConfig stream_settings = 4;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\StreamConfig $var
     * @return $this
     */
    public function setStreamSettings($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\StreamConfig::class);
        $this->stream_settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool receive_original_destination = 5;</code>
     * @return bool
     */
    public function getReceiveOriginalDestination()
    {
        return $this->receive_original_destination;
    }

    /**
     * Generated from protobuf field <code>bool receive_original_destination = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setReceiveOriginalDestination($var)
    {
        GPBUtil::checkBool($var);
        $this->receive_original_destination = $var;

        return $this;
    }

    /**
     * Override domains for the given protocol.
     * Deprecated. Use sniffing_settings.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.proxyman.KnownProtocols domain_override = 7 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainOverride()
    {
        return $this->domain_override;
    }

    /**
     * Override domains for the given protocol.
     * Deprecated. Use sniffing_settings.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.proxyman.KnownProtocols domain_override = 7 [deprecated = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainOverride($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Bluehead\V2ray\Core\App\Proxyman\KnownProtocols::class);
        $this->domain_override = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.SniffingConfig sniffing_settings = 8;</code>
     * @return \Bluehead\V2ray\Core\App\Proxyman\SniffingConfig
     */
    public function getSniffingSettings()
    {
        return $this->sniffing_settings;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.proxyman.SniffingConfig sniffing_settings = 8;</code>
     * @param \Bluehead\V2ray\Core\App\Proxyman\SniffingConfig $var
     * @return $this
     */
    public function setSniffingSettings($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\App\Proxyman\SniffingConfig::class);
        $this->sniffing_settings = $var;

        return $this;
    }

}

