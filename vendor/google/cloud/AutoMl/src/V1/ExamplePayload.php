<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/data_items.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Example data used for training or prediction.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ExamplePayload</code>
 */
class ExamplePayload extends \Google\Protobuf\Internal\Message
{
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\Image $image
     *           Example image.
     *     @type \Google\Cloud\AutoMl\V1\TextSnippet $text_snippet
     *           Example text.
     *     @type \Google\Cloud\AutoMl\V1\Document $document
     *           Example document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\DataItems::initOnce();
        parent::__construct($data);
    }

    /**
     * Example image.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Image image = 1;</code>
     * @return \Google\Cloud\AutoMl\V1\Image
     */
    public function getImage()
    {
        return $this->readOneof(1);
    }

    /**
     * Example image.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Image image = 1;</code>
     * @param \Google\Cloud\AutoMl\V1\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\Image::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Example text.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet text_snippet = 2;</code>
     * @return \Google\Cloud\AutoMl\V1\TextSnippet
     */
    public function getTextSnippet()
    {
        return $this->readOneof(2);
    }

    /**
     * Example text.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet text_snippet = 2;</code>
     * @param \Google\Cloud\AutoMl\V1\TextSnippet $var
     * @return $this
     */
    public function setTextSnippet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TextSnippet::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Example document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Document document = 4;</code>
     * @return \Google\Cloud\AutoMl\V1\Document
     */
    public function getDocument()
    {
        return $this->readOneof(4);
    }

    /**
     * Example document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Document document = 4;</code>
     * @param \Google\Cloud\AutoMl\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\Document::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

