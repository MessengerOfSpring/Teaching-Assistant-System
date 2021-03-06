<?php
session_start();
if (!($_SESSION['user'] != null && $_SESSION['level'] == 4)) {
    header("Location: /Teaching-Assistant-System/index.html");
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>管理员</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="../jquery/jquery-3.1.1.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="../ueditor/lang/zh-cn/zh-cn.js"></script>

    <!--
    <link rel="stylesheet" href="http://w3schools.bootcss.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="administrator.css">
    <script src="administrator.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row" id="header_topBar">
        <div class="col-sm-6"><a href="../index.html"><img src="../img/logo_gray_large.png" alt="258x71" class="img-responsive"></a></div>
        <div class="col-sm-2 col-sm-offset-4" id="nameLink">
            <div style="margin-left: 20px">
                <div class="nickname f-f0 f-fc-gray f-thide">
                    你好,
                    <a id="username" class="f-fc-gray">Adm</a>
                </div>
            </div>
        </div>

    </div>
    <div class="row" id="header_courseNameBar">
        <div style="margin: 5px 0 5px 0;">
            <div class="col-xs-2 right-border">
                <img src="../img/logo_zju.png" alt="134x50" class="img-responsive"/>
            </div>
            <div class="col-xs-10" style="margin-top:16px">
                <div class="coursename f-f0 f-fc-black"><strong>管理员</strong><br></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" id="pageContent">
        <div class="col-sm-2">
            <ul class="nav nav-pills nav-stacked">
                <li class="order-nav" id="message"><a href="#">查看留言</a></li>
                <li class="order-nav" id="article"><a href="#">管理文章评论</a></li>
                <li class="order-nav" id="topic"><a href="#">管理帖子和评论</a></li>
                <li class="order-nav" id="class"><a href="#">添加班级</a></li>
                <li class="order-nav" id="teacher"><a href="#">添加教师</a></li>
                <li class="order-nav" id="lesson"><a href="#">添加课程</a></li>
                <li class="order-nav" id="link"><a href="#">管理友情链接</a></li>
                <li class="order-nav" id="update"><a href="#">发布网站更新信息</a></li>
             </ul>
        </div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="content-blk message">

                        <div class="panel-group" id="messageLoop">
                            <div class="panel panel-info old w3-hover-shadow w3-animate-zoom"> <!--loop start-->
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-11">
                                            <strong class="x-name"></strong>&nbsp;于&nbsp;<strong class="x-time"></strong>&nbsp;留言:
                                        </div>
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-trash w3-large clickable"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body"><p class="x-content"></p></div>
                            </div>  <!--loop end-->
                        </div>

                    </div>

                    <div class="content-blk article">

                        <div class="panel-group" id="articleLoop">
                            <div class="panel panel-info old w3-hover-shadow w3-animate-zoom">  <!--loop start-->
                                <div class="panel-heading w3-hover-grey clickable">
                                    <span class="glyphicon glyphicon-file"></span>&nbsp;<strong class="x-title"></strong>
                                </div>
                                <div class="panel-body hide"><p class="x-contentDigest"></p></div>
                                <div class="panel-footer w3-white">
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-7 col-xs-8 col-xs-offset-0">
                                            <span class="x-time"></span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <span>评论&nbsp;&nbsp;</span><span class="badge w3-green x-commentCnt clickable"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!--loop end-->
                        </div>

                        <div id="articleDetail">
                            <div class="row">
                                <button type="button" class="btn btn-primary w3-right" id="articleBack">
                                    返回列表&nbsp;<span class="glyphicon glyphicon-share-alt"></span>
                                </button>
                            </div>
                            <div class="row">
                                <h2 class="x-title"></h2>
                                <h5><small>
                                    <span class="glyphicon glyphicon-user"></span> 作者：<span class="x-author"></span>&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-time"></span> 发表时间：<span class="x-time"></span>
                                </small></h5><br>
                                <p class="x-body"></p>
                                <hr id="commentBegin">
                                <div class="panel-group" id="commentLoop">
                                    <div class="panel panel-success old w3-hover-shadow">  <!--loop start-->
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-1">第&nbsp;<strong class="x-floor"></strong>&nbsp;楼</div>
                                                <div class="col-md-1"><strong class="x-floorMaster"></strong></div>
                                                <div class="col-md-2"><span class="x-time small"></span></div>
                                                <div class="col-md-8 text-right"><span class="glyphicon glyphicon-trash w3-large clickable"></span></div>
                                            </div>
                                        </div>
                                        <div class="panel-body"><p class="x-content"></p></div>
                                        <div class="panel-footer">
                                            <div class="well well-sm old">  <!--loooop start-->
                                                <p><strong class="x-reFloorMaster"></strong>&nbsp;&nbsp;回复&nbsp;&nbsp;<strong class="x-reFloorGuest"></strong>&nbsp;:&nbsp;&nbsp;<span class="x-reContent"></span></p>
                                                <div class="row">
                                                    <div class="col-sm-6"><span class="x-reTime small"></span></div>
                                                    <div class="col-sm-6 text-right"><span class="glyphicon glyphicon-trash clickable"></span></div>
                                                </div>
                                            </div>  <!--loooop end-->
                                        </div>
                                    </div>  <!--loop end-->
                                </div>
                                <div class="row text-center">
                                    <ul class="pagination pagination-md">
                                        <li class="disabled"><a>第&nbsp;<span class="x-pageNum"></span>&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;共&nbsp;<span class="x-pageCnt"></span>&nbsp;页</a></li>
                                        <li class="prevPage"><a href="#commentBegin">上一页</a></li>
                                        <li class="nextPage"><a href="#commentBegin">下一页</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="content-blk topic">

                        <div class="panel-group" id="topicLoop">
                            <div class="panel panel-info old w3-hover-shadow w3-animate-zoom">  <!--loop start-->
                                <div class="panel-heading w3-hover-grey clickable">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <span class="glyphicon glyphicon-hand-right"></span>&nbsp;
                                            <strong class="x-title"></strong>
                                        </div>
                                        <div class="col-md-2">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;<small class="x-author"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <span class="label label-primary x-lesson"></span>
                                            <span class="label label-success x-kind"></span>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="x-time"></span>
                                        </div>
                                        <div class="col-md-2">
                                            <span>回帖&nbsp;&nbsp;</span><span class="badge w3-green x-responseCnt clickable"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!--loop end-->
                        </div>

                        <div id="topicDetail">
                            <div class="row">
                                <button type="button" class="btn btn-primary w3-right" id="topicBack">
                                    返回列表&nbsp;<span class="glyphicon glyphicon-share-alt"></span>
                                </button>
                            </div>
                            <div class="row">
                                <div class="panel panel-danger w3-hover-shadow w3-animate-zoom">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;
                                                <strong class="x-title"></strong>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="glyphicon glyphicon-user"></span>&nbsp;<small class="x-author"></small>
                                            </div>
                                            <div class="col-md-1 text-right">
                                                <span class="glyphicon glyphicon-trash w3-large clickable"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p class="x-content"></p>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <span class="label label-primary x-lesson"></span>
                                                <span class="label label-success x-kind"></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="x-time"></span>
                                            </div>
                                            <div class="col-md-2">
                                                <span>回帖&nbsp;&nbsp;</span><span class="badge w3-green x-responseCnt clickable"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr id="responseBegin">

                            <div class="row">
                                <div class="panel-group" id="topicResponseLoop">
                                    <div class="panel panel-success old w3-hover-shadow w3-animate-zoom">  <!--loop start-->
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-1">第&nbsp;<strong class="x-floor"></strong>&nbsp;楼</div>
                                                <div class="col-md-1"><strong class="x-floorMaster"></strong></div>
                                                <div class="col-md-2"><span class="x-time small"></span></div>
                                                <div class="col-md-8 text-right"><span class="glyphicon glyphicon-trash w3-large clickable"></span></div>
                                            </div>
                                        </div>
                                        <div class="panel-body"><p class="x-content"></p></div>
                                        <div class="panel-footer">
                                            <div class="well well-sm old">  <!--loooop start-->
                                                <p><strong class="x-reFloorMaster"></strong>&nbsp;&nbsp;回复&nbsp;&nbsp;<strong class="x-reFloorGuest"></strong>&nbsp;:&nbsp;&nbsp;<span class="x-reContent"></span></p>
                                                <div class="row">
                                                    <div class="col-sm-6"><span class="x-reTime small"></span></div>
                                                    <div class="col-sm-6 text-right"><span class="glyphicon glyphicon-trash clickable"></span></div>
                                                </div>
                                            </div>  <!--loooop end-->
                                        </div>
                                    </div>  <!--loop end-->
                                </div>
                                <div class="row text-center">
                                    <ul class="pagination pagination-md">
                                        <li class="disabled"><a>第&nbsp;<span class="x-pageNum"></span>&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;共&nbsp;<span class="x-pageCnt"></span>&nbsp;页</a></li>
                                        <li class="prevPage"><a href="#responseBegin">上一页</a></li>
                                        <li class="nextPage"><a href="#responseBegin">下一页</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="content-blk class">

                        <div class="panel panel-primary w3-hover-shadow w3-animate-zoom">
                            <div class="panel-heading"><h2>输入班级信息</h2></div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="classForm" action="" target="nm_iframe">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">课程号：</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lessonIdClass" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">授课教师ID：</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="teacherIdClass" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">上课时间：</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="beginTime1" required placeholder="时间一">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="beginTime2" placeholder="时间二（选填）">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">上课地点：</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="lessonAddress1" required placeholder="地点一">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="lessonAddress2" placeholder="地点二（选填）">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="content-blk teacher">

                        <div class="panel panel-primary w3-hover-shadow w3-animate-zoom">
                            <div class="panel-heading"><h2>输入教师信息</h2></div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="teacherForm" action="" target="nm_iframe">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">教师ID:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="teacherId" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">教师姓名:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="teacherName" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">介绍:</label>
                                        <div class="col-sm-9">
                                            <!--<input type="text" class="form-control editor" id="teacherIntroduction" required>-->
                                            <script type="text/plain" id="teacherIntroductionEditor"></script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="content-blk lesson">

                        <div class="panel panel-primary w3-hover-shadow w3-animate-zoom">
                            <div class="panel-heading"><h2>输入课程信息</h2></div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="lessonForm" action="" target="nm_iframe">
                                    <div class="form-group">
                                        <label  class="control-label col-sm-2">课程号：</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lessonId" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="control-label col-sm-2">课程名：</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lessonName" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                    <fieldset>
                                        <legend><h4>课程信息</h4></legend>
                                        <div class="form-group">
                                            <label  class="control-label col-sm-3">国际国内背景：</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control editor" id="background">
                                                <script type="text/plain" class="ueEditor" id="backgroundEditor"></script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label col-sm-3">课时安排：</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control editor" id="classHour">
                                                <script type="text/plain" class="ueEditor" id="classHourEditor"></script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label col-sm-3">教学计划：</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control editor" id="teachPlan">
                                                <script type="text/plain" class="ueEditor" id="teachPlanEditor"></script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label col-sm-3">使用教材：</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control editor" id="textBook">
                                                <script type="text/plain" class="ueEditor" id="textBookEditor"></script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="control-label col-sm-3">考核方式：</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control editor" id="evaluation">
                                                <script type="text/plain" class="ueEditor" id="evaluationEditor"></script>
                                            </div>
                                        </div>
                                    </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </div>
                                </form>
                                <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
                            </div>
                        </div>

                    </div>

                    <div class="content-blk link">

                        <div class="panel panel-primary w3-hover-shadow w3-animate-zoom">
                            <div class="panel-heading"><h2>输入链接信息</h2></div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="linkForm" action="" target="nm_iframe">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">链接名：</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="linkName" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">链接地址：</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="linkAddress" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </div>
                                </form>

                                <fieldset>
                                    <legend>已有链接</legend>
                                    <table class="table table-hover table-responsive table-condensed table-striped" id="linkTable">
                                        <tbody>
                                        <tr class="old">
                                            <th class="x-linkName"></th>
                                            <th><a class="x-linkAddress"></a> </th>
                                            <th><span class="glyphicon glyphicon-trash w3-large clickable"></span></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>
                        </div>

                    </div>

                    <div class="content-blk update">

                        <div class="panel panel-primary w3-hover-shadow w3-animate-zoom">
                            <div class="panel-heading"><h2>输入更新日志</h2></div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="updateForm" action="" target="nm_iframe">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">更新信息：</label>
                                        <div class="col-sm-10">
                                            <!--<textarea class="form-control" rows="7" id="updataInfo" required></textarea>-->
                                            <script type="text/plain" id="updateInfoEditor"></script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/header.js"></script>
</body>
</html>