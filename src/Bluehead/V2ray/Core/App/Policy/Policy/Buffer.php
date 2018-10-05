<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/policy/config.proto

namespace Bluehead\V2ray\Core\App\Policy\Policy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.policy.Policy.Buffer</code>
 */
class Buffer extends \Google\Protobuf\Internal\Message
{
    /**
     * Buffer size per connection, in bytes. -1 for unlimited buffer.
     *
     * Generated from protobuf field <code>int32 connection = 1;</code>
     */
    private $connection = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $connection
     *           Buffer size per connection, in bytes. -1 for unlimited buffer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\V2ray\App\Policy\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Buffer size per connection, in bytes. -1 for unlimited buffer.
     *
     * Generated from protobuf field <code>int32 connection = 1;</code>
     * @return int
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Buffer size per connection, in bytes. -1 for unlimited buffer.
     *
     * Generated from protobuf field <code>int32 connection = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkInt32($var);
        $this->connection = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Buffer::class, \Bluehead\V2ray\Core\App\Policy\Policy_Buffer::class);

