<?php

namespace Hanafalah\ModuleFunding\Models\Funding;

use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Hanafalah\ModuleFunding\Resources\Funding\{
    ViewFunding,
    ShowFunding
};

class Funding extends BaseModel
{
    use HasProps, SoftDeletes;

    public $list = ['id', 'name', 'props'];
    protected $casts = [
        'name' => 'string'
    ];

    public function toViewApi()
    {
        return new ViewFunding($this);
    }

    public function toShowApi()
    {
        return new ShowFunding($this);
    }
}
