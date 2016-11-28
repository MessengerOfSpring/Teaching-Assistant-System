/**
 * Created by achao_zju on 15/11/2016.
 */
function  returnToArticleList() {

    var articleList=document.getElementById("articleList");
    if(articleList.style.display=="none") {
        articleList.style.display = "inline";
        var articleDetails = document.getElementById("articleDetails");
        var parent = document.getElementById("article");
        var x=parent.removeChild(articleDetails);
    }

}



function showArticleDetails(){

    var returnButton=document.createElement("button");
    returnButton.className="btn btn-primary";
    returnButton.innerHTML="返回文章列表";
    returnButton.onclick=returnToArticleList;

    var articleDetails=document.createElement("div");
    articleDetails.id="articleDetails";
    var parent=document.getElementById("article");
    parent.appendChild(articleDetails);

    var title="热烈庆祝长者90大寿！";
    var author="膜法师";
    var time="2016-11-9";
    var content="浙江大学（Zhejiang University），简称“浙大”，坐落于“人间天堂”杭州。前身是1897年创建的求是书院，是中国人自己最早创办的现代高等学府之一。1928年更名为国立浙江大学。中华民国时期，浙江大学在竺可桢老校长的带领下，崛起为民国最高学府之一，被英国学者李约瑟誉为“东方剑桥”，迎来了浙大百年历史当中最辉煌的时期。竺可桢老校长也因其历史贡献，成为了浙大校史上最伟大的人，并为浙大确立了“求是”校训和文言文《浙江大学校歌》。" +
        "浙江大学直属于中华人民共和国教育部，是中国首批7所“211工程”、首批9所“985工程”重点建设的全国重点大学之一，是九校联盟、中国大学校长联谊会、世界大学联盟、环太平洋大学联盟的成员，是教育部“卓越医生教育培养计划”、“卓越农林人才教育培养计划”改革试点高校，是中国著名顶尖学府之一，也是中国学科最齐全、学生创业率最高的大学。[1-2]" +
        "截至2016年6月，浙江大学拥有紫金港、玉泉、西溪、华家池、之江、舟山、海宁等7个校区，占地面积7平方公里，[3]  校舍总建筑面积2047856平方米；图书馆藏书683万余册，并有7家附属医院；国家重点一级学科14个，国家重点二级学科21个；一级学科博士学位授权点54个，二级学科博士学位授权点277个，博士后科研流动站52个；本科专业127个，全日制在校学生47000余人，其中硕士研究生16090人，博士研究生10463；留学生5800余人，其中学位生3000余人。[3] ";

    var childArticle=document.createElement("div");
    articleDetails.appendChild(returnButton);
    articleDetails.appendChild(childArticle);
    childArticle.style.marginTop="10px";
    childArticle.className="panel panel-default";
    childArticle.innerHTML="<div class='panel-heading'> "+
    "<div class='row'> <div class='col-sm-9'>"+title+ "</div> <div class='col-sm-1'>"+author+" </div> " +
    "<div class='col-sm-2'>"+time+"</div> </div> " +
    "</div> <div class='panel-body'>"+content +"</div>";

    // var commentHead=document.createElement("h3");
    // commentHead.innerHTML="评论";
    // articleDetails.appendChild(commentHead);

    // var commentHead=document.createElement("span");
    // commentHead.className="left f-discuss-header";
    // commentHead.innerHTML="讨论区";
    // articleDetails.appendChild(commentHead);
    //
    // var hr=document.createElement("hr");
    // articleDetails.appendChild(hr);


    var articleList=document.getElementById("articleList");
    articleList.style.display="none";

    var response=document.createElement("div");
    articleDetails.appendChild(response);
    response.className="response-container";
    response.innerHTML=" <ul style='padding-left: 0px'> " +
    "<li class='response-list'> " +
    "<div class='response-list-main'> " +
        "<div class='response-list-nick'>章世超</div> " +
        "<div class='response-list-content'>Good Article</div> " +
        "<div class='col-sm-10'><div class='response-list-btm'>时间: 2016-11-09 19:40</div></div> " +
        "<div class='col-sm-2'> <div class='response-huifu' onclick='showReResponse()'>回复</div></div> "+
    "</div></li> <li class='response-list'> " +
        "<div class='response-list-main'> " +
        "<div class='response-list-nick'>游客10000</div> " +
        "<div class='response-list-content'>Fuck</div> " +
        "<div class='row'> " +
        "<div class='col-sm-10'><div class='response-list-btm'>时间: 2016-11-09 19:40</div></div> " +
        "<div class='col-sm-2'> <div class='response-huifu' onclick='showReResponse()'>收起回复</div></div> " +
        "<div class='re-response-wrapper'> " +
        "<div class='re-response-list'><ul class='re-response-ul'> " +
        "<li class='re-response-li'> " +
        "<span class='re-response-user-name'>Ling&nbsp;</span><span>回复</span><span class='re-response-user-name'>Xu</span><span>:&nbsp;&nbsp;苟利国家生死以，岂因祸福避趋之。苟利国家生死以，岂因祸福避趋之。苟利国家生死以，岂因祸福避趋之。苟利国家生死以，岂因祸福避趋之。苟利国家生死以，岂因祸福避趋之。苟利国家生死以，岂因祸福避趋之。苟利国家生死以，岂因祸福避趋之。</span> " +
        "<div class='re-response-huifu-time'> " +
        "<span class='re-response-time'>2015-12-13 10：35&nbsp;&nbsp;&nbsp;</span><span class='re-response-huifu'>回复</span> " +
        "</div> " +
        "</li> " +
        "<li class='re-response-li'><span class='re-response-user-name'>Ling</span><span>:&nbsp;&nbsp;My God</span> " +
        "<div class='re-response-huifu-time'> " +
        "<span class='re-response-time'>2015-12-13 10：35&nbsp;&nbsp;&nbsp;</span><span class='re-response-huifu'>回复</span> " +
        "</div> " +
        "</li> " +
        "<li class='re-response-li'> " +
        "<button class='btn btn-xs btn-default' style='float: right;margin-bottom: 5px'>我也说一句</button> " +
        "<textarea class='re-response-textarea'></textarea> " +
        "<button class='btn btn-xs btn-primary' style='float: right'>发表</button> " +
        "</li> </ul> </div> </div> </div> </div> </li> " +
        "<li class='response-list'> " +
        "<div class='response-list-main'> " +
        "<div class='response-list-nick'>章世超</div> " +
        "<div class='response-list-content'>Good Article</div> " +
        "<div class='col-sm-10'><div class='response-list-btm'>时间: 2016-11-09 19:40</div></div> " +
        "<div class='col-sm-2'> <div class='response-huifu' onclick='showReResponse()'>回复</div></div> "+
    "</div></li></ul>";






}


