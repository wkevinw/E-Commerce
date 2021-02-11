<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kobolg">
                        <div class="kobolg-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login">
                            <div class="u-column1 col-1" style="width: 100%">
                                <h2>Cadastro de usuário</h2>
                                <form action="<?= base_url('salvar-cadastro') ?>" class="kobolg-form kobolg-form-login login" method="post">
                                    <div class="row">
                                        <div class="form-row  col-md-6">
                                            <label for="nome">Nome completo:</label>
                                            <input class="input-text" type="text" name="nome">
                                        </div>

                                        <div class="form-row col-md-6">
                                            <label for="cpf">CPF:</label>
                                            <input class="input-text" type="text" name="cpf">
                                        </div>

                                        <div class="form-row col-md-6">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="input-text" name="email">
                                        </div>

                                        <div class="form-row col-md-6">
                                            <label for="senha">Senha:</label>
                                            <input class="input-text" type="password" name="senha">
                                        </div>

                                        <div class="form-row col-md-6">
                                            <label for="rua">rua:</label>
                                            <input class="input-text" type="text" name="rua">
                                        </div>

                                        <div class="form-row col-md-6">
                                            <label for="bairro">Bairro:</label>
                                            <input class="input-text" type="text" name="bairro">
                                        </div>


                                        <div class="form-row col-md-6">
                                            <label for="numero">Número:</label>
                                            <input class="input-text" type="text" name="numero">
                                        </div>

                                        <div class="form-row col-md-6">
                                            <label for="cidade">Cidade:</label>
                                            <input class="input-text" type="text" name="cidade">
                                        </div>


                                        <div class="form-row col-md-6">
                                            <label for="estado">Estado:</label>
                                            <input class="input-text" type="text" name="estado">
                                        </div>


                                        <div class="form-row col-md-6">
                                            <label for="cep">CEP:</label>
                                            <input class="input-text" type="text" name="cep">
                                        </div>
                                    </div>

                                    <div class="form-row" >

                                        <button type="submit" class="kobolg-Button button">Salvar Cadastro
                                        </button>

                                    </p>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>