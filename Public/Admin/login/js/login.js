// JavaScript Document
//支持Enter键登录
		document.onkeydown = function(e){
			if($(".bac").length==0)
			{
				if(!e) e = window.event;
				if((e.keyCode || e.which) == 13){
					var obtnLogin=document.getElementById("submit_btn")
					obtnLogin.focus();
				}
			}
		}

    	$(function(){
    		$('#username').focus();//默认让光标定位于用户名那
			//提交表单
			$('#submit_btn').click(function(){
				show_loading();
				if($('#username').val() == ''){
					show_err_msg('用户名还没填写！');	
					$('#username').focus();
				}else if($('#password').val() == ''){
					show_err_msg('密码还没填呢！');
					$('#password').focus();
                    
				}else if($('#captcha').val() == ''){
                    show_err_msg('验证码还没填写！');
                    $('#captcha').focus();
                    
                }else{
					//ajax提交表单，#login_form为表单的ID。 如：$('#login_form').ajaxSubmit(function(data) { ... });
					$('#login_form').ajaxSubmit(function($state){
							if($state != ''){
								//alter($state);
								if($state == '验证码错误'){
									changeCapticha();//验证码输入错误，自动刷新验证码图片
									$('#captcha').focus();
								}else{
									$('#username').focus();
								}
								show_err_msg($state);
							}else{
								show_msg('登录成功！正在为您跳转...','/thinkphp/index.php/Admin/Manager/index');	
							}


					});
					//show_msg('登录成功！正在为您跳转...','/thinkphp/index.php/Admin/Manager/index');	
				}
			});
            //点重置按钮，光标定位于输入用户名处
            $('#submit_reset').click(function(){
                $('#username').focus();
            });
            //点击验证码图片时，更换验证码
            function changeCapticha(){
                var imgSrc = '/thinkphp/index.php/Admin/Login/verifyImg/s/' + Math.random();
                $('#captcha_img').attr('src',imgSrc);
            }
            $('#captcha_img').click(changeCapticha);
		});
