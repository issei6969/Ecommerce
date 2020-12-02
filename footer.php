<footer id="footer">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer">
								<h2 class="footer-title font-weight-bold">Contact Us</h2>
								
								<ul class="footer-links">
									<li><a href="#" class="h3"><i class="fa fa-map-marker"></i>Sec 15, Panvel</a></li>
									<li><a href="#" class="h4"><i class="fa fa-phone"></i>+91 7777777777</a></li>
									<li><a href="#" class="h4"><i class="fa fa-envelope-o"></i>abc_07@gmail.com</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
						<div class="col">
								
								<div class="mapouter"><div class="gmap_canvas"><iframe width="1400" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=pillai%20college%20of%20engineering%20panvel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://sites.google.com/view/maps-api-v2/mapv2"></a></div><style>.mapouter{position:relative;text-align:right;height:250px;width:1350px;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:1350px;}</style></div>

						</div>
					</div>
				</div>

			</div>

</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
