;$(function()
{
   'use strict';
 
/*定义变量*/
 backButton=$('.back-to-top');
 /*触发事件*/
 backButton.on('click',function()
 {
   $('html,body').animate(  /*上滑*/
     {
      scrollTop:0
     },800)  /*速度*/
 })
/*淡入淡出判断*/
$(window).on('scroll',function()
{
    /*根据与窗口高度比较调用jquery函数*/
    if($(window).scrollTop()>$(window).height()) 
        backButton.fadeIn();
    else 
      backButton.fadeOut();
})
/*主页面不予显示*/
$(window).trigger('scroll');
window.onload=function(){
for(var ii=0;ii<document.links.length;ii++)
document.links[ii].onfocus=function(){this.blur()};
})