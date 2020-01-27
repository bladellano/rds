<div id="footer"> 
  <div class="container-fluid"> 
    <div class="row">      
     <div class="col-md-3">      

       <h3>Unidades</h3>

        <b>Augusto Montenegro, Km 4</b><br/>
        <i class="fas fa-phone"></i> (91) 98842-5346/2121-4515<br/>

        <b>Cidade Nova 8 We-39</b><br/>
        <i class="fas fa-phone"></i> (91) 98282-0145<br/>

        <b>Cj. Eduardo Angelim - Icoaraci</b><br/>
        <i class="fas fa-phone"></i> (91) 98885-7462<br/>

        <b>Tv. Fé em Deus - Tenoné</b><br/>
        <i class="fas fa-phone"></i> (91) 98330-7462<br/>

       <i class="fas fa-envelope"></i> contato@rosadesaroncolegio.com.br</p>      

      <a href="https://www.facebook.com/colegiorosadesaronpara/" class="icon-socials">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.instagram.com/colegiorosasaron/" class="icon-socials">
        <i class="fab fa-instagram"></i>
      </a> 
    </div>

    <div class="col-md-3">
      <h3>Notícias</h3>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>

      </ul>
    </div>

    
    <div class="col-md-3">      
      <h3>Institucional</h3>
      <ul>
        <li><a href="#">Inicial</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="#">Portfólio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Orçamento</a></li>
        <li><a href="#">Fale Conosco</a></li>
      </ul></div>
      <div class="col-md-3">  


<div class="fb-page" data-href="https://www.facebook.com/colegiorosadesaronpara/" data-tabs="timeline" data-width="" data-height="400px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegiorosadesaronpara/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegiorosadesaronpara/">Colégio Rosa de Saron</a></blockquote></div>

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
      slidesToShow: 4,
      slidesToScroll: 4,
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