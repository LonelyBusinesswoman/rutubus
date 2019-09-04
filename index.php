<?php include 'components/header.php'; ?>
<main>
	<div class="social_fixed">
		<div class="authorization">
			<div class="social">
				<a href="#" class="social_net">
					<i class="fas fa-user"></i>
				</a>
				<a href="#" class="social_net">
					<i class="fab fa-vk"></i>
				</a>
				<a href="#" class="social_net">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="#" class="social_net">
					<i class="fab fa-odnoklassniki"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="search_and_card">
			<div class="search">
				<div class="search_box">
					<i class="fas fa-search"></i>
					<input type="text" name="search">
				</div>
				<a href="#" class="red_btn_tubus">Поиск</a>
			</div>
			<div class="card_tubus">
				<a href="#" class="red_btn_tubus">Заказать</a>
				<a href="#" class="blue_btn_tubus">
					<i class="fas fa-shopping-cart"></i>
					Тубус
					<span>2</span>
				</a>
			</div>
		</div>
		<div class="filters">
			<div class="filter">
				<p class="filter_name">Фильтр</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text"></span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text"></span>
						</label>
					</li>
				</ul>
			</div>	
			<div class="filter">
				<p class="filter_name">Категория</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">Автомобилестроение</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">Сельское хоз</span>
						</label>
					</li>
				</ul>
			</div>	
			<div class="filter">
				<p class="filter_name">Тип файла</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">Чертёж</span>
						</label>
					</li>
				</ul>
			</div>	
			<div class="filter">
				<p class="filter_name">Программа/расширение</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">Автокад</span>
						</label>
					</li>
				</ul>
			</div>	
			<div class="filter">
				<p class="filter_name">Оценка работы</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">0-100</span>
						</label>
					</li>
				</ul>
			</div>	
		</div>
		<div class="vip_filters">
			<div class="filter">
				<p class="filter_name">Vip</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text"></span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text"></span>
						</label>
					</li>
				</ul>
			</div>			
			<div class="filter">
				<p class="filter_name">Программа/расширение</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">Автокад</span>
						</label>
					</li>
				</ul>
			</div>	
			<div class="filter">
				<p class="filter_name">Оценка работы</p>
				<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">0-100</span>
						</label>
					</li>
				</ul>
			</div>	
		</div>
		<div class="list_of_works">
			<?php for($i = 0; $i < 9; $i++): ?>
				<?php include 'components/single_work.php' ?>
			<?php endfor; ?>
		</div>
		<div class="list_of_works_auth">
			<?php for($i = 0; $i < 2; $i++): ?>
				<?php include 'components/tub.php' ?>
			<?php endfor; ?>
		</div>
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
<?php include 'components/footer.php'; ?>
