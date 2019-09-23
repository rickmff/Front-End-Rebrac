<html>
<? include('includes/meta.php'); ?>
<? include('includes/css.php'); ?>
</head>

<body>
   <div class="container">

      <!-- Under Nav -->
      <? include('includes/undernav.php'); ?>

      <!-- Menu Nav -->
      <? include('includes/navbar.php'); ?>

      <div class="set-red-line"></div>
   </div>
   </div>
   <!--  botão ir para topo -->
   <button class="btn btn-top pt-2 text-white" onclick="topFunction()" data-aos="fade-up"><i class="fas fa-arrow-up"></i></button>
   <div class="row  py-5">
      <div class="container">
         <div class=" col-12">
            <h2 class="text-uppercase font-weight-bold" data-aos="fade-right" data-aos-duration="1500">Rebrac</h2>
         </div>
         <div class=" col-12">
            <h3 class="text-uppercase rebrac-red-color" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">Assistência tecnica</h3>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="row">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet ullamcorper enim nec
               tempus. Quisque et iaculis sapien. Maecenas semper neque id massa fermentum, a iaculis justo
               fermentum. Duis rutrum velit metus, a sagittis enim bibendum quis. Duis ultrices metus quis sodales
               tristique. Nunc faucibus sed libero non volutpat.
            </p>
            <p>
               Pellentesque vestibulum, enim at convallis
               sagittis, lacus ligula mollis sem, non auctor dui massa non ipsum. Aenean turpis ligula, interdum et
               dui facilisis, interdum aliquet lacus. Etiam rutrum semper laoreet.
            </p>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5 pb-5">
            <img src="./imagens/service-1.png" class="rounded d-block mb-3 img-fluid" id="assistImage" alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição" title="Qualidade e agilidade na calibração e manutenção de instrumentos de medição">
         </div>
      </div>
   </div>

   <div class="overflow-hidden bg-4">
      <div class="row py-5">
         <div class="col-12 col-md-6 text-center" data-aos="zoom-in">
            <h3 class="text-white font-weight-bold text-uppercase">Solicite um orçamento</h3>
            <form class="set-form" id="form-service" method="post" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-12 ">
                     <div class="py-1">
                        <input type="hidden" name="url" value="https://www.rebrac.com.br">
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                     </div>
                     <div class="py-1">
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                     </div>
                     <div class="py-1">
                        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone" required>
                     </div>
                     <div class="py-1">
                        <textarea placeholder="Mensagem" name="mensagem" id="mensagem" class="form-control message-box" set-rows="6" onfocus="SetAnimation(['.message-box'],'box_height')" onfocusout="SetAnimation(['.message-box'],'box_height_reverse')" required></textarea>
                     </div>
                     <div class="py-3 text-right">
                        <button type="submit" class="btn rebrac-red-color bg-warning py-2 px-4 font-weight-bolder" role="button" aria-pressed="true">SOLICITAR</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">SOLICITAÇÃO ENVIADA</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-2 text-center">
                           <i class="far fa-check-circle fa-2x text-success" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                           Obrigado sua solicitação foi enviada, e está sendo análisada.
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar ao site</button>
                     <a type="button" href="https://api.whatsapp.com/send?phone=5515998320028&amp;text=Olá, Solicitei um orçamento e estou com uma dúvida." class="btn set-under-nav-wapp text-white">Dúvidas ? entre em contato <i class="fab fa-whatsapp fa-lg" aria-hidden="true"> </i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Carousel 2 -->
   <? include('includes/carousel2.php'); ?>

   <div class="container my-5 overflow-hidden">
      <div class="row">
         <div class="col-12 col-md-6">
            <h3 class="font-weight-bold text-uppercase">Veja Mais</h3>
         </div>
         <div class="col-12 col-md-6 text-right">
            <button type="button" href="#" class="btn text-white set-bg-blue py-3 px-3 text-uppercase " role="button" aria-pressed="true">Fale conosco</a></button>
         </div>
      </div>
      <div class="row mt-4 ">
         <div class="col-12 col-md-6 " data-aos="flip-left" data-aos-duration="1000">
            <img src="./imagens/service-1.png" class="img-fluid over" alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição" title="REBRAC calibração e manutenção de instrumentos de medição" />
            <div class="col-12">
               <h6 class="rebrac-red-color font-weight-bolder my-2 mt-5">CALIBRAÇÃO</h6>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
               mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed
               eleifend tristique, tortor mauris molestie elit,
               et lacinia ipsum.
            </div>
         </div>
         <div class="col-12 col-md-6 " data-aos="flip-left" data-aos-delay="150" data-aos-duration="1500">
            <img src="./imagens/service-2.png" class="img-fluid" alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição" title="REBRAC calibração e manutenção de instrumentos de medição" />
            <div class="col-12">
               <h6 class="rebrac-red-color font-weight-bolder text-uppercase my-2 mt-5">Assistência técnica</h6>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
               mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed
               eleifend tristique, tortor mauris molestie elit,
               et lacinia ipsum.
            </div>
         </div>
      </div>
   </div>
   <? include('includes/footer.php'); ?>
   <? include('includes/js.php'); ?>
   <? include('includes/analytics.php'); ?>
</body>

</html>