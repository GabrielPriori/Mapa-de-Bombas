$(document).ready(function(){
    $("td").click(function(){
         var id = $(this).attr('id');
         var confereBomba = $('#'+id+'').html();

         if(confereBomba != '<img class="img" src="img/img.png">'){

              $.post('funcoes.php', {
              id:id
              },function(resposta){

                   var retorno = resposta.split(",");
                                   
                   var posi0 = (retorno[0]);
                   var posi1 = (retorno[1]);
                   var posi2 = (retorno[2]);
                   var posi3 = (retorno[3]);
                   var posi4 = (retorno[4]);
                   var posi5 = (retorno[5]);
                   var posi6 = (retorno[6]);
                   var posi7 = (retorno[7]);

                   var veriPosi0 = remove(posi0);
                   var veriPosi4 = remove(posi4);                   

                   var numero0 = verificaNumero(veriPosi0);
                   var numero1 = verificaNumero(posi1);
                   var numero2 = verificaNumero(posi2);
                   var numero3 = verificaNumero(posi3);
                   var numero4 = verificaNumero(veriPosi4);

                   if(posi5 != null){
                        var veriPosi7 = remove(posi7);

                        var numero5 = verificaNumero(posi5);
                        var numero6 = verificaNumero(posi6);
                        var numero7 = verificaNumero(veriPosi7);

                        $('#'+posi5+'').html(numero5);
                        var cor5 = verificaCor(numero5);
                        $('#'+posi5+'').css("color", cor5);

                        $('#'+posi6+'').html(numero6);
                        var cor6 = verificaCor(numero6);
                        $('#'+posi6+'').css("color", cor6);

                        $('#'+veriPosi7+'').html(numero7);
                        var cor7 = verificaCor(numero7);
                        $('#'+veriPosi7+'').css("color", cor7);
                   }
                
                   $('#'+veriPosi0+'').html(numero0);
                   var cor0 = verificaCor(numero0);
                   $('#'+veriPosi0+'').css("color", cor0);

                   $('#'+posi1+'').html(numero1);
                   var cor1 = verificaCor(numero1);
                   $('#'+posi1+'').css("color", cor1);

                   $('#'+posi2+'').html(numero2);
                   var cor2 = verificaCor(numero2);
                   $('#'+posi2+'').css("color", cor2);

                   $('#'+posi3+'').html(numero3);
                   var cor3 = verificaCor(numero3);
                   $('#'+posi3+'').css("color", cor3);

                   $('#'+veriPosi4+'').html(numero4);
                   var cor4 = verificaCor(numero4);
                   $('#'+veriPosi4+'').css("color", cor4);

                   var bomba = $('#'+id+'').text();
                   if(bomba >= 1){
                        $('#'+id+'').empty();
                        $('#'+id+'').prepend('<img class="img" src="img/img.png" />');
                   }else if(bomba == ''){
                        $('#'+id+'').prepend('<img class="img" src="img/img.png" />');
                   }
              });

              function verificaNumero(valor){
                   var numero = $('#'+valor+'').text();
                   var confereBomba = $('#'+valor+'').html();
                   if(confereBomba != '<img class="img" src="img/img.png">'){
                        if(numero == ""){
                             return 1;
                        }else if(numero >= 1){
                             numero = parseInt(numero) + 1;
                             return numero;
                        }
                   }
              }

              function verificaCor(numero){
                   switch (numero) {
                        case 1: //ROXO
                             cor = "#993399";
                             return cor;
                        break;
                        case 2: //AZUL
                             cor = "#0000FF";
                             return cor;
                        break;
                        case 3: //VERDE
                            cor = "#00FF00";
                            return cor;
                        break;
                        case 4: //AMARELO
                            cor = "#FFFF00";
                            return cor;
                        break;
                        case 5: //LARANJA
                            cor = "#ffa500";
                            return cor;
                        break;
                        case  6: //VERMELHO
                             cor = "#ff0000 ";
                             return cor;
                        break;
                        case  7: //BORDO
                             cor = "#800000";
                             return cor;
                        break;
                        case  8: //ROSA
                             cor = "#ffcbdb";
                             return cor;
                        break;
                   }
              }

              function remove(num){
                  var $posicao = num.split('"').join('');
                  var novaPosi = $posicao.split('[').join('');
                  return novaPosi;
              }
         }
     });
});