function beRed() {
    var articleTitle=document.getElementById("articleTitle");
    articleTitle.style.color="#03a9f4";

}

function beBlack() {
    var articleTitle=document.getElementById("articleTitle");
    articleTitle.style.color="#000000";
}


// 显示二级回复列表

function showReResponse() {
    var jsonObj= [{
        "user_name": "游客10068",
        "re_user_name": "NULL",
        "content": "For one second.",
        "re_floor": "1"
    }, {
        "user_name": "阿超",
        "re_user_name": "游客10068",
        "content": "你是世界之王",
        "re_floor": "2"
    }];

    var parent=document.getElementById("response_time_button");
    var child=document.createElement("div");
    child.className="re-response-wrapper";

    var grandchild=document.createElement("div");
    grandchild.className="re-response-list";
    child.appendChild(grandchild);






    var ggrandchild;
    for(var i=0;i<jsonObj.length;i++){
        ggrandchild=document.createElement("li");
        var user_name=jsonObj[i].user_name;
        var re_user_name=jsonObj[i].re_user_name;
        var content=jsonObj[i].content;
        ggrandchild.className="re-response-li"
        ggrandchild.innerHTML="<span>"+user_name+"</span> <span>回复</span>" +
            "<span>"
        if(re_user_name!="NULL") {
            ggrandchild.innerHTML+=re_user_name + "</span><span>:&nbsp;&nbsp;" + content + "</span>";
        }
        else{
            ggrandchild.innerHTML+=re_user_name + "</span><span>:&nbsp;&nbsp;" + content + "</span>";

        }

        grandchild.appendChild(ggrandchild);


    }





    parent.appendChild(child);
}