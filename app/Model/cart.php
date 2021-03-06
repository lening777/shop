<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{

    /**
     * @var string \
     * @content 指定数据表cart
     */
    protected $table = 'cart';
    /**
     * 定义表的主键id为  cart_id.
     *
     * @var bool
     */
    protected $primaryKey = 'cart_id';
    /**
     * 自定义时间戳的字段名
     */
    public $timestamps = false;
}
