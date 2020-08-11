<style>
.star-rating i {
	color: red;
	font-size: 24px;
}
</style>
<div class="star-rating">
		<i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
		<i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
		<i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
		<i class="far fa-star" id="star4" onclick="add(this,4)"></i>
		<i class="far fa-star" id="star5" onclick="add(this,5)"></i>
    </div>
    
    <script>
        function add(ths, sno) {
	for (var i = 1; i <= 5; i++) {
		var cur = document.getElementById("star" + i)
		cur.className = "far fa-star"
	}
	for (var i = 1; i <= sno; i++) {
		var cur = document.getElementById("star" + i)
		if (cur.className == "far fa-star") {
			cur.className = "fas fa-star"
		}
	}
}
    </script>