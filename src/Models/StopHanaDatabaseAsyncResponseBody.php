<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class StopHanaDatabaseAsyncResponseBody extends Model
{
    /**
     * @description The response code. The status code 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message. If the request was successful, "successful" is returned. If the request failed, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example CD8B903B-DE8F-5969-9414-B2C634D504D9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the asynchronous job. You can call the DescribeTask operation to query the execution result of an asynchronous job.
     *
     * @example t-0007o3vqfukgd3y5bxxr
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopHanaDatabaseAsyncResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
