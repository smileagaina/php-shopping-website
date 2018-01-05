(function(a){a.fn.hoverClass=function(b){var a=this;a.each(function(c){a.eq(c).hover(function(){$(this).addClass(b)},function(){$(this).removeClass(b)})});return a};a.fn.focusText=function(c){var a=this;var b=(c==null)?$(a).val():c;a.val(b);a.focus(function(){if(a.val()==b){a.val("")}});a.blur(function(){if(a.val()==""){a.val(b)}});return a};a.fn.soChange=function(b){b=a.extend({botPrev:null,botNext:null,changeType:'',slideTime:1000,thumbObj:null,thumbNowClass:"now",changeClass:null,thumbOverEvent:true,autoChange:true,clickFalse:true,overStop:true,changeTime:5000,delayTime:300,start:1},b||{});var h=this;var i;var k=h.length;var e=0;var g=0;var c=[];var f;var hasthumb;var thumb;if(b.thumbObj!=null){hasthumb=true;thumb=a(b.thumbObj)}else{hasthumb=false}function d(){if(e!=g){if(hasthumb){thumb.removeClass(b.thumbNowClass).eq(g).addClass(b.thumbNowClass)}if(b.changeClass!=null){h.eq(e).removeClass(b.changeClass);h.eq(g).addClass(b.changeClass)}else{if(b.changeType=='fade'&&b.slideTime>0){h.eq(g).fadeIn(b.slideTime);h.eq(e).fadeOut(b.slideTime)}else{h.eq(g).css("visibility","visible");h.eq(e).css("visibility","hidden")}}e=g;if(b.autoChange==true){stopAll();start()}}}function stopAll(){for(var i=0;i<c.length;i++){clearInterval(c[i])}}function start(){c.push(setInterval(j,b.changeTime))}function j(){g=(e+1)%k;d()}if(b.botNext!=null){a(b.botNext).click(function(){if(h.queue().length<1){runNext()}return false})}if(b.botPrev!=null){a(b.botPrev).click(function(){if(h.queue().length<1){g=(e+1)%k;d()}return false})}if(hasthumb){if(thumb.index(a("."+b.thumbNowClass)[0])!==-1){g=thumb.index(a("."+b.thumbNowClass)[0])}else{g=b.start-1;thumb.removeClass(b.thumbNowClass).eq(0).addClass(b.thumbNowClass)}thumb.click(function(){g=thumb.index(a(this));d();if(b.clickFalse==true){return false}});if(b.thumbOverEvent==true){thumb.hover(function(){g=thumb.index(a(this));f=setTimeout(function(){d();stopAll()},b.delayTime);return false},function(){clearTimeout(f);return false})}}if(b.changeClass!=null){h.removeClass(b.changeClass).eq(g).addClass(b.changeClass)}else{if(b.changeType=='fade'&&b.slideTime>0){h.css("display","none").eq(g).css("display","block")}else{h.css("visibility","hidden").eq(g).css("visibility","visible")}}if(b.autoChange==true){c.push(setInterval(j,b.changeTime));if(b.overStop==true){h.mouseover(function(){stopAll();return false}).mouseout(function(){start();return false})}}d();this.stop=stopAll;this.start=start;h.bind("soChange",function(event,i){g=i;d()});return this}})(jQuery);
//lazyload
function lazyload(option){var settings={defObj:null,defHeight:-200};settings=$.extend(settings,option||{});var defHeight=settings.defHeight,defObj=(typeof settings.defObj=="object")?settings.defObj.find("img"):$(settings.defObj).find("img");var pageTop=function(){return document.documentElement.clientHeight+Math.max(document.documentElement.scrollTop,document.body.scrollTop)-settings.defHeight};var imgLoad=function(){defObj.each(function(){if($(this).offset().top<=pageTop()){var src2=$(this).attr("src2");if(src2){$(this).attr("src",src2).removeAttr("src2")}}})};imgLoad();$(window).bind("scroll",function(){imgLoad()})}

