<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/protocol/user.proto

namespace Bluehead\V2ray\GPBMetadata\Common\Protocol;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Bluehead\V2ray\GPBMetadata\Common\Serial\TypedMessage::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afc010a1a636f6d6d6f6e2f70726f746f636f6c2f757365722e70726f74" .
            "6f1223626c7565686561642e76327261792e636f72652e636f6d6d6f6e2e" .
            "70726f746f636f6c22660a0455736572120d0a056c6576656c1801200128" .
            "0d120d0a05656d61696c18022001280912400a076163636f756e74180320" .
            "01280b322f2e626c7565686561642e76327261792e636f72652e636f6d6d" .
            "6f6e2e73657269616c2e54797065644d65737361676542490a1e636f6d2e" .
            "76327261792e636f72652e636f6d6d6f6e2e70726f746f636f6c50015a08" .
            "70726f746f636f6caa021a56325261792e436f72652e436f6d6d6f6e2e50" .
            "726f746f636f6c620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

