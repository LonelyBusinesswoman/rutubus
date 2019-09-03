<?php include 'components/header.php'; ?>
<main>
	<div class="order">
		<p>Станица формирования заказа</p>
		<div class="give_order">
			<div class="order_block">
				<p>Категория</p>
				<select class="put">
					<option value="1">Строительство</option>
				    <option value="2">Строительство</option>
				    <option value="3">Строительство</option>
				    <option value="4">Строительство</option>
				    <option value="5">Строительство</option>
				</select>
				<input type="text" name="diff" placeholder="Другое" style="width:40%;margin-left: 5%;">
			</div>
			<div class="order_block">
				<p>Название</p>
				<input type="text" name="diff" placeholder="Название проекта">
			</div>
			<div class="order_block" style="align-items: flex-start">
				<p>Краткое <br> описание</p>
				<textarea placeholder="Описание"></textarea>
			</div>
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
			<div class="point">
				<div class="order_block">
					<p>Объём работы</p>
					<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">A0</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">A1</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">A2</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">A3</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">A4</span>
						</label>
					</li>
					</ul>
				</div>
				<div class="order_block">
					<p>Количество</p>
					<ul>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">1-10</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">10-20</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">20-50</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">50-100</span>
						</label>
					</li>
					<li>
						<label>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
							<span class="text">100-200</span>
						</label>
					</li>
					</ul>
				</div>
				<div class="order_block">
					<ul>
					<li>
						<label>
							<span class="text" style="width:70%;margin-right: 20px">3D-Модель</span>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
						</label>
					</li>
					<li>
						<label>
							<span class="text" style="width:70%;margin-right: 20px">Сборка 3D</span>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
						</label>
					</li>
					<li>
						<label>
							<span class="text" style="width:70%;margin-right: 20px">Схема</span>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
						</label>
					</li>
					<li>
						<label>
							<span class="text" style="width:70%;margin-right: 20px">Эскиз</span>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
						</label>
					</li>
					<li>
						<label>
							<span class="text" style="width:70%;margin-right: 20px">Расчёт</span>
							<input type="checkbox">
							<span class="icon">
								<i class="fa fa-check" aria-hidden="true"></i>
							</span>
						</label>
					</li>
					</ul>
				</div>
			</div>
			<div class="order_block">
				<p>Програмное <br> обеспечение</p>
				<select class="put">
					<option value="1">Автокад</option>
				    <option value="2">Автокад</option>
				    <option value="3">Автокад</option>
				    <option value="4">Автокад</option>
				    <option value="5">Автокад</option>
				</select>
			</div>
			<div class="order_block">
				<p>Дата <br>выполнения <br>заказа</p>
				<input type="text" name="date" placeholder=" 20.02.2001">
			</div>
			<div class="order_block">
				<p>Ориентировачная  <br>стоимость заказа</p>
				<div class="work_price">
					<span>200</span>
					баллов
				</div>
			</div>
			<a href="#" class="blue_btn_tubus">Оформить заказ</a>
		</div>
	</div>
</main>
<?php include 'components/footer.php'; ?>
