<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request\rules;

use AlibabaCloud\Tea\Model;

class tagFilters extends Model
{
    /**
     * @description The tag key.
     *
     * @example env
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag-based matching rule. Valid values:
     *
     *   **EQUAL**: Both the tag key and tag value are matched.
     *   **NOT**: The tag key is matched and the tag value is not matched.
     *
     * @example EQUAL
     *
     * @var string
     */
    public $operator;

    /**
     * @description The tag value. If you leave this parameter empty, the value is any value.
     *
     * @example prod
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'operator' => 'Operator',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
