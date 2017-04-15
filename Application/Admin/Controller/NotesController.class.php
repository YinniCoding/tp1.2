<?php
namespace Admin\Controller;
use Admin\Controller;

class NotesController extends BaseController{

    public function index(){
        
        $where['id'] = array('like',"%$key%");
        $where['content'] = array('like',"%$key%");
        $where['_logic'] = 'or';
        $model = M('Notes')->where($where); 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $pages = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('date DESC')->select();
        $this->assign('model', $pages);
        $this->assign('Notes',$show);
        $this->display();
    }

    /**
     * 删除公告
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
    	$tempid = $id;
    	// $id = intval($id);
        $model = M('Notes');
        $result = $model->where('id = %d',$tempid)->delete();
        if($result){
            $this->success("删除成功", U('Notes/index'));
        }else{
            $this->error("删除失败");
        }
    }

    /**
     * 添加公告
     */
    public function add()
    {
        //默认显示添加表单
        if (!IS_POST) {
            $this->assign("notes",getSortedCategory(M('Notes')->select()));
            $this->display();
        }
        if (IS_POST) {
            //如果用户提交数据
            $model = D("Post");
            $model->time = time();
            $model->user_id = 1;
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("添加成功", U('Notes/index'));
                } else {
                    $this->error("添加失败");
                }
            }
        }
    }
}
