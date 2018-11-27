   <!--Footer -->   
      <footer>
        <div class="footer-section">
          <div class="container">
            <div class="footer-top">
            <p>2018 - Todos os Direitos Reservados Equipe Libry</p>
            <!-- <p>Designed by <a href="http://w3layouts.com" target="target_blank">Didier Laureaux</a></p> -->
          </div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a class="scroll" href="#head" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='/rpg/web/js/jquery-2.2.3.min.js'></script>
      <!-- For the demo ad only -->  
      <!--nav menu-->
      <script src="/rpg/web/js/classie.js"></script>
      <script src="/rpg/web/js/demonav.js"></script>
      <!-- //nav menu-->
           <script src="/rpg/web/js/timeline.min.js"></script>
         <script>
            timeline(document.querySelectorAll('.timeline'), {
               forceVerticalMode: 700,
               mode: 'horizontal',
               verticalStartPosition: 'left',
               visibleItems: 4
            });
         </script>
        
      <!-- //nav menu-->
      <!--bootstrap working-->
      <script src="/rpg/web/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>