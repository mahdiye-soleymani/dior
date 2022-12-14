<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dior | دیور</title>

	<style type="text/css">



	body {
		background-color: #000;
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
		background-color:#999;
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
	/*آغاز قسمت جدول ثبتنام*/
		.tbl td{
			font-size:26px;
			color:#FFF;
			}
	/*پایان قسمت جدول ثبتنام*/
	.val
{
	direction:rtl;
	font-size:17px;
	color:#B90000;
	text-align:center;
	font-family:"B Homa";
	}	
	.valtd{
		background-color:#000;
		color:black !important;
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
    <form name="form1" method="post" action="<?php echo base_url()?>index.php/m/s">
	    <p>&nbsp;</p>
         
	    <table width="80%" border="0" align="center" cellpadding="5" cellspacing="2" class="tbl">
	      <tr><td width="25%" class="valtd"></td>
	        <td width="46%"><table width="93%" border="0" align="center" cellpadding="5" cellspacing="5" dir="rtl" class="tbl">
	          <tr>
	            <td colspan="2" align="center">ثبتنام در سایت
	              <label for="username"></label></td>
              </tr>
	          <tr>
	            <td width="47%" align="right">نام</td>
	            <td width="53%" align="center"><label for="username"></label>
	              <input type="text" name="name" autocomplete="off"  id="name"></td>
              </tr>
	          <tr>
	            <td align="right">نام خانوادگی</td>
	            <td align="center"><label for="family"></label>
	              <input type="text" name="family" autocomplete="off" id="family"></td>
              </tr>
	          <tr>
	            <td align="right">ایمیل</td>
	            <td align="center"><label for="email"></label>
	              <input type="text" name="email" autocomplete="off" id="email"></td>
              </tr>
	          <tr>
	            <td align="right">نام کاربری</td>
	            <td align="center"><label for="username"></label>
	              <input type="text" name="username" autocomplete="off" value="<?php echo set_value('username');?>" id="username"></td>
              </tr>
	          <tr>
	            <td align="right">رمز عبور</td>
	            <td align="center"><label for="pass1"></label>
	              <input type="text" name="pass1"  autocomplete="off" value="<?php echo set_value('pass'); ?>" id="pass1"></td>
              </tr>
	          <tr>
	            <td align="right">تکرار رمز عبور</td>
	            <td align="center"><label for="pass2"></label>
	              <input type="text" name="pass2" autocomplete="off" value="<?php echo set_value('pass2');?>" id="pass2"></td>
              </tr>
	          <tr>
	            <td colspan="2" align="center"><input type="submit" class="button" name="button" id="button" value="ثبتنام"></td>
              </tr>
            </table></td>
	        <td width="29%" class="valtd"><div class="val"><?php echo validation_errors(); ?></div></td>
          </tr>
        </table>
    </form>
	</div>

	<p class="footer">&nbsp;&nbsp;dior.ir@gmail.com | +9891212121&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight © 2006-2021&nbsp;.کلیه حقوق محفوظ است </p>
</div>

</body>
</html>