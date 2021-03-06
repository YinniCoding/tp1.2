<?php
namespace Admin\Controller;
use Admin\Controller;

class LiuyanController extends BaseController{

    public function index(){
        
        $where['id'] = array('like',"%$key%");
        $where['content'] = array('like',"%$key%");
        $where['_logic'] = 'or';
        $model = M('Liuyan')->where($where); 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $pages = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('date DESC')->select();
        $this->assign('model', $pages);
        $this->assign('Liuyan',$show);
        $this->display();
    }

    /**
     * 删除留言
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
    	$tempid = $id;
    	// $id = intval($id);
        $model = M('Liuyan');
        $result = $model->where('id = %d',$tempid)->delete();
        if($result){
            $this->success("删除成功", U('Liuyan/index'));
        }else{
            $this->error("删除失败");
        }
    }
}