<div id="footer"> 
  <div class="container"> 
    <div class="row">      
      <div class="col-md-5">      

       <h3>Unidades</h3>

       <b>MATRIZ:</b><br/>
       <!-- <i class="fas fa-map-marker-alt"></i> Rod. Augusto Montenegro KM 11, Rua Fé em Deus, QD 01 nº 10 em frente ao Atacadão.<br/> -->
       <i class="fas fa-map-marker-alt"></i> Rod. Augusto Montenegro KM 11, Rua Fé em Deus, QD 01 nº 10.<br/>
       <i class="fas fa-phone"></i> (91) 98442-5346 / 2121-4515<br/>
       <hr>
       <b>EDUARDO ANGELIM:</b><br/>
       <!-- <i class="fas fa-map-marker-alt"></i> Av. 17 de Abril, Conj. Eduardo Angelim, nº 10, Bairro: Parque Guajará.<br/>  -->
       <i class="fas fa-map-marker-alt"></i> Av. 17 de Abril, Conj. Eduardo Angelim, nº 10.<br/> 
       <i class="fas fa-phone"></i> (91) 98885-7462<br/>
       <hr>
       <b>CIDADE NOVA:</b><br/>
       <!-- <i class="fas fa-map-marker-alt"></i> Estrada da Providência, WE 39, nº 322, atrás da feirinha ao lado da igreja dos Mormos, Cid. Nova 8.<br/>  -->
       <i class="fas fa-map-marker-alt"></i> Estrada da Providência, WE 39, nº 322.<br/> 
       <i class="fas fa-phone"></i> (91) 98282-0145<br/>
       <hr>
       <b>AUGUSTO MONTENEGRO:</b><br/>
       <!-- <i class="fas fa-map-marker-alt"></i> Rod. Augusto Montenegro, KM 04, nº 100 em frente ao shopping.<br/>  -->
       <i class="fas fa-map-marker-alt"></i> Rod. Augusto Montenegro, KM 04, nº 100.<br/> 
       <i class="fas fa-phone"></i> (91) 98442-5346<br/>
       <hr>
       <i class="fas fa-envelope"></i> contato@rosadesaroncolegio.com.br

       <!-- <a href="https://www.facebook.com/colegiorosadesaronpara/" class="icon-socials"><i class="fab fa-facebook-f"></i></a> -->
       <!-- <a href="https://www.instagram.com/colegiorosasaron/" class="icon-socials"><i class="fab fa-instagram"></i></a>  -->
     </div>
<!-- 
    <div class="col-md-3">
      <h3>Notícias</h3>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>

      </ul>
    </div>
  -->

  <div class="col-md-4">      
    <h3>Institucional</h3>
    <ul>
      <li><a href="#">INSTITUIÇÃO</a></li>
      <li><a href="#">EDUCACIONAL</a></li>
      <li><a href="#">SOCIAL</a></li>
      <li><a href="#">VIDA ROSA DE SARON</a></li>
      <li><a href="#">UNIDADES</a></li>
      <li><a href="#">INFORMATIVO</a></li>
      <li><a href="#">FALE CONOSCO</a></li>
    </ul></div>
    <div class="col-md-3">  


      <div class="fb-page" data-href="https://www.facebook.com/colegiorosadesaronpara/" data-tabs="timeline" 
      data-width="" data-height="480px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegiorosadesaronpara/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegiorosadesaronpara/">Colégio Rosa de Saron</a></blockquote></div>

    </div>
  </div>   
</div>
</div>
<!-- 
<div id="assign">
  <div class="container">
    © FireFly. 2019 Paideia Educacional. Todos os direitos reservados.
    <br/>Desenvolvimento by <a href="https://api.whatsapp.com/send?phone=5591982650277" target="_blank">
      <img data-toggle="tooltip" data-placement="top" title="Contato: (91) 98265-0277" src="assets/img/fire-logo.png" alt="Logo FireFly">
    </a></div>
  </div>
-->
</section>

<div class="topo">    
  <i class="fas fa-arrow-up"></i>
</div>

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.js"></script>
<script src="lib/slick/slick.min.js"></script>
<script src="assets/js/main.js"></script>

<script>
  $(document).ready(function() {

    $('.slick-depoimentos').slick({
      autoplay:true
    });

    $('.slick-eventos').slick({ 
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
         centerMode: true,
         slidesToShow: 1,
         slidesToScroll: 1
       }        
     } 
     ]
   });  

    $('[data-toggle="tooltip"]').tooltip()

    $("#owl-demo").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      navigation:false,
      autoPlay:true
    });

  });
</script>

</body>

</html>