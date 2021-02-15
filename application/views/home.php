<!--Start Banner Principal-->

<div class="fullwidth-template">
    <div class="slide-home-01">
        <div class="container">
            <div class="response-product product-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">

                   <?php foreach ($banner as $value):?>

            <!--banner -->

                <div class="slide-wrap">
                    <img src="<?php echo base_url() ?>assets/img/banners/<?php echo $value->imagem ?>" alt="image">
                    <div class="slide-info">
                        <div class="slide-inner">
                            <h5><?php echo $value->titulo ?></h5>
                            <h1><?php echo $value->subtitulo ?></h1>
                            <h2><?php echo $value->informacao ?></h2>
                            <a href="<?php echo $value->link ?>">Compre Agora</a>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
         <!--end banner-->
            </div>
        </div>
    </div>
    <div class="section-003 section-002">
        <div class="container">
            <div class="row">

                <?php foreach ($mini_banner as  $value):?>

   
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="kobolg-banner style-01">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="<?php echo base_url() ?>assets/img/banners/<?php echo $value->imagem?>"
                                     class="attachment-full size-full" alt="img"></figure>
                            <div class="banner-info">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <div class="banner-label">
                                            <?php echo $value->titulo ?>
                                        </div>
                                        <h6 class="title">
                                         <?php echo $value->subtitulo ?>  </h6>
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button" target="_self" href="<?php echo $value->link?>"><span>Compre Agora</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="kobolg-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">Destaques</h3>
                    <div class="subtitle">Feitos com carinho para os mais pequenos, nossos produtos são perfeitos para cada ocasião. Confira.
                    </div>
                </div>
            </div>
            <div class="kobolg-products style-02">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
           
                <?php foreach ($produtos as $value):?>
                   
                    <div class="product-item featured_products style-02 rows-space-30 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock featured shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="product-inner tooltip-top">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="<?= base_url('detalhes-produtos')?>?produto=<?= $value->id ?>" tabindex="-1">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>/assets/img/produtos/<?php echo $value->imagens ?>"
                                         alt="Gaming Mouse" width="270" height="350">
                                </a>
                               
                                <a href="<?= base_url('detalhes-produtos')?>?produto=<?= $value->id ?>" class="button yith-wcqv-button">Quick View</a></div>
                            <div class="product-info">
                                
                                <h3 class="product-name product_title">
                                    <a href="<?= base_url('detalhes-produtos')?>?produto=<?= $value->id ?>"
                                       tabindex="-1"><?php echo $value->titulo ?></a>
                                </h3>
                                <span class="price"><span class="kobolg-Price-amount amount">
                                  <span
                                        class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span><?php echo $value->preco ?></span>
                            </div>
                            <div class="group-button clearfix">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="button product_type_grouped">
                                        Select options</a></div>
                                <div class="kobolg product compare-button">
                                    <a href="#" class="compare button">Compare</a></div>
                            </div>
                        </div>
                    </div>

             <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="kobolg-banner style-02 left-center">
            <div class="banner-inner">
                <figure class="banner-thumb">
                    <img src="<?php echo base_url() ?>assets/images/banner101.jpg"
                         class="attachment-full size-full" alt="img"></figure>
                <div class="banner-info container">
                    <div class="banner-content">
                        <div class="title-wrap">
                            <div class="banner-label">
                                Laptop Mordeno
                            </div>
                            <h6 class="title">
                                Mais vendidos </h6>
                        </div>
                        <div class="button-wrap">
                            <div class="subtitle">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit justo
                            </div>
                            <a class="button" target="_self" href="#"><span>Compre agora</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="kobolg-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">Novidades</h3>
                    <div class="subtitle">
                        Feitos com carinho para os mais pequenos, nossos produtos são perfeitos para cada ocasião. Confira.
                    </div>
                </div>
            </div>
            <div class="kobolg-products style-01">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>assets/images/apro13-1-270x350.jpg"
                                         alt="Meta Watches                                                " width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="kobolg product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Meta Watches                                                </a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>109.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>assets/images/apro302-270x350.jpg"
                                         alt="Circle Watches" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="kobolg product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Circle Watches</a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>79.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>assets/images/apro31-1-270x350.jpg"
                                         alt="Blue Smartphone" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="kobolg product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Blue Smartphone</a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>120.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>assets/images/apro41-1-270x350.jpg"
                                         alt="White Watches" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="kobolg product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">White Watches</a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>134.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>assets/images/apro51012-1-270x350.jpg"
                                         alt="Multi Cellphone" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-21%</span></span>
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="kobolg product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Multi Cellphone</a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><del><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                        class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>99.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="<?php echo base_url() ?>assets/images/apro61-1-270x350.jpg"
                                         alt="Black Watches" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="kobolg product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <a href="#"
                                           class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Black Watches</a>
                                </h3>
                                <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                            class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span></div>
                                <span class="price"><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>79.00</span> – <span
                                        class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-038">
        <div class="kobolg-banner style-07 left-center">
            <div class="banner-inner">
                <figure class="banner-thumb">
                    <img src="<?php echo base_url() ?>assets/images/banner28.jpg"
                         class="attachment-full size-full" alt="img"></figure>
                <div class="banner-info container">
                    <div class="banner-content">
                        <div class="title-wrap">
                            <div class="banner-label">
                                30 Nov - 03 Dec
                            </div>
                            <h6 class="title">
                               Nova coleção</h6>
                        </div>
                        <div class="cate">50% de desconto / itens selecionados          
                                      </div>
                        <div class="button-wrap">
                            <div class="subtitle">
                                Mus venenatis habitasse leo malesuada lacus commodo faucibus torquent donec
                            </div>
                            <a class="button" target="_self" href="#"><span>Compre agora</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <div class="section-014">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-rocket-launch"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">ENTREGA EM TODO O MUNDO
</h4>
                                <div class="desc">Com sites em 5 idiomas, enviamos para mais de 200 países e regiões.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-truck"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">ENVIO SEGURO</h4>
                                <div class="desc">Pague com os métodos de pagamento mais populares e seguros do mundo.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-reload"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">RETORNO DE 365 DIAS</h4>
                                <div class="desc">Assistência 24 horas para uma experiência de compra tranquila.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-telemarketer"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">CONFIANÇA NA LOJA</h4>
                                <div class="desc">Nossa proteção ao comprador cobre sua compra do clique até a entrega.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-008">
        <div class="kobolg-instagram style-01">
            <div class="instagram-owl owl-slick"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="0">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta1.jpg" alt="Home 01">
                        <span class="instagram-info">
                                 <span class="social-wrap">
                                    <span class="social-info">1
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta2.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="0">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta3.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta4.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta5.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="-1">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta6.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="-1">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta7.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="-1">
                        <img class="img-responsive lazy" src="<?php echo base_url() ?>assets/images/insta8.jpg" alt="Home 01">
                        <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
