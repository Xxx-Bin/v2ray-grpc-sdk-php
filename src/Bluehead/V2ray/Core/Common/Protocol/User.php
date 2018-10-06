<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/protocol/user.proto

namespace Bluehead\V2ray\Core\Common\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User is a generic user for all procotols.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.common.protocol.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     */
    private $level = 0;
    /**
     * Generated from protobuf field <code>string email = 2;</code>
     */
    private $email = '';
    /**
     * Protocol specific account information. Must be the account proto in one of the proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage account = 3;</code>
     */
    private $account = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type string $email
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage $account
     *           Protocol specific account information. Must be the account proto in one of the proxies.
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Common\Protocol\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Protocol specific account information. Must be the account proto in one of the proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage account = 3;</code>
     * @return \Bluehead\V2ray\Core\Common\Serial\TypedMessage
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Protocol specific account information. Must be the account proto in one of the proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage account = 3;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->account = $var;

        return $this;
    }

}

