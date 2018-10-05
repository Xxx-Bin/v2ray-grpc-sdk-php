<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/http/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Headers\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.headers.http.RequestConfig</code>
 */
class RequestConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Full HTTP version like "1.1".
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.Version version = 1;</code>
     */
    private $version = null;
    /**
     * GET, POST, CONNECT etc
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.Method method = 2;</code>
     */
    private $method = null;
    /**
     * URI like "/login.php"
     *
     * Generated from protobuf field <code>repeated string uri = 3;</code>
     */
    private $uri;
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.headers.http.Header header = 4;</code>
     */
    private $header;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Version $version
     *           Full HTTP version like "1.1".
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Method $method
     *           GET, POST, CONNECT etc
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $uri
     *           URI like "/login.php"
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Header[]|\Google\Protobuf\Internal\RepeatedField $header
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\V2ray\Transport\Internet\Headers\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Full HTTP version like "1.1".
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.Version version = 1;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Full HTTP version like "1.1".
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.Version version = 1;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * GET, POST, CONNECT etc
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.Method method = 2;</code>
     * @return \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * GET, POST, CONNECT etc
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.internet.headers.http.Method method = 2;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Method $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Method::class);
        $this->method = $var;

        return $this;
    }

    /**
     * URI like "/login.php"
     *
     * Generated from protobuf field <code>repeated string uri = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI like "/login.php"
     *
     * Generated from protobuf field <code>repeated string uri = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUri($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uri = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.headers.http.Header header = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.headers.http.Header header = 4;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Header[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Transport\Internet\Headers\Http\Header::class);
        $this->header = $arr;

        return $this;
    }

}

