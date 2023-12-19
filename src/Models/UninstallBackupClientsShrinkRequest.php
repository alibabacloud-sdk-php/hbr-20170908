<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UninstallBackupClientsShrinkRequest extends Model
{
    /**
     * @description The ID of the backup client. The sum of the number of backup client IDs and the number of ECS instance IDs cannot exceed 20. Otherwise, an error occurs.
     *
     * @example ["c-*********************"]
     *
     * @var string
     */
    public $clientIdsShrink;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up and restore data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up and restored within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up and restored within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up and restored across Alibaba Cloud accounts.
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up and restore data across Alibaba Cloud accounts.
     *
     * @example 129349237xxxxx
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the ECS instance. You can specify up to 20 IDs.
     *
     * @example ["i-0xi5wj5*****v3j3bh2gj5"]
     *
     * @var string
     */
    public $instanceIdsShrink;
    protected $_name = [
        'clientIdsShrink'      => 'ClientIds',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'instanceIdsShrink'    => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIdsShrink) {
            $res['ClientIds'] = $this->clientIdsShrink;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallBackupClientsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIdsShrink = $map['ClientIds'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        return $model;
    }
}
