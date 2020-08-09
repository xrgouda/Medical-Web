<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for stored infoTypes. All fields and subfield are provided
 * by the user. For more information, see
 * https://cloud.google.com/dlp/docs/creating-custom-infotypes.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.StoredInfoTypeConfig</code>
 */
class StoredInfoTypeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Display name of the StoredInfoType (max 256 characters).
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * Description of the StoredInfoType (max 256 characters).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Display name of the StoredInfoType (max 256 characters).
     *     @type string $description
     *           Description of the StoredInfoType (max 256 characters).
     *     @type \Google\Cloud\Dlp\V2\LargeCustomDictionaryConfig $large_custom_dictionary
     *           StoredInfoType where findings are defined by a dictionary of phrases.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary $dictionary
     *           Store dictionary-based CustomInfoType.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Regex $regex
     *           Store regular expression-based StoredInfoType.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Display name of the StoredInfoType (max 256 characters).
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the StoredInfoType (max 256 characters).
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Description of the StoredInfoType (max 256 characters).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the StoredInfoType (max 256 characters).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * StoredInfoType where findings are defined by a dictionary of phrases.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.LargeCustomDictionaryConfig large_custom_dictionary = 3;</code>
     * @return \Google\Cloud\Dlp\V2\LargeCustomDictionaryConfig
     */
    public function getLargeCustomDictionary()
    {
        return $this->readOneof(3);
    }

    /**
     * StoredInfoType where findings are defined by a dictionary of phrases.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.LargeCustomDictionaryConfig large_custom_dictionary = 3;</code>
     * @param \Google\Cloud\Dlp\V2\LargeCustomDictionaryConfig $var
     * @return $this
     */
    public function setLargeCustomDictionary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\LargeCustomDictionaryConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Store dictionary-based CustomInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 4;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary
     */
    public function getDictionary()
    {
        return $this->readOneof(4);
    }

    /**
     * Store dictionary-based CustomInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 4;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary $var
     * @return $this
     */
    public function setDictionary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType_Dictionary::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Store regular expression-based StoredInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 5;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Regex
     */
    public function getRegex()
    {
        return $this->readOneof(5);
    }

    /**
     * Store regular expression-based StoredInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 5;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Regex $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType_Regex::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

