<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupJobShrinkRequest extends Model
{
    /**
     * @description The backup type. This parameter is required only if you set the SourceType parameter to UDM_ECS.
     *
     *   **COMPLETE**: full backup
     *
     * @example INCREMENTAL
     *
     * @var string
     */
    public $backupType;

    /**
     * @description You do not need to specify this parameter.
     *
     * @example cl-00068btz******oku
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description You do not need to specify this parameter.
     *
     * @example cc-000xxxxxxxxxxxxxxi00
     *
     * @var string
     */
    public $containerClusterId;

    /**
     * @description You do not need to specify this parameter.
     *
     * @example [{\\"resourceType\\":\\"PV\\",\\"backupMethod\\":\\"FILE\\",\\"resourceId\\":\\"674dac6d-74cd-47e9-a675-09e2f10d2c45\\",\\"resourceInfo\\":\\"{\\\\\\"pv_name\\\\\\":\\\\\\"nas-650dac6d-74cd-47e9-a675-09e2f10d2c45\\\\\\",\\\\\\"pv_size\\\\\\":\\\\\\"8Gi\\\\\\",\\\\\\"storage_class\\\\\\":\\\\\\"alibabacloud-cnfs-nas\\\\\\",\\\\\\"pvc_name\\\\\\":\\\\\\"data-postgresql-default-0\\\\\\",\\\\\\"namespace\\\\\\":\\\\\\"database\\\\\\"}\\",\\"host\\":\\"cn-huhehaote.192.168.13.133\\",\\"hostPrefix\\":\\"6f5e758e-8d35-4584-b9ce-8333adfc7547/volumes/kubernetes.io~csi/nas-670dac6d-74cd-47e9-a675-09e2f10d2c45/mount\\",\\"pvPath\\":\\"/\\"}]
     *
     * @var string
     */
    public $containerResources;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up across Alibaba Cloud accounts.
     *
     * @example SELF_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 158975xxxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **UDM_ECS**. The value is a JSON string. Valid values:
     *
     *   doCopy: specifies whether to enable remote replication.
     *
     *   destinationRegionId: the destination region for remote replication.
     *
     *   destinationRetention: the retention period of the backup point for remote replication.
     *
     *   diskIdList: the IDs of the disks that are to be backed up. If this parameter is left empty, all disks are backed up.
     *
     *   snapshotGroup: specifies whether to use a snapshot-consistent group. This parameter is valid only if all disks of the ECS instance are Enterprise SSDs (ESSDs).
     *
     *   appConsistent: specifies whether to use the application-consistent backup feature. This parameter must be used with the preScriptPath and postScriptPath parameters.
     *
     *   preScriptPath: the path to the pre-freeze scripts.
     *
     *   postScriptPath: the path to the post-thaw scripts.
     *
     *   enableWriters: This parameter is required only if you set the **AppConsistent** parameter to **true**. This parameter specifies whether to create application-consistent snapshots.
     *
     *   true: creates application-consistent snapshots.
     *   false: creates file system-consistent snapshots.
     *
     *   enableFsFreeze: This parameter is required only if you set the **AppConsistent** parameter to **true**. This parameter specifies whether to enable Linux fsfreeze to put file systems into the read-only state before application-consistent snapshots are created. Default value: true.
     *
     *   timeoutSeconds: This parameter is required only if you set the **AppConsistent** parameter to **true**. This parameter specifies the I/O freeze timeout period. Default value: 30. Unit: seconds.
     *
     * @example {
     * "doCopy": false,
     * "destinationRegionId": "",
     * "destinationRetention": null,
     * "diskIdList": [],
     * "snapshotGroup": false,
     * "appConsistent": false,
     * "enableWriters": true,
     * "preScriptPath": "",
     * "postScriptPath": "",
     * "enableFsFreeze": true,
     * "timeoutInSeconds": 60
     * }
     *
     * @var string
     */
    public $detailShrink;

    /**
     * @description This parameter does not take effect if you set the **SourceType** parameter to **UDM_ECS**. This parameter specifies the paths to the files that are excluded from the backup job. The value can be up to 255 characters in length.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description This parameter does not take effect if you set the **SourceType** parameter to **UDM_ECS**. This parameter specifies the paths to the files that are backed up. The value can be up to 255 characters in length.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description false or left empty
     *
     * @example false
     *
     * @var bool
     */
    public $initiatedByAck;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **UDM_ECS**. This parameter specifies the ID of the ECS instance.
     *
     * @example i-bp1xxxxxxxxxxxxxxysm
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the backup job.
     *
     * @example k8s-backup-infra-20220131150046-hbr
     *
     * @var string
     */
    public $jobName;

    /**
     * @description You do not need to specify this parameter.
     *
     * @example {"UseVSS":false}
     *
     * @var string
     */
    public $options;

    /**
     * @description The retention period of the backup data. Unit: days.
     *
     * @example 15
     *
     * @var int
     */
    public $retention;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **UDM_ECS**: Elastic Compute Service (ECS) instance
     *
     * This parameter is required.
     *
     * @example CONTAINER
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter does not take effect if you set the **SourceType** parameter to **UDM_ECS**. This parameter specifies the throttling rules. Format: `{start}|{end}|{bandwidth}`. Separate multiple throttling rules with vertical bars (|). A specified time range cannot overlap with another time range.
     *
     *   **start**: the start hour.
     *   **end**: the end hour.
     *   **bandwidth**: the bandwidth. Unit: KB/s.
     *
     * @example 0:24:NaN
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description The ID of the backup vault. This parameter is not required if you set the SourceType parameter to UDM_ECS.
     *
     * @example v-000xxxxxxxxxxxxxxy1v
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupType' => 'BackupType',
        'clusterId' => 'ClusterId',
        'containerClusterId' => 'ContainerClusterId',
        'containerResources' => 'ContainerResources',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'detailShrink' => 'Detail',
        'exclude' => 'Exclude',
        'include' => 'Include',
        'initiatedByAck' => 'InitiatedByAck',
        'instanceId' => 'InstanceId',
        'jobName' => 'JobName',
        'options' => 'Options',
        'retention' => 'Retention',
        'sourceType' => 'SourceType',
        'speedLimit' => 'SpeedLimit',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerClusterId) {
            $res['ContainerClusterId'] = $this->containerClusterId;
        }
        if (null !== $this->containerResources) {
            $res['ContainerResources'] = $this->containerResources;
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
        if (null !== $this->detailShrink) {
            $res['Detail'] = $this->detailShrink;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->initiatedByAck) {
            $res['InitiatedByAck'] = $this->initiatedByAck;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerClusterId'])) {
            $model->containerClusterId = $map['ContainerClusterId'];
        }
        if (isset($map['ContainerResources'])) {
            $model->containerResources = $map['ContainerResources'];
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
        if (isset($map['Detail'])) {
            $model->detailShrink = $map['Detail'];
        }
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['InitiatedByAck'])) {
            $model->initiatedByAck = $map['InitiatedByAck'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
