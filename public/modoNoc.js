      //modo elegido
    
    if(localStorage){
      var modoAnterior = localStorage.getItem("modoElegido");
      if(modoAnterior == 'oscuro'){
          
          $('body').css('background-color', 'black');
          $('body').css('color', 'white');
          $('.card').css('background-color', 'black');
          $('.comentario').css('color', 'black');
          $('#titulo1').css('color', 'black'); 
          $('#titulo2').css('color', 'black'); 
          $('#tituloEmail ').css('color', 'black');
          $('.negro').css('color', 'black');
          $('.comentarioEncontrado').css('color', 'black');
          $('.iconosClaros').hide();
          
          
          var modoElegido = 'oscuro';
          
          localStorage.setItem("modoElegido", modoElegido);
          
      }else{
          
          $('body').css('background-color', 'white');
          $('body').css('color', 'black');
          $('.comentario').css('color', 'black');
          
          var modoElegido = 'claro';
          
          localStorage.setItem("modoElegido", modoElegido);
      }
    }     
          //modo nocturno
      $('#modoNoc').click(function(){
            $('body').css('background-color', 'black');
            $('body').css('color', 'white');
            $('.card').css('background-color', 'black');
            $('.comentario').css('color', 'black');
            $('#titulo1').css('color', 'black'); 
            $('#titulo2').css('color', 'black'); 
            $('#tituloEmail ').css('color', 'black');
            $('.negro').css('color', 'black');
            $('.comentarioEncontrado').css('color', 'black');
            
            
            
            var modoElegido = 'oscuro';
          
            localStorage.setItem("modoElegido", modoElegido);
      });
          //modo dia
      $('#modoDia').click(function(){
            $('body').css('background-color', 'white');
            $('body').css('color', 'black');
            $('.card').css('background-color', 'white');
            $('.comentario').css('color', 'black');
            
          
            var modoElegido = 'claro';
          
            localStorage.setItem("modoElegido", modoElegido);
      });