function mlazyload(option){var settings={defObj:null,defHeight:0,fn:null};settings=$.extend(settings,option||{});var defHeight=settings.defHeight,defObj=(typeof settings.defObj=="object")?settings.defObj:$(settings.defObj);if (defObj.length<1){return};var pageTop=function(){var d=document,y=(navigator.userAgent.toLowerCase().match(/iPad/i)=="ipad")?window.pageYOffset:Math.max(d.documentElement.scrollTop,d.body.scrollTop);return d.documentElement.clientHeight+y-settings.defHeight};var moduleLoad=function(){if (defObj.offset().top<=pageTop()&&!defObj.attr("load")){defObj.attr("load","true");if (settings.fn){settings.fn();}}};moduleLoad();$(window).bind("scroll",function(){moduleLoad();});}

//??????§Ý?
function swap(_img){
    var img=$(_img).find("img");
    var path=img.attr("src");
    var rel=img.attr("rel");
    img.attr("src",rel).attr("rel",path);
}

 
    
//????????
function addFavorite(surl,stitle){
    var sURL = surl ;
    var sTitle = stitle;
    try{
        window.external.addFavorite(sURL, sTitle);
    }
    catch (e){
        try{
            window.sidebar.addPanel(sTitle, sURL, "");
        }
        catch (e){
             alert("???????????????????????!\n??????¨°??????Ctrl+D???????");
        }
    }
}

 
function isemail(str)
{
    var search_str=/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
    if(!search_str.test(str))
        {
            return false;
        }
 return true;       
}
 
 
function codeF(e)
{
 
	$('img'+e).attr('src','/shop/code.php?'+Math.random()).show();
} 

//????????
function updataCart(lx,id){
    var sum=parseInt($('#buy_quantity'+id).val());
 
      switch(lx)
      {
          case 1:
               sum+=1;
              break;
          case 2:
              sum-=1;
              break;
              
             default:
                 
      }
        if(sum==0)
            {
                if(confirm('??????????'))
                    {
                        delCart(id);
                    }else{
                      
                    }
                 return false;     
            }
      
           jQuery.ajax({
           url:WEBDIR+"ajax/ajaxCart.php",
           type:"POST",
           data:"id="+id+"&action=add&sum="+sum,
           success:function(data){
               switch(data)
               {
                   case "nologin":
                         LoginDialog();
                       break;
 
                   case "4": 
                       $('#dialogInfo').html('??????????????????????????????????ÖÎ??????????<span style="color:#f00;font-weight:bold;">'+sum+'</span> ??<br/>???????????????????????????????,???????????????????????,??§Ý????????');
	                    messageDialog('????????????',500,200,'???');
                       break;
                    case "1":
                        location.href=WEBDIR+"cart.php";
                        break;
                   default:
                        $('#dialogInfo').html('???????????,??????????,???????????????????????,??§Ý????????');
	                messageDialog('????????????',500,200,'???');                      
                       break;
               }
           },
           error:function(){
               $('#dialogInfo').html('???????????,?????????!');
	       messageDialog('<?php echo $webname;?>??????',500,200,'???'); 
           }
        });    
        return ;
    $('#buy_quantity'+id).val(++sum);
 
    
}
 
//???????
function delCart(id){
    jQuery.ajax({
        url:WEBDIR+"ajax/ajaxCart.php",
        type:"POST",
        data:"action=del&id="+id,
        success:function(data){
             switch(data){
                 case "1":
                      location.reload();
                   break;
                 default:
                    $('#dialogInfo').html('??????,?????????!');
	            messageDialog('??????',500,200,'???');  
                     break;
             }
        },
        error:function(){
             $('#dialogInfo').html('??????,?????????!');
	     messageDialog('??????????????',500,200,'???');
        }
    });
}



function messageDialog(title,widths,heights,buttonInfo,func)
{
	//alert(buttonInfo);
    $("#dialog").attr("title",title);		
	$("#dialog:ui-dialog" ).dialog( "destroy" );
	var obj = {
					height: heights,
					width:widths,
					buttons: {},
			  		modal: true,
					closeText: 'hide'
				//	position:'bottom',
				//	zIndex:9999
	             }
	 obj.buttons[buttonInfo]=function(){$(this).dialog("close");func()};
				$( "#dialog" ).dialog(obj);
	return false;
}

