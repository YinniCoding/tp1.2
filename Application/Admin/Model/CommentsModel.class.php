<?php
namespace Admin\Model;
use Think\Model;
class CommentsModel extends Model{
    protected $_validate = array(
        array('id','require','当前评论用户id！'), //默认情况下用正则进行验证
        array('content','require','评论内容！'), //默认情况下用正则进行验证
        array('date','','评论时间！',0,'unique',self::MODEL_BOTH), // 在新增的时候验证name字段是否唯一
    );
}