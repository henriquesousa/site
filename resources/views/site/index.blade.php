<!DOCTYPE html>
<html>
  <head>
  	@include('site.parts.header')
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- CSS code from Bootply.com editor -->
          
        
  </head>
    
  <body>
    <!-- HEADER  -->        
      <!-- Fixed navbar -->
      @include('site.parts.nav')
      <!--/.nav-collapse -->
    <!-- /HEADER  -->

    <!-- CONTENT -->
    
      @include('site.parts.content')

    <!-- /CONTENT -->

    <!-- FOOTER -->
      @include('site.parts.footer')
    <!-- /FOOTER -->
  

    <!-- SCRIPTS -->
    <script src="js/html5shiv.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
    <script src="js/script.js"></script>
            
    
    <script src="js/formMasc.js"></script>
    <!-- fancybox init -->
  <script>
  $(document).ready(function(e) {
    var lis = $('.nav > li');
    menu_focus( lis[0], 1 );
    
    $(".fancybox").fancybox({
      padding: 10,
      helpers: {
        title : {
          type : 'over'
        },
        overlay: {
          locked: false
        }
      }
    });

    $(".enviar").click(function(event) {
      var nome = $('.form').find( "input[name='nome']" ).val();
      alert(nome);
      //event.preventDefault();
      $.ajax("contato", {
  
        type:"POST",
       
        dataType:"json",
         
        data: {
          name: $('.form').find( "input[name='nome']" ).val(),
          email: $('.form').find( "input[name='email']" ).val(),
          assunto:  $('.form').find( "input[name='assunto']" ).val(),
          message: $('.form').find( "input[name='mensagem']" ).val()
        },
       
        success:function(data){
          console.log(data);
        },
       
        error:function(data){
          console.log(error);
        }
      });
      
    });
  
  });
  </script>
</body>  
</html>