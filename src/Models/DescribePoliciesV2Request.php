<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2Request\accounts;

class DescribePoliciesV2Request extends Model
{
    /**
     * @var string
     */
    public $accountScope;

    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $ruleScope;
    protected $_name = [
        'accountScope' => 'AccountScope',
        'accounts' => 'Accounts',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'policyId' => 'PolicyId',
        'ruleScope' => 'RuleScope',
    ];

    public function validate()
    {
        if (\is_array($this->accounts)) {
            Model::validateArray($this->accounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountScope) {
            $res['AccountScope'] = $this->accountScope;
        }

        if (null !== $this->accounts) {
            if (\is_array($this->accounts)) {
                $res['Accounts'] = [];
                $n1 = 0;
                foreach ($this->accounts as $item1) {
                    $res['Accounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->ruleScope) {
            $res['RuleScope'] = $this->ruleScope;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountScope'])) {
            $model->accountScope = $map['AccountScope'];
        }

        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n1 = 0;
                foreach ($map['Accounts'] as $item1) {
                    $model->accounts[$n1] = accounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RuleScope'])) {
            $model->ruleScope = $map['RuleScope'];
        }

        return $model;
    }
}
