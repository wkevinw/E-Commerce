

<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="kobolg-notices-wrapper"></div>
                <div id="product-27"
                     class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="kobolg-product-gallery kobolg-product-gallery--with-images kobolg-product-gallery--columns-4 images">
                                    <a href="#" class="kobolg-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                             src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                    <div class="flex-viewport">
                                        <figure class="kobolg-product-gallery__wrapper">
                                            <div class="kobolg-product-gallery__image">
                                                <img alt="img"
                                                     src="<?= base_url() ?>assets/img/produtos/<?= $produto->imagens ?>">
                                            </div>
                                            
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        <li><img
                                                src="<?= base_url() ?>assets/img/produtos/<?= $produto->imagens ?>"
                                                alt="img">
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title"><?php echo $produto->titulo ?></h1>
                                <p class="price"><span class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span><?php echo $produto->preco ?></span></p>
                                <div class="kobolg-product-details__short-description">
                                    <p><?php echo $produto->descricao ?></p>
                                    
                                </div>
                                
                                <form action="<?= base_url('adicionar-carrinho')?>"  method="POST" class="variations_form cart">
                                    <input type="hidden" name="id_produto" value="<?= $produto->id?>">
                                    <div class="single_variation_wrap">
                                        <div class="kobolg-variation single_variation"></div>
                                        <div class="kobolg-variation-add-to-cart variations_button">
                                            <div class="quantity">
                                                <span class="qty-label">Quantidade:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" data-step="1" min="1" max="" name="quantidade" value="1" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                    class="single_add_to_cart_button button alt kobolg-variation-selection-needed">
                                                Compra Agora
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="#" rel="nofollow"
                                           data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                            Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <a href="#"
                                   class="compare button" data-product_id="27" rel="nofollow">Compare</a>
                                <div class="product_meta">
                                   
                                    <span class="sku_wrapper">SKU: <span class="sku">885B712</span></span>
                                    <span class="posted_in">Categoria: <a
                                            href="#"
                                            rel="tag"><?= $produto->nome_categoria?></a>
                                        
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="kobolg-tabs kobolg-tabs-wrapper">
                        <ul class="tabs dreaming-tabs" role="tablist">
                            <li class="description_tab active" id="tab-title-description" role="tab"
                                aria-controls="tab-description">
                                <a href="#tab-description">Descrição</a>
                            </li>
                            
                        </ul>
                        <div class="kobolg-Tabs-panel kobolg-Tabs-panel--description panel entry-content kobolg-tab"
                             id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Descrição</h2>
                            <div class="container-table">
                                <div class="container-cell">
                                    <h2 class="az_custom_heading">Detalhes<br></h2>
                                    <p><?php echo $produto->descricao ?></p>
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
</div>