<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/dns/config.proto

namespace Bluehead\V2ray\Core\App\Dns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.dns.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Nameservers used by this DNS. Only traditional UDP servers are support at the moment.
     * A special value 'localhost' as a domain address can be set to use DNS on local system.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.net.Endpoint NameServers = 1 [deprecated = true];</code>
     */
    private $NameServers;
    /**
     * NameServer list used by this DNS client.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.dns.NameServer name_server = 5;</code>
     */
    private $name_server;
    /**
     * Static hosts. Domain to IP.
     * Deprecated. Use static_hosts.
     *
     * Generated from protobuf field <code>map<string, .bluehead.v2ray.core.common.net.IPOrDomain> Hosts = 2 [deprecated = true];</code>
     */
    private $Hosts;
    /**
     * Client IP for EDNS client subnet. Must be 4 bytes (IPv4) or 16 bytes (IPv6). 
     *
     * Generated from protobuf field <code>bytes client_ip = 3;</code>
     */
    private $client_ip = '';
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.dns.Config.HostMapping static_hosts = 4;</code>
     */
    private $static_hosts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Common\Net\Endpoint[]|\Google\Protobuf\Internal\RepeatedField $NameServers
     *           Nameservers used by this DNS. Only traditional UDP servers are support at the moment.
     *           A special value 'localhost' as a domain address can be set to use DNS on local system.
     *     @type \Bluehead\V2ray\Core\App\Dns\NameServer[]|\Google\Protobuf\Internal\RepeatedField $name_server
     *           NameServer list used by this DNS client.
     *     @type array|\Google\Protobuf\Internal\MapField $Hosts
     *           Static hosts. Domain to IP.
     *           Deprecated. Use static_hosts.
     *     @type string $client_ip
     *           Client IP for EDNS client subnet. Must be 4 bytes (IPv4) or 16 bytes (IPv6). 
     *     @type \Bluehead\V2ray\Core\App\Dns\Config\HostMapping[]|\Google\Protobuf\Internal\RepeatedField $static_hosts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\V2ray\App\Dns\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Nameservers used by this DNS. Only traditional UDP servers are support at the moment.
     * A special value 'localhost' as a domain address can be set to use DNS on local system.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.net.Endpoint NameServers = 1 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNameServers()
    {
        return $this->NameServers;
    }

    /**
     * Nameservers used by this DNS. Only traditional UDP servers are support at the moment.
     * A special value 'localhost' as a domain address can be set to use DNS on local system.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.net.Endpoint NameServers = 1 [deprecated = true];</code>
     * @param \Bluehead\V2ray\Core\Common\Net\Endpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNameServers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Common\Net\Endpoint::class);
        $this->NameServers = $arr;

        return $this;
    }

    /**
     * NameServer list used by this DNS client.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.dns.NameServer name_server = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNameServer()
    {
        return $this->name_server;
    }

    /**
     * NameServer list used by this DNS client.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.dns.NameServer name_server = 5;</code>
     * @param \Bluehead\V2ray\Core\App\Dns\NameServer[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNameServer($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\App\Dns\NameServer::class);
        $this->name_server = $arr;

        return $this;
    }

    /**
     * Static hosts. Domain to IP.
     * Deprecated. Use static_hosts.
     *
     * Generated from protobuf field <code>map<string, .bluehead.v2ray.core.common.net.IPOrDomain> Hosts = 2 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHosts()
    {
        return $this->Hosts;
    }

    /**
     * Static hosts. Domain to IP.
     * Deprecated. Use static_hosts.
     *
     * Generated from protobuf field <code>map<string, .bluehead.v2ray.core.common.net.IPOrDomain> Hosts = 2 [deprecated = true];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHosts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Common\Net\IPOrDomain::class);
        $this->Hosts = $arr;

        return $this;
    }

    /**
     * Client IP for EDNS client subnet. Must be 4 bytes (IPv4) or 16 bytes (IPv6). 
     *
     * Generated from protobuf field <code>bytes client_ip = 3;</code>
     * @return string
     */
    public function getClientIp()
    {
        return $this->client_ip;
    }

    /**
     * Client IP for EDNS client subnet. Must be 4 bytes (IPv4) or 16 bytes (IPv6). 
     *
     * Generated from protobuf field <code>bytes client_ip = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClientIp($var)
    {
        GPBUtil::checkString($var, False);
        $this->client_ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.dns.Config.HostMapping static_hosts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStaticHosts()
    {
        return $this->static_hosts;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.app.dns.Config.HostMapping static_hosts = 4;</code>
     * @param \Bluehead\V2ray\Core\App\Dns\Config\HostMapping[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStaticHosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\App\Dns\Config\HostMapping::class);
        $this->static_hosts = $arr;

        return $this;
    }

}

