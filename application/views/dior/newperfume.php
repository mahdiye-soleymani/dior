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
		color:#CCC;
		height:550px;
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
/*آغاز قسمت جدول عطر جدید*/
		.tbl td{
			font-size:20px;
			color:#FFF;
			}
	/*پایان قسمت عطر جدید*/

.val
{
	direction:rtl;
	font-size:17px;
	color:#B90000;
	text-align:center;
	font-family:"B Homa";
	}		
		.button {
    padding: 5px;
    font-size: 20px;
    background: yellowgreen;
	color:#000;
   
    border: none;
	width:230px;
	border-radius:2px;
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
 
 <form name="form1" method="post" action="<?php echo base_url()?>index.php/m/ad">
      <p>&nbsp;</p>
	    <table width="40%" border="0" align="center" cellpadding="5" cellspacing="5" dir="rtl" class="tbl">
	      <tr>
	        <td colspan="3" align="center">ثبت عطر جدید
              </td>
          </tr>
	      <tr>
	        <td width="47%" align="center">* نام عطر</td>
	        <td colspan="2" align="center"><label for="name"></label>
            <input type="text" name="name" autocomplete="off" value="<?php echo set_value('name'); ?>"  id="name"></td>
          </tr>
	      <tr>
	        <td align="center">* نام سازنده</td>
	        <td colspan="2" align="center"><label for="creator"></label>
            <input type="text" name="creator" autocomplete="off"  value="<?php echo set_value('creator'); ?>"  id="creator"></td>
          </tr>
	      <tr>
	        <td align="center">* طبع</td>
	        <td colspan="2" align="center"><label for="nature"></label>
            <input type="text" name="nature" autocomplete="off" value="<?php echo set_value('nature'); ?>"  id="nature"></td>
          </tr>
	      <tr>
	        <td align="center">* جنسیت</td>
	        <td width="26%" align="center"><label for="gender">
	          <input type="radio" name="gender" id="gender"   value="زنانه">
            زنانه</label></td>
	        <td width="27%" align="center"><input type="radio" name="gender" id="gender"  value="مردانه">	          <label for="gender">مردانه</label></td>
          </tr>
	      <tr>
	        <td colspan="3" align="center"><input type="submit"  class="button" name="button" id="button" value="ثبت"></td>
          </tr>
        </table>

      </form>
 <div class="val"><?php echo validation_errors(); ?></div>
 
  </div>

	<p class="footer">&nbsp;&nbsp;dior.ir@gmail.com | +9891212121&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight © 2006-2021&nbsp;.کلیه حقوق محفوظ است </p>
</div>

</body>
</html>