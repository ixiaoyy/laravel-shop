<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class CrowdfundingProduct extends Model
{
    use DefaultDatetimeFormat;
    // 定义众筹的 3种状态
    const STATUS_FUNDING = 'funding';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';

    public static $statusMap = [
        self::STATUS_FUNDING => '众筹中',
        self::STATUS_SUCCESS => '众筹成功',
        self::STATUS_FAIL => '众筹失败',
    ];

    protected $fillable = ['total_amount', 'target_amount', 'user_count', 'status', 'end_at'];
    protected $dates = ['end_at'];
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // 定义访问器，返回当前众筹额度
    public function getPercentAttribute()
    {
        $value = $this->attributes['total_amount'] / $this->attributes['target_amount'];
        return floatval(number_format($value * 100, 2, '.', ''));
    }
}
