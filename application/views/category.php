<style>
	.category__banner{
		background-image: url("<?php echo LINK; ?>/image/category_banner_1.jpg");
	}
</style>
<div class="category__banner">
	<h1>Category</h1>
</div>
<?php
	//var_dump($data);
	//echo $data[1]["Book"]["thumbnail_address"];
 ?>
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
				<p style="display: none;">12</p>
				<p>Category 1</p>
				<input type="checkbox" class="category_checkbox" onclick='changeCheckbox("category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>
			<label class="filter__by__category__container">
				<p style="display: none;">12</p>
				<p>Category 2</p>
				<input type="checkbox" class="category_checkbox" onclick='changeCheckbox("category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>
			<label class="filter__by__category__container">
				<p style="display: none;">12</p>
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
			</div>
		</div>
	</div>
	<div class="category__product__cards">
		<div class="category__dropdown__div" tabindex="0">
			<select name="browse_dropdown" class="category_dropdown" id="order_filter" onchange="getOrderFilter()">
				<option value="Popularity">Browse by popularity</option>
				<option value="Old">Old</option>
				<option value="New">New</option>
				<option value="Name">Name</option>
			</select>
		</div>
		<?php include('card/category-card-div.php') ?>
	</div>
</div>

<div class="category__contact">
	<div class="category__contact__container">
		<div class="category__contact__section-header">
		<h2>Join BlackPink!</h2>
		<p>Subscribe to us and receive the greatest books ever!</p>
		</div>
		<form method="POST" action="<?php echo LINK ?>/guest">
		<div class="category__contact__form-row">
			<div class="category__contact__col-auto">
			<input type="email" name="guest-mail" class="form-control" placeholder="Enter your Email">
			</div>
			<div class="category__contact__col-auto">
			<button type="submit">Subscribe</button>
			</div>
		</div>
		</form>
	</div>
</div>

<script>
        window.onload = function(){
			getAllFilter();
		}

	function filterAjax() {
		// alert(JSON.stringify(filter, null, 2));
		var xmlhttp1 = new XMLHttpRequest();
		var link = ""
		link += "category"
		for (i = 0; i < filter["category"].length; i++)
			link += "/" + filter["category"][i]
		link += "/publisher"
		for (i = 0; i < filter["publisher"].length; i++)
			link += "/" + filter["publisher"][i]
		link += "/author"
		for (i = 0; i < filter["author"].length; i++)
			link += "/" + filter["author"][i]
		link += "/rating"
		link += "/" + filter["rating"].toString();
		link += "/order"
		link += "/" + filter["sort_filter"];
		// link = link.split(" ").join("phamnhatlinh")
		link = link.split("/").join("phamnhatlinh")
		link = link.split(" ").join("leanhtuan")
		alert("<?php echo LINK; ?>"+"/ajax/ajaxBookFilter/" + link);
		xmlhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				str = this.responseText
				res = str.substring(
					str.lastIndexOf('ajax-filter-result-start') + 24,
					str.lastIndexOf("ajax-filter-result-end")
				);
				alert(res)
			};
		}
		xmlhttp1.open("GET", "<?php echo LINK; ?>"+"/ajax/ajaxBookFilter/" + link, true);
		xmlhttp1.send();
	}
</script>