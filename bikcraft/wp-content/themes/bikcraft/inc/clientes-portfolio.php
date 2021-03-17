<?php $portfolio = get_page_by_title('portfolio'); ?>

<div class="container" data-slide="portfolio">
  <?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
  <ul class="portfolio_lista">
  	<li>
  		<div class="grid-8"><img src="<?php the_sub_field('portfolio_imagem_1', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao_1', $portfolio); ?>"></div>
  		<div class="grid-8"><img src="<?php the_sub_field('portfolio_imagem_2', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao_2', $portfolio); ?>"></div>
  		<div class="grid-16"><img src="<?php the_sub_field('portfolio_imagem_3', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao_3', $portfolio); ?>"></div>
  	</li>
  </ul>
  <?php endwhile; else : endif; ?>
</div>

<?php if (!is_page('portfolio')) { ?>
<div class="call">
	<p><?php the_field('chamada_portfolio', $portfolio); ?></p>
	<a href="/bikcraft/portfolio/" class="btn">Portfólio</a>
</div>
<?php } ?>
