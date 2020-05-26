<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: main.php');
		exit();
	}

    include "html/menu_logout.html";
?>

	<div id="form">
		<form action="zaloguj.php" method="post">

			<input type="text" name="login" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='Login'" />
			<input type="password" name="haslo" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'" />
			<input type="submit" value="Zaloguj się" />
             <p>login: liczba od 1 do 100 <br>
            hasło: takie same jak wybrana liczba <br>
		</form>
	<?php
		if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
	?>
	</div>
</body>
</html>