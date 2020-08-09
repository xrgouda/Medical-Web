<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schedule for triggeredJobs.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    protected $option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $recurrence_period_duration
     *           With this option a job is started a regular periodic basis. For
     *           example: every day (86400 seconds).
     *           A scheduled start time will be skipped if the previous
     *           execution has not ended when its scheduled time occurs.
     *           This value must be set to a time duration greater than or equal
     *           to 1 day and can be no longer than 60 days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * With this option a job is started a regular periodic basis. For
     * example: every day (86400 seconds).
     * A scheduled start time will be skipped if the previous
     * execution has not ended when its scheduled time occurs.
     * This value must be set to a time duration greater than or equal
     * to 1 day and can be no longer than 60 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration recurrence_period_duration = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getRecurrencePeriodDuration()
    {
        return $this->readOneof(1);
    }

    /**
     * With this option a job is started a regular periodic basis. For
     * example: every day (86400 seconds).
     * A scheduled start time will be skipped if the previous
     * execution has not ended when its scheduled time occurs.
     * This value must be set to a time duration greater than or equal
     * to 1 day and can be no longer than 60 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration recurrence_period_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRecurrencePeriodDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->whichOneof("option");
    }

}

