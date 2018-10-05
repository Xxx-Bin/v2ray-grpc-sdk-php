<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/stats/command/command.proto

namespace Bluehead\V2ray\Core\App\Stats\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.stats.command.GetStatsResponse</code>
 */
class GetStatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.stats.command.Stat stat = 1;</code>
     */
    private $stat = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\App\Stats\Command\Stat $stat
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Stats\Command\Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.stats.command.Stat stat = 1;</code>
     * @return \Bluehead\V2ray\Core\App\Stats\Command\Stat
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.stats.command.Stat stat = 1;</code>
     * @param \Bluehead\V2ray\Core\App\Stats\Command\Stat $var
     * @return $this
     */
    public function setStat($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\App\Stats\Command\Stat::class);
        $this->stat = $var;

        return $this;
    }

}

