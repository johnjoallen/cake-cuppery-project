</div><!--End Content-->
		<div id="footer">
			<div class="infiniteCarousel">
			  <div class="wrapper">
				<ul>
					<?php query_posts(array( 'category__and' => array(4), 'posts_per_page' => 20, 'order' => 'DESC' ) );
					if(have_posts()){ 
					while ( have_posts() ) : the_post() ?>
						<li><?php the_content(); ?></li>
					<?php endwhile; } ?>
				</ul>        
			  </div>
		    </div>
			<div id="details">
				<div id="vcard">
					<p>
						The Cake Cuppery,<br />
						Lucan,<br />
						Co.Dublin,<br />
						Phone: 086 730 4576<br />
						email: <a href="mailto:info@thecakecuppery.ie?Subject=Query From Website">info@thecakecuppery.ie</a>
					</p>
				</div>
				<div id="nav">
				<ul>	
					<?php wp_page_menu(); ?>	
				</ul>
				</div>
				<div id="social">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FTheCakeCuppery&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true&amp;height=290" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<map name="twitter" id="twitter"><area shape="circle" coords="182,107,23" href="http://www.facebook.com/TheCakeCuppery" target="_blank" alt="Link to The Cake Cuppery Bakery on Facebook" />
<area shape="circle" coords="140,127,17" href="https://twitter.com/thecakecuppery" target="_blank" alt="Follow us on Twitter" />
</map>
</body>
</html>