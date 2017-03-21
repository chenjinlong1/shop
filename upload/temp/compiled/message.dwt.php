<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="{$keywords}" />
<meta name="Description" content="{$description}" />
<meta name="Description" content="{$description}" />
{if $auto_redirect}
<meta http-equiv="refresh" content="3;URL={$message.back_url}" />
{/if}
<!-- TemplateBeginEditable name="doctitle" -->
<title>{$page_title}</title>
<!-- TemplateEndEditable --><!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="{$ecs_css_path}" rel="stylesheet" type="text/css" />
{* 包含脚本文件 *}
{insert_scripts files='common.js'}
<style type="text/css">
p a{color:#006acd; text-decoration:underline;}
</style>
</head>
<body>
<!-- #BeginLibraryItem "/library/page_header.lbi" --><!-- #EndLibraryItem -->

<div class="blank"></div>
<div class="block">
  <div class="box">
   <div class="box_1">
    <h3><span>{$lang.system_info}</span></h3>
    <div class="boxCenterList RelaArticle" align="center">
      <div style="margin:20px auto;">
      <p style="font-size: 14px; font-weight:bold; color: red;">{$message.content}</p>
        <div class="blank"></div>
        <!-- {if $message.url_info} -->
          <!--{foreach from=$message.url_info key=info item=url}-->
          <p><a href="{$url}">{$info}</a></p>
          <!--{/foreach}-->
        <!--{/if}-->
      </div>
    </div>
   </div>
  </div>
</div>
<div class="blank5"></div>
<!--帮助-->
<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <!-- #BeginLibraryItem "/library/help.lbi" --><!-- #EndLibraryItem -->
   </div>
  </div>
</div>
<div class="blank"></div>
<!--帮助-->
<!--友情链接 start-->
<!--{if $img_links  or $txt_links }-->
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <!--开始图片类型的友情链接{foreach from=$img_links item=link}-->
    <a href="{$link.url}" target="_blank" title="{$link.name}"><img src="{$link.logo}" alt="{$link.name}" border="0" /></a>
    <!--结束图片类型的友情链接{/foreach}-->
    <!-- {if $txt_links} -->
    <!--开始文字类型的友情链接{foreach from=$txt_links item=link}-->
    [<a href="{$link.url}" target="_blank" title="{$link.name}">{$link.name}</a>]
    <!--结束文字类型的友情链接{/foreach}-->
    <!-- {/if} -->
  </div>
 </div>
</div>
<!--{/if}-->
<!--友情链接 end-->
<div class="blank"></div>
<!-- #BeginLibraryItem "/library/page_footer.lbi" --><!-- #EndLibraryItem -->
</body>
</html>
