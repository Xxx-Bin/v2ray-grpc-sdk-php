<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/stats/command/command.proto

namespace Bluehead\V2ray\Core\App\Stats\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.stats.command.QueryStatsResponse</code>
 */
class QueryStatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.stats.command.Stat stat = 1;</code>
     */
    private $stat;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\App\Stats\Command\Stat[]|\Google\Protobuf\Internal\RepeatedField $stat
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Stats\Command\Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.stats.command.Stat stat = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.stats.command.Stat stat = 1;</code>
     * @param \Bluehead\V2ray\Core\App\Stats\Command\Stat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStat($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\App\Stats\Command\Stat::class);
        $this->stat = $arr;

        return $this;
    }

}

