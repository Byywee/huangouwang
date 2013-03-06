            //通过id属性值获取元素
            function $(str)
            {
               return (document.getElementById(str));
            }
            
            //小于零的数值自动为其加零
            function format_time(i)
            {
               if(i < 10)
                  i = '0' + i;
               return i;
            }
            
            //向span属性中显示倒计时
            function show()
            {
				var obj	=	document.getElementById("show_time").value;
                var cur_date = new Date();
				
				var endTime = obj*1000;
                //var end = new Date(str);
                //var endTime = end.valueOf();
				//var endTime = (int)(document.getElementById("leftTime").text);
                var startTime = cur_date.valueOf();
				
                var left = new Date(endTime - startTime); 
                var leftTime = left.getTime();
                leftTime = leftTime <= 0? 0 : leftTime;
                var leftTime_day = parseInt(leftTime/(1000*60*60*24));
                var leftTime_hou = format_time(parseInt((leftTime%(1000*60*60*24))/(1000*60*60)));
                var leftTime_min = format_time(parseInt((leftTime%(1000*60*60))/(1000*60)));
                var leftTime_sec = format_time(parseInt((leftTime%(1000*60))/1000));
                
                var Time = '';
                if(leftTime_day != 0)
                {
                   Time = leftTime_day + "天" + leftTime_hou + "小时" + leftTime_min + "分" + leftTime_sec + "秒";
                }
                else if(leftTime_hou != 0)
                {
                   Time = leftTime_hou + "小时" + leftTime_min + "分" + leftTime_sec + "秒";
                }
                else if(leftTime_min != 0)
                {
                   Time = leftTime_min + "分" + leftTime_sec + "秒";
                }
                else if(leftTime_sec != 0)
                {
                    Time = leftTime_sec + "秒";
                }
                else
                {
                   Time = '活动已结束，敬请期待下次活动！';
                }
                  
                document.getElementById("leftTime").innerHTML = Time;
                
                setTimeout('show()',500);
            } 
           window.onload = show;
