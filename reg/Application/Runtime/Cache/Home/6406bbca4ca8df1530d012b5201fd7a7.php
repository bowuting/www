<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

         <title>第三届科普漫画剧本大赛报名</title>
         <meta name="renderer" content="webkit">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- <link rel="stylesheet" href="../../../Public/layui/css/layui.css" media="screen" title="no title"> -->
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <style media="screen">
            #foot{
                background-color: #393D49;
                font-size: 20px;
                color: white;
            }
        </style>
    </head>
    <body style="background-color:#fbfbfb">

        <hr>
        <blockquote style="background:#5FB878" class="layui-elem-quote layui-quote-nm">
            <fieldset class="layui-elem-field layui-field-title">
             <legend> 第三届科普漫画剧本大赛报名 </legend>
         </fieldset>
       </blockquote>
       <hr>


       <table class="table table-condensed">
           <tr>
               <td>
                   姓名
               </td>
               <td>
                   <?php echo ($res['name']); ?>
               </td>
           </tr>
           <tr>
               <td>
                   学号
               </td>
               <td>
                   <?php echo ($res['stuid']); ?>
               </td>
           </tr>
           <tr>
               <td>
                   学院
               </td>
               <td>
                   <?php echo ($res['college']); ?>
               </td>
           </tr>
           <tr>
               <td>
                   电话
               </td>
               <td>
                   <?php echo ($res['tel']); ?>
               </td>
           </tr>
           <tr>
               <td>
                   邮箱
               </td>
               <td>
                   <?php echo ($res['email']); ?>
               </td>
           </tr>
           <tr>
               <td>
                   报名时间
               </td>
               <td>
                   <?php echo (date("Y-m-d  H:i:s",$res['create_time'])); ?>
               </td>
           </tr>

       </table>


       <div class="well">
           如果有错误 请将正确信息发送至 bowuting@qq.com   主题:报名信息修改  谢谢
       </div>





   <blockquote  id="foot"class="layui-elem-quote">有问题联系:18883284586 </blockquote>

    </body>

    </script>
</html>