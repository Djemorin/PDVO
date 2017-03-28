<?php require 'inc/header.php'; ?>
	
		<div class="p2">
			<div class="man">
				<h2>Montures Hommes</h2>
				<div class="gal">
					<div class="cat">
						<img id="myImg" src="imgs/l1.jpg" alt="pouet">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg2" src="imgs/l2.jpg" alt="prout">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg3" src="imgs/l3.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg4" src="imgs/l4.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
				</div>
			</div>

			<div class="woman">
				<h2>Montures Femmes</h2>
				<div class="gal">
					<div class="cat">
						<img id="myImg5" src="imgs/l1.jpg" alt="pouet">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg6" src="imgs/l2.jpg" alt="prout">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg7" src="imgs/l3.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg8" src="imgs/l4.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
				</div>
			</div>

			<div class="kids">
				<h2>Montures Enfants</h2>
				<div class="gal">
					<div class="cat">
						<img id="myImg9" src="imgs/l1.jpg" alt="pouet">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg10" src="imgs/l2.jpg" alt="prout">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg11" src="imgs/l3.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg12" src="imgs/l4.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
				</div>
			</div>

			<div class="sun">
				<h2>Montures Solaires</h2>
				<div class="gal">
					<div class="cat">
						<img id="myImg13" src="imgs/l1.jpg" alt="pouet">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg14" src="imgs/l2.jpg" alt="prout">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg15" src="imgs/l3.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
					<div class="cat">
						<img id="myImg16" src="imgs/l4.jpg">
						<p>Trololololo lololo lololo</p>
					</div>
				</div>
			</div>

			<!-- The Modal -->
			<div id="myModal" class="modal">
			  <span class="close">&times;</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>

			<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the image and insert it inside the modal - use its "alt" text as a caption
				var img = document.getElementById('myImg');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg2');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg3');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg4');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg5');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg6');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg7');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg8');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg9');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg10');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg11');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg12');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg13');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg14');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg15');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('myImg16');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() { 
				    modal.style.display = "none";
				}
			</script>
		</div>

<?php require 'inc/footer.php'; ?>