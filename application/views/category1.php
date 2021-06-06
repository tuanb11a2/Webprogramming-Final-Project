<style>
	.category__banner{
		background-image: url("<?php echo LINK; ?>/image/category_banner_1.jpg");
	}
</style>
<div class="category__banner">
	<h1>Category</h1>
</div>
<div class="category__product">
	<div class="category__product__filter">
		<div class="category__product__filter__by__category">
			<h3>Filter By Category</h3>
			<label class="filter__by__category__container">
				<p>All</p>
				<input type="checkbox" checked="check" id="all_category_checkbox" onclick='changeCheckbox("all_category_checkbox")'>
				<span class="filter__by__category__checkmark"></span>
			</label>