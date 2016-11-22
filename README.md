# Teaching-Assistant-System
## Specification&&Requirements

## 连接远程数据库
- 远程连接数据库即可对数据库进行增删改查
- Windows下命令：mysql -uzjuseG04 -h 120.77.34.254 -p  
password:exciting
- Linux or Mac命令 ./mysql -uzjuseG04 -h 120.77.34.254 -p  
password:exciting
- php文件连接函数中，服务器ip把localhost改为120.77.34.254，账号改为zjuseG04,密码改为exciting  
端口名仍为3306，数据库名仍为teaching_db
- 后端统一include 'connect.php'连接远程数据库

## 命名规范
- 变量：小驼峰命名  例：bookTicket
- 数据表名，字段名：下划线 例如：stu_name
- 伪类：中划线 例：.icon-black {color: black;}

#### 需要二次迭代的内容
- 消息通知（评论区以及讨论区、答疑区的回复通知、被删帖通知）
- 搜索功能
- topic自动增加标签


### 教师需求:
#### (以下内容为工程需求总则，并根据访谈以及例会内容补充)
#### 迭代式开发，细节有待二次开发补充
- 网站上要有系统的课程介绍包括项目管理,需求工程等几门课的课时安排、教学计划、 使用教材、国际国内背景、考核方式、和学生选这门课所需要的知识背景,以及大作 业的介绍。并可以在以后增加另外课程的时候可以定制.
- 网站要有教师介绍,对任课老师的以往教学、科研成果,及其教学风格,出版书籍, 所获荣誉的详细介绍
- 课件、模板、参考资料、以往优秀作业、教学视频、音频资料下载,可以及时更新。 本班老师同学可以通过账号下载,其他用户可以在线浏览简化版课件。（注：简化版提供部分在线预览的功能，不能下载。例如可以预览前10页，游客可以自由复制粘贴简化版课件。）
- 教师消息发布栏用于老师发布作业点评、临时课程变更等通知。
- 网站上要有网站向导即使用指南。(注1：后一条的网站更新信息加在使用指南最前面。注2：使用指南整合成一份，但可以注明某个功能哪些用户可以使用。)
- 最新信息:公布老师最近的一些教学或外出交流的心得,以及网站一些最近更新信息的介绍。
- 友情连接(如网上选课主页)有老师要求管理员实时更新。（注：浙大网、教务网）
- 提供专门的作业点评,作业完成情况跟踪的功能,对学生的作业,和课后作业讨论进行点评.
- 老师要有设置作业逾期惩罚机制的接口
### 学生需求:
- 课件下载功能,包括以往的旧版本课件,以及最新的课件。
- 能下载老师提供的参考资料(含电子教材、历年试卷、补课资料,以及老师的教学交流文章)并且网站能及时更新这些资料。下载的速度能够得到保证:要求同时可容纳10人 下载,并且人均速度能达到50kb/s。
- 能及时看到老师的通知(含课程相关通知及作业点评)。
- 如果教师供的是多媒体资料,网站能供下载及在线观看功能(如课堂录像)。
- 网站界面要求简洁大方,有网站导航、相关链接(含学校选课系统、学院网页、需求相关主题网站)
- 网站提供通过 问方式的密码取回功能。
- 网站能提供让分组的各个团队能有团队内部的交流工具(如论坛,不同团队可以申请认证板块,非团队成员不能浏览使用,但希望教师可以进入各个板块进行一定的指导,而网站管理人员也可管理认证板块)。(注：自己本身可以编辑自己的帖子。管理员和老师有对所有的帖子进行编辑和删除的权限）
- 网站能提供一定资料共享功能(如论坛有上传下载附件功能、但对附件大小有限制,不得大于2M)（注1：共享的文件直接附在帖子后面。注2:2M的可能过小，可以给管理员提供一个接口来修改。）
- 网站能较醒目地 供教师的联系方式(尽量详细)。
- 网站可以提供站内文章标题搜索功能。(注：所有站内的东西都可以搜索。)
- 网站能够提供学生自身作业提交功能,并可以跟踪作业的批复情况。（注：只有自己能看见自己的分数，别人看不见。作业迟交，系统可以给一个折扣，有一个惩罚机制。迟交48小时过后，每过4个小时递减一定分数（%5），作为默认的机制。老师可以另外自定义的其他的惩罚机制。）
### 网站游客需求:
- 网站提供项目管理,需求工程,对象建模,以及软件工程相关课程、还有老师的详细介绍,并放在网站显著位置。
- 相关链接(含学校选课系统,以及需求相关主题网站)。
- 网站允许游客可以针对网站内容留言(如提供留言板的功能,留言者有EMAIL可选项,用于信息反馈)。（注：留言要让管理员审核一下才能发表。留言板实现一种方式就行，要么集中在一起，要么每个文章下面都提供）
- 网站管理员不随便删除游客留言。


### 其他根据第一次访谈补充的著名
- 助教具有批改作业、上传课件的权限，但不具有作业布置、分数提交的权限。
- 管理员一定要有。老师有最高的权限，老师和管理员的权限等同。管理员由老师直接指定。
- 学生账号的初始账号可以直接由老师录入，可以批量导入，也可以学生自主申请，老师审核。
- 尽量考虑安全，界面不要太繁琐，可以简洁一点。


## 模块设计

1、确认系统的总体设计参照中国大学MOOC网站，但是在模块设计时要具体设计具体分析。  

2、在首页按照课程划分入口，在首页提供学生入口、教师入口、助教入口和管理入口。如果不在首页登录，则以游客身份进入。在首页提供课程选择。  

3 、学生入口的相关模块参照中国大学MOOC网站，提供选项卡  
- 课程介绍模块：课程介绍直接显示正文，课程介绍右侧提供老师链接
- 最新文章模块：提供文章标题列表，标题就是链接。提供老师的文章下载功能
- 通知模块：提供通知列表，点开任通知即可显示内容
- 课程资料模块：参照中国大学MOOC,提供资料或者资料下载链接
- 作业系统模块：提供作业链接，为每一个作业提供单独界面。作业界面或者提供作业内容或者显示报告、代码上传界面。看到作业点评  
- 答疑版块模块：分为综合讨论区和小组讨论区和老师答疑区，小组讨论区为小组内部讨论发帖回帖,综合讨论区所有人可见，老师答疑区内可以向老师提问  
-  站内文章标题搜索

4、教师入口的相关模块如下：  
- 发布文章模块  
- 上传课程资料模块  
- 发布作业模块，作业点评，作业完成情况跟踪，评分 
- 跳转到学生视角模块，进入答疑版块答疑模块
- 发布通知模块  
- 录入学生信息  

5、助教入口的相关模块与老师模块相比，缺少作业发布和评分模块  

6、管理员入口的相关模块如下：  
- 查看网站留言、删除网站留言（留言表）
- 删除文章评论（评论表）
- 删除帖子、帖子评论（帖子表、帖子回复表）
- 添加课程（课程表）
- 添加教师（教师表）
- 更改友情链接
- 发布网站更新信息（用户指南里）
- ~~其他的老师权限//有待确认，虽然这是第一次需求访谈室确认，但不合理~~


## 其他
- bootStrap请用仓库中上传的版本

## 分工
### 前端：
- 章世超：教师入口部分模块
- 谢俊东：模板+学生入口部分模块
- 李博奥：通知+作业和实验报告相关模块
- 廖金元：负责管理员入 模块

### 后端：张宇晴、王承伟  


<<<<<<< HEAD
=======
测试 测试2
>>>>>>> a1be64f1db92524348733bccb6e3caeb60c4b523


  [1]: ./images/1478767630643.jpg "1478767630643.jpg"
