<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal</title>
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
    <div class="top">
        <div class="content content-mobile">
            <div class="left-top">
                <ul>
                    <li><a href="./" class="activo"> Home </a></li>
                    <li><a href="quem-somos">Quem Somos </a></li>
                    <li><a href="anuncie-aqui">Anuncie Aqui </a></li>
                    <li><a href="contatos">Contato </a></li>
                </ul>
            </div>
            <div class="right-top">
                <input type="image" src="assets/image/search.png" border="0" width="26" height="26">
                <input type="text" name="search" placeholder="Busca" class="search-top">
                <a href=""><img src="assets/image/facebook.png" border="0" width="26" width="26"></a>
                <a href=""><img src="assets/image/google-plus.png" border="0" width="26" width="26"></a>
                <a href=""><img src="assets/image/linkedin.png" border="0" width="26" width="26"></a>
                <a href=""><img src="assets/image/twitter.png" border="0" width="26" width="26"></a>
                <a href=""><img src="assets/image/youtube.png" border="0" width="26" width="26"></a>
            </div>
        </div>
    </div>

    <div class="top-second">
        <div class="content-second content-mobile">
            <div class="logo">
                <img src="assets/image/Portal_logo.png" alt="" border="0" width="230">
            </div>
            <div class="banner">
                Banner
            </div>
        </div>
    </div>

    <div class="menu">
        <div class="menu-int content-mobile">
            <img src="assets/image/menu-button.png" alt="" width="40" height="40" class="menu-mobile" onclick="toogleMenu()">
            <ul id="menu" style="display:none">
                <li><a href="./" class="activo">Home</a></li>
                <li><a href="">Economia</a></li>
                <li>
                    <a href="">Entretenimento</a>
                    <img src="assets/image/arrowdown.png" alt="" border="0" width="10">
                    <div class="sub-menu">
                        <a href=""><div class="sub-menu-item">Sub menu 1</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 2</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 3</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 4</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 5</div></a>
                    </div>
                </li>
                <li>
                    <a href="">Esportes</a>
                    <img src="assets/image/arrowdown.png" alt="" border="0" width="10">
                    <div class="sub-menu">
                        <a href=""><div class="sub-menu-item">Sub menu 1</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 2</div></a>
                    </div>
                </li>
                <li><a href="">Geral</a></li>
                <li>
                    <a href="">Noticias</a>
                    <img src="assets/image/arrowdown.png" alt="" border="0" width="10">
                    <div class="sub-menu">
                        <a href=""><div class="sub-menu-item">Sub menu 1</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 2</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 3</div></a>
                        <a href=""><div class="sub-menu-item">Sub menu 4</div></a>
                    </div>
                </li>
                <li><a href="">Policia</a></li>
                <li><a href="">Videos</a></li>
            </ul>
        </div>
    </div>

    <div class="latest-news">
        <div class="news-first content-mobile">
            <div class="last-new">
                <div class="title-last-news">ULTIMAS NOTICIAS</div>
                <div class="text-last-news"> Algumas noticia que ira ficar aqui</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-int content-mobile">
            <div class="left-side">
                <div class="slide-show"  id="slide-show">
                    <div class="slide-mudar">
                        <div class="mudar" onclick="mudarSlide(0)"></div>
                        <div class="mudar" onclick="mudarSlide(1)"></div>
                        <div class="mudar" onclick="mudarSlide(2)"></div>
                        <div class="mudar" onclick="mudarSlide(3)"></div>
                    </div>
                    <div class="slide-show-area">
                        <div class="slides" style="background-image:url(https://i1.wp.com/marketingcomcafe.com.br/wp-content/uploads/2017/12/banco-imagens-gratis.png); ">
                            <div class="slide-info">
                                <div class="slide-info-title">
                                    Titulo de Teste
                                </div>
                                <div class="slide-info-sub-title">
                                    Subtitulo
                                </div>
                            </div>
                        </div>
                        <div class="slides" style="background-image:url(http://www.bolsadeviagem.com.br/wp-content/uploads/2017/04/Praia-Morere-Ilha-de-Boipeba-e-uma-das-praias-mais-lindas-da-Bahia-1.jpg);">
                            <div class="slide-info">
                                <div class="slide-info-title">
                                    Titulo de Teste
                                </div>
                                <div class="slide-info-sub-title">
                                    Subtitulo
                                </div>
                            </div>
                        </div>
                        <div class="slides" style="background-image:url(http://www.bolsadeviagem.com.br/wp-content/uploads/2017/04/Praia-Morere-Ilha-de-Boipeba-e-uma-das-praias-mais-lindas-da-Bahia.jpg);">
                            <div class="slide-info">
                                <div class="slide-info-title">
                                    Titulo de Teste
                                </div>
                                <div class="slide-info-sub-title">
                                    Subtitulo
                                </div>
                            </div>
                        </div>
                        <div class="slides" style="background-image:url(http://www.bolsadeviagem.com.br/wp-content/uploads/2017/04/Barra-do-Cahy-Cumuruxatiba-e-uma-das-praias-mais-lindas-da-Bahia.jpg);">
                            <div class="slide-info">
                                <div class="slide-info-title">
                                    Titulo de Teste
                                </div>
                                <div class="slide-info-sub-title">
                                    Subtitulo
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        NOTICIAS
                    </div>
                    <div class="width-content">
                        <div class="news-main">    
                            <div class="news-item news-big">
                                    <div class="news-img">
                                        <img src="" alt="" border="0" width="80" height="80">
                                    </div>
                                    <div class="news-title">Title</div>
                                    <div class="news-info"> Descrição </div>
                            </div>
                        </div>
                        <div class="news-secoundary">
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        ESPORTES
                    </div>
                    <div class="width-content">
                        <div class="news-main">    
                            <div class="news-item news-big">
                                    <div class="news-img">
                                        <img src="" alt="" border="0" width="80" height="80">
                                    </div>
                                    <div class="news-title">Title</div>
                                    <div class="news-info"> Descrição </div>
                            </div>
                        </div>
                        <div class="news-secoundary">
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="" alt="" border="0" width="80" height="80">
                                </div>
                                <div class="news-title">Title</div>
                                <div class="news-info"> Descrição </div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
                
            </div>

            
            <div class="right-side">
                <div class="widget">
                    <div class="widget-title">
                        SOCIAL
                    </div>
                    <div class="width-content">
                        <a href=""><img src="assets/image/facebook.png" border="0" width="26" width="26"></a>
                        <a href=""><img src="assets/image/google-plus.png" border="0" width="26" width="26"></a>
                        <a href=""><img src="assets/image/linkedin.png" border="0" width="26" width="26"></a>
                        <a href=""><img src="assets/image/twitter.png" border="0" width="26" width="26"></a>
                        <a href=""><img src="assets/image/youtube.png" border="0" width="26" width="26"></a>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        ULTIMAS NOTICIAS
                    </div>
                    <div class="width-content">
                        <div class="news-items">
                            <a href="">
                                É uma das formas de ganhar dinheiro programando bastante famosa e crescente.
                            </a>
                        </div>
                        <div class="news-items">
                            <a href="">
                                É uma das formas de ganhar dinheiro programando bastante famosa e crescente.
                            </a>
                        </div>
                        <div class="news-items">
                            <a href="">
                                É uma das formas de ganhar dinheiro programando bastante famosa e crescente.
                            </a>
                        </div>
                        <div class="news-items">
                            <a href="">
                                É uma das formas de ganhar dinheiro programando bastante famosa e crescente.
                            </a>
                        </div>
                        <div class="news-items">
                            <a href="">
                                É uma das formas de ganhar dinheiro programando bastante famosa e crescente.
                            </a>
                        </div>
                        <div class="news-items">
                            <a href="">
                                É uma das formas de ganhar dinheiro programando bastante famosa e crescente.
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        PUBLICIDADE
                    </div>
                    <div class="width-content">
                        <img src="assets/image/php.jpeg" alt="" border="0" width="250">
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        ENCONTRE-NOS NO FACEBOOK
                    </div>
                    <div class="width-content">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAmor-amor-e-amor-453277561388690%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="260" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
   	   	 <div class="containerint">
   	   	   <div class="leftside"></div>
   	   	   <div class="righttside"></div>	
   	   	 </div>   	   	
   	   </div>
</body>
</html>