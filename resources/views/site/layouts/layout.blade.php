<!DOCTYPE html>
<html lang="pt-br">
  <head>
    @include('parts.header')
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- CSS code from Bootply.com editor -->
          
        
  </head>
    
  <body>
    <!-- HEADER  -->        
      <!-- Fixed navbar -->
      @include('parts.nav')
      <!--/.nav-collapse -->
    <!-- /HEADER  -->

    <!-- CONTENT -->
    
      @includes('parts.content')

    <!-- /CONTENT -->
  </body>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fancybox/jquery.fancybox.pack-v=2.1.5.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
            
    
    <script src="{{ asset('js/formMasc.js') }}"></script>
    <script src="{{ asset('js/mainscript.js') }}"></script>
  
</html>