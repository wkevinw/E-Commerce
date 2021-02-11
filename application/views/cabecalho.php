<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/chosen.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/lightbox.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/megamenu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dreaming-attribute.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css"/>
    <title>WK - Sistemas</title>
</head>
<body>
<header id="header" class="header style-04 header-dark">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-left-menu" class="kobolg-nav top-bar-menu">
                    <li id="menu-item-864"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864"><a
                            class="kobolg-menu-item-title" title="Store Direction"
                            href="#"><span class="icon flaticon-placeholder"></span>Localização da loja</a></li>
                    <li id="menu-item-865"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                            class="kobolg-menu-item-title" title="Order Tracking"
                            href="#"><span class="icon flaticon-box"></span>Rastreamento de pedido</a></li>
                </ul>
                <div class="kobolg-nav top-bar-menu right">
                    <ul class="wpml-menu">
                        <li class="menu-item kobolg-dropdown block-language">
                            <a href="#" data-kobolg="kobolg-dropdown">
                                <img src="<?php echo base_url() ?>assets/images/bandeira.png"
                                     alt="en" width="18" height="12">
                                Português
                            </a>
                            <span class="toggle-submenu"></span>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">
                                        <img src="<?php echo base_url() ?>assets/images/en.png"
                                             alt="it" width="18" height="12">
                                        English
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-inner">
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    
                    <div class="header-logo">
                        <a href="<?php echo base_url() ?>"><img alt="Kobolg" src="<?php echo base_url() ?>assets/images/logo.png"s class="logo"></a></div>
                </div>
                <div class="header-search-mid">
                    <div class="header-search">
                        <div class="block-search">
                            <form role="search" method="get"
                                  class="form-search block-search-form kobolg-live-search-form">
                                <div class="form-content search-box results-search">
                                    <div class="inner">
                                        <input autocomplete="off" class="searchfield txt-livesearch input" name="s"
                                               value="" placeholder="O que você Procura..." type="text">
                                    </div>
                                </div>
                                <input name="post_type" value="product" type="hidden">
                                <input name="taxonomy" value="product_cat" type="hidden">
                                <div class="category">
                                    <select title="product_cat" name="product_cat" id="1771262470"
                                            class="category-search-option"
                                            tabindex="-1" style="display: none;">
                                        <option value="0">Todas Categorias</option>
                                        <option class="level-0" value="light">Linha Gamer</option>
                                 <option class="level-0" value="chair">Periféricos</option>
                                 <option class="level-0" value="table">Game & Consoles</option>
                                 <option class="level-0" value="bed">HardWare</option>
                                 <option class="level-0" value="new-arrivals">Monitores</option>
                                 <option class="level-0" value="lamp">Acessorios</option>
                                 <option class="level-0" value="specials">Jogos</option>
                                     
                                    
                                    </select>
                                </div>
                                <button type="submit" class="btn-submit">
                                    <span class="flaticon-search"></span>
                                </button>
                            </form><!-- block search -->
                        </div>
                    </div>
                </div>
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            <div class="menu-item block-user block-dreaming kobolg-dropdown">
                                <a class="block-link" href="<?= base_url('login')?>">
                                    <span class="flaticon-profile"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--dashboard is-active">
                                        <a href="<?= base_url('login')?>">Meu Perfil</a>
                                    </li>
                              
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--customer-logout">
                                        <a href="#">Sair</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="block-minicart block-dreaming kobolg-mini-cart kobolg-dropdown">
                                <div class="shopcart-dropdown block-cart-link" data-kobolg="kobolg-dropdown">
                                    <a class="block-link link-dropdown" href="cart.html">
                                        <span class="flaticon-online-shopping-cart"></span>
                                        <?php if(isset($carrinho)){?>
                                        <span class="count"> <?php echo count($carrinho) ?></span>
                                    <?php } ?>
                                    </a>
                                </div>
                                <div class="widget kobolg widget_shopping_cart">

                                    <div class="widget_shopping_cart_content">

                                        <h3 class="minicart-title">Seu Carrinho


                                            <?php if(isset($carrinho)){ ?>
                                            <span class="minicart-number-items"><?php echo count($carrinho)?></span>
                                        <?php } ?>
                                        </h3>

                                        <?php $total = 0 ?>
                                        <?php if(isset($carrinho)){ ?>
                                        
                                         <?php foreach ($carrinho as  $value) :?>
                                         <?php $total =  $value['dados_produto']->preco *  $value['quantidade'] + $total ?>
                                        <ul class="kobolg-mini-cart cart_list product_list_widget">
                                            <li class="kobolg-mini-cart-item mini_cart_item">
                                                <a href="<?= base_url('apaga-produto-carrinho')?>?produto=<?= $value['produto']?>" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="<?php echo base_url() ?>/assets/img/produtos/<?php echo $value['dados_produto']->imagens ?>"
                                                         class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                         alt="img" width="600" height="778"><?php echo $value['dados_produto']->titulo ?>&nbsp;
                                                </a>
                                                <span class="quantity"><?= $value['quantidade'] ?>x <span
                                                        class="kobolg-Price-amount amount"><span
                                                        class="kobolg-Price-currencySymbol">R$</span><?= $value['dados_produto']->preco?></span></span>
                                            </li>
                                    <?php endforeach ?>     
                               <?php }?>
                                        </ul>

                                        <p class="kobolg-mini-cart__total total"><strong>Subtotal:</strong>
                                            <span class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">R$</span><?= $total?></span>
                                        </p>
                                        <p class="kobolg-mini-cart__buttons buttons">
                                            <a href="<?= base_url('carrinho')?>" class="button kobolg-forward">Ver Carrinho</a>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-nav">
                <div class="container">
                    <div class="kobolg-menu-wapper"></div>
                    <div class="header-nav-inner">
                        <div data-items="8"
                             class="vertical-wrapper block-nav-category has-vertical-menu show-button-all">
                            <div class="block-title">
                    <span class="before">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                                <span class="text-title">CATEGORIAS</span>
                            </div>

                            <div class="block-content verticalmenu-content">
                                <ul id="menu-vertical-menu" class="azeroth-nav vertical-menu default">
                                   
                                   <?php foreach ($categoria as  $value):?>
                                    <li id="menu-item-886"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-886"><a
                                            class="azeroth-menu-item-title" title="Linha PC Gamer" href="#"><span class="icon flaticon-layers"></span><?= $value->nome?></a></li>
                               

                                <!--    <li id="menu-item-895"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895"><a
                                            class="azeroth-menu-item-title" title="Game & Consoles" href="#"><span class="icon flaticon-console"></span>Game & Consoles</a>
                                    </li>
                                    <li id="menu-item-888"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-888"><a
                                            class="azeroth-menu-item-title" title="Perifericos" href="#"><span class="icon flaticon-print-button"></span>Perifericos</a></li>
                                    <li id="menu-item-889"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889"><a
                                            class="azeroth-menu-item-title" title="HardWare" href="#"><span class="icon flaticon-technology-1"></span>HardWare</a></li>
                                    <li id="menu-item-890"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-890"><a
                                            class="azeroth-menu-item-title" title="Monitores" href="#"><span class="icon flaticon-smartphone"></span>Monitores</a></li>
                                    <li id="menu-item-891"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-891"><a
                                            class="azeroth-menu-item-title" title="Acessorios" href="#"><span class="icon flaticon-mouse"></span>Acessorios</a></li>
                                    <li id="menu-item-892"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-892"><a
                                            class="azeroth-menu-item-title" title="Jogos" href="#"><span class="icon flaticon-layers"></span>Jogos</a>
                                    </li>
                                    <li id="menu-item-893"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-893"><a
                                            class="azeroth-menu-item-title" title="Destaque" href="#"><span class="icon flaticon-shapes"></span>Destaque</a></li>
                                    <li id="menu-item-894"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-894 link-other">
                                        <a class="azeroth-menu-item-title" title="Lançamentos" href="#"><span class="icon flaticon-shiny-diamond"></span> Lançamentos</a></li>-->
                               
                                    <?php endforeach ?>
                                </ul> 
                                <div class="view-all-category">
                                    <a href="#" data-closetext="Close" data-alltext="Todas Categorias"
                                       class="btn-view-all open-cate">Todas Categorias</a>
                                </div>
                            </div>
                        </div><!-- block category -->
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu kobolg-clone-mobile-menu kobolg-nav main-menu">
                                
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kobolg-menu-item-title" title="Home" href="<?= base_url('produtos')?>">Produtos</a>
                                  
                                    <?php foreach ($categoria_cabecalho as $value) :?>

                                <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kobolg-menu-item-title" title="Shop"
                                       href="shop.html"><?=  $value->nome?></a>
                                   
                                </li>
                                        <?php endforeach ?>
                               
                                
                                <li id="menu-item-238"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-238">
                                    <a class="kobolg-menu-item-title" title="Frete grátis para pedidos R$ 500" href="#">Frete grátis para pedidos de R$ 500</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search kobolg-dropdown">
                <div class="header-search-inner" data-kobolg="kobolg-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-search"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form kobolg-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="O que você Procura..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat" id="1770352541"
                                    class="category-search-option" tabindex="-1"
                                    style="display: none;">
                                 <option value="0">Todas Categorias</option>
                                 <option class="level-0" value="light">Linha Gamer</option>
                                 <option class="level-0" value="chair">Periféricos</option>
                                 <option class="level-0" value="table">Game & Consoles</option>
                                 <option class="level-0" value="bed">HardWare</option>
                                 <option class="level-0" value="new-arrivals">Monitores</option>
                                 <option class="level-0" value="lamp">Acessorios</option>
                                 <option class="level-0" value="specials">Jogos</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-search"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item kobolg-dropdown block-language">
                    <a href="#" data-kobolg="kobolg-dropdown">
                        <img src="<?php echo base_url() ?>assets/images/bandeira.png"
                             alt="en" width="18" height="12">
                        Português
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="<?php echo base_url() ?>assets/images/en.png"
                                     alt="it" width="18" height="12">
                                English
                            </a>
                        </li>
                    </ul>
                </li>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Kobolg"
                                          src="<?php echo base_url() ?>assets/images/logo.png"
                                          class="logo"></a></div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming kobolg-dropdown">
                        <a class="block-link" href="<?= base_url('login')?>">
                            <span class="flaticon-profile"></span>
                        </a>
                       <ul class="sub-menu">
                                  <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--dashboard is-active">
                                        <a href="<?= base_url('login')?>">Meu Perfil</a>
                                    </li>
                              
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--customer-logout">
                                        <a href="#">Sair</a>
                                    </li>
                                </ul>
                    </div>
                    <div class="block-minicart block-dreaming kobolg-mini-cart kobolg-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-kobolg="kobolg-dropdown">
                            <a class="block-link link-dropdown" href="cart.html">
                                <span class="flaticon-online-shopping-cart"></span>
                                <?php if(isset($carrinho)){ ?>
                                <span class="count">  <?php echo count($carrinho) ?></span>
                            <?php } ?>
                            </a>
                        </div>
                        <div class="widget kobolg widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Seu Carrinho

                                      <?php if(isset($carrinho)){ ?>
                                        <span class="minicart-number-items"> <?php echo count($carrinho) ?></span>
                                    <?php }?>
                                    </h3>
                               

                                        <?php $total = 0 ?>
                                        <?php if(isset($carrinho)){ ?>
                                        
                                         <?php foreach ($carrinho as  $value) :?>
                                         <?php $total =  $value['dados_produto']->preco *  $value['quantidade'] + $total ?>
                                        <ul class="kobolg-mini-cart cart_list product_list_widget">
                                            <li class="kobolg-mini-cart-item mini_cart_item">
                                                <a href="<?= base_url('apaga-produto-carrinho')?>?produto=<?= $value['produto']?>" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="<?php echo base_url() ?>/assets/img/produtos/<?php echo $value['dados_produto']->imagens ?>"
                                                         class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                         alt="img" width="600" height="778"><?php echo $value['dados_produto']->titulo ?>&nbsp;
                                                </a>
                                                <span class="quantity"><?= $value['quantidade'] ?>x <span
                                                        class="kobolg-Price-amount amount"><span
                                                        class="kobolg-Price-currencySymbol">R$</span><?= $value['dados_produto']->preco?></span></span>
                                            </li>
                                    <?php endforeach ?>     
                               <?php }?>
                                        </ul>
                               <p class="kobolg-mini-cart__total total"><strong>Subtotal:</strong>
                                            <span class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol">R$</span><?= $total?></span>
                                        </p>
                                <p class="kobolg-mini-cart__buttons buttons">
                                    <a href="<?= base_url('carrinho')?>" class="button kobolg-forward">Ver Carrinho</a>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
