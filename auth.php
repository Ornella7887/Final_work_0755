<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
			integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
			crossorigin="anonymous"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
			rel="stylesheet"
		/>

		<title>Авторизация</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				background-color: #20B2AA;
              	background-image: url(./assets/images/fon_for_lk.png); background-size: cover;
				display: flex;
				justify-content: center;
				font-family: "Montserrat", sans-serif;
			}
			h1 {
				font-weight: 700;
				color: whitesmoke;
			}
			form {
				transform: translateY(0px);
				filter: drop-shadow(1px 2px 4px hsla(134, 61%, 45%, 0.4));
			}
			form:focus-within {
				transform: translateY(-4px);
				filter: drop-shadow(1px 2px 4px hsla(134, 61%, 45%, 0.6));
			}
			.material-symbols-outlined {
				font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 48;
				cursor: pointer;
			}
			.regtitle {
				font-size: 2.5rem;
				margin-right: 1rem;
			}
			.input-group-text {
				background-image: linear-gradient(to right, #92fe9d 0%, #00c9ff 100%);
				border-color: #28a745;
			}
			.mybtn {
				background-image: linear-gradient(to right, #92fe9d 0%, #00c9ff 100%);
			}
		</style>
	</head>
	<body>
		<div class="container mt-5">
			<h1 class="text-center mb-5">
				<span class="material-symbols-outlined regtitle"> how_to_reg </span>Авторизация
			</h1>
			<div class="col-md-5 mx-auto">
				<form onsubmit="sendFormUser(this); return false;">


					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<span class="material-symbols-outlined"> mail </span>
							</div>
						</div>
						<input type="email" class="form-control" placeholder="Email" required name="email" />
					</div>
					<p id="info" style="color: red"></p>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<span class="material-symbols-outlined"> lock </span>
							</div>
						</div>
						<input
							type="password"
							class="form-control"
							placeholder="Пароль"
							required
							id="formPass"
							name="pass"
						/>

						&nbsp;<span
							class="material-symbols-outlined"
							onmousedown="formPass.type='text'; this.nextElementSibling.hidden=false; this.hidden=true;"
						>
							visibility
						</span>

						&nbsp;<span
							class="material-symbols-outlined"
							hidden
							onmouseup="formPass.type='password'; this.previousElementSibling.hidden=false; this.hidden=true;"
						>
							visibility_off
						</span>
					</div>

					<input type="submit" class="form-control btn mybtn" value="Войти" />
				</form>
			</div>
		</div>

		<script>
			async function sendFormUser(form) {
				let response = await fetch("./assets/php/auth_obr.php", {
					method: "POST",
					body: new FormData(form),
				});
				let result = await response.text();
				if (result == "ok") {
					location.href = "lk.php";
				} else if (result == "user-not-found") {
					info.innerHTML = "Такого пользователя нет!";
				} else {
          alert("Неизвестная ошибка");
        }
			}
		</script>
		<script
			src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
			crossorigin="anonymous"
		></script>
	</body>
</html>