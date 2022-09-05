<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaction - Platafoma de gestão financeira para creators</title>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* creating css loader */

        #background-loading {
            position: fixed;
            left: 0px;
            top: 0px;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 999;
            visibility: hidden;
        }

        #position-loading {
            top: 50%;
            bottom: 50%;
            position: relative;
        }

        #loading {
            width: 2rem;
            height: 2rem;
            border: 5px solid #f3f3f3;
            border-top: 6px solid #23231b;
            border-radius: 100%;
            margin: auto;
            animation: spin 1s infinite linear;
            background-color: rgba(0, 0, 0, 0.6);
        }
        #loading.display {
            visibility: visible;
        }
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
<div id="background-loading">
    <div id="position-loading">
        <div id="loading"></div>
    </div>
</div>
<div class="header__top">
    <header class="header">
        <div class="header__wrapper">
            <div class="header__body">
                <div class="header__logo">
                    <img src="img/collaction_logo.svg" alt="Gestão financeira para creators">
                </div>
                <div class="menu_btn">
                    <div class="menu_burger_item"></div>
                    <div class="menu_burger_item"></div>
                    <div class="menu_burger_item"></div>
                </div>
                <div class="header__menu">
                    <div class="header__search">
                        <div class="header__search_icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.7559 11.255H11.9659L11.6859 10.985C12.6659 9.845 13.2559 8.365 13.2559 6.755C13.2559 3.165 10.3459 0.255005 6.75586 0.255005C3.16586 0.255005 0.255859 3.165 0.255859 6.755C0.255859 10.345 3.16586 13.255 6.75586 13.255C8.36586 13.255 9.84586 12.665 10.9859 11.685L11.2559 11.965V12.755L16.2559 17.745L17.7459 16.255L12.7559 11.255ZM6.75586 11.255C4.26586 11.255 2.25586 9.245 2.25586 6.755C2.25586 4.26501 4.26586 2.255 6.75586 2.255C9.24586 2.255 11.2559 4.26501 11.2559 6.755C11.2559 9.245 9.24586 11.255 6.75586 11.255Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <form class="header__search_form">
                            <input type="text" placeholder="Digite algo..">
                        </form>
                    </div>
                    <nav class="header__nav">
                        <div class="header__nav_item">
                            <a href="mailto:suporte@collaction.com.br" class="header__nav_link">Ajuda</a>
                        </div>
                        <div class="header__nav_item">
                            <a href="https://creatoreconomy.com.br" class="header__nav_link" target="_blank">Blog</a>
                        </div>
                    </nav>
                    <div class="header__sigup"><a href="#invite">Criar conta</a></div>
                </div>
            </div>
        </div>
    </header>
    <div class="header__special">
        Indique um(a) creator e seja remunerado por isso!⠀<p><a href="mailto:hello@collaction.com.br">Saiba mais.</a>
        <div class="header__special_close"><a href="#creators">
                <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.4479 0.252808H2.38229C1.27828 0.252808 0.375 1.21253 0.375 2.38552V17.3145C0.375 18.4875 1.27828 19.4472 2.38229 19.4472H20.4479C21.5519 19.4472 22.4552 18.4875 22.4552 17.3145V2.38552C22.4552 1.21253 21.5519 0.252808 20.4479 0.252808ZM20.4479 17.3145H2.38229V2.38552H20.4479V17.3145ZM8.81566 14.0621L11.4151 11.3002L14.0145 14.0621L15.4297 12.5585L12.8302 9.79668L15.4297 7.03482L14.0145 5.53126L11.4151 8.29312L8.81566 5.53126L7.40052 7.03482L9.99996 9.79668L7.40052 12.5585L8.81566 14.0621Z"
                        fill="#3E3E3F" />
                </svg></a>
        </div>
    </div>
</div>

