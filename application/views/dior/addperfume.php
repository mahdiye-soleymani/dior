

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dior | دیور</title>

	<style type="text/css">


.bb{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
 
.sbody {
    margin: 50px auto;
    text-align: center;
    width: 800px;
}
 
.sh1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
}
 
.slabel {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
 
.sinput {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
 
.sform {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
 
div.form-element {
    margin: 20px 0;
}
 
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: yellowgreen;
    color: white;
    border: none;
}
 
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
 
p.error {
    background: orangered;
}
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
<!--قسمت منو-->
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
<!-- پایان قسمت منو-->
    </style>
</head>
<body>

<div id="container">

<!--آغاز منو-->
<table width="100%" border="0" cellspacing="0" cellpadding="5">
	<tr>
        <td class="menu">Dior</td>
        <td>
        <div class="container2">
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
         </div>
         </td>
  	</tr>
</table>
<!--پایان منو-->

	<div id="body">
			<?php
				require('config/config.php');
				$query='insert into tblperfume(name,creator,nature,gender)
				values("'.$_POST['name'].'",
				"'.$_POST['creator'].'",
				"'.$_POST['nature'].'",
				"'.$_POST['gender'].'")
				';
				mysqli_query($connect,$query);
				header('location:http://localhost:81/ci1/index.php/m/t');
            ?>

   </div>

	<p class="footer">&nbsp;&nbsp;dior.ir@gmail.com | +9891212121&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight © 2006-2021&nbsp;.کلیه حقوق محفوظ است </p>
</div>

</body>
</html>