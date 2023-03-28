<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>nav</title>
    <link rel="stylesheet" href="../css/nav.css">
    <!-- 响应式设计，适应不同屏幕大小 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 样式代码 -->
    <style>
        /* 隐藏导航栏的样式 */
        .new-nav-collapse {
            display: none;
        }

        /* 在小屏幕下显示导航栏的样式 */
        @media screen and (max-width: 768px) {
            .new-nav-collapse {
                display: block;
            }

            .new-nav-ul {
                display: none;
            }
        }
    </style>
</head>
<body>
<!-- 导航栏折叠按钮 -->
<div class="new-nav-collapse">
    <button id="new-nav-btn" class="new-nav-btn">&#9776;</button>
</div>

<!-- nav标签，定义导航链接的部分 -->
<div class="new-nav">

    <ul class="new-nav-ul">
        <li><a href="../tobe/index.php">柒零陆</a>
            <ul class="new-nav-sub-menu">
                <li><a href="#">回望·过去</a></li>
                <li><a href="#">记录·当下</a></li>
                <li><a href="#">不忘·初心</a></li>
                <li><a href="#">展望·未来</a></li>
                <li><a href="#">加入·关注</a></li>
            </ul>
        </li>
        <li><a href="../tobe/fix01.php">生存·商业</a>
            <ul class="new-nav-sub-menu">
                <li><a href="../tobe/ruzono.php">俄罗斯电商</a></li>
                <li><a href="../tobe/zhibo01.php">YouTube直播</a></li>
                <li><a href="../tobe/fixphone01.php">维修·改装</a></li>
                <li><a href="../tobe/data01.php">数据·安全</a></li>
                <li><a href="../tobe/funengchuantonghangyegaizhao.php">智能化改造工程</a></li>
                <li><a href="../tobe/vpn01.php">科学·上网</a></li>
                <li><a href="../tobe/siyouyunfuwu.php">私有云服务</a></li>
                <li><a href="../tobe/qugg01.php">电脑去广告</a></li>
            </ul>
        </li>
        <li><a href="../tobe1/guoduchangsi.php">过渡·尝试</a>
            <ul class="new-nav-sub-menu">
                <li><a href="../tobe1/webkaifa.php">web开发</a></li>
                <li><a href="../tobe1/xiaochengx.php">小程序开发</a></li>
                <li><a href="../tobe1/appjisu.php">app技术服务</a></li>
                <li><a href="../tobe1/qianrushikf.php">嵌入式开发</a></li>
                <li><a href="../tobe1/plckaifa.php">plc开发</a></li>
                <li><a href="../tobe1/danpianji.php">单片机开发</a></li>
                <li><a href="../tobe1/3d.php">3D打印优化</a></li>
                <li><a href="../tobe1/AIshuzi.php">AI数字生命</a></li>
            </ul>
        </li>
        <li><a href="../tobe2/fazhanyuyanfa.php">发展·研发</a>
            <ul class="new-nav-sub-menu">
                <li><a href="../tobe2/fangshengjixuebi.php">仿生·机械臂</a></li>
                <li><a href="../tobe2/Aizhibodaihuo.php">AI直播带货</a></li>
                <li><a href="../tobe2/AInengyuan.php">AI能源·效率</a></li>
                <li><a href="../tobe2/AIshuanli.php">AI算力·租赁</a></li>
                <li><a href="../tobe2/siyouyunGPT.php">私有云GPT</a></li>
            </ul>

        </li>
        <li><a href="../tobe3/wenguzhixin.php">温故·知新</a>
            <ul class="new-nav-sub-menu">
                <li><a href="../tobe3/gongtongxuexi.php">共同学习</a></li>
                <li><a href="../tobe3/shuxue.php">数学</a></li>
                <li><a href="../tobe3/yingyu.php">英语</a></li>
                <li><a href="../tobe3/biancheng.php">编程</a></li>
                <li><a href="../tobe3/3dsheji.php">3D设计与打印</a></li>
                <li><a href="../tobe3/huaxue.php">化学</a></li>
                <li><a href="../tobe3/rengongzhin.php">人工智能入门</a></li>
                <li><a href="../tobe3/shengwu.php">生物</a></li>
                <li><a href="../tobe3/wuli.php">物理</a></li>
            </ul>
        </li>
    </ul>

</div>
<script>
    // 获取导航栏元素和按钮元素
    var newNav = document.querySelector('.new-nav-ul');
    var newNavBtn = document.querySelector('#new-nav-btn');

    // 在按钮被点击时切换导航栏的显示状态
    newNavBtn.addEventListener('click', function() {
        if (newNav.style.display === 'block') {
            newNav.style.display = 'none';
        } else {
            newNav.style.display = 'block';
        }
    });
</script>
</body>
</html>
