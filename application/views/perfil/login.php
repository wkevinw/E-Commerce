




<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kobolg">
                        <div class="kobolg-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login">
                            <div class="u-column1 col-1">
                                <h2>Cadastro</h2>
                                <form  action="<?= base_url('realiza-login')?>" class="kobolg-form kobolg-form-login login" method="post">
                            


                                    <p class="kobolg-form-row kobolg-form-row--wide form-row form-row-wide">
                                        <label for="username">E-mail &nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="kobolg-Input kobolg-Input--text input-text"
                                               name="email" id="username" autocomplete="username" value=""></p>


                                    <p class="kobolg-form-row kobolg-form-row--wide form-row form-row-wide">
                                        <label for="password">Senha&nbsp;<span class="required">*</span></label>
                                        <input class="kobolg-Input kobolg-Input--text input-text"
                                               type="password" name="senha" id="password"
                                               autocomplete="current-password">
                                    </p>
                                   

                                    <p class="form-row">
                                       
                                        <button type="submit" class="kobolg-Button button" 
                                            >Entrar
                                        </button>
                                        
                                    </p>
                                    <p class="kobolg-LostPassword lost_password">
                                        <a href="my-account.htmllost-password/">Esqueci a senha?</a>
                                    </p>
                                </form>
                            </div>
                            <div class="u-column2 col-2">
                                <h2>Registrar</h2>
                               
                                  
                                    <div class="kobolg-privacy-policy-text"><p>Seus dados pessoais serão usados ​​para apoiar sua experiência em todo este site, para gerenciar o acesso à sua conta e para outros fins descritos em nossa <a
                                                href="#" class="kobolg-privacy-policy-link"
                                                target="_blank"></a></p>
                                    </div>
                                    <p class="kobolg-FormRow form-row">
                                        <a href="<?=base_url('cadastrar')?>">
                                        <button type="submit" class="kobolg-Button button">Criar conta
                                        </button>
                                    </a>
                                    </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>