    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fale Conosco</h2>
                    <h3 class="section-subheading text-muted">Amplie seu faturamento com os maiores marketplaces do mercado!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Preencha seu nome!">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Preencha com um email válido!">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu Telefone *" id="phone" required data-validation-required-message="Preencha seu telefone!">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua Menssagem *" id="message" required data-validation-required-message="Insira sua mensagem!"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="bntEnviar" type="submit" class="btn btn-xl ">Enviar Mensagem</button>

                                <button id="btnEnviando" style="display:none;" type="submit" class="btn btn-xl "> <span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Enviando...</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>