<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />

    <meta http-equiv="Content-Security-Policy"
        content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Narrative - História</title>

    <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
</head>

<body>
    <section id="container">
        <div class="blue-header animate-apper">
            <div class="blue-header-top">
                <img src="img/components/line_top.svg" alt="Linha">
            </div>
            <div class="blue-header-center">
                <a href="javascript:javascript:history.go(-1)"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <span>Coliseum</span>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="text-gradient">
            <b>Via delle Terme di Titoi</b>
            <span>Roma | Lácio - Itália | 21/04/21 - 16:05</span>
        </div>

        </div>
        
        <div class="history-img">
            <img class="mask-img-history" src="img/history/users/user_milena.jpg" alt="Usuário">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="img/history/views/coliseum.jpg" class="history-img-content" alt="Paisagem"></li>
                        <li class="splide__slide"><img src="img/history/views/passione_diavolo.JPG" class="history-img-content" alt="Paisagem"></li>
                        <li class="splide__slide"><img src="img/history/views/templo_venus.JPG" class="history-img-content" alt="Paisagem"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tag-area">
            <div class="tag-gradient">
                <a href="">24/03/19</a>
            </div>
            <div class="tag-gradient">      
                <a href=""><span>10:06</span></a>
            </div>
            <div class="tag-gradient">
                <a href=""><span>#Italy</span></a>
            </div>
            <div class="tag-gradient">
                <a href=""><span>#Tour</span></a>
            </div>
        </div>

        <img src="img/components/blue_line_2.svg" alt="Linha Azul">

        <div class="history-text-container">
            <div class="myBox">
                <p>
                    <span>&#8192;&#8192;</span>
                    <p><span>&#8192;&#8192;</span>O Coliseu poderia abrigar, estima-se, entre 50 mil e 80 mil espectadores, com uma audiência média de cerca de 65 mil pessoas.</p>
                    <p><span>&#8192;&#8192;</span>O edifício era usado para combates de gladiadores e espetáculos públicos, tais como simulações de batalhas marítimas (em um curto período de tempo como o hipogeu era inundado através de mecanismos de apoio), caças de animais selvagens, execuções, encenações de batalhas famosas e dramas baseados na mitologia clássica.</p>
                    <p><span>&#8192;&#8192;</span>O prédio deixou de ser usado para entretenimento na era medieval. 
                    <p><span>&#8192;&#8192;</span>Mais tarde foi reutilizado para vários fins, tais como habitação, oficinas, sede de uma ordem religiosa, uma fortaleza, uma pedreira e um santuário cristão.</p> 
                    <p><span>&#8192;&#8192;</span>Em 2007, o monumento foi eleito informalmente como uma das sete maravilhas do mundo moderno.</p>
                    </p>
                </p>
            </div>
        </div>
        
        <div class="sub-options">
            <div class="sub-options-block-1">
                <img src="img/icons/flag.svg" alt="Denunciar">
            </div>
            <img src="img/components/crop_line.svg" alt="Linha">
            <div class="sub-options-block-2">
                <img src="img/icons/share.svg" alt="Compartilhar">
            </div>
            <img src="img/components/crop_line.svg" alt="Linha">
            <div class="sub-options-block-3">
                <img src="img/icons/star.svg" alt="Favoritar">
            </div>
        </div>
        
    </section>

    <script>
        new Splide( '.splide' ).mount();
    </script>

</body>

</html>