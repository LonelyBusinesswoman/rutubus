<?php include 'components/header.php'; ?>
<main>
	<div class="personal_page">
		<div class="person">
			<div class="photo">
				<img src="img/default_photo.png">
				<a href="#" class="upload">
					<i class="fas fa-plus"></i>
					<span>Загрузить фото</span>
				</a>
			</div>
			<div class="person_info">
				<div class="vip">
					<i class="fas fa-crown"></i>
					<span>VIP</span>
					<a href="#" data-modal="#modal1" class="pop open-modal">
						Приобрести vip - статус
					</a>
				</div>
				<div class="fio">
					<p class="secondMame">Печугин</p>
					<p class="firstName">Иван</p>
					<p class="fatherName">Андреевич</p>
				</div>
				<div class="balance">
					<p>Баланс:&nbsp;<span> <b class="number">77</b>&nbsp;баллов</span></p>
					<a href="points.php" class="blue_btn_tubus">Пополнить счёт</a>
					<div class="todoList">
						<div class="todo">
							<div class="circle">
								<p class="num">1</p>
							</div>
							<a href="points.php" class="do">Купить баллы</a>
							<a href="points.php" class="do_go">
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="todo">
							<div class="circle">
								<p class="num">2</p>
							</div>
							<a href="points.php" class="do">Обменять чертёж на баллы</a>
							<a href="points.php" class="do_go">
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="todo">
							<div class="circle">
								<p class="num">3</p>
							</div>
							<a href="points.php" class="do">Выполнить задание и получить баллы</a>
							<a href="points.php" class="do_go">
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- saved jobs -->
		<div class="saved_jobs">
			<div class="title">
				<i class="fas fa-star"></i>
				<p>Мои сохранённые работы</p>
			</div>
			<div class="works">
				<?php for($i = 0; $i < 5; $i++): ?>
					<?php include 'components/single_work.php' ?>
				<?php endfor; ?>
			</div>
		</div>
		<!-- done works -->
		<div class="done_jobs">
			<div class="title">
				<i class="fas fa-inbox"></i>
				<p>Мои выполненные работы</p>
			</div>
			<div class="works">
				<?php for($i = 0; $i < 4; $i++): ?>
					<?php include 'components/single_work.php' ?>
				<?php endfor; ?>
			</div>
		</div>
		<!-- orders -->
		<div class="order_jobs">
			<div class="title">
				<i class="far fa-sticky-note"></i>
				<p>Мои заказы</p>
			</div>
			<div class="works">
				<div class="none">
					<p>Вы не заказывали работу</p>
				</div>
			</div>
		</div>
		<div class="return">
			<a href="index.php" class="simple_white_btn">Вернуться на главную </a>
		</div>
	</div>
</main>
<div class='modal' id='modal1'>
    <div class=" content">
    	<div class="vip_popup">	
	    	<div class="person">
				<div class="photo">
					<img src="img/default_photo.png">
					<a href="#" class="upload">
						<i class="fas fa-plus"></i>
						<span>Загрузить фото</span>
					</a>
				</div>
				<div class="person_info">
					<div class="fio">
						<p class="secondMame">Печугин</p>
						<p class="firstName">Иван</p>
						<p class="fatherName">Андреевич</p>
					</div>
				</div>
			</div>
			<div class="get_vip">
				<div class="price_vip">
					<i class="fas fa-crown"></i>
					<span>Приобрести vip- статус за <span class="cost_vip">&nbsp;5000&nbsp;</span>рублей</span>
				</div>
				<div class="info_vip">
					Вся информация о VIP аккаунте
					<i class="fas fa-arrow-right"></i>
				</div>
				<a href="#" class="red_btn_tubus">Оплатить</a>
			</div>
    	</div>
	</div>
	<div class="close-popup close-modal js-close-campaign" data-modal="#modal1">
		<i class="fas fa-times"></i>
	</div>
</div>  
<?php include 'components/footer.php'; ?>
