<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Loja';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['produtos'] = 'Produtos/listagem';

$route['detalhes-produtos'] = 'Produtos/detalhes';

$route['adicionar-carrinho'] = 'Carrinho/adicionar_carrinho';

$route['carrinho'] = 'Carrinho/listar_carrinho';

$route['apaga-produto-carrinho'] = 'Carrinho/apaga_produto_carrinho';

$route['diminuir-produto-carrinho'] = 'Carrinho/diminuir_produto_carrinho';
$route['aumentar-produto-carrinho'] = 'Carrinho/aumentar_produto_carrinho';


//login//acesso/perfil

$route['login'] = 'Perfil/login';

$route['sair'] = 'Perfil/deslogar';
$route['realiza-login'] = 'Perfil/realiza_login';
$route['cadastrar'] = 'Perfil/cadastrar';