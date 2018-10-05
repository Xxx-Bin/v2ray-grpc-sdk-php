<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/http/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Headers\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.headers.http.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Settings for authenticating requests. If not set, client side will not send authenication header, and server side will bypass authentication.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.RequestConfig request = 1;</code>
     */
    private $request = null;
    /**
     * Settings for authenticating responses. If not set, client side will bypass authentication, and server side will not send authentication header.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.ResponseConfig response = 2;</code>
     */
    private $response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\RequestConfig $request
     *           Settings for authenticating requests. If not set, client side will not send authenication header, and server side will bypass authentication.
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\ResponseConfig $response
     *           Settings for authenticating responses. If not set, client side will bypass authentication, and server side will not send authentication header.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transport\Internet\Headers\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Settings for authenticating requests. If not set, client side will not send authenication header, and server side will bypass authentication.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.RequestConfig request = 1;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\RequestConfig
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Settings for authenticating requests. If not set, client side will not send authenication header, and server side will bypass authentication.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.RequestConfig request = 1;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\RequestConfig $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\RequestConfig::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Settings for authenticating responses. If not set, client side will bypass authentication, and server side will not send authentication header.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.ResponseConfig response = 2;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\ResponseConfig
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Settings for authenticating responses. If not set, client side will bypass authentication, and server side will not send authentication header.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.ResponseConfig response = 2;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\ResponseConfig $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\ResponseConfig::class);
        $this->response = $var;

        return $this;
    }

}

