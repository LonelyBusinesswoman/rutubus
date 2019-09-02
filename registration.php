<?php include 'components/header.php'; ?>
<main>
	<div class="registration_page">
		<!-- photo and social -->
		<div class="photo_and_social">
			<div class="photo">
				<img src="img/default_photo.png">
				<a href="#" class="upload">
					<i class="fas fa-plus"></i>
					<span>Загрузить фото</span>
				</a>
			</div>
			<div class="authorization">
				<span>Регистрация через соц.сети</span>
				<div class="social">
					<a class="social_net">
						<i class="fab fa-vk"></i>
					</a>
					<a class="social_net">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="social_net">
						<i class="fab fa-odnoklassniki"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="person_information">
			<form action="">
				<label  for="username">ФИО</label>
				<input id="username" type="text" name="name" placeholder="Введите ФИО">

				<label  for="email">Электронная почта</label>
				<input id="email" type="text" name="email" placeholder="Введите email">

				<label  for="login">Логин</label>
				<input id="login" type="text" name="login" placeholder="Введите логин">

				<label  for="password">Пароль</label>
				<input id="password" type="password" name="password" placeholder="Введите пароль">

				<label  for="password_two">Подтверждение пароля</label>
				<input id="password_two" type="password" name="password" placeholder="Введите пароль">

				<label  for="code">Введите код с картинки</label>
				<input id="code" type="text" name="code" placeholder="Введите пароль">
				
				<div class="check">
					<label>
						<input type="checkbox">
						<span class="icon">
							<i class="fa fa-check" aria-hidden="true"></i>
						</span>
						<span class="text">Я не робот</span>
					</label>
				</div>

				<div class="check">
					<label>
						<input type="checkbox">
						<span class="icon">
							<i class="fa fa-check" aria-hidden="true"></i>
						</span>
						<span class="text">Я принимаю условия и правило соглашения сайта</span>
					</label>
				</div>
				
				<a  class="blue_btn_tubus" href="#">Зарегистрироваться</a>
			</form>
		</div>
	</div>
</main>
<?php include 'components/footer.php'; ?>