//ajax???
 function get_page(obj,url)
{
//???????????????jquery???????????????
   //alert(url);
   $("#"+obj+"").load(url);
}

function LoginDialog(mc,id)
{
 	$("#dialog-form input").val('');
        $("#dialog-form h1").html('');
	$("#dialog-form input").removeClass("ui-state-error");
	$("#dialog-form:ui-dialog" ).dialog("destroy" );
        $( "#dialog-form").dialog({
			height: 260,
			width: 350,
			modal: true,
			buttons: {"???":function(){
                   
				if(!$('#name').val())
				{
					$('#dialog-form h1').html('???????????????!');
					$("#name").addClass('ui-state-error');
					return false;
				}
				else
				{
					if(!isemail($('#name').val()))
					{
					  $('#dialog-form h1').html('??????????!');
					  $("#name").addClass('ui-state-error');
					  return false;
					}
				}
				if(!$('#password').val())
				{	 
                                        $('#dialog-form h1').html('??????????!');
					$("#password").addClass('ui-state-error');
					return false;
				}
 				if(!$('#code').val())
				{
                                        $('#dialog-form h1').html('???????????!');
					$("#code").addClass('ui-state-error');
					return false;
				}     
                                  
                                  jQuery.ajax({
                                      url:WEBDIR+"ajax/ajaxUserLoginSava.php",
                                      type:"POST",
                                      data:$('#ajaxlogin').serialize(),
                                      success:function(data){
                                            switch(data)
		  {
			  case "0":
                                $('#dialog-form h1').html('????????????!');
			        $('#code').addClass('ui-state-error');
				break;
			  case "-1":
			        $('#dialog-form h1').html('????????!');
				$("#name").addClass('ui-state-error');
				break;	
			  case "-2":
                                $('#dialog-form h1').html('???????!');
				$("#password").addClass('ui-state-error');
				break;
			  case "1":
			     $('#dialog-form').dialog("close");
			    $('#dialogInfo').html('??????????¦Ä???????????,????????!');
	                    messageDialog('?????',500,200,'???');	
				 break;
			  case "3":
			     $('#dialog-form').dialog("close");
			    $('#dialogInfo').html('???????????????,???????????????????!');
	                    messageDialog('?????',500,200,'???');	
				 break;	 
			  case "2":
                            $('#dialog-form').dialog("close");
			    $('#dialogInfo').html('??????,?????????????? ????!');
	                    messageDialog('???????',500,200,'???');	
			         location.reload();
				 break;	 
			   default:
                               $('#dialog-form').dialog("close");
			    $('#dialogInfo').html('???????,??????????!');
	                    messageDialog('???????',500,200,'???');	
                                                   
		  }
                                      },
                                      error:function(){
                                          $('#dialogInfo').html('??????,?????????!');
	                                  messageDialog('??????',500,200,'???');
                                      }
                                  });
                                  return false;
				},
			"???":function(){$(this).dialog("close");}
			}
		});
				
			 
	return false;
}





