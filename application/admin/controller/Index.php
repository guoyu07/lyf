<?php
// +----------------------------------------------------------------------
// | lyf [ 简单 高效 卓越 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://lyf.lyunweb.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: jry <598821125@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;
use app\admin\controller\Admin;
/**
 * 后台基础控制器，其他控制器一般都要继承此控制器便于统一要求登陆等
 */
class Index extends Admin
{
    // 这是后台（Admin）首页方法
    public function index()
    {
        echo "<h1>这是" . LYF_NAME . "后台首页</h1>";
    }
}
