<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SocketConfig is options to be applied on network sockets.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.SocketConfig</code>
 */
class SocketConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Mark of the connection. If non-zero, the value will be set to SO_MARK.
     *
     * Generated from protobuf field <code>int32 mark = 1;</code>
     */
    private $mark = 0;
    /**
     * TFO is the state of TFO settings.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.SocketConfig.TCPFastOpenState tfo = 2;</code>
     */
    private $tfo = 0;
    /**
     * TProxy is for enabling TProxy socket option.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.SocketConfig.TProxyMode tproxy = 3;</code>
     */
    private $tproxy = 0;
    /**
     * ReceiveOriginalDestAddress is for enabling IP_RECVORIGDSTADDR socket option.
     * This option is for UDP only.
     *
     * Generated from protobuf field <code>bool receive_original_dest_address = 4;</code>
     */
    private $receive_original_dest_address = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mark
     *           Mark of the connection. If non-zero, the value will be set to SO_MARK.
     *     @type int $tfo
     *           TFO is the state of TFO settings.
     *     @type int $tproxy
     *           TProxy is for enabling TProxy socket option.
     *     @type bool $receive_original_dest_address
     *           ReceiveOriginalDestAddress is for enabling IP_RECVORIGDSTADDR socket option.
     *           This option is for UDP only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transport\Internet\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Mark of the connection. If non-zero, the value will be set to SO_MARK.
     *
     * Generated from protobuf field <code>int32 mark = 1;</code>
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Mark of the connection. If non-zero, the value will be set to SO_MARK.
     *
     * Generated from protobuf field <code>int32 mark = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMark($var)
    {
        GPBUtil::checkInt32($var);
        $this->mark = $var;

        return $this;
    }

    /**
     * TFO is the state of TFO settings.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.SocketConfig.TCPFastOpenState tfo = 2;</code>
     * @return int
     */
    public function getTfo()
    {
        return $this->tfo;
    }

    /**
     * TFO is the state of TFO settings.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.SocketConfig.TCPFastOpenState tfo = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTfo($var)
    {
        GPBUtil::checkEnum($var, \Bluehead\V2ray\Core\Transport\Internet\SocketConfig_TCPFastOpenState::class);
        $this->tfo = $var;

        return $this;
    }

    /**
     * TProxy is for enabling TProxy socket option.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.SocketConfig.TProxyMode tproxy = 3;</code>
     * @return int
     */
    public function getTproxy()
    {
        return $this->tproxy;
    }

    /**
     * TProxy is for enabling TProxy socket option.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.SocketConfig.TProxyMode tproxy = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTproxy($var)
    {
        GPBUtil::checkEnum($var, \Bluehead\V2ray\Core\Transport\Internet\SocketConfig_TProxyMode::class);
        $this->tproxy = $var;

        return $this;
    }

    /**
     * ReceiveOriginalDestAddress is for enabling IP_RECVORIGDSTADDR socket option.
     * This option is for UDP only.
     *
     * Generated from protobuf field <code>bool receive_original_dest_address = 4;</code>
     * @return bool
     */
    public function getReceiveOriginalDestAddress()
    {
        return $this->receive_original_dest_address;
    }

    /**
     * ReceiveOriginalDestAddress is for enabling IP_RECVORIGDSTADDR socket option.
     * This option is for UDP only.
     *
     * Generated from protobuf field <code>bool receive_original_dest_address = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setReceiveOriginalDestAddress($var)
    {
        GPBUtil::checkBool($var);
        $this->receive_original_dest_address = $var;

        return $this;
    }

}

