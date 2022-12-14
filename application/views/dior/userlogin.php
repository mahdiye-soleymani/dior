<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dior | دیور</title>

	<style type="text/css">



	body {
	background-color: #000;
/*	margin: 40px;
	color: #4F5155;*/
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	
	}

	a {
		color:black;
		text-decoration:none;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}



	#body{
		height:400px;
		 
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align:center;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		height:550px;
		color:#CCC;
		margin: 10px;
		border: 3px solid #D0D0D0;
		-webkit-box-shadow: 0 0 15px #D0D0D0;
		-webkit-border-bottom-left-radius:50px;
		-webkit-border-bottom-right-radius:50px;
	}
	body,td,th {
	color: #CCCCCC;
}
/*قسمت منو*/
				td{
				background-color:#999;
				font-size:80px;
				
				font-family:"Times New Roman";
			
				}
				.container2 {
					direction: rtl;
				/*   
				
					color: #555;
						margin: 40px auto;
							max-width: 700px;
						
					*/ background-color:#999;
					height:60px;
					font-size: 17px;
					font-family: b mitra; 
					text-align:right;
				}
				ul {
					text-align: right;
					display: inline-block;
					list-style: none;
					padding-left: 0px;
				}
				
				.menu li {
					float:right;
					padding: .330em 1em;
				   /* border: 1px solid #eee;*/
					background-color:#999;
					cursor: pointer;
					transition: all ease 0.3s;
					position: relative;
					
					color: #000;
				}
				
				.menu td{
					   background-color:blue;
					}
				
				.menu li:hover {
					background-color:#666;
					color: #fff;
				}
				
				li ul {
					position: absolute;
					background-color:#666;
					top: 100%;
					right: 0%;
					width: 150px;
					display: none;
					z-index: 1;
					border-bottom-right-radius:20px;
					
				}
				
				li ul li {
					width: 100%;
				}
				
				li:hover ul {
					display: block;
				}
				
				li.submenu::after {
					content: '\25BC';
					font-size: .7em;
					padding-right: 5px;
				
				}
				
				li.submenu:hover::after {
					content: '\25B2';
					font-size: .7em;
					padding-right: 5px;
					
				
				}

/*پایان قسمت منو*/
/*آغاز قسمت جدول ورود*/
		.tbl td{
			font-size:20px;
			color:#FFF;
			}
	/*پایان قسمت جدول ورود*/
	.aa{
		color:#000;
		font-weight: 100;
		border: none;
		background: yellowgreen;
		border-bottom-left-radius:50px;
		border-top-left-radius:50px;
		cursor:pointer;
		padding: 8px;
		font-size: 16px;
		}
		.aa2{
		color:#fff;
		 font-weight: 100;
		background:#666;
		border-bottom-right-radius:50px;
		border-top-right-radius:50px;
		cursor:pointer;
		padding: 8px;
		font-size: 16px;
			}
		
		.button {
    padding: 10px;
    font-size: 16px;
    background: yellowgreen;
    color: white;
    border: none;
	border-radius:50px;
	cursor:pointer;
}
    </style>
</head>
<body>

<div id="container">

<!--آغاز منو-->
	<table width="100%" border="0" cellspacing="0" cellpadding="5">
	  <tr>
	    <td class="menu">Dior</td>
	    <td><div class="container2">
      <ul class="menu">
                <li> <a href="<?php echo base_url()?>index.php/m/index">صفحه اصلی</a></li>

                    
                 <li class="submenu"> موضوعات
                   <ul>
                   <li> <a href="<?php echo base_url()?>index.php/m/g">راهنمای خرید عطر</a></li>
                        
                        <li><a href="<?php echo base_url()?>index.php/m/h"> تاریخپه</a> </li>
                    </ul>
                </li>
                    
                 

                <li class="submenu"> ورود 
                    <ul>
                       
                        <li><a href="<?php echo base_url()?>index.php/m/mlog"> ورود مدیریت </a></li>
                         <li><a href="<?php echo base_url()?>index.php/m/ulog"> ورود کاربران </a></li>
                    </ul>
                </li>
                 <li><a href="<?php echo base_url()?>index.php/m/per"> عطرها</a> </li>
      </ul>
        </div></td>
	    
      </tr>
  </table>


<!--پایان منو-->


	<div id="body">
	  <form name="form1" method="post" action="<?php echo base_url()?>index.php/m/u">
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <table width="40%" border="0" align="center" cellpadding="5" cellspacing="0" class="tbl">
	      <tr>
	        <td colspan="2" align="center">ورود به پنل کاربران</td>
          </tr>
	      <tr>
	        <td width="48%" align="center"><input name="username" dir="rtl" type="text" id="username" placeholder="نام کاربری خود را وارد نمایید." autocomplete="off" maxlength="20"></td>
	        <td width="52%" align="center">نام کاربری</td>
          </tr>
	      <tr>
	        <td align="center"><input name="pass" dir="rtl" placeholder="رمزعبور خود را وارد نمایید." type="password" id="pass" autocomplete="off" maxlength="4"></td>
	        <td align="center">رمز عبور</td>
          </tr>
	      <tr>
	        <td colspan="2" align="center"><input name="button" type="submit" class="button" id="button" value="ورود "></td>
          </tr>
        </table>

	  <div align="center">  
	    <p>&nbsp;</p>
	    <p><span align="center" class="aa2">تاکنون در سایت ثبتنام نکرده اید؟ </span><span><a href="http://localhost:81/ci1/index.php/m/s" class="aa"> ثبتنام درسایت</a> </span></p>
	  </div>
      </form>
	</div>

	<p class="footer">&nbsp;&nbsp;dior.ir@gmail.com | +9891212121&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight © 2006-2021&nbsp;.کلیه حقوق محفوظ است </p>
</div>

</body>
</html>