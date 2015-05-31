$(function(){
	/* 左侧导航栏 */
	$('.title').on('click',function(){
		// 点击标题若隐藏就显示，否则隐藏
		if($(this).next().is(":hidden")){ 
			$(this).next().show(); 
		}else{
			$(this).next().hide();
		}
		
	});


	/* 发表文章 引入百度编辑器 */
	if(typeof(UE) != 'undefined'){
		var ed = new UE.ui.Editor();
		ed.render("editor");
	}
	
	/* 原top页 导航图片实现点击功能 */
	$('.homepage').on('click',function(){
		parent.location.reload();
	});

	



 	/* 通讯录 新增 */

	$('#AddPersonInfo').on('click',function(){

		$('#AddUserInfo').dialog({
			width:'500',
			title:'添加成员信息',
			modal:true,
			autoOpen:false,
		}); 

		$('#AddUserInfo #person_birthday').datepicker({ 
	
			changeMonth:true,
			changeYear:true,
			showOn:'both',
			//buttonImage:'images/calendar.gif',
			//buttonImageOnly:true,
			showButtonPanel:true,
			maxDate:0, // 不让选择今天以后的日期
			yearRange:'1940:', //下拉列表可选年份从1940年起
	
		});

		$('#AddUserInfo').dialog('open');
		

		/* 验证合法性 */
		/*
		$('form').validate({
			//验证通过后执行
			submitHandler:function(){
				alert('通过了？');
				var name = $('#person_username').val();
				var birthday = $('#person_birthday').val(); 
				$.ajax({

				});
			},
			rules:{
	            username:{
	                required:true,
	                minlength:2,
	            },
	            birthday:{
	            	required:true,
	            }
	            
        	},
			messages:{

				username:{
					required:"姓名必须得填写",
				}
			},
		});


	*/
	});

	/* 通讯录修改成员信息 */
	$('.PersonUpdInfo').click(function(){
		
		
		var id = $(this).siblings('.PersonId').val();
		
		$.ajax({
			url:'/thinkphp/index.php/Admin/Person/PersonList/id/' + id,
			success:function(response){
				var info = eval('(' + response + ')'); // 转为对象
				$('#UpdUserInfo #UpdUsername').val(info.name);
				$('#UpdUserInfo #UpdBirthday').val(info.birthday);
				$('#UpdUserInfo #UpdComment').val(info.comment);
				$('#UpdUserInfo #UpdId').val(info.id);
				//$('#UpdUserInfo #img_url').val('/thinkphp/public/'  + info.img_url);
				$('#UpdUserInfo').dialog('open');
			},
		});

		$('#UpdUserInfo #UpdBirthday').datepicker({ 
	
			changeMonth:true,
			changeYear:true,
			showOn:'both',
			//buttonImage:'images/calendar.gif',
			//buttonImageOnly:true,
			showButtonPanel:true,
			maxDate:0, // 不让选择今天以后的日期
			yearRange:'1940:', //下拉列表可选年份从1940年起
	
		});

		$('#UpdUserInfo').dialog({
			width:'500',
			title:'修改成员信息',
			modal:true,
			autoOpen:false,
		});

		//$('#UpdUserInfo').dialog('open');
		
	

	});
	/*  鼠标放在图像上时放大 */
	$('.PersonImgUrl').mouseover(function(e){
		$(this).css('cursor','pointer');

		$('.imgTip').attr('src',this.src).css({
			'position':'absolute',
			"top":'0',
			"left":(e.pageY),
		}).show(2000);
	}).mouseout(function(e){
		$(this).css('cursor','pointer');
		$('.imgTip').hide();
	});
	
	






/****** 不要动这个 ******/
});


/**** 实时更新时间 ****/
function clock(){
	var today = new Date();
	var year = today.getFullYear(); //四位数年份
	var month = today.getMonth() + 1; //返回月份1-11
	var day = today.getDate(); //返回日期 1-31
	var week = today.getDay(); //返回星期 0-6
	week = checkWeek(week);
	var hour = today.getHours(); //小时
	var hour2 = hour; //小时
	var mini = today.getMinutes(); //返回分钟
	var sec = today.getSeconds(); //返回秒数0-59
	//小于10时，不处理时显示为（1-9），让它统一显示为（01---09）
	month = checkTime(month);
	sec = checkTime(sec);
	mini = checkTime(mini);
	hour2 = checkTime(hour2);
	day = checkTime(day);
	var hello = '&nbsp;' + checkhello(hour);
	var Ymd = year + '年' + month + '月' + day + '日' + '&nbsp;' + '星期' + week + '&nbsp;';
	var Hms = '<span id = "ttt">' + hour2 + ':' + mini + ':' + sec + '</span>';
	//var hello = checkhello(hour);
	document.getElementById('top_change_time').innerHTML = "<span id = 'date'>" + Ymd + Hms + hello + "</span>" ;
	t = setTimeout('clock()',1000)	
}

function checkWeek(q){
	switch(q){
		case 1:
			return '一';
			break;
		case 2:
			return '二';
			break;
		case 3:
			return '三';
			break;
		case 4:
			return '四';
			break;
		case 5:
			return '五';
			break;
		case 6:
			return '六';
			break;
		default:
			return '日';
			break;
	}
}

function checkTime(i){
	if(i < 10)
		{i = "0" + i;}
		return i;	
}

function checkhello(i){

	if (i <= 4){
		return '凌晨好！';
	}else if(i <= 8){
		return '早上好！';
	}else if(i <= 12){
		return '上午好！';
	}else if(i <= 14){
		return '中午好！';
	}else if(i <= 17){
		return '下午好！';
	}else if(i <= 22){
		return '晚上好！';
	}else if(i <= 23){
		return '晚上好！，要注意休息了哦^_^';
	}
}