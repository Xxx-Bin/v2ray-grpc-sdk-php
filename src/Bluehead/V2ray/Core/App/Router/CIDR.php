<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/config.proto

namespace Bluehead\V2ray\Core\App\Router;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IP for routing decision, in CIDR form.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.app.router.CIDR</code>
 */
class CIDR extends \Google\Protobuf\Internal\Message
{
    /**
     * IP address, should be either 4 or 16 bytes.
     *
     * Generated from protobuf field <code>bytes ip = 1;</code>
     */
    private $ip = '';
    /**
     * Number of leading ones in the network mask.
     *
     * Generated from protobuf field <code>uint32 prefix = 2;</code>
     */
    private $prefix = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip
     *           IP address, should be either 4 or 16 bytes.
     *     @type int $prefix
     *           Number of leading ones in the network mask.
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\App\Router\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * IP address, should be either 4 or 16 bytes.
     *
     * Generated from protobuf field <code>bytes ip = 1;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * IP address, should be either 4 or 16 bytes.
     *
     * Generated from protobuf field <code>bytes ip = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, False);
        $this->ip = $var;

        return $this;
    }

    /**
     * Number of leading ones in the network mask.
     *
     * Generated from protobuf field <code>uint32 prefix = 2;</code>
     * @return int
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Number of leading ones in the network mask.
     *
     * Generated from protobuf field <code>uint32 prefix = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPrefix($var)
    {
        GPBUtil::checkUint32($var);
        $this->prefix = $var;

        return $this;
    }

}

