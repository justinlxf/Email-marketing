<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>邮件营销系统</title>
  <link rel="stylesheet" type="text/css" href="/Public/Css/public.css?v1.0" />
  <script type="text/javascript" src="/Public/Js/jquery.js?v1.7.1"></script>
  <script type="text/javascript" src="/public/string?v1.0"></script>
  <script type="text/javascript" src="/Public/Js/jquery.validate.js?v1.11.1"></script>
  <script type="text/javascript" src="/Public/Js/formcheck.js?v1.0"></script>
  <script type="text/javascript" src="/Public/Js/common.js?v1.0"></script>
</head>
<body id="admin">
	<div id="Tasks_tasklist">
	<!-- 头部 -->
		<div id="header">
			<div id="logo">
				<a href="/index/index/"><img src="/Public/Images/slogo.png" alt="logo"></a>
			</div>

			<div id="headright">
			

        <ul id="headlink">
          <li><a href="/senders/senderadd" class="addpeople">发件人添加</a></li>
          <li><a href="/themes/themeadd" class="addtheme">模板添加</a></li>
          <li><a href="/tasks/taskadd" class="sendnew">任务添加</a></li>

        </ul>
			</div>
		</div>
	<!-- 主体 -->
	<div id="center">
	<!-- 左边栏 -->
	<div id="leftbar">
		<ul class="Tasks">
			<li class="tit"><a>任务管理</a></li>
			<li>
				<ul>
				<li><a href="/tasks/tasklist">任务列表</a></li><li><a href="/tasks/taskadd">任务添加</a></li>				</ul>
			</li>
		</ul>
        
        
        <ul class="Senders">
			<li class="tit"><a>发件人管理</a></li>
			<li>
				<ul>
				<li><a href="/senders/senderlist">发件人列表</a></li>
                <li><a href="/senders/sendergroup">发件人组</a></li><li><a href="/senders/senderadd">发件人添加</a></li>				</ul>
			</li>
		</ul>
      
          <ul class="Senders">
			<li class="tit"><a>收件箱管理</a></li>
			<li>
				<ul>
				<li><a href="/accounts/accountlist">收件人列表</a></li><li><a href="/accounts/accountgroup">收件人组</a></li><li><a href="/accounts/accountadd">收件人添加</a></li>				</ul>
			</li>
		</ul>
        
      <ul class="Themes">
			<li class="tit"><a>模板管理</a></li>
			<li>
				<ul>
				<li><a href="/themes/themelist">模板列表</a></li><li><a href="/themes/themeadd">模板添加</a></li>	<li><a href="/themes/yuminglist">域名库管理</a></li>				</ul>
			</li>
		</ul>
        
            <ul class="Themes">
			<li class="tit"><a>营销统计</a></li>
			<li>
				<ul>
				<li><a href="/tongji/lists/">整体分析</a></li><li><a href="/tongji/visitor/">流量趋势</a></li>				</ul>
			</li>
		</ul>
        
        </div>
	<!-- 核心模块 -->
		<div id="rightbar">
		<h1>任务添加</h1>
		
		<!-- 帮助信息 -->
				<div class="alert alert-info">
				    <button class="close" data-dismiss="alert">×</button>
				    <strong>帮助!</strong>
					<ol>
	
            <li>请添加任务到系统
            </li>
        
        	</ol>
				</div>
		
<div class="box">
  <p class="boxtitle">
    <img alt="tag" src="/Public/Images/tag.png">添加任务  </p>
  <div class="boxitem">
       <form action="/tasks/taskadd/save" method="post" id="taskform">
            <dl>
                <dt>任务名称</dt>
                <dd><input type="text" name="name" value="" size="25">
                  <span class="red">*</span>
                </dd>
                <br class="cb">

                <dt>邮件模板</dt>
               <dd>
                 <input type="text" name="name" value="" size="25">        
                 <span class="red">*（每个模板请按照,隔开）</span>
                <br class="cb">
                                <br class="cb">
           
                <dt>发件人组邮箱</dt>
                <dd>
                  <select name="sendemail" id="sendemail">

              <?php if(is_array($sendmaildata)): foreach($sendmaildata as $key=>$val): ?>
                 <option value="<?php echo $val['groupid']; ?>"><?php echo $val['name']; ?> (共<?php echo $val['count']; ?>)</option>
              <?php endforeach; endif; if(empty($sendmaildata)): echo '"empty'; endif; ?>

               </select>        

                </dd>
                <br class="cb">



                 <dt>收件组邮箱</dt>
                <dd>
                   <select name="addresseeemail" id="addresseeemail">
                   <?php if(is_array($accountgroupdata)): foreach($accountgroupdata as $key=>$val): ?>
                 <option value="<?php echo $val['groupid']; ?>"><?php echo $val['name']; ?> (共<?php echo $val['count']; ?>)</option>
              <?php endforeach; endif; if(empty($accountgroupdata)): echo '"empty'; endif; ?>
              </select>        

      
                <span class="red">*</span>
            
                </dd>
                <br class="cb">

          



				 <dt>发送服务商</dt>
                <dd>
                <select name="emailsj" id="sender_id">
                <option value="mailgun">mailgun</option>
                <option value="postmarkapp">postmarkapp</option>
                </select> 
                <span class="red">*</span>
            
                </dd>
                <br class="cb">
                
                
                 <dt>发送模式</dt>
                <dd>
                <select name="sender_moshi" id="sender_id">
                <option value="sendlist">发送到列表</option>
                <option value="sendmail">发送每个邮件</option>
                </select> 
                <span class="red">*</span>
            
                </dd>
                <br class="cb">


              <dt>时间间隔(秒)</dt>
                <dd>
               
               
              <input type="text" name="sendseelp" value="" size="25">
               <span class="red">*</span>
                </dd>
                <br class="cb">

              

                <br class="cb">
                <dt>&nbsp;</dt>
                <dd><input type="submit" value="提交" name="submit"></dd>
            </dl>
   
        </form>
        <br class="cb">
  </div>
</div>
				<br>
        <div class="loadingwrapper"><span class="loading"></span></div>
	</div>
    
    
 



<link rel="stylesheet" type="text/css" href="/Public/Css/colorbox.css?v1.3" />
<script type="text/javascript" src="/Public/Js/colorbox.js?v1.3.19.3"></script>
<script type="text/javascript" src="/Public/Js/jquery.zxxbox.min.js?v4.0"></script>
<script type="text/javascript" src="/Public/Js/lhgcore.min.js?v1.4.5"></script>
<script type="text/javascript" src="/Public/Js/lhgcalendar.min.js?v2.0.3"></script>
<script type="text/javascript">
$(function(){
    $(".preview").colorbox({width:"850px",scrolling:false});
    J('#schedule_time').calendar({format:'yyyy-MM-dd HH:mm:ss'});
})
var delurl='/tasks/taskdel';
var tasktesturl='/tasks/tasktest';
var tasksendurl='/tasks/tasksend';
</script>

				<br />
        <div class="loadingwrapper"><span class="loading"></span></div>
	</div>
		<!-- 底部 -->
		</div>
		<div id="footer">
			2016 &copy;
			Email: <a href="mailto:248278242@qq.com">248278242@qq.com</a>
		</div>
	</div>
</body>
</html>