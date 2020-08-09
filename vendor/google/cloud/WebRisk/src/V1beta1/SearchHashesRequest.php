<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1beta1/webrisk.proto

namespace Google\Cloud\WebRisk\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to return full hashes matched by the provided hash prefixes.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1beta1.SearchHashesRequest</code>
 */
class SearchHashesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A hash prefix, consisting of the most significant 4-32 bytes of a SHA256
     * hash. For JSON requests, this field is base64-encoded.
     *
     * Generated from protobuf field <code>bytes hash_prefix = 1;</code>
     */
    private $hash_prefix = '';
    /**
     * Required. The ThreatLists to search in.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.ThreatType threat_types = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $threat_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash_prefix
     *           A hash prefix, consisting of the most significant 4-32 bytes of a SHA256
     *           hash. For JSON requests, this field is base64-encoded.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $threat_types
     *           Required. The ThreatLists to search in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1Beta1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * A hash prefix, consisting of the most significant 4-32 bytes of a SHA256
     * hash. For JSON requests, this field is base64-encoded.
     *
     * Generated from protobuf field <code>bytes hash_prefix = 1;</code>
     * @return string
     */
    public function getHashPrefix()
    {
        return $this->hash_prefix;
    }

    /**
     * A hash prefix, consisting of the most significant 4-32 bytes of a SHA256
     * hash. For JSON requests, this field is base64-encoded.
     *
     * Generated from protobuf field <code>bytes hash_prefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHashPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash_prefix = $var;

        return $this;
    }

    /**
     * Required. The ThreatLists to search in.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.ThreatType threat_types = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThreatTypes()
    {
        return $this->threat_types;
    }

    /**
     * Required. The ThreatLists to search in.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.ThreatType threat_types = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThreatTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\WebRisk\V1beta1\ThreatType::class);
        $this->threat_types = $arr;

        return $this;
    }

}
