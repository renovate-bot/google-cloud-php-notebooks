<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for notebook instances to report information to Notebooks API.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.ReportInstanceInfoRequest</code>
 */
class ReportInstanceInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vm_id = '';
    /**
     * The metadata reported to Notebooks API. This will be merged to the instance
     * metadata store
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format:
     *           `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *     @type string $vm_id
     *           Required. The VM hardware token for authenticating the VM.
     *           https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           The metadata reported to Notebooks API. This will be merged to the instance
     *           metadata store
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVmId()
    {
        return $this->vm_id;
    }

    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVmId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_id = $var;

        return $this;
    }

    /**
     * The metadata reported to Notebooks API. This will be merged to the instance
     * metadata store
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The metadata reported to Notebooks API. This will be merged to the instance
     * metadata store
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}