<main class="main">

    <section class="intro">
        <div class="intro__wrapper">
            <div class="intro__body">
                <div class="intro__title">Onde creators coletam pagamentos
                    e gerenciam seus negócios
                </div>
                <div class="intro__descr">
                    App financeiro para coletar pagamentos,
                    métricas e insights, tudo em um só lugar.
                </div>
                <form class="intro__create">
                    <label class="create__label">
                        <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5664 12.6629H20.6029V15.3288H10.5664V12.6629ZM25.7466 13.9959H28.1302C28.1302 10.317 25.32 7.33118 21.8574 7.33118H16.8392V9.86377H21.8574C24.0027 9.86377 25.7466 11.7166 25.7466 13.9959ZM5.42272 13.9959C5.42272 11.7166 7.16656 9.86377 9.31185 9.86377H14.3301V7.33118H9.31185C5.84927 7.33118 3.03906 10.317 3.03906 13.9959C3.03906 17.6748 5.84927 20.6606 9.31185 20.6606H14.3301V18.128H9.31185C7.16656 18.128 5.42272 16.2752 5.42272 13.9959ZM24.3665 13.9959H21.8574V17.9947H18.0938V20.6606H21.8574V24.6594H24.3665V20.6606H28.1302V17.9947H24.3665V13.9959Z"
                                fill="#AAAAAA" />
                        </svg>
                        collaction.com.br/
                        <input class="create__input" type="text" placeholder="@usuario">
                    </label>
                    <button class="create__submit"><a href="#invite">Criar conta</a></button>
                </form>
                <div class="intro__views">Já fomos vistos com</div>
                <div class="intro__companies">
                    <div class="companies__item">
                        <img src="img/intro/c_1.svg" alt="company">
                    </div>
                    <div class="companies__item">
                        <img src="img/intro/c_2.svg" alt="company">
                    </div>
                    <div class="companies__item">
                        <img src="img/intro/c_3.png" alt="company">
                    </div>
                    <div class="companies__item">
                        <img src="img/intro/c_4.png" alt="company">
                    </div>
                    <div class="companies__item">
                        <img src="img/intro/c_5.svg" alt="company">
                    </div>
                    <div class="companies__item">
                        <img src="img/intro/c_6.png" alt="company">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="creators" id="creators">
        <div class="creators__wrapper">
            <div class="creators__inner">
                <div class="creators__body">
                    <div class="creators__tag">
                        #CREATORS
                    </div>
                    <h2 class="creators__title">
                        <b>Comunidades
                            fortes</b> em
                        destaque
                    </h2>

                    <div class="creators__controls">
                        <div class="swiper-button-prev swiper-arrows">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.7031 2.34375L5.04688 10L12.7031 17.6562L10.3594 20L0.359375 10L10.3594 0L12.7031 2.34375Z"
                                    fill="#3B3B3B" />
                            </svg>
                        </div>

                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-next swiper-arrows">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.64062 0L12.6406 10L2.64062 20L0.296875 17.6562L7.95312 10L0.296875 2.34375L2.64062 0Z"
                                      fill="#3B3B3B" />
                            </svg>
                        </div>
                    </div>
                    <div class="creators__more">
                        <a href="#invite">Criar conta</a>
                    </div>
                </div>
                <div class="swiper creators__slider">

                    <div class="swiper-wrapper creators__slides">
                        <div class="swiper-slide creators__item">
                            <img src="img/creators/c1.png" class="creators__item_image" alt="creators">
                            <div class="creators__item_socials">
                                <div class="creators__item_tag">
                                    @deboraperger
                                </div>
                                <div class="creators__item_links">
                                    <a href="https://instagram.com/deboraperger" target="_blank" class="creators__item_link">
                                        <img src="img/creators/insta.svg" alt="instagram">
                                    </a>
                                    <a href="https://www.tiktok.com/@soudezinha" target="_blank" class="creators__item_link">
                                        <img src="img/creators/yt.svg" alt="youtube">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide creators__item">
                            <img src="img/creators/c3.png" class="creators__item_image" alt="creators">
                            <div class="creators__item_socials">
                                <div class="creators__item_tag">
                                    @djmontech
                                </div>
                                <div class="creators__item_links">
                                    <a href="https://instagram.com/djmontech" target="_blank" class="creators__item_link">
                                        <img src="img/creators/insta.svg" alt="instagram">
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCFviio6GTCKP4DuTNfzN33Am" target="_blank" class="creators__item_link">
                                        <img src="img/creators/yt.svg" alt="youtube">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide creators__item">
                            <img src="img/creators/c2.png" class="creators__item_image" alt="creators">
                            <div class="creators__item_socials">
                                <div class="creators__item_tag">
                                    @playmf
                                </div>
                                <div class="creators__item_links">
                                    <a href="https://web.facebook.com/PlaygroundOficial?_rdc=1&_rdr" target="_blank" class="creators__item_link">
                                        <img src="img/creators/yt.svg" alt="youtube">
                                    </a>
                                    <a href="https://instagram.com/playmf" target="_blank" class="creators__item_link">
                                        <img src="img/creators/insta.svg" alt="instagram">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="monetization">
        <div class="monetization__wrapper">
            <div class="swiper monetization__slider">

                <div class="swiper-wrapper">
                    <div class="swiper-slide monetization__item">
                        <div class="monetization__item_body">
                            <div class="monetization__item_tag">#DASHBOARD</div>
                            <div class="monetization__item_title"><b>Monetize seu conteúdo</b> e gerencie os pagamentos</div>
                            <div class="monetization__item_controls">
                                <div class="swiper-button-prev swiper-arrows">
                                    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.7031 2.34375L5.04688 10L12.7031 17.6562L10.3594 20L0.359375 10L10.3594 0L12.7031 2.34375Z"
                                            fill="#3B3B3B" />
                                    </svg>
                                </div>

                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-next swiper-arrows">
                                    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.64062 0L12.6406 10L2.64062 20L0.296875 17.6562L7.95312 10L0.296875 2.34375L2.64062 0Z"
                                              fill="#3B3B3B" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="monetization__item_image">
                            <img src="img/monetization/s_1.png" alt="s">
                        </div>
                    </div>

                    <div class="swiper-slide monetization__item">
                        <div class="monetization__item_body">
                            <div class="monetization__item_tag">#DASHBOARD</div>
                            <div class="monetization__item_title"><b>Monetize seu conteúdo</b> e gerencie os pagamentos</div>
                            <div class="monetization__item_controls">
                                <div class="swiper-arrows swiper-button-prev">
                                    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.7031 2.34375L5.04688 10L12.7031 17.6562L10.3594 20L0.359375 10L10.3594 0L12.7031 2.34375Z"
                                            fill="#3B3B3B" />
                                    </svg>
                                </div>

                                <div class="swiper-pagination"></div>

                                <div class="swiper-arrows swiper-button-next">
                                    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.64062 0L12.6406 10L2.64062 20L0.296875 17.6562L7.95312 10L0.296875 2.34375L2.64062 0Z"
                                              fill="#3B3B3B" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="monetization__item_image">
                            <img src="img/monetization/s_1.png" alt="s">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="collection">
        <div class="collection__wrapper">
            <div class="collection__body">
                <div class="collection___live">
                    <span></span>
                    LIVE
                </div>
                <div class="collection__videos">
                    <div class="collection__video video_1">
                        <img src="img/collection/iphone.png" alt="iphone">
                        <video src="img/collection/video1.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_2">
                        <video src="img/collection/video2.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_3">
                        <video src="img/collection/video3.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_4">
                        <video src="img/collection/video4.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_5">
                        <video src="img/collection/video5.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_6">
                        <video src="img/collection/video6.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_7">
                        <video src="img/collection/video7.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                    <div class="collection__video video_8">
                        <video src="img/collection/video8.mp4" loop muted playsinline autoplay>
                        </video>
                    </div>
                </div>
                <div class="collection__bottom">
                    <div class="collection__bottom_wrapp">
                        <div class="collection__tag">#CONHEÇA A <b>COLLACTION</b></div>
                        <div class="collection__descr">
                            Nosso propósito é contribuir em <b>todos os aspectos do negócio</b>
                            dos creators, possibilitando o seu foco na criação de <b>histórias brilhantes</b>
                            que impactam a vida das pessoas e mudam o mundo.
                        </div>
                    </div>
                    <div class="collection__create"><a href="#invite">Criar conta</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="productivity">
        <div class="productivity__wrapper">
            <div class="productivity__body">
                <div class="productivity__inner">
                    <div class="productivity__tag">#PRODUTIVIDADE</div>
                    <h2 class="productivity__title"><span>Economize tempo</span> e
                        melhore sua performance
                    </h2>
                    <div class="productivity__blocks">
                        <div class="productivity__block">
                            Anotações
                        </div>
                        <div class="productivity__block">
                            Planilhas
                        </div>
                        <div class="productivity__block">
                            Esforço extra
                        </div>
                    </div>
                </div>
                <div class="productivity__table">
                    <img src="img/productivity/bg.svg" alt="table">
                </div>

            </div>
        </div>
    </section>


    <section class="payments">
        <div class="payments__wrapper">

            <div class="payments__link">
                <div class="payment__link_body">
                    <div class="payments__link_left">
                        <h2 class="payments__title">
                            Link de Pagamento
                        </h2>
                        <div class="payments__descr">
                            Ferramenta simples e poderosa, publique em qualquer lugar
                            e centralize os pagamentos.
                        </div>
                        <div class="payments__link_app">
                            <img src="img/payments/link/link-icon.svg" alt="link">
                            collaction.com.br/@neymarjr
                        </div>
                        <div class="payments__create">
                            <a href="#invite">Criar conta</a>
                        </div>
                    </div>
                    <div class="payments__link_right">
                        <div class="payments__link_circle">
                            <div class="circle circle_1">
                                <div class="circle__body">
                                    <img src="img/payments/link/twitch.svg" alt="twitch">
                                </div>
                            </div>
                            <div class="circle circle_2">
                                <div class="circle__body">
                                    <img src="img/payments/link/tg.png" alt="tg">
                                </div>
                            </div>
                            <div class="circle circle_3">
                                <div class="circle__body">
                                    <img src="img/payments/link/hotmart.svg" alt="hotmart">
                                </div>
                            </div>
                            <div class="circle circle_4">
                                <div class="circle__body">
                                    <img src="img/payments/link/yt.png" alt="yt">
                                </div>
                            </div>
                            <div class="circle circle__center">
                                <div class="circle__body">
                                    <img src="img/payments/link/collaction.svg" alt="collaction">
                                </div>
                            </div>
                            <div class="circle circle_5">
                                <div class="circle__body">
                                    <img src="img/payments/link/shop.svg" alt="shop">
                                </div>
                            </div>
                            <div class="circle circle_6">
                                <div class="circle__body">
                                    <img src="img/payments/link/insta.png" alt="insta">
                                </div>
                            </div>
                            <div class="circle circle_7">
                                <div class="circle__body">
                                    <img src="img/payments/link/hubla.svg" alt="hubla">
                                </div>
                            </div>
                            <div class="circle circle_8">
                                <div class="circle__body">
                                    <img src="img/payments/link/whatsapp.svg" alt="whatsapp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payments__creators">

                <h2 class="payments__title">
                    <span>Ferramentas exclusivas</span> <br>
                    <b>para creators</b>
                </h2>
                <div class="payments__items">

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c1.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">gestão de membros</div>
                            <div class="payment__item_descr">
                                Gerencie todos os membros da sua comunidade e ofereça acesso
                                a conteúdo exclusivo de
                                forma automática.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c2.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                página de
                                venda personalizada
                            </div>
                            <div class="payment__item_descr">
                                Customize a sua página de
                                vendas com conteúdo e todas as informações sobre a comunidade.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c3.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                assinaturas
                                recorrentes</div>
                            <div class="payment__item_descr">
                                Crie assinaturas ou pagamentos únicos via Cartão de Crédito, Boleto ou Pix
                                e centralize em um só lugar.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c4.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                conteúdo
                                privado
                            </div>
                            <div class="payment__item_descr">
                                Ofereça conteúdo privado em lives pagas no YouTube, Twitch ou grupos do Telegram, WhatsApp e Close Friends do Instagram.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c5.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                dashboard
                            </div>
                            <div class="payment__item_descr">
                                Acompanhe suas vendas, assinaturas e fluxos de receita em tempo real. Faça conciliação de recebíveis e controle de gastos pelo site ou aplicativo.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c6.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                afiliados
                            </div>
                            <div class="payment__item_descr">
                                Indique para outros creators
                                e managers e seja remunerado
                                por isso.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c7.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                mensagens diretas
                            </div>
                            <div class="payment__item_descr">
                                Envie mensagens diretas
                                e intereja com sua comunidade de assinantes através do nosso chat.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c8.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                feed próprio
                                sem algoritmos
                            </div>
                            <div class="payment__item_descr">
                                Publique conteúdo em um feed próprio sem algoritmos e ads-free.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            Criar conta
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/creators/c9.svg" alt="payment">
                        </div>
                        <div class="payment__item_text">
                            <div class="payment__item_title">
                                gestão completa
                                de pagamentos
                            </div>
                            <div class="payment__item_descr">
                                Gestão completa de pagamentos para creators e managers ganharem produtividade no dia-a-dia.
                            </div>
                        </div>
                        <div class="payment__item_helper">
                            <a href="#invite">Criar conta</a>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0607 13.0607C24.6464 12.4749 24.6464 11.5251 24.0607 10.9393L14.5147 1.3934C13.9289 0.807612 12.9792 0.807612 12.3934 1.3934C11.8076 1.97918 11.8076 2.92893 12.3934 3.51472L20.8787 12L12.3934 20.4853C11.8076 21.0711 11.8076 22.0208 12.3934 22.6066C12.9792 23.1924 13.9289 23.1924 14.5147 22.6066L24.0607 13.0607ZM0 13.5H23V10.5H0V13.5Z"
                                    fill="#EEEEEE" fill-opacity="0.25" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>

            <div class="payments__brief">
                <div class="payments__title">
                    Em breve
                </div>
                <div class="payments__items">

                    <div class="payments__item brief_1">
                        <div class="payment__item_img">
                            <img src="img/payments/brief/b_1.svg" alt="brief">
                        </div>
                        <div class="payment__item_title">cartão de crédito
                        </div>
                        <div class="payment__item_helper">
                            Breve
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/brief/b_2.svg" alt="brief">
                        </div>
                        <div class="payment__item_title">splits de <br> pagamento
                        </div>
                        <div class="payment__item_helper">
                            Breve
                        </div>
                    </div>

                    <div class="payments__item">
                        <div class="payment__item_img">
                            <img src="img/payments/brief/b_3.svg" alt="brief">
                        </div>
                        <div class="payment__item_title">
                            collabs
                        </div>
                        <div class="payment__item_helper">
                            Breve
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="quantity">
        <div class="quantity__wrapper">
            <div class="quantity__title">Quanto posso ganhar com <br> minha comunidade?</div>
            <div class="quantity__descr">
                Calcule quanto você pode ganhar com base no número de seguidores e valores de assinatura.
            </div>
            <div class="quantity__ranges">
                <div class="quantity__following" id="quantity__following"></div>
                <div class="quantity__cost" id="quantity__cost"></div>
            </div>
            <div class="quantity__bottom">
                <div class="quantity__bottom_body">
                    <div class="quantity__amount">
                        <span>R$</span>
                        <div class="value"></div>
                    </div>
                    <div class="quantity__text">
                        esse é o volume total que você pode faturar por mês, cobramos uma taxa
                        de serviço de 10% (incluso custos com operadores de cartão de crédito).
                    </div>
                </div>
                <div class="quantity__create"><a href="#invite">Criar conta</a></div>
            </div>
        </div>
    </section>

    <section class="security" id="security">
        <div class="security__wrapper">
            <div class="security__body">
                <div class="security__tag">#PAGAMENTOS</div>
                <h2 class="security__title">Segurança levada a sério</h2>
                <h2 class="security__descr">
                    Prestador de serviços de nível 1 do PCI. Esse é o nível mais
                    rigoroso de certificação disponível no setor de pagamentos. Para alcançá-lo, utilizamos as melhores
                    ferramentas e práticas de segurança

                    disponíveis para manter um alto nível de segurança.

                </h2>
                <div class="security__list">
                    <div class="security__item">
                        <img src="img/security/check.svg" alt="check">
                        Nunca vamos compartilhar ou vender os seus dados
                    </div>
                    <div class="security__item">
                        <img src="img/security/check.svg" alt="check">
                        Processo de pagamento certificado pelo PCI Compliance
                    </div>
                    <div class="security__item">
                        <img src="img/security/check.svg" alt="check">
                        Serviços TLS (SSL) 256-bit (nível de criptografia bancária)
                    </div>
                    <div class="security__item">
                        <img src="img/security/check.svg" alt="check">
                        Dados sensíveis criptografados em repouso com AES-256
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="credit">
        <div class="credit__wrapper">
            <div class="credit__body">
                <div class="credit__left_side">
                    <div class="credit__ball ball_first"></div>
                    <div class="credit__ball ball_second"></div>
                    <div class="credit__ball ball_three"></div>
                    <div class="credit__card">
                        <img src="img/credit/credit-card.svg" alt="card">
                    </div>
                </div>
                <div class="credit__right_side">
                    <div class="credit__tag">#CARTÕES</div>
                    <h2 class="credit__title">
                        O cartão premium
                        <b>mais desejado</b>
                    </h2>
                    <div class="credit__descr">Collaction Visa Card ® foi feito para creators e managers
                        que realizam pagamentos no dia-a-dia e gerenciam tudo
                        de forma fácil pelo site ou aplicativo.
                    </div>
                    <div class="credit__form">
                        <form id="form-card-request">
                            <div class="form__group">
                                <label class="form__label">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6758 2.67578V1.5L6 4.42578L1.32422 1.5V2.67578L6 5.57422L10.6758 2.67578ZM10.6758 0.324219C10.9857 0.324219 11.25 0.442708 11.4688 0.679688C11.7057 0.916667 11.8242 1.1901 11.8242 1.5V8.5C11.8242 8.8099 11.7057 9.08333 11.4688 9.32031C11.25 9.55729 10.9857 9.67578 10.6758 9.67578H1.32422C1.01432 9.67578 0.740885 9.55729 0.503906 9.32031C0.285156 9.08333 0.175781 8.8099 0.175781 8.5V1.5C0.175781 1.1901 0.285156 0.916667 0.503906 0.679688C0.740885 0.442708 1.01432 0.324219 1.32422 0.324219H10.6758Z"
                                            fill="#C2C2C2" />
                                    </svg>
                                    <input type="email" name="email" placeholder="E-mail">
                                </label>
                            </div>
                            <div class="form__group">
                                <label class="form__label">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.5 8.37891C9.97396 8.37891 10.375 8.55208 10.7031 8.89844C11.0312 9.22656 11.1953 9.61849 11.1953 10.0742C11.1953 10.5482 11.0221 10.9583 10.6758 11.3047C10.3477 11.6328 9.95573 11.7969 9.5 11.7969C9.04427 11.7969 8.64323 11.6328 8.29688 11.3047C7.96875 10.9583 7.80469 10.5482 7.80469 10.0742C7.80469 9.89193 7.8138 9.76432 7.83203 9.69141L3.70312 7.28516C3.35677 7.59505 2.95573 7.75 2.5 7.75C2.02604 7.75 1.61589 7.57682 1.26953 7.23047C0.923177 6.88411 0.75 6.47396 0.75 6C0.75 5.52604 0.923177 5.11589 1.26953 4.76953C1.61589 4.42318 2.02604 4.25 2.5 4.25C2.95573 4.25 3.35677 4.40495 3.70312 4.71484L7.80469 2.33594C7.76823 2.15365 7.75 2.01693 7.75 1.92578C7.75 1.45182 7.92318 1.04167 8.26953 0.695312C8.61589 0.348958 9.02604 0.175781 9.5 0.175781C9.97396 0.175781 10.3841 0.348958 10.7305 0.695312C11.0768 1.04167 11.25 1.45182 11.25 1.92578C11.25 2.39974 11.0768 2.8099 10.7305 3.15625C10.3841 3.5026 9.97396 3.67578 9.5 3.67578C9.0625 3.67578 8.66146 3.51172 8.29688 3.18359L4.19531 5.58984C4.23177 5.77214 4.25 5.90885 4.25 6C4.25 6.09115 4.23177 6.22786 4.19531 6.41016L8.35156 8.81641C8.67969 8.52474 9.0625 8.37891 9.5 8.37891Z"
                                            fill="#C2C2C2" />
                                    </svg>
                                    <input type="text" name="socialMedia" placeholder="Plataformas / Redes sociais utilizadas">
                                </label>
                            </div>
                            <div class="form__group dropdown">
{{--                                <div class="dropdown__btn">--}}
{{--                                    <div class="form__label">--}}
{{--                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path--}}
{{--                                                d="M9.32422 5.57422C9.83464 5.57422 10.3906 5.64714 10.9922 5.79297C11.5938 5.9388 12.1497 6.17578 12.6602 6.50391C13.1706 6.83203 13.4258 7.20573 13.4258 7.625V9.07422H9.92578V7.625C9.92578 6.82292 9.54297 6.14844 8.77734 5.60156C8.90495 5.58333 9.08724 5.57422 9.32422 5.57422ZM3.00781 5.79297C3.60938 5.64714 4.16536 5.57422 4.67578 5.57422C5.1862 5.57422 5.74219 5.64714 6.34375 5.79297C6.94531 5.9388 7.49219 6.17578 7.98438 6.50391C8.49479 6.83203 8.75 7.20573 8.75 7.625V9.07422H0.574219V7.625C0.574219 7.20573 0.829427 6.83203 1.33984 6.50391C1.85026 6.17578 2.40625 5.9388 3.00781 5.79297ZM5.87891 3.90625C5.55078 4.2526 5.14974 4.42578 4.67578 4.42578C4.20182 4.42578 3.79167 4.2526 3.44531 3.90625C3.09896 3.5599 2.92578 3.14974 2.92578 2.67578C2.92578 2.20182 3.09896 1.79167 3.44531 1.44531C3.79167 1.09896 4.20182 0.925781 4.67578 0.925781C5.14974 0.925781 5.55078 1.09896 5.87891 1.44531C6.22526 1.79167 6.39844 2.20182 6.39844 2.67578C6.39844 3.14974 6.22526 3.5599 5.87891 3.90625ZM10.5547 3.90625C10.2083 4.2526 9.79818 4.42578 9.32422 4.42578C8.85026 4.42578 8.4401 4.2526 8.09375 3.90625C7.7474 3.5599 7.57422 3.14974 7.57422 2.67578C7.57422 2.20182 7.7474 1.79167 8.09375 1.44531C8.4401 1.09896 8.85026 0.925781 9.32422 0.925781C9.79818 0.925781 10.2083 1.09896 10.5547 1.44531C10.901 1.79167 11.0742 2.20182 11.0742 2.67578C11.0742 3.14974 10.901 3.5599 10.5547 3.90625Z"--}}
{{--                                                fill="#C2C2C2" />--}}
{{--                                        </svg>--}}
{{--                                        Número de seguidores--}}
{{--                                    </div>--}}
{{--                                    <div class="form__arrow">--}}
{{--                                        <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M7.06 0L4 3.09042L0.94 0L0 0.951417L4 5L8 0.951417L7.06 0Z" fill="black" />--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="dropdown__list">--}}
                                    <select name="followerNumber" class="dropdown__item" style="width: 100%; border: none">
                                        <option value="">Número de seguidores</option>
                                        <option value="Abaixo de 10k">Abaixo de 10k</option>
                                        <option value="10k-50k">10k-50k</option>
                                        <option value="50k-200k">50k-200k</option>
                                        <option value="200k-500k">200k-500k</option>
                                        <option value="500k-1M">500k-1M</option>
                                        <option value="Acima de 1M">Acima de 1M</option>
                                    </select>
{{--                                </div>--}}
{{--                                <div class="dropdown__list">--}}
{{--                                    <div class="dropdown__item">Abaixo de 10k</div>--}}
{{--                                    <div class="dropdown__item">10k-50k</div>--}}
{{--                                    <div class="dropdown__item">50k-200k</div>--}}
{{--                                    <div class="dropdown__item">200k-500k</div>--}}
{{--                                    <div class="dropdown__item">500k-1M</div>--}}
{{--                                    <div class="dropdown__item">Acima de 1M</div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="form__group dropdown">
{{--                                <div class="dropdown__btn">--}}
{{--                                    <div class="form__label">--}}
{{--                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path--}}
{{--                                                d="M1.32422 8.5H10.6758V1.5H1.32422V8.5ZM0.175781 0.324219H11.8242V9.67578H0.175781V0.324219ZM8.92578 6.17578V3.82422H8.32422V6.17578H8.92578ZM9.5 2.67578C9.66406 2.67578 9.80078 2.73047 9.91016 2.83984C10.0195 2.94922 10.0742 3.08594 10.0742 3.25V6.75C10.0742 6.91406 10.0195 7.05078 9.91016 7.16016C9.80078 7.26953 9.66406 7.32422 9.5 7.32422H7.75C7.58594 7.32422 7.44922 7.26953 7.33984 7.16016C7.23047 7.05078 7.17578 6.91406 7.17578 6.75V3.25C7.17578 3.08594 7.23047 2.94922 7.33984 2.83984C7.44922 2.73047 7.58594 2.67578 7.75 2.67578H9.5ZM5.42578 6.17578V3.82422H4.82422V6.17578H5.42578ZM6 2.67578C6.16406 2.67578 6.30078 2.73047 6.41016 2.83984C6.51953 2.94922 6.57422 3.08594 6.57422 3.25V6.75C6.57422 6.91406 6.51953 7.05078 6.41016 7.16016C6.30078 7.26953 6.16406 7.32422 6 7.32422H4.25C4.08594 7.32422 3.94922 7.26953 3.83984 7.16016C3.73047 7.05078 3.67578 6.91406 3.67578 6.75V3.25C3.67578 3.08594 3.73047 2.94922 3.83984 2.83984C3.94922 2.73047 4.08594 2.67578 4.25 2.67578H6ZM1.92578 2.67578H3.07422V7.32422H1.92578V2.67578Z"--}}
{{--                                                fill="#C2C2C2" />--}}
{{--                                        </svg>--}}
{{--                                        Receita anual--}}
{{--                                    </div>--}}
{{--                                    <div class="form__arrow">--}}
{{--                                        <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M7.06 0L4 3.09042L0.94 0L0 0.951417L4 5L8 0.951417L7.06 0Z" fill="black" />--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <select name="annualRecipe" class="dropdown__item" style="width: 100%; border: none">
                                    <option value="">Receita anual</option>
                                    <option value="Abaixo de R$1.000">Abaixo de R$1.000</option>
                                    <option value="R$1.000-R$5.000">R$1.000-R$5.000</option>
                                    <option value="R$5.000-R$10.000">R$5.000-R$10.000</option>
                                    <option value="R$10.000-R$50.000">R$10.000-R$50.000</option>
                                    <option value="Acima de R$50.000">Acima de R$50.000</option>
                                </select>
{{--                                <div class="dropdown__list">--}}
{{--                                    <div class="dropdown__item">Abaixo de R$1.000</div>--}}
{{--                                    <div class="dropdown__item">R$1.000-R$5.000</div>--}}
{{--                                    <div class="dropdown__item">R$5.000-R$10.000</div>--}}
{{--                                    <div class="dropdown__item">R$10.000-R$50.000</div>--}}
{{--                                    <div class="dropdown__item">Acima de R$50.000</div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="credit__submit" id="card-request-submit">Lista de espera</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="application">
        <div class="application__wrapper">
            <div class="application__body">
                <div class="application__left_side">
                    <div class="application__tag">#MOBILE</div>
                    <h2 class="application__title">
                        Gerencie tudo de
                        forma fácil pelo app
                    </h2>
                    <div class="application__descr">
                        Aplicativo disponível nas lojas do Google e Apple.
                        Baixe agora e comece a usar a Collaction em qualquer hora e qualquer lugar.
                    </div>
                    <div class="application__download">
                        <p>Baixe o App</p>
                        <div class="application__links">
                            <a href="#invite" class="application__link">
                                <img src="img/application/google-play.svg" alt="google">
                            </a>
                            <a href="#invite" class="application__link">
                                <img src="img/application/app-store.svg" alt="app-store">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="application__right_side">
                    <div class="application__image">
                        <img src="img/application/bg.png" alt="app">
                    </div>
                </div>
            </div>
        </div><br><br>
    </section>

    <section class="news" id="invite">
        <div class="news__wrapper">
            <div class="news__body">
                <div class="news__title">Sou creator</div>
                <form class="news__form" id="form-invite-request">
                    <label class="news__label">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.3516 5.35156L21.3516 3L12 8.85156L2.64844 3L2.64844 5.35156L12 11.1484L21.3516 5.35156ZM21.3516 0.648438C21.9714 0.648438 22.5 0.885417 22.9375 1.35938C23.4115 1.83333 23.6484 2.38021 23.6484 3L23.6484 17C23.6484 17.6198 23.4115 18.1667 22.9375 18.6406C22.5 19.1146 21.9714 19.3516 21.3516 19.3516L2.64844 19.3516C2.02865 19.3516 1.48177 19.1146 1.00781 18.6406C0.570312 18.1667 0.351562 17.6198 0.351562 17L0.351562 3C0.351562 2.38021 0.570312 1.83333 1.00781 1.35938C1.48177 0.885417 2.02865 0.648438 2.64844 0.648438L21.3516 0.648438Z"
                                fill="#C2C2C2" />
                        </svg>
                        <input class="news__input" type="email" name="email" placeholder="Digite seu e-mail">
                    </label>

                    </input>
                    <button class="news__submit" id="invite-request-submit">
                        Receber convite
                    </button>
                </form>
            </div>
        </div>
    </section>


    <section class="questions">
        <div class="questions__wrapper">
            <div class="questions__items">

                <div class="questions__item">
                    <div class="questions__item_title">
                        <div class="questions__item_text">Quanto posso ganhar como creator?</div>
                        <div class="questions__item_square"></div>
                    </div>
                    <div class="questions__item_faq">
                        Comece a gerenciar seu negócio independentemente do tamanho do seu público e da plataforma de distribuição utilizada (Ex: YouTube, Instagram, etc).<br> Em nossa versão beta, vários criadores estão usando Collaction e o volume movimentado varia de acordo com o tamanho da comunidade e estratégia de monetização.
                    </div>
                </div>

                <div class="questions__item">
                    <div class="questions__item_title">
                        <div class="questions__item_text">Funciona com quais moedas e países?</div>
                        <div class="questions__item_square"></div>
                    </div>
                    <div class="questions__item_faq">
                        Somos uma plataforma global operando em 41 países. Você pode receber doações ou pagamentos na maioria das moedas como:<br> USD, CAD, EUR, GBP, AUD, IRD, YEN ou THB. Em breve suporte para criptomoedas e operações na blockchain.
                    </div>
                </div>

                <div class="questions__item">
                    <div class="questions__item_title">
                        <div class="questions__item_text">Como faço para receber pagamentos?</div>
                        <div class="questions__item_square"></div>
                    </div>
                    <div class="questions__item_faq">
                        Você pode receber pagamentos através de boleto, PIX, link de pagamento, depósito ou transferência (TED) para a sua conta Collaction. <br>Controle todos os recebíveis e faça a conciliação financeira da sua operação pelo site ou aplicativo.
                    </div>
                </div>

                <div class="questions__item">
                    <div class="questions__item_title">
                        <div class="questions__item_text">Funciona com quais plataformas?</div>
                        <div class="questions__item_square"></div>
                    </div>
                    <div class="questions__item_faq">
                        Funciona com todas as formas que creators fazem dinheiro.
                    </div>
                </div>

                <div class="questions__item">
                    <div class="questions__item_title">
                        <div class="questions__item_text">Qual o diferencial?</div>
                        <div class="questions__item_square"></div>
                    </div>
                    <div class="questions__item_faq">
                        Mais criatividade e menos banco! Independente da plataforma que você distribui seu conteúdo ou produto/serviço,<br> você pode centralizar os pagamentos em um lugar só e fazer a gestão financeira de forma simples e eficiente.
                    </div>
                </div>


            </div>
        </div>
    </section>


</main>

<footer class="footer">
    <div class="footer__wrapper">

        <div class="footer__bottom">

            <div class="footer__info">
                © Collaction Tecnologia LTDA · 2022 <br>
                CNPJ: 37.992.217/0001-35
            </div>

            <div class="footer__logo"><img src="img/collaction_logo.svg" alt="Gestão financeira para creators"></div>

            <div class="footer__socials">
                <div class="footer__socials_item">
                    <a href="https://facebook.com/collactionapp" target="_blank" class="footer__socials_link">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4358_5411)">
                                <path
                                    d="M32 16C32 7.16344 24.8366 3.81538e-09 16 2.45791e-09C7.16344 1.10044e-09 -1.10044e-09 7.16344 -2.45791e-09 16C-3.6847e-09 23.9859 5.85094 30.6053 13.5 31.8056L13.5 20.625L9.4375 20.625L9.4375 16L13.5 16L13.5 12.475C13.5 8.465 15.8888 6.25 19.5434 6.25C21.2934 6.25 23.125 6.5625 23.125 6.5625L23.125 10.5L21.1075 10.5C19.12 10.5 18.5 11.7334 18.5 13L18.5 16L22.9375 16L22.2281 20.625L18.5 20.625L18.5 31.8056C26.1491 30.6053 32 23.9859 32 16Z"
                                    fill="#A99E45" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4358_5411">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>

                <div class="footer__socials_item">
                    <a href="https://instagram.com/collaction.app" target="_blank" class="footer__socials_link">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0094 3.00779C20.2869 3.00779 20.7934 3.0263 22.4757 3.10032C24.0391 3.16818 24.8833 3.42726 25.4462 3.64316C26.1903 3.92692 26.7282 4.27236 27.2847 4.82137C27.8476 5.37654 28.1915 5.90088 28.4792 6.63494C28.6981 7.19012 28.9607 8.02905 29.0295 9.56503C29.1046 11.2306 29.1233 11.7302 29.1233 15.9434C29.1233 20.1627 29.1046 20.6624 29.0295 22.3217C28.9607 23.8639 28.6981 24.6967 28.4792 25.2518C28.1915 25.9859 27.8413 26.5164 27.2847 27.0654C26.7219 27.6206 26.1903 27.9599 25.4462 28.2436C24.8833 28.4595 24.0328 28.7186 22.4757 28.7864C20.7872 28.8605 20.2806 28.879 16.0094 28.879C11.7319 28.879 11.2253 28.8605 9.54309 28.7864C7.97968 28.7186 7.13543 28.4595 6.5726 28.2436C5.82841 27.9599 5.2906 27.6144 4.73402 27.0654C4.17119 26.5102 3.82724 25.9859 3.53957 25.2518C3.3207 24.6967 3.05804 23.8577 2.98925 22.3217C2.91421 20.6562 2.89545 20.1566 2.89545 15.9434C2.89545 11.7241 2.91421 11.2244 2.98925 9.56503C3.05804 8.02288 3.3207 7.19012 3.53957 6.63494C3.82724 5.90088 4.17745 5.37038 4.73402 4.82137C5.29685 4.26619 5.82841 3.92692 6.5726 3.64316C7.13543 3.42726 7.98593 3.16818 9.54309 3.10032C11.2253 3.0263 11.7319 3.00779 16.0094 3.00779ZM16.0094 0.164063C11.6631 0.164063 11.119 0.182568 9.41176 0.256592C7.71077 0.330615 6.54133 0.602034 5.52824 0.990657C4.47137 1.39779 3.5771 1.93446 2.68908 2.81657C1.7948 3.69251 1.25073 4.57462 0.837991 5.61095C0.44401 6.61644 0.168849 7.7638 0.093805 9.44166C0.018761 11.1319 -1.76731e-09 11.6685 -2.4259e-09 15.9557C-3.0845e-09 20.2429 0.018761 20.7796 0.093805 22.4636C0.168849 24.1415 0.44401 25.295 0.837991 26.2943C1.25073 27.3368 1.7948 28.2189 2.68908 29.0949C3.5771 29.9708 4.47137 30.5137 5.52199 30.9146C6.54133 31.3032 7.70451 31.5747 9.40551 31.6487C11.1128 31.7227 11.6568 31.7412 16.0031 31.7412C20.3494 31.7412 20.8935 31.7227 22.6007 31.6487C24.3017 31.5747 25.4712 31.3032 26.4843 30.9146C27.5349 30.5137 28.4292 29.9708 29.3172 29.0949C30.2052 28.2189 30.7555 27.3368 31.162 26.3005C31.556 25.295 31.8312 24.1476 31.9062 22.4698C31.9812 20.7857 32 20.2491 32 15.9619C32 11.6747 31.9812 11.138 31.9062 9.454C31.8312 7.77614 31.556 6.6226 31.162 5.62329C30.768 4.57462 30.224 3.69251 29.3297 2.81657C28.4417 1.94062 27.5474 1.39779 26.4968 0.996826C25.4774 0.608203 24.3142 0.336784 22.6132 0.26276C20.8997 0.182568 20.3557 0.164063 16.0094 0.164063Z"
                                fill="#A99E45" />
                            <path
                                d="M16.0087 7.85156C11.4686 7.85156 7.78516 11.4926 7.78516 15.9805C7.78516 20.4684 11.4686 24.1094 16.0087 24.1094C20.5489 24.1094 24.2323 20.4684 24.2323 15.9805C24.2323 11.4926 20.5489 7.85156 16.0087 7.85156ZM16.0087 21.2534C13.0633 21.2534 10.6744 18.892 10.6744 15.9805C10.6744 13.0689 13.0633 10.7075 16.0087 10.7075C18.9542 10.7075 21.3431 13.0689 21.3431 15.9805C21.3431 18.892 18.9542 21.2534 16.0087 21.2534Z"
                                fill="#A99E45" />
                            <path
                                d="M26.4784 7.54199C26.4784 8.59487 25.6154 9.44336 24.5585 9.44336C23.4954 9.44336 22.6387 8.58867 22.6387 7.54199C22.6387 6.48912 23.5017 5.64063 24.5585 5.64063C25.6154 5.64063 26.4784 6.49531 26.4784 7.54199Z"
                                fill="#A99E45" />
                        </svg>
                    </a>
                </div>

                <div class="footer__socials_item">
                    <a href="https://linkedin.com/company/collaction" target="_blank" class="footer__socials_link">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.6313 0.164063L2.3625 0.164063C1.05625 0.164063 -1.56327e-10 1.18169 -3.49603e-10 2.43984L-4.50031e-09 29.4593C-4.69359e-09 30.7174 1.05625 31.7412 2.3625 31.7412L29.6313 31.7412C30.9375 31.7412 32 30.7174 32 29.4654L32 2.43984C32 1.18169 30.9375 0.164063 29.6313 0.164063ZM9.49375 27.0725L4.74375 27.0725L4.74375 11.9993L9.49375 11.9993L9.49375 27.0725ZM7.11875 9.94558C5.59375 9.94558 4.3625 8.7306 4.3625 7.23192C4.3625 5.73323 5.59375 4.51825 7.11875 4.51825C8.6375 4.51825 9.86875 5.73323 9.86875 7.23192C9.86875 8.72443 8.6375 9.94558 7.11875 9.94558ZM27.2687 27.0725L22.525 27.0725L22.525 19.7456C22.525 18.0002 22.4937 15.7491 20.0562 15.7491C17.5875 15.7491 17.2125 17.6548 17.2125 19.6222L17.2125 27.0725L12.475 27.0725L12.475 11.9993L17.025 11.9993L17.025 14.0592L17.0875 14.0592C17.7187 12.8751 19.2688 11.6231 21.575 11.6231C26.3813 11.6231 27.2687 14.7438 27.2687 18.802L27.2687 27.0725Z"
                                fill="#A99E45" />
                        </svg>
                    </a>
                </div>


            </div>
        </div>
    </div>
</footer>




<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/particles.min.js"></script>
<script src="js/vendor/nouislider.min.js"></script>
<script src="js/vendor/wNumb.min.js"></script>
<script src="js/vendor/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    // selecting loading div
    const loader = document.querySelector("#background-loading");
    // showing loading
    function displayLoading() {
        loader.style.visibility = "visible";
    }

    // hiding loading
    function hideLoading() {
        loader.style.visibility = "hidden";
    }

    const formCardRequest = document.getElementById("form-card-request");
    document.getElementById("card-request-submit").addEventListener("click", function (e) {
        e.preventDefault();

        displayLoading();

        const formData = new FormData(formCardRequest);
        const searchParams = new URLSearchParams();
        for (const pair of formData) {
            searchParams.append(pair[0], pair[1]);
        }

        fetch("/api/card-request", {
            method: 'post',
            body: searchParams
        }).then((response) => {
            if (response.status === 200) {
                return 'success';
            }
            return response.json()
        }).then((res) => {
            if (res != 'success') {
                value = Object.values(res)
                hideLoading();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: value[0],
                    confirmButtonColor: '#000000',
                    // footer: '<a href="">Why do I have this issue?</a>'
                });
                return false;
            }

            hideLoading();
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: 'Solicitação registrada com sucesso.',
                confirmButtonColor: '#000000',
                // footer: '<a href="">Why do I have this issue?</a>'
            });
        }).catch((error) => {
            console.log(error);
            hideLoading();
        });
    });

    const formInviteRequest = document.getElementById("form-invite-request");
    document.getElementById("invite-request-submit").addEventListener("click", function (e) {
        e.preventDefault();

        displayLoading();

        const formData = new FormData(formInviteRequest);
        const searchParams = new URLSearchParams();
        for (const pair of formData) {
            searchParams.append(pair[0], pair[1]);
        }

        fetch("/api/invite-request", {
            method: 'post',
            body: searchParams
        }).then((response) => {
            if (response.status === 200) {
                return 'success';
            }
            return response.json()
        }).then((res) => {
            if (res != 'success') {
                value = Object.values(res)
                hideLoading();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: value[0],
                    confirmButtonColor: '#000000',
                    // footer: '<a href="">Why do I have this issue?</a>'
                });
                return false;
            }

            hideLoading();
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: 'Solicitação registrada com sucesso.',
                confirmButtonColor: '#000000',
                // footer: '<a href="">Why do I have this issue?</a>'
            });
        }).catch((error) => {
            console.log(error);
            hideLoading();
        });
    });
</script>

</body>

</html>
