<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: videos_continuation_wrapper.proto

namespace Com\Youtube\Innertube\Helpers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.youtube.innertube.helpers.VideosContinuationWrapper</code>
 */
class VideosContinuationWrapper extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string continuation = 1;</code>
     */
    protected $continuation = '';
    /**
     * Generated from protobuf field <code>bool list = 2;</code>
     */
    protected $list = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $continuation
     *     @type bool $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\VideosContinuationWrapper::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string continuation = 1;</code>
     * @return string
     */
    public function getContinuation()
    {
        return $this->continuation;
    }

    /**
     * Generated from protobuf field <code>string continuation = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContinuation($var)
    {
        GPBUtil::checkString($var, True);
        $this->continuation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool list = 2;</code>
     * @return bool
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>bool list = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setList($var)
    {
        GPBUtil::checkBool($var);
        $this->list = $var;

        return $this;
    }

}