$(function(){
 $("#dialog" ).hide();
 $("#dialog-form").hide();
	$(".top-my-mbb").hoverClass("my-mbb-over");
	$(".header-search-input").bind("focus",function(){
		$(".header-search-form").addClass("header-search-over");
	}).bind("blur",function(){
		$(".header-search-form").removeClass("header-search-over");
	});
	$(".main-nav li").hoverClass("over");
	$(".head-quickbuy").hoverClass("head-quickbuy-over");
	$(".sub-nav dl").hoverClass("s-over");
	$(".hotcate-list .item").hoverClass("cate-over");
	$(".header-search-input").focusText();
	$(".subtext").focusText('??????????Email???');
	$(".b-item").hover(function(){swap(this);},function(){swap(this);})

	lazyload({defObj: ".lazybox"});
	//10???????????
	setTimeout(function (){lazyload({defObj: ".lazybox"});},9000);

	//????§Ý????
	var $bannerobj = $('#js-index-banner .focusbanner');
	var $fashion = $('#fashion .fashion-pic');
	setTimeout(function(){
		$bannerobj.soChange({thumbObj:'#js-index-banner .span-focus',thumbNowClass:'span-focus-now',clickFalse:false});
		$fashion.soChange({thumbObj:'#fashion .f-p-num',thumbNowClass:'now',clickFalse:false});
		},2000);
	setTimeout(function(){$bannerobj.find('img').each(function(){$(this).attr('src',$(this).attr('src2'));});},6000);
	$('#news-tab .news-box').soChange({thumbObj:'#news-tab .news-tab-h2',thumbNowClass:'tabnow',autoChange:false,clickFalse:false});

	//??????§Ý?
	var _a=$("#quick-link-a a");
	var _b=$("#quick-link-b a");
	var a_c=_a.soChange({changeClass:"over",changeTime:3000});
	var b_c=_b.soChange({changeClass:"over",changeTime:3000});
	_a.mouseover(function(){
		a_c.trigger("soChange",[_a.index(this)]);
		a_c.stop();
	}).mouseout(function(){
		a_c.start();
	})
	_b.mouseover(function(){
		b_c.trigger("soChange",[_b.index(this)]);
		b_c.stop();
	}).mouseout(function(){
		b_c.start();
	})

 
 

	//??????????
	if ($("#js_ads_banner_top_slide").length){
		var $slidebannertop = $("#js_ads_banner_top_slide"),$bannertop = $("#js_ads_banner_top");
		setTimeout(function(){$slidebannertop.find('img').attr('src',$slidebannertop.find('img').attr('src2'));},2000);
		setTimeout(function(){$bannertop.slideUp(1000);$slidebannertop.slideDown(1000);},2500);
		setTimeout(function(){$slidebannertop.slideUp(1000,function (){$bannertop.slideDown(1000);});},8500);
	}
	
	//???????
	var comment_list = $("#comment-list");
	if(comment_list.find(".item").size()>5){
		var comment_interval = comment_scroll();
		comment_list.bind("mouseover",function(){
			clearInterval(comment_interval);
		}).bind("mouseout",function(){
			comment_interval = comment_scroll();
		});
	}
	
	function comment_scroll(){
		return setInterval(function(){
			var comment_list_last = comment_list.find(".item:last").height(0);
			comment_list.prepend(comment_list_last);
			comment_list_last.animate({height:93},600);
		},3600);
	}

	//ad????
	if($("#js_moveclew").length>0){
		auto_move('#js_moveclew');
	}
	
$(window).scroll(function(){
		var topPx =  $(document).scrollTop();
		var screenHeight =  $(window).height();
		var dialogHeight = $(".ui-dialog").height();
		var newTop = topPx+(screenHeight-dialogHeight)/2
		//alert(newTop);
		$('.ui-dialog').css('top',newTop);
 });
	
	    //???????
        $("#name").focus(function(){
//             $('#dialog-form h1').html('???????????????!');
             $(this).select();             
             $(this).removeClass("ui-state-error");
            
        });
      
       
	   //??????
       $("#name").blur(function(){
            		      if($('#name').val())
				{	
                                   
					if(!isemail($('#name').val())){
                                              $('#dialog-form h1').html('????????,????????Email!');
					}
                                        else
                                            {
                                                $('#dialog-form h1').html('');  
                                            }
 
				}
				else
				{
				    $('#dialog-form h1').html('');   
				}
       });
       
       //???????
       $("#password").focus(function(){
          $(this).select();
          $(this).removeClass("ui-state-error");
       });
       
       //??????
        $("#password").blur(function(){
            if($(this).val())
                {
                   $('#dialog-form h1').html('');   
                   // $(this).addClass('ui-state-error');
                }
       });
       //????????
       $("#code").focus(function(){
          $(this).select();
          $(this).removeClass("ui-state-error");
       });
       
       //???????
        $("#code").blur(function(){
            if($(this).val())
                {
                    $('#dialog-form h1').html('');
                }
       });	
	   
 
});

