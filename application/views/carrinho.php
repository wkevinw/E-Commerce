
<div class="banner-wrapper has_background">
    <img src="<?php echo base_url() ?>assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title container">Carrinho</h1>
        
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kobolg">
                        <div class="kobolg-notices-wrapper"></div>
                        <form class="kobolg-cart-form">
                            <table class="shop_table shop_table_responsive cart kobolg-cart-form__contents"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Produto</th>
                                    <th class="product-price">Preço</th>
                                    <th class="product-quantity">Quantidade</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php $total = 0 ?>
                                    <?php foreach ($carrinho as  $value) :?>

                                    <?php $total =  $value['dados_produto']->preco *  $value['quantidade'] + $total ?>
                                <tr class="kobolg-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="<?= base_url('apaga-produto-carrinho')?>?produto=<?= $value['produto']?>"
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-proct_sku="885B712">x</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="<?php echo base_url() ?>/assets/img/produtos/<?php echo $value['dados_produto']->imagens ?>"
                                                class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#"><?php echo $value['dados_produto']->titulo ?></a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">R$</span><?= $value['dados_produto']->preco?></span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                     <div class="quantity">
                                            

                                                <a href="<?= base_url('aumentar-produto-carrinho') ?>?produto=<?= $value['produto'] ?>">Aumentar</a>
                                                 <input type="text"
                                                       value="<?= $value['quantidade'] ?>" title="Qty">
                                                <a href="<?= base_url('diminuir-produto-carrinho') ?>?produto=<?= $value['produto'] ?>">Diminuir</a>

                                               
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">R$</span><?= $value['dados_produto']->preco *  $value['quantidade'] ?></span></td>
                                </tr>
                            <?php endforeach?>

                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Cupom:</label> <input type="text"
                                                                                            name="coupon_code"
                                                                                            class="input-text"
                                                                                            id="coupon_code" value=""
                                                                                            placeholder="Coupon code">
                                            <button type="submit" class="button" name="apply_coupon"
                                                    value="Apply coupon">Aplicar cupom
                                            </button>
                                        </div>
                                        <button type="submit" class="button" name="update_cart" value="Update cart"
                                                disabled="">Atualizar carrinho
                                        </button>
                                        <input type="hidden" id="kobolg-cart-nonce" name="kobolg-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/kobolg/cart/"></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Totais do carrinho</h2>
                                <table class="shop_table shop_table_responsive" cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">R$</span><?= $total?></span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">R$</span><?= $total?></span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="kobolg-proceed-to-checkout">
                                    <a href="#"
                                       class="checkout-button button alt kobolg-forward">
                                        Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    <span>Produtos Relacionados</span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height"
                                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <div class="product-item style-01 post-278 page type-page status-publish hentry">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="#"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="assets/images/apro51012-1-600x778.jpg"
                                                     alt="Multi Cellphone" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-21%</span></span>
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="kobolg product compare-button"><a href="#"
                                                                                                   class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Visualizar</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                     carrinho
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#"
                                                   tabindex="0">Multi Cellphone</a>
                                            </h3>
                                           
                                            <span class="price"><del><span
                                                    class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                                    class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style-01 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="#"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="assets/images/apro71-1-600x778.jpg"
                                                     alt="Gaming Mouse" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-18%</span></span>
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="kobolg product compare-button"><a href="#"
                                                                                                   class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#"
                                                   tabindex="0">Gaming Mouse</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                    class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                                    class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="#"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="assets/images/apro91-1-600x778.jpg"
                                                     alt="Classic Watches" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="kobolg product compare-button"><a href="#"
                                                                                                   class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#"
                                                   tabindex="0">Classic Watches</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><span
                                                    class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">$</span>89.00</span> – <span
                                                    class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>