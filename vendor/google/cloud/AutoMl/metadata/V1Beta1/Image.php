<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/image.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Image
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationSpec::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abc080a27676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f696d6167652e70726f746f121b676f6f676c652e636c6f75642e6175746f6d6c2e763162657461311a31676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f616e6e6f746174696f6e5f737065632e70726f746f1a30676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f636c617373696669636174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22720a22496d616765436c617373696669636174696f6e446174617365744d65746164617461124c0a13636c617373696669636174696f6e5f7479706518012001280e322f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436c617373696669636174696f6e5479706522250a23496d6167654f626a656374446574656374696f6e446174617365744d6574616461746122b2010a20496d616765436c617373696669636174696f6e4d6f64656c4d6574616461746112150a0d626173655f6d6f64656c5f696418012001280912140a0c747261696e5f62756467657418022001280312120a0a747261696e5f636f737418032001280312130a0b73746f705f726561736f6e18052001280912120a0a6d6f64656c5f7479706518072001280912100a086e6f64655f717073180d2001280112120a0a6e6f64655f636f756e74180e2001280322be010a21496d6167654f626a656374446574656374696f6e4d6f64656c4d6574616461746112120a0a6d6f64656c5f7479706518012001280912120a0a6e6f64655f636f756e7418032001280312100a086e6f64655f71707318042001280112130a0b73746f705f726561736f6e18052001280912250a1d747261696e5f6275646765745f6d696c6c695f6e6f64655f686f75727318062001280312230a1b747261696e5f636f73745f6d696c6c695f6e6f64655f686f75727318072001280322400a2a496d616765436c617373696669636174696f6e4d6f64656c4465706c6f796d656e744d6574616461746112120a0a6e6f64655f636f756e7418012001280322410a2b496d6167654f626a656374446574656374696f6e4d6f64656c4465706c6f796d656e744d6574616461746112120a0a6e6f64655f636f756e7418012001280342b1010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e76316265746131420a496d61676550726f746f50015a41676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c436c6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
