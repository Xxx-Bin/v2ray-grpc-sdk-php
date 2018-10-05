<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/command/command.proto

namespace Bluehead\V2ray\Core\App\Proxyman\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.proxyman.command.AddUserOperation</code>
 */
class AddUserOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.User user = 1;</code>
     */
    private $user = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Common\Protocol\User $user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Proxyman\Command\Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.User user = 1;</code>
     * @return \Bluehead\V2ray\Core\Common\Protocol\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.User user = 1;</code>
     * @param \Bluehead\V2ray\Core\Common\Protocol\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Protocol\User::class);
        $this->user = $var;

        return $this;
    }

}

