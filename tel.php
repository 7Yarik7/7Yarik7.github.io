<HTML>
    <HEAD>
        <meta charset="utf-8">
        <title> Сайт web-студії "Web-DECO" </title>
        <script type="text/javascript">
           function send()
{ 	var valid = true;
	var elems = document.forms[0].elements;
	for(var i=0; i<document.forms[0].length; i++){
		if( elems[i].getAttribute('type') == 'text' ||
			elems[i].getAttribute('type') == 'password' ||
			elems[i].getAttribute('type') == 'email' ) {
			if(elems[i].value == '') {
				elems[i].style.border = '2px solid red';
				valid = false;
			}
		}
	}	
	if(!valid) {
		alert('Заповніть всі поля !!!');
		return false;
	} else 
	{ var r = /^\w+@\w+\.\w{2,4}$/i;
		if (!r.test(elems[2].value)) {
			alert('Заповніть вірно E-Mail !!');
			return false;
	    } else return true;
	}
}	

window.onload = function(){
setInterval(clockPainting, 1000);
document.forms[0]. onmousemove = function (){ var elems = document.forms [0].elements;
     
    for(var i=0; i<elems.leght;i++)
        if(elems [i].style.border =='2px solid red')
            elems [i].style.border = '';
         }
}

        </script>
        <style>
            .shadowtext{
                text-shadow: 1px 3px 2px white, 0 0 1em red;
                color: #210042;
                font-size: 3em;
            }
        </style>
                <script src="js/clock1.js"></script>
                <script>
                   
                </script>
    </HEAD>
<BODY background="images/bg.jpg">
    <table border="1" align="center" cellpadding="10">
        <tr>
            <td background="images/bg-3.jpg" colspan="2" height="150" align="right">
            <img src="images/logo.png" height="140" wight="140" align="left">
            <h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1>
            </font>
            </td>
        </tr>
        <tr>
        <td colspan="2">
            <font size="4"><b>
            <a href="index.php">Головна</a>&nbsp;&nbsp;
            <a href="foto.php"> Фотографії</a>&nbsp;&nbsp;
            <a href="tel.php"> Телефони</a>&nbsp;&nbsp;
            <a href="log.php"> Статистка</a>&nbsp;&nbsp;
            <a href="input.php"> Зареєстровані</a>&nbsp;&nbsp;
            </b></font>
        </td>
        </tr>
        <tr>
        <td width="30%" valign="top" >
            <center><canvas id="canvas" height="120" width="120"</canvas></canvas></center>
            <hr>
            <font size="5" color="navy"><h2>Новини</h2></font>
                    <font size="5" >
                <ul>
                    <li><a href="#">Сайт будівельної компанії </a></li>
                    <li><a href="#">Сайт ТМ "Новашкола" </a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS для Metro Cash&Carry </a></li>
                    <li><a href="#">Сайт-візитка дизайнера інтерфейсів </a></li><br>
                    <p align="right"><a href="#">інші...</a></p>
                </ul>
                    </font>
                    <hr>
                    <H1 align="center"><font color="green">Реєстрація</font></H1>
                    <form action="forma.php" method="post">
                    <table align="center" bgcolor="#ccc">
                        <tr>
                            <td><font color="green">Прізвище</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="name2"></td>
                        </tr>
                        <tr>
                            <td><font color="green">Ім'я</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="name1"></td>
                        </tr>
                        <tr>
                            <td><font color="green">E-Mail</font>: </td>
                            <td><input type="email" size="10" maxlength="20" name="email"></td>
                        </tr>
                        <tr>
                            <td><font color="green">Пароль</font>: </td>
                            <td><input type="password" size="10" maxlength="20" name="password"></td>
                        </tr>
                    </table>
                <p align="center">
                    <input type="submit" value="Зареєструватись">
                    <input type="reset" value="Очистити">
                </p>
                </form>
                <hr>
        </td>
        <td width="70%">
        
        <H1 align="center"><font color="green">Пошук телефонів</font></H1>
                    <form action="tel09.php" method="post">
                    <table align="center" bgcolor="#ccc">
                        <tr>
                            <td><font color="green" size="6">Номер телефона</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="ntel"></td>
                        </tr>
                        <tr>
                            <td><font color="green" size="6">Прізвище</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="fio"></td>
                        </tr>
                        <tr>
                            <td><font color="green" size="6">Номер вулиці</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="nstr"></td>
                        </tr>
                        <tr>
                            <td><font color="green" size="6">Номер будинку</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="nbud"></td>
                        </tr>
                        <td><font color="green" size="6">Номерквартира</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="nkv"></td>
                        </tr>
                    </table>
                <p align="center">
                    <input type="submit" value="Пошук">
                    <input type="reset" value="Очистити">
                </p>
                </form>
                <hr>


        </font>    
        </td>
        </tr>
        <tr>
             <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
             <font size="4"> Сайт розробив "Євчук Ярослав" </font>
            </td>
        </tr>
    </table>
</BODY>>
</HTML>