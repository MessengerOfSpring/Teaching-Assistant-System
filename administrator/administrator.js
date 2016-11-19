/**
 * Created by LiaoJinyuan on 2016/11/13.
 */

$(document).ready(function(){
    $("#message").addClass("active");
    $(".content-blk.message").show();

    $(".order-nav").click(function(){
        $(".order-nav.active").removeClass("active");
        $(this).addClass("active");
        $(".content-blk").hide();
        var s = $(this).attr("id");
        $("." + s).show();
    });

//////////////////////////////////////////////////////
    var messageRecords = [
        {
            "message_id": 32415312,
            "name": "小明ss",
            "time": "2016-11-13 15:38",
            "content": "基本信息ENG是Electronic News Gathering的缩写，字面意思是电子，新闻，采集。 ENG定义： ENG：电子新闻采集。是使用便携式的摄像，录像设备来采集电视新闻。ENG方式非常适合于现场拍摄，但它所获取的素材还需要在电子编辑设备上进行剪辑，分为前期拍摄和后期编辑两个阶段。",
            "read": false
        },
        {
            "message_id": 234245434,
            "name": "小明aa",
            "time": "2016-11-11 12:11",
            "content": "基本信息ENG是Electronic News Gathering的缩写，字面意思是电子，新闻，采集。 ENG定义： ENG：电子新闻采集。是使用便携式的摄像，录像设备来采集电视新闻。ENG方式非常适合于现场拍摄，但它所获取的素材还需要在电子编辑设备上进行剪辑，分为前期拍摄和后期编辑两个阶段。",
            "read": true
        },
        {
            "message_id": 324245234,
            "name": "小明kk",
            "time": "2016-11-10 9:55",
            "content": "基本信息ENG是Electronic News Gathering的缩写，字面意思是电子，新闻，采集。 ENG定义： ENG：电子新闻采集。是使用便携式的摄像，录像设备来采集电视新闻。ENG方式非常适合于现场拍摄，但它所获取的素材还需要在电子编辑设备上进行剪辑，分为前期拍摄和后期编辑两个阶段。",
            "read": true
        },
    ];
    /*
    var messageRecords = "";
    */
    function messageUpdate() {
         /*
         $.get("getMessageList.php", function (data) {
            messageRecords = JSON.parse(data);
         });
        */
        $("#messageLoop").children(".new").remove();
        for (var i in messageRecords) {
            var x = messageRecords[i];
            var tmp = $("#messageLoop").children(".old").clone().removeClass("old").addClass("new").show();
            tmp.find(".x-name").html(x.name);
            tmp.find(".x-time").html(x.time);
            tmp.find(".glyphicon-trash").attr("id", x.message_id);
            tmp.find(".x-content").html(x.content);
            $("#messageLoop").append(tmp);
        }
        $("#messageLoop").find(".glyphicon-trash").click(deleteMessage);
    }
    messageUpdate();
    $("#message").click(messageUpdate);

    function deleteMessage() {
        var message_id = $(this).attr("id");
        $.get("deleteMessage.php?id="+message_id);
        $(this).parents(".panel").slideUp(function () { $(this).remove() });
    }


//////////////////////////////////////////////////////
    var articleRecords = [
        {
            "article_id": 123456789,
            "title": "Java之JDK环境配置过程（图）",
            "articleDigest": "1、在Windows7操作系统下，右键，点击属性，会出现如下界面 2、选择“高级系统设置”，如下 3、接着点击“环境变量”按钮，会出现如下图： 4、找到系统变量，点击“新建”按钮，这时会弹出一个窗口，分别在变量名和变量值框中填入：JAVA_HOME和JDK的路径C:\Program Files\Java\jdk1.7.0_05，点击“确定”；... ",
            "time": "2013-06-29 00:35",
            "commentNum": 7
        },
        {
            "article_id": 223456789,
            "title": "Java之JDK环境配置过程（图）",
            "articleDigest": "1、在Windows7操作系统下，右键，点击属性，会出现如下界面 2、选择“高级系统设置”，如下 3、接着点击“环境变量”按钮，会出现如下图： 4、找到系统变量，点击“新建”按钮，这时会弹出一个窗口，分别在变量名和变量值框中填入：JAVA_HOME和JDK的路径C:\Program Files\Java\jdk1.7.0_05，点击“确定”；... ",
            "time": "2013-06-22 12:31",
            "commentNum": 12
        },
        {
            "article_id": 323456789,
            "title": "Java之JDK环境配置过程（图）",
            "articleDigest": "1、在Windows7操作系统下，右键，点击属性，会出现如下界面 2、选择“高级系统设置”，如下 3、接着点击“环境变量”按钮，会出现如下图： 4、找到系统变量，点击“新建”按钮，这时会弹出一个窗口，分别在变量名和变量值框中填入：JAVA_HOME和JDK的路径C:\Program Files\Java\jdk1.7.0_05，点击“确定”；... ",
            "time": "2013-06-09 10:12",
            "commentNum": 9
        },
    ];
    /*
    var articleRecords = "";
    */
    function articleUpdate() {
        $("#articleDetail").hide();
        $("#articleLoop").show();
        /*
        $.get("getArticleList.php", function (data) {
            articleRecords = JSON.parse(data);
        })
        */
        $("#articleLoop").children(".new").remove();
        for (var i in articleRecords) {
            var x = articleRecords[i];
            var tmp = $("#articleLoop").children(".old").clone().removeClass("old").addClass("new").show();
            tmp.attr("id", x.article_id);
            tmp.find(".x-title").html(x.title);
            tmp.find(".x-article-digest").html(x.articleDigest);
            tmp.find(".x-time").html(x.time);
            tmp.find(".x-comment-num").html(x.commentNum);
            $("#articleLoop").append(tmp);
        }
        $("#articleLoop").find(".panel-heading").click(articleShow);  //all heading created
    }
    $("#article").click(articleUpdate);

////////////////////////////
    var detailRecord = {
        "article": {
            "title": "redis和memcache的区别",
            "author": "AlexandraStan",
            "time": "2016-11-09 09:45",
            "body": "性能方面：没有必要过多的关心性能，因为二者的性能都已经足够高了。由于Redis只使用单核，而Memcached可以使用多核，所以在比较上，平均每一个核上Redis在存储小数据时比Memcached性能更高。而在100k以上的数据中，Memcached性能要高于Redis，虽然Redis最近也在存储大数据的性能上进行优化，但是比起Memcached，还是稍有逊色。说了这么多，结论是，无论你使用哪一个，每秒处理请求的次数都不会成为瓶颈。（比如瓶颈可能会在网卡）内存使用效率：使用简单的key-value存储的话，Memcached的内存利用率更高，而如果Redis采用hash结构来做key-value存储，由于其组合式的压缩，其内存利用率会高于Memcached。当然，这和你的应用场景和数据特性有关。数据持久化：如果你对数据持久化和数据同步有所要求，那么推荐你选择Redis，因为这两个特性Memcached都不具备。即使你只是希望在升级或者重启系统后缓存数据不会丢失，选择Redis也是明智的。数据结构:当然，最后还得说到你的具体应用需求。Redis相比Memcached来说，拥有更多的数据结构和并支持更丰富的数据操作，通常在Memcached里，你需要将数据拿到客户端来进行类似的修改再set回去。这大大增加了网络IO的次数和数据体积。在Redis中，这些复杂的操作通常和一般的GET/SET一样高效。所以，如果你需要缓存能够支持更复杂的结构和操作，那么Redis会是不错的选择。网络IO模型方面：Memcached是多线程，分为监听线程、worker线程，引入锁，带来了性能损耗。Redis使用单线程的IO复用模型，将速度优势发挥到最大，也提供了较简单的计算功能 。内存管理方面：Memcached使用预分配的内存池的方式，带来一定程度的空间浪费 并且在内存仍然有很大空间时，新的数据也可能会被剔除，而Redis使用现场申请内存的方式来存储数据，不会剔除任何非临时数据 Redis更适合作为存储而不是cache 。数据的一致性方面：Memcached提供了cas命令来保证.而Redis提供了事务的功能，可以保证一串 命令的原子性，中间不会被任何操作打断 。如果简单地比较Redis与Memcached的区别，大多数都会得到以下观点： 1 、Redis不仅仅支持简单的k/v类型的数据，同时还提供list，set，zset，hash等数据结构的存储。 2 、Redis支持数据的备份，即master-slave模式的数据备份。 3 、Redis支持数据的持久化，可以将内存中的数据保持在磁盘中，重启的时候可以再次加载进行使用。 4、Redis可以实现主从复制，实现故障恢复。 5、Redis的Sharding技术： 很容易将数据分布到多个Redis实例中。"
        },
        "comment": [
            {
                "article_id": 234234,
                "floor": 12,
                "re_floor": 5,
                "floorMaster": "小明",
                "time": "2016-11-10 18:03",
                "content": "LZ我要成为你这样的男人 厉害！今年大三 看到你的博客 感觉自己什么都不会！能给点建议吗 比如现在该怎么选择前进的道路 或者 着重学习那些内容呢 现在学校还在上《算法设计》我现在就在算法设计的实验课上 无意间看到你的博客的 还是感觉楼主真的很牛逼啊 楼主大大 给点建议 指点指点明路。"
            },
            {
                "article_id": 234234,
                "floor": 11,
                "re_floor": 0,
                "floorMaster": "小明",
                "time": "2016-10-14 18:43",
                "content": "LZ我要成为你这样的男人 厉害！今年大三 看到你的博客 感觉自己什么都不会！能给点建议吗 比如现在该怎么选择前进的道路 或者 着重学习那些内容呢 现在学校还在上《算法设计》我现在就在算法设计的实验课上 无意间看到你的博客的 还是感觉楼主真的很牛逼啊 楼主大大 给点建议 指点指点明路。"
            },
            {
                "article_id": 234234,
                "floor": 7,
                "re_floor": 3,
                "floorMaster": "小明",
                "time": "2016-9-14 18:43",
                "content": "LZ我要成为你这样的男人 厉害！今年大三 看到你的博客 感觉自己什么都不会！能给点建议吗 比如现在该怎么选择前进的道路 或者 着重学习那些内容呢 现在学校还在上《算法设计》我现在就在算法设计的实验课上 无意间看到你的博客的 还是感觉楼主真的很牛逼啊 楼主大大 给点建议 指点指点明路。"
            },
            {
                "article_id": 234234,
                "floor": 1,
                "re_floor": 0,
                "floorMaster": "小明",
                "time": "2016-5-10 9:33",
                "content": "LZ我要成为你这样的男人 厉害！今年大三 看到你的博客 感觉自己什么都不会！能给点建议吗 比如现在该怎么选择前进的道路 或者 着重学习那些内容呢 现在学校还在上《算法设计》我现在就在算法设计的实验课上 无意间看到你的博客的 还是感觉楼主真的很牛逼啊 楼主大大 给点建议 指点指点明路。"
            },
        ]
    }
    /*
    var detailRecord = "";
    */
    function articleShow() {
        $("#articleLoop").hide();
        $("#articleDetail").show();

        var id = $(this).parent().attr("id");
        /*
        $.get("getArticleDetail.php?article_id="+id, function (data) {
            detailRecord = data;
        })
        */
        $("#articleDetail").find(".x-title").html(detailRecord["article"]["title"]);
        $("#articleDetail").find(".x-author").html(detailRecord["article"]["author"]);
        $("#articleDetail").find(".x-time").html(detailRecord["article"]["time"]);
        $("#articleDetail").find(".x-body").html(detailRecord["article"]["body"]);

        $("#commentLoop").children(".new").remove();
        for (var i in detailRecord["comment"]) {
            var x = detailRecord["comment"][i];
            var tmp = $("#commentLoop").children(".old").clone().removeClass("old").addClass("new").show();

            if (x.re_floor == 0)
                tmp.find(".is-reply").hide();
            tmp.find(".x-floor").html(x.floor);
            tmp.find(".x-floorMaster").html(x.floorMaster);
            tmp.find(".x-re_floor").html(x.re_floor);
            tmp.find(".x-time").html(x.time);
            var queryStr = "article_id="+x.article_id+"&floor="+x.floor;
            tmp.find(".glyphicon-trash").attr("id", queryStr);
            tmp.find(".x-content").html(x.content);
            $("#commentLoop").append(tmp);
        }
        $("#commentLoop").find(".glyphicon-trash").click(deleteComment);
    }

    function deleteComment() {
        var ids = $(this).attr("id");
        $.get("deleteMessage.php?"+ids);
        $(this).parents(".panel").slideUp(function () { $(this).remove() });
    }

    $("#articleBack").click(function () {
        $("#articleDetail").hide();
        $("#articleLoop").show();
    });


///////////////////////////////////////////////////////////////////////////////
});