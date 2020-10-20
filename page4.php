<!DOCTYPE html>
<head>
<title>"МКОУ Кановская ОШ"</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="description" CONTENT="Энгельс АГЗС">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="wrap">
		<?php include 'logo.php'; ?>
		<table id="str">
			<tr>
				<td valign="top">
					<div id="menuop">
						<div id="menu">
						<?php include 'menu.php'; ?>
						</div>
					</div>
					<div id="news">
						<div id="newsname">
							<h3>Календарь</h3>
						</div>
						<div id="newssite">
<div align=center>
        <div style="height:150px;"><div id="calendar_table"></div></div>
        </div>

<script type="text/javascript" src="calendar.js"></script>

<!-- ----------------------------------------- -->

</div>


</div>
</td>
<td valign="top" style="background: #00CED1;  padding-right: 40px; border-top: 1px solid; box-shadow: 0px 0px 59px 0px rgba(135,135,135,1);"></td>
<td valign="top">
<div id="cont">
<div id="contstr">

<form class="contact_form" action="contact-form.php" method="post">
  <p>
            <label for="name">Имя:</label>
            <input type="text"  name="name" placeholder="Введите ваше имя" required />
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Введите электронный адрес" required />
            <span class="form_hint">Правильный формат "name@something.com"</span>
        </p>
        <p>
            <label for="tel">Телефон:</label>
            <input type="tel" name="tel" placeholder="Введите номер телефона" required />
            <span class="form_hint">Правильный формат "+7-123-4567890"</span>
        </p>
        <p>
            <label for="message">Текст сообщения:</label>
            <textarea name="message" cols="40" rows="6" required ></textarea>
        </p>
    <input name="bezspama" type="text" style="display:none" value="" />
        <p>
          <button class="submit" type="submit">Отправить сообщение</button>
        </p>
</form>

</div>
</div>
</td></tr>
</table>
<?php include 'footer.php'; ?>
</div>
</body>
</html>