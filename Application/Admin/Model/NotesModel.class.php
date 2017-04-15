<?php
namespace Admin\Model;
use Think\Model;
class NotesModel extends Model{
    protected $_validate = array(
        array('id','require','发表公告身份id！'), //默认情况下用正则进行验证
        array('content','require','公告内容！'), //默认情况下用正则进行验证
        array('date','','留言时间！',0,'unique',self::MODEL_BOTH), // 在新增的时候验证name字段是否唯一
    );
}