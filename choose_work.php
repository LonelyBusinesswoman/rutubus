<?php include 'components/header.php'; ?>
<main>
	<div class="choose">
		<div class="title_and_search">
			<p>Выполнение заданий для получения баллов</p>
			<div class="search">
				<div class="search_box">
					<i class="fas fa-search"></i>
					<input type="text" name="search">
				</div>
				<a href="#" class="red_btn_tubus">Поиск</a>
			</div>
		</div>
		<div class="works_to_choose">
			<?php for($i = 0; $i < 7; $i++): ?>
				<?php include 'components/work_to_choose.php' ?>
			<?php endfor; ?>
		</div>
		<div class="navigation">
			<ul>
				<li class="active">
					<a href="#" >1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
			</ul>
		</div>
		<p class="razr">
			Сайт разработан командой WebMarketing
		</p>
	</div>
</main>
<!-- modal -->
<div class='modal popup_send_work' id='modal2'>
    <div class=" content">
		<div class="send_work">
			<p>Отправить задание на проверку</p>
			<div class="send_file">
				<p class="file_name">Название проекта</p>
				<input type="text" name="fileName" placeholder="Введите название">
				<p class="file_comment">Комментарий к работе</p>
				<input type="text" name="comment" placeholder="Введите текст">
				<p class="attach">Прикрепить фотографию</p>
				<div class="attach_photo">
					<div class="kvadrat">
						<a href="#">
							<i class="fas fa-plus"></i>
						</a>
					</div>
					<a href="#">
						<span class="round">
							<i class="fas fa-plus"></i>
						</span>
					</a>
				</div>
				<div class="add">
					<p>Добавить фото</p>
					<a href="#" class="choose_file">Выбрать файл</a>
				</div>
			</div>
			<a href="#" class="red_btn_tubus" style="text-transform: uppercase;">Отправить</a>
		</div>
	</div>
	<div class="close-popup close-modal js-close-campaign" data-modal="#modal2">
		<i class="fas fa-times"></i>
	</div>
</div>  
<?php include 'components/footer.php'; ?>
