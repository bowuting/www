<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

</script>

<style type="text/css">
tr{
background:blue;
}
</style>
</head>
    <body>
        <table border="1">
            <tr>
                <td>列1</td><td>列2</td>
            </tr>
            <?php
            $mysql = mysql::getIns();
            $list = $mysql->getAll('select * from test');
            ?>
            <?php foreach($list as $v) { ?>
            <tr>
                <td><?php echo $v['t1'];?></td>
                <td><?php echo $v['t2'];?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>



