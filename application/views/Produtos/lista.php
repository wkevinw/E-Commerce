    <div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title container">Shop</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Shop</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        <form>
                            <a href="shop.html" data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-grid display-mode active" value="grid">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="shop-list.html" data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-list display-mode " value="list">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>
                    <form class="kobolg-ordering" method="get">
                        <select title="product_cat" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                    <form class="per-page-form">
                        <label>
                            <select class="option-perpage">
                                <option value="12" selected="">
                                    Show 12
                                </option>
                                <option value="5">
                                    Show 05
                                </option>
                                <option value="10">
                                    Show 10
                                </option>
                                <option value="12">
                                    Show 12
                                </option>
                                <option value="15">
                                    Show 15
                                </option>
                                <option value="20">
                                    Show All
                                </option>
                            </select>
                        </label>
                    </form>
                </div>
                <div class="auto-clear equal-container better-height kobolg-products">
                    <ul class="row products columns-3">
                        
                        <?php foreach ($produtos as $value):?>
                           <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="<?php echo base_url('detalhes-produtos') ?>?produto=<?=$value->id ?>">
                                        <img class="img-responsive"
                                             src="<?php echo base_url() ?>/assets/img/produtos/<?php echo $value->imagens ?>"
                                             alt="Meta Watches                                                " width="600" height="778">
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
                                        <a href="#"><?php echo $value->titulo ?> </a>
                                    </h3>
                                   
                                    <span class="price"><span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span><?php echo $value->preco ?></span></span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <div class="shop-control shop-after-control">
                    <nav class="kobolg-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                    <p class="kobolg-result-count">Showing 1–12 of 20 results</p>
                </div>
            </div>
        </div>
    </div>
</div>
