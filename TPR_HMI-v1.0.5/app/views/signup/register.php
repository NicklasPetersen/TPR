<?php include '../app/views/partials/menu.php';
?>

<br><br><br>

		<main>
			<form class="fifty" method="post" action="/public/signup/register">
				<?php
					if ($_SESSION['count'] > 0) {
						echo "<h2>".$_SESSION['message']."</h2><br>";
					}
				?>
				<fieldset>
				<legend><h3>Create user</h3></legend>
					<label for="username" id="luser">Username</label>
					<br>
					<input type="username" name="username" id="username" placeholder="Username here.."/>
					<br><br>

					<label for="password" id="lpassword">Password</label>
					<br>
					<input type="password" name="password" id="password" placeholder="Password here.."/>
					<br><br>

					<label for="password2" id="lpassword2">Verify password</label>
					<br>
					<input type="password" name="password2" id="password2" placeholder="Password here.."/>
					<br><br>

					<label for="access" id="laccess">Access level</label>
					<br>
					<input type="number" name="access" id="access"/>
					<br><br>

					<input type="submit" name="submit_btn" id="submit"/>
					<br><br>
				</fieldset>
			</form>
		</main>

	</body>

<?php
include '../app/views/partials/foot.php';
