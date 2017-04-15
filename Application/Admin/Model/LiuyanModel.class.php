<?php
namespace Admin\Model;
use Think\Model;
class LiuyanModel extends Model{
    protected $_validate = array(
        array('id','require','当前留言用户id！'), //默认情况下用正则进行验证
        array('content','require','留言内容！'), //默认情况下用正则进行验证
        array('date','','留言时间！',0,'unique',self::MODEL_BOTH), // 在新增的时候验证name字段是否唯一
    );
}