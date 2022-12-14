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
/*اغاز قسمت جدول*/
.tbl{
	padding-top:30px;
	}
	
			.tbl td{
				border:none;
				border-radius:20px;
			background-color:#333;
			padding:0px;
			font-family:"B Homa";
			font-size:15px;
			color:#FFF;
			direction:rtl;
			}
			
/*			.tbl h1{
				
				height:30px;
				background-color:#800000;}*/
				.mm {
					color:#FFF !important;
					height:30px !important;
					font-size:20px !important;
					background-color:#800000 !important;
					}
					.tbl img
					{
						border:none;
						border-radius:20px;
						}
						.ii{
							background-color:#000 !important;
							}
/*پایان قسمت جدول*/
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
    
      <table width="80%" border="0" align="center" cellpadding="5" class="tbl" cellspacing="15">
        <tr>
          
          <td width="25%" align="center" valign="middle" class="ii"><img src="<?php echo base_url('img/a4.jpg')?>"  width="128"  height="128" ></td>
          <td width="25%" align="center" valign="middle" class="ii"><img src="<?php echo base_url('img/a3.jpg')?>"  width="149"  height="128" ></td>
          <td width="25%" align="center" valign="middle" class="ii"><img src="<?php echo base_url('img/a2.jpg')?>"  width="147"  height="128" ></td>
          <td width="25%" align="center" valign="middle" class="ii"><img src="<?php echo base_url('img/a1.jpg')?>"  width="135"  height="128" ></td>
        </tr>
        <tr>
        
          <td align="center" valign="middle" class="mm">دیور دان زنانه</td>
          <td align="center" valign="middle" class="mm">دیور هوم او فور من</td>
          <td align="center" valign="middle" class="mm">دیور هیپنوتیک پویزن</td>
          <td align="center" valign="middle" class="mm">میس دیور</td>
        </tr>
        <tr>
          <td height="161" align="center" valign="middle"><table width="100%" height="132">
            <tbody>
              <tr>
                <td align="center">طبع</td>
                <td align="center">گرم و شیرین </td>
              </tr>

              <tr>
                <td align="center">عطار</td>
                <td align="center">نیلا باربر , ژان لویس سیزاک</td>
              </tr>
              <tr>
                <td align="center">جنسیت</td>
                <td align="center">زنانه</td>
              </tr>
              
              <tr>
                <td height="39" align="center">ماندگاری</td>
                <td align="center">بسیار خوب </td>
              </tr>

            </tbody>
          </table></td>
          <td align="center" valign="middle"><table width="100%" height="128" align="center" dir="rtl">
            <tbody>
              <tr>
                <td align="center">طبع</td>
                <td align="center">خنک و تند<br></td>
              </tr>
              <tr>
                <td align="center">عطار</td>
                <td align="center">چوبی معطر</td>
              </tr>
              <tr>
                <td align="center">جنسیت</td>
                <td align="center">مردانه</td>
              </tr>
            <td align="center">ماندگاری</td>
              <td align="center">بسیار خوب</td>
            </tr>
  </tbody>
  
          </table></td>
          <td align="center" valign="middle"><table width="100%" height="136" align="center" dir="rtl">
            <tbody>
              <tr>
                <td width="49" align="center">طبع</td>
                <td width="93" align="center">ملایم و شیرین<br></td>
              </tr>
              <tr>
                <td align="center">عطار</td>
                <td align="center">فرانسوا دمکی</td>
              </tr>
              <tr>
                <td align="center">جنسیت</td>
                <td align="center">زنانه </td>
              <tr>
                <td align="center">ماندگاری</td>
                <td align="center">بسیار طولانی مدت</td>
              </tr>
            </tbody>
          </table></td>
          <td align="center" valign="middle"><table width="100%" height="127" align="center">
            <tbody>
              <tr>
                <td align="center">طبع</td>
                <td align="center">ملایم و شیرین<br></td>
              </tr>
              <tr>
                <td align="center">عطار</td>
                <td align="center">فرانسوا دمکی</td>
              </tr>
              <tr>
                <td align="center">جنسیت</td>
                <td align="center">زنانه</td>
              </tr>
              <tr>
                <td align="center">فصل</td>
                <td align="center">فصول سرد</td>
              </tr>
              <tr>
                <td align="center">ماندگاری</td>
                <td align="center">بسیار طولانی مدت</td>
              </tr>
            </tbody>
          </table></td>
        </tr>

      </table>
  </div>

	<p class="footer">&nbsp;&nbsp;dior.ir@gmail.com | +9891212121&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight © 2006-2021&nbsp;.کلیه حقوق محفوظ است </p>
</div>

</body>
</html>