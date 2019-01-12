( function () {
  var  MutationObserver , Util, WeakMap , getComputedStyle, getComputedStyleRX,
    bind  =  function ( fn , me ) { return  function () { return  fn . aplique (eu, argumentos ); }; },
    indexOf = []. indexOf  ||  função ( produto ) { para ( var i =  0 , l =  este . comprimento ; i < l; i ++ ) { se (i em  este  &&  esta [i] === item) retorno i; } retorno  - 1 ; };

  Util = ( function () {
    função  Util () {}

    Util . protótipo . extend  =  function ( custom , defaults ) {
      chave var , valor;
      para (chave em padrões) {
        value = defaults [key];
        se (personalizado [chave] ==  nulo ) {
          personalizado [chave] = valor;
        }
      }
      retorno personalizado;
    };

    Util . protótipo . isMobile  =  function ( agent ) {
      retornar / Android | webOS | iPhone | iPad | iPod | BlackBerry | IEMobile | Opera Mini / i . teste (agente); 
    };

    Util . protótipo . createEvent  =  função ( evento , bolha , cancelar , detalhe ) {
      var customEvent;
      se (bubble ==  null ) {
        bolha =  falso ;
      }
      se (cancelar ==  nulo ) {
        cancelar =  falso ;
      }
      se (detalhe ==  nulo ) {
        detalhe =  nulo ;
      }
      se ( documento . createEvent  ! =  null ) {
        customEvent =  documento . createEvent ( ' CustomEvent ' );
        CustomEvent . initCustomEvent ( evento , bolha, cancelamento, detalhe);
      } else  if ( document . createEventObject  ! =  null ) {
        customEvent =  documento . createEventObject ();
        CustomEvent . eventType  =  evento ;
      } else {
        CustomEvent . eventName  =  evento ;
      }
      return customEvent;
    };

    Util . protótipo . emitEvent  =  função ( elem , evento ) {
      se ( elem . dispatchEvent  ! =  null ) {
        voltar  elem . dispatchEvent ( evento );
      } else  if ( event  in (elem ! =  null )) {
        retornar elem [ evento ] ();
      } else  if (( " on "  +  event ) in (elem ! =  null )) {
        retornar elem [ " on "  +  event ] ();
      }
    };

    Util . protótipo . addEvent  =  function ( elem , event , fn ) {
      se ( elem . addEventListener  ! =  null ) {
        voltar  elem . addEventListener ( evento , fn, falso );
      } else  if ( elem . attachEvent  ! =  null ) {
        voltar  elem . attachEvent ( " on "  +  event , fn);
      } else {
        retornar elem [ evento ] = fn;
      }
    };

    Util . protótipo . removeEvent  =  function ( elem , event , fn ) {
      se ( elem . removeEventListener  ! =  null ) {
        voltar  elem . removeEventListener ( evento , fn, falso );
      } else  if ( elem . detachEvent  ! =  null ) {
        voltar  elem . detachEvent ( " on "  +  event , fn);
      } else {
        retornar  delete elem [ evento ];
      }
    };

    Util . protótipo . innerHeight  =  function () {
      se ( ' innerHeight '  na  janela ) {
         janela de retorno . innerHeight ;
      } else {
        retornar  documento . documentElement . clientHeight ;
      }
    };

    retorno Util;

  }) ();

  WeakMap  =  isso . WeakMap  ||  isso . MozWeakMap  || ( WeakMap  = ( function () {
    Função  WeakMap () {
      isso . chaves  = [];
      isso . valores  = [];
    }

    WeakMap . protótipo . get  =  function ( key ) {
      var i, item, j, len, ref;
      ref =  this . chaves ;
      para (i = j =  0 , len =  ref . comprimento ; j < len; i =  ++ j) {
        item = ref [i];
        se (item === chave) {
          devolva  isso . valores [i];
        }
      }
    };

    WeakMap . protótipo . set  =  function ( key , value ) {
      var i, item, j, len, ref;
      ref =  this . chaves ;
      para (i = j =  0 , len =  ref . comprimento ; j < len; i =  ++ j) {
        item = ref [i];
        se (item === chave) {
          isso . valores [i] = valor;
          retorno ;
        }
      }
      isso . chaves . empurrar (chave);
      devolva  isso . valores . empurrar (valor);
    };

    retornar  WeakMap ;

  }) ());

  MutationObserver  =  isso . MutationObserver  ||  isso . WebkitMutationObserver  ||  isso . MozMutationObserver  || ( MutationObserver  = ( function () {
    função  MutationObserver () {
      se ( tipo de  console  ! ==  " indefinido "  &&  console  ! ==  null ) {
        console . aviso ( ' MutationObserver não é suportado pelo seu navegador. ' );
      }
      se ( tipo de  console  ! ==  " indefinido "  &&  console  ! ==  null ) {
        console . avise ( ' WOW.js não pode detectar mutações dom, por favor, ligue para .sync () depois de carregar o novo conteúdo. ' );
      }
    }

    MutationObserver . notSupport  =  true ;

    MutationObserver . protótipo . observar  =  função () {};

    retornar  MutationObserver ;

  }) ());

  GetComputedStyle =  isto . GetComputedStyle  ||  função ( el , pseudo ) {
    isso . getPropertyValue  =  function ( prop ) {
      var ref;
      se (prop ===  ' float ' ) {
        prop =  ' styleFloat ' ;
      }
      se ( getComputedStyleRX . test (prop)) {
        prop . substituir (getComputedStyleRX, function ( _ , _char ) {
          retorno  _char . toUpperCase ();
        });
      }
      return ((ref =  el . currentStyle ) ! =  null  ? ref [prop] :  void  0 ) ||  nulo ;
    };
    devolva  isso ;
  };

  getComputedStyleRX = / ( \ - ( [ az ] ) {1} ) / g ; 

  isso . WOW  = ( function () {
    WOW . protótipo . padrão  = {
      boxClass :  ' wow ' ,
      animateClass :  ' animated ' ,
      offset :  0 ,
      celular :  verdadeiro ,
      viver :  verdade ,
      callback :  nulo ,
      scrollContainer :  null
    };

    função  WOW ( opções ) {
      se (opções ==  nulo ) {
        opções = {};
      }
      isso . scrollCallback  =  bind ( this . scrollCallback , this );
      isso . scrollHandler  =  bind ( this . scrollHandler , this );
      isso . resetAnimation  =  bind ( this . resetAnimation , this );
      isso . start  =  bind ( this . start , this );
      isso . rolou  =  verdadeiro ;
      isso . config  =  this . util (). estender (opções, este . defaults );
      se ( opções . scrollContainer  ! =  null ) {
        isso . config . scrollContainer  =  documento . querySelector ( opções . scrollContainer );
      }
      isso . animationNameCache  =  new  WeakMap ();
      isso . wowEvent  =  this . util (). createEvent ( this . config . boxClass );
    }

    WOW . protótipo . init  =  function () {
      var ref;
      isso . elemento  =  janela . documento . documentElement ;
      se ((ref =  document . readyState ) ===  " interativo "  || ref ===  " completo " ) {
        isso . start ();
      } else {
        isso . util (). addEvent ( documento , ' DOMContentLoaded ' , this . start );
      }
      devolva  isso . terminou  = [];
    };

    WOW . protótipo . start  =  function () {
      var box, j, len, ref;
      isso . parado  =  falso ;
      isso . caixas  = ( função () {
        var j, len, ref, resultados;
        ref =  this . elemento . querySelectorAll ( " . "  +  this . config . boxClass );
        resultados = [];
        para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
          caixa = ref [j];
          resultados . empurrar (caixa);
        }
        retornar resultados;
      }). chamar ( este );
      isso . all  = ( function () {
        var j, len, ref, resultados;
        ref =  this . caixas ;
        resultados = [];
        para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
          caixa = ref [j];
          resultados . empurrar (caixa);
        }
        retornar resultados;
      }). chamar ( este );
      se ( esta . caixas . comprimento ) {
        se ( isto . desativado ()) {
          isso . resetStyle ();
        } else {
          ref =  this . caixas ;
          para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
            caixa = ref [j];
            isso . applyStyle (caixa, true );
          }
        }
      }
      se ( ! this . disabled ()) {
        isso . util (). addEvent ( esta . config . scrollContainer  ||  janela , ' scroll ' , this . scrollHandler );
        isso . util (). addEvent ( janela , ' redimensionar ' , este . scrollHandler );
        isso . intervalo  =  setInterval ( esta . scrollCallback , 50 );
      }
      Se ( esse . configuração . viver ) {
        devolver o  novo  MutationObserver (( function ( _this ) {
           função de retorno ( registros ) {
            var k, len1, nó, registro, resultados;
            resultados = [];
            para (k =  0 , len1 =  registos . comprimento ; k < len1; k ++ ) {
              registro = registros [k];
              resultados . push (( function () {
                var l, len2, ref1, results1;
                ref1 =  registro . AddedNodes  || [];
                results1 = [];
                para (l =  0 , len2 =  REF1 . comprimento ; l < len2; l ++ ) {
                  node = ref1 [l];
                  resultados1 . push ( isto . doSync (nó));
                }
                retornar resultados1;
              }). chamada (_this));
            }
            retornar resultados;
          };
        }) ( isto )). observar ( documento . corpo , {
          ChildList :  true ,
          subtree :  true
        });
      }
    };

    WOW . protótipo . stop  =  function () {
      isso . parado  =  verdadeiro ;
      isso . util (). removeEvent ( esta . config . scrollContainer  ||  janela , ' scroll ' , this . scrollHandler );
      isso . util (). removeEvent ( janela , ' redimensionar ' , this . scrollHandler );
      Se ( esse . intervalo  ! =  nulo ) {
        voltar  clearInterval ( este . intervalo );
      }
    };

    WOW . protótipo . sync  =  function ( element ) {
      se ( MutationObserver . notSupport ) {
        devolva  isso . doSync ( esta . elemento );
      }
    };

    WOW . protótipo . doSync  =  função ( elemento ) {
      caixa var , j, len, ref, resultados;
      se (elemento ==  nulo ) {
        elemento =  isso . elemento ;
      }
      se ( elemento . nodeType  ! ==  1 ) {
        retorno ;
      }
      elemento =  elemento . parentNode  || elemento;
      ref =  elemento . querySelectorAll ( " . "  +  this . config . boxClass );
      resultados = [];
      para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
        caixa = ref [j];
        se ( indexOf . call ( this . all , box) <  0 ) {
          isso . caixas . empurrar (caixa);
          isso . tudo . empurrar (caixa);
          Se ( esse . parado  ||  isso . desativado ()) {
            isso . resetStyle ();
          } else {
            isso . applyStyle (caixa, true );
          }
          resultados . push ( this . scrolled  =  true );
        } else {
          resultados . empurrar ( vazio  0 );
        }
      }
      retornar resultados;
    };

    WOW . protótipo . show  =  function ( caixa ) {
      isso . applyStyle (caixa);
      caixa . className  =  caixa . className  +  "  "  +  this . config . classe animate ;
      Se ( esse . configuração . callback  ! =  nulo ) {
        isso . config . retorno de chamada (caixa);
      }
      isso . util (). emitEvent (caixa, this . wowEvent );
      isso . util (). addEvent (caixa, ' animationend ' , this . resetAnimation );
      isso . util (). addEvent (caixa, ' oanimationend ' , this . resetAnimation );
      isso . util (). addEvent (caixa, ' webkitAnimationEnd ' , this . resetAnimation );
      isso . util (). addEvent (caixa, ' MSAnimationEnd ' , this . resetAnimation );
      caixa de retorno ;
    };

    WOW . protótipo . applyStyle  =  função ( caixa , oculta ) {
      atraso var , duração, iteração;
      duração =  caixa . getAttribute ( ' data-wow-duration ' );
      atraso =  caixa . getAttribute ( ' data-wow-delay ' );
      iteration =  box . getAttribute ( " data-wow-iteration " );
      devolva  isso . animar (( função ( _this ) {
         função de retorno () {
          voltar  _isso . CustomStyle (caixa, oculto, duração, atraso, iteração);
        };
      }) ( isto ));
    };

    WOW . protótipo . animate  = ( function () {
      se ( ' requestAnimationFrame '  na  janela ) {
        retorno  de função ( de retorno ) {
           janela de retorno . requestAnimationFrame (retorno de chamada);
        };
      } else {
        retorno  de função ( de retorno ) {
          retornar  retorno ();
        };
      }
    }) ();

    WOW . protótipo . resetStyle  =  function () {
      caixa var , j, len, ref, resultados;
      ref =  this . caixas ;
      resultados = [];
      para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
        caixa = ref [j];
        resultados . empurrão ( caixa . estilo . visibilidade  =  ' visível ' );
      }
      retornar resultados;
    };

    WOW . protótipo . resetAnimation  =  função ( evento ) {
      alvo var ;
      se ( evento . tipo . toLowerCase (). indexOf ( ' animationend ' ) > =  0 ) {
        target =  event . alvo  ||  evento . srcElement ;
        retorno  alvo . className  =  target . className . substituir ( this . config . animateClass , ' ' ). trim ();
      }
    };

    WOW . protótipo . customStyle  =  função ( caixa , oculto , duração , atraso , iteração ) {
      se (escondido) {
        isso . cacheAnimationName (caixa);
      }
      caixa . estilo . visibilidade  = oculta ?  ' oculto '  :  ' visível ' ;
      se (duração) {
        isso . VendorSet ( caixa . style , {
          AnimaçãoDuração : duração
        });
      }
      se (atraso) {
        isso . VendorSet ( caixa . style , {
          animationDelay : atraso
        });
      }
      se (iteração) {
        isso . VendorSet ( caixa . style , {
          animationIterationCount : iteração
        });
      }
      isso . VendorSet ( caixa . style , {
        Nome da animação : oculto ?  ' nenhum '  :  isto . CachedAnimationName (caixa)
      });
      caixa de retorno ;
    };

    WOW . protótipo . vendedores  = [ " moz " , " webkit " ];

    WOW . protótipo . VendorSet  =  function ( elem , properties ) {
      var nome, resultados, valor, fornecedor;
      resultados = [];
      para (nome nas propriedades) {
        valor = propriedades [nome];
        elem [ " "  + nome] = valor;
        resultados . push (( function () {
          var j, len, ref, results1;
          ref =  this . vendedores ;
          results1 = [];
          para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
            vendor = ref [j];
            resultados1 . push (elem [ " "  + vendedor + ( nome . charAt ( 0 ). toUpperCase ()) + ( nome . substr ( 1 ))] = valor);
          }
          retornar resultados1;
        }). chamar ( este ));
      }
      retornar resultados;
    };

    WOW . protótipo . vendorCSS  =  função ( elem , propriedade ) {
      var j, len, ref, resultado, estilo, fornecedor;
      style =  getComputedStyle (elem);
      resultado =  estilo . getPropertyCSSValue (propriedade);
      ref =  this . vendedores ;
      para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
        vendor = ref [j];
        resultado = resultado ||  estilo . getPropertyCSSValue ( " - "  + fornecedor +  " - "  + propriedade);
      }
      resultado de retorno ;
    };

    WOW . protótipo . animationName  =  function ( box ) {
      var animationName, erro;
      tente {
        animationName =  this . VendorCSS (caixa, ' animação-nome ' ). cssText ;
      } catch (erro) {
        animationName =  getComputedStyle (caixa). getPropertyValue ( ' animation-name ' );
      }
      se (animationName ===  ' none ' ) {
        retornar  ' ' ;
      } else {
        return animationName;
      }
    };

    WOW . protótipo . cacheAnimationName  =  função ( caixa ) {
      devolva  isso . animationNameCache . set (caixa, this . animationName (caixa));
    };

    WOW . protótipo . cachedAnimationName  =  função ( caixa ) {
      devolva  isso . animationNameCache . obter (caixa);
    };

    WOW . protótipo . scrollHandler  =  function () {
      devolva  isso . rolou  =  verdadeiro ;
    };

    WOW . protótipo . scrollCallback  =  função () {
      caixa var ;
      Se ( esse . rolada ) {
        isso . rolou  =  falso ;
        isso . caixas  = ( função () {
          var j, len, ref, resultados;
          ref =  this . caixas ;
          resultados = [];
          para (j =  0 , len =  ref . comprimento ; j < len; j ++ ) {
            caixa = ref [j];
            se ( ! (caixa)) {
              continuar ;
            }
            se ( isto . isVisible (caixa)) {
              isso . show (caixa);
              continuar ;
            }
            resultados . empurrar (caixa);
          }
          retornar resultados;
        }). chamar ( este );
        se ( ! ( this . boxes . length  ||  this . config . live )) {
          devolva  isso . parar ();
        }
      }
    };

    WOW . protótipo . offsetTop  =  função ( elemento ) {
      var top;
      while ( elemento . offsetTop  ===  void  0 ) {
        elemento =  elemento . parentNode ;
      }
      top =  elemento . offsetTop ;
      while (elemento =  elemento . offsetParent ) {
        topo + =  elemento . offsetTop ;
      }
      voltar para cima;
    };

    WOW . protótipo . isVisible  =  função ( caixa ) {
      var bottom, offset, top, viewBottom, viewTop;
      offset =  caixa . getAttribute ( ' data-wow-offset ' ) ||  isso . config . offset ;
      viewTop = ( this . config . scrollContainer  &&  this . config . scrollContainer . scrollTop ) ||  janela . páginaYOffset ;
      viewBottom = viewTop +  Math . min ( este . elemento . clientHeight , this . util (). innerHeight ()) - offset;
      top =  isto . offsetTop (caixa);
      bottom = top +  box . clientHeight ;
      retornar topo <= viewBottom && bottom > = viewTop;
    };

    WOW . protótipo . util  =  function () {
      devolva  isso . _util  ! =  null  ?  isso . _util  :  isto . _util  =  new  Util ();
    };

    WOW . protótipo . disabled  =  function () {
      retorno  ! isso . config . móvel  &&  este . util (). isMobile ( navigator . userAgent );
    };

    retornar  WOW ;

  }) ();

}). chamar ( este );