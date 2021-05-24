<div class="category__banner">
	<h1>Category</h1>
</div>
<?php var_dump($data) ?>
<div class="category__product">
	<div class="category__product__filter">
		<div class="category__product__filter__by__category">
			<h3>Filter By Category</h3>
			<label class="filter__by__category__container">
				<p>All</p>
				<input type="checkbox" checked="check" id="all_category_checkbox" onclick='changeCheckbox("all_category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>
			<label class="filter__by__category__container">
				<p>Category 1</p>
				<input type="checkbox" class="category_checkbox" onclick='changeCheckbox("category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>
			<label class="filter__by__category__container">
				<p>Category 2</p>
				<input type="checkbox" class="category_checkbox" onclick='changeCheckbox("category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>
			<label class="filter__by__category__container">
				<p>Category 3</p>
				<input type="checkbox" class="category_checkbox" onclick='changeCheckbox("category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>
		</div>
		<div class="category__product__filter__by__publisher">
			<h3>Filter By Publisher</h3>
			<label class="filter__by__publisher__container">
				<p>All</p>
				<input type="checkbox" checked="check" id="all_publisher_checkbox" onclick='changeCheckbox("all_publisher_checkbox")'>
				<span class="filter__by__publisher__checkmark"></span>
			</label>
			<label class="filter__by__publisher__container">
				<p>NXB Kim Dong</p>
				<input type="checkbox" class="publisher_checkbox" onclick='changeCheckbox("publisher_checkbox")'>
				<span class="filter__by__publisher__checkmark"></span>
			</label>
			<label class="filter__by__publisher__container">
				<p>NXB Ha Noi</p>
				<input type="checkbox" class="publisher_checkbox" onclick='changeCheckbox("publisher_checkbox")'>
				<span class="filter__by__publisher__checkmark"></span>
			</label>
			<label class="filter__by__publisher__container">
				<p>NXB Tuan Le</p>
				<input type="checkbox" class="publisher_checkbox" onclick='changeCheckbox("publisher_checkbox")'>
				<span class="filter__by__publisher__checkmark"></span>
			</label>
		</div>

		<div class="category__product__filter__by__author">
			<h3>Filter By Author</h3>
			<label class="filter__by__author__container">
				<p>All</p>
				<input type="checkbox" checked="check" id="all_author_checkbox" onclick='changeCheckbox("all_author_checkbox")'>
				<span class="filter__by__author__checkmark"></span>
			</label>
			<label class="filter__by__author__container">
				<p>Pham Nhat Linh</p>
				<input type="checkbox" class="author_checkbox" onclick='changeCheckbox("author_checkbox")'>
				<span class="filter__by__author__checkmark"></span>
			</label>
			<label class="filter__by__author__container">
				<p>Le Anh Tuan</p>
				<input type="checkbox" class="author_checkbox" onclick='changeCheckbox("author_checkbox")'>
				<span class="filter__by__author__checkmark"></span>
			</label>
			<label class="filter__by__author__container">
				<p>Pham Thanh Dat</p>
				<input type="checkbox" class="author_checkbox" onclick='changeCheckbox("author_checkbox")'>
				<span class="filter__by__author__checkmark"></span>
			</label>
		</div>

		<div class="category__product__filter__by__rating">
			<label class="filter__by__rating__container">
				<input type="button" id="filter__by__rating__button" value="Filter by Rating" onclick="filter__by__rating__choice()">
				<span><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></span>
			</label>
			<div id= "filter__by__rating__choice__div" class="filter__by__rating__choice filter__by__rating__choice__unshown">
					<input type="button" id="filter__by__rating__choice__button" value="5 Star Rating" onclick='filter__by__rating__choice__button("5 Star Rating")'>
					<input type="button" id="filter__by__rating__choice__button" value="4 Star Rating" onclick='filter__by__rating__choice__button("4 Star Rating")'>
					<input type="button" id="filter__by__rating__choice__button" value="3 Star Rating" onclick='filter__by__rating__choice__button("3 Star Rating")'>
					<input type="button" id="filter__by__rating__choice__button" value="2 Star Rating" onclick='filter__by__rating__choice__button("2 Star Rating")'>
					<input type="button" id="filter__by__rating__choice__button" value="1 Star Rating" onclick='filter__by__rating__choice__button("1 Star Rating")'>
					<input type="button" id="filter__by__rating__choice__button" value="Filter by Rating" onclick='filter__by__rating__choice__button("Filter by Rating")'>
				</ul>
			</div>
		</div>
	</div>
	<div class="category__product__cards">
		<h1>Cards goes here</h1>
	</div>
</div>

<div class="category__contact">
	<h1>Banner goes here</h1>
</div>