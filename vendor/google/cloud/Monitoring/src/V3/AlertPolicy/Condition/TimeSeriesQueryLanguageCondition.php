<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\Condition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition type that allows alert policies to be defined using
 * Monitoring Query Language.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition.TimeSeriesQueryLanguageCondition</code>
 */
class TimeSeriesQueryLanguageCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Monitoring Query Language query that generates time series data and
     * describes a condition for alerting on that data.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     */
    private $query = '';
    /**
     * A short explanation of what the query represents. For example:
     *   "Error ratio exceeds 15% for >5% of servers in >2 regions"
     *
     * Generated from protobuf field <code>string summary = 2;</code>
     */
    private $summary = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *           Monitoring Query Language query that generates time series data and
     *           describes a condition for alerting on that data.
     *     @type string $summary
     *           A short explanation of what the query represents. For example:
     *             "Error ratio exceeds 15% for >5% of servers in >2 regions"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Monitoring Query Language query that generates time series data and
     * describes a condition for alerting on that data.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Monitoring Query Language query that generates time series data and
     * describes a condition for alerting on that data.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * A short explanation of what the query represents. For example:
     *   "Error ratio exceeds 15% for >5% of servers in >2 regions"
     *
     * Generated from protobuf field <code>string summary = 2;</code>
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A short explanation of what the query represents. For example:
     *   "Error ratio exceeds 15% for >5% of servers in >2 regions"
     *
     * Generated from protobuf field <code>string summary = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkString($var, True);
        $this->summary = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimeSeriesQueryLanguageCondition::class, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_TimeSeriesQueryLanguageCondition::class);
