<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title></title>
         <link rel="stylesheet" href="./Public/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
     </head>
     <body>
         <div class="container-fluid">
             <div class="row text-center">
                 <div class="col-md-3">

                 </div>
                 <div class="col-md-6 ">
                     <h2>第三届科普漫画剧本大赛报名</h2>
                     <form role="form" class="" action="/index.php/Home/Index/insert" method="post">
                         <div class="form-group">
                             <input class="form-control" type="text" name="name" value="" placeholder="姓名">
                         </div>
                         <div class="form-group">
                             <input class="form-control" type="text" name="stuid" value="" placeholder="学号">
                         </div>
                         <div class="form-group">
                             <input class="form-control" type="text" name="college" value="" placeholder="学院">
                         </div>
                         <div class="form-group">
                             <input class="form-control" type="text" name="tel" value="" placeholder="电话" onkeyup="if(!/^\d+$/.test(this.value)) tip.innerHTML='必须输入数字，且不能有空格。'; else tip.innerHTML='';">
                              <span id="tip"></span>
                         </div>




                         <div class="form-group">
                             <input class="form-control" type="text" name="email" value="" placeholder="邮箱">
                         </div>
                         <div class="form-group">
                             <input class="form-control btn btn-primary " type="submit" value="报名">
                         </div>
                     </form>
                 </div>
                 <div class="col-md-3">

                 </div>

             </div>

         </div>

     </body>
 </html>