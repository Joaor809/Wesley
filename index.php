<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesley Macedo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap');

    body {
        margin: 0;
        padding: 0;
        background-color: #141414;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .banner {
        width: 100%;
        height: 80vh;
        background-image: url(imagens/ilustrativa.jpg);
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: start;
        color: white;
        padding: 50px;
        box-sizing: border-box;
        padding-left: 6rem;
    }

    .banner h1 {
        text-shadow: 0 0 4px black;
        font-size: 6rem;
        margin-top: 2%;
        font-family: "Merriweather", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-variation-settings:
            "wdth" 100;
    }

    .banner p {
        text-shadow: 0 0 4px white;
        margin-top: 30rem;
        color: black;
        font-size: 25px;
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }

    .about {
        font-size: 35px;
        font-family: Arial, Helvetica, sans-serif;
        padding-left: 20%;
        padding-right: 20%;
        color: white;
        margin-top: 1rem;
    }

    .card {
        background: #1c1c1c;
    }

    .card-pack h4 {
        text-shadow: 0 2 4px black;
    }

    .pack-button {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pack-button button {
        background: linear-gradient(135deg, #d6b15a, #b8933f, #8f6f2a);
        width: 8rem;
        height: 2.5rem;
        border: solid 2px black;
        border-radius: 20px;
        transition: transform 0.25s ease-in-out;
        color: black;
        font-weight: bold;

    }

    .pack-button button:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(83, 83, 83, 0.5);
    }

    .ilustration img {
        width: 100%;
    }

    .ilustration p {
        font-size: 30px;
        font-family: "Shantell Sans", cursive;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-variation-settings:
            "BNCE" 0,
            "INFM" 0,
            "SPAC" 0;

    }

    .ilustration span {
        font-size: 20px;
    }

    #column-text {
        padding: 50px;
    }

    .button-ilustration button {
        background: linear-gradient(135deg, #d6b15a, #b8933f, #8f6f2a);
        width: 8rem;
        height: 2.5rem;
        border: solid 2px black;
        border-radius: 20px;
        transition: transform 0.25s ease-in-out;
        color: black;
        font-weight: bold;
    }

    .button-ilustration button:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(83, 83, 83, 0.5);
    }

    .button-ilustration {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .packages {
        color: #bfc3c7;
    }

    .media {
        text-align: center;
    }

    .media video {
        width: 70%;
        overflow: hidden;
        border-radius: 10px;
        box-shadow:
            0 0 0 1px rgba(255, 255, 255, 0.08),
            0 18px 45px rgba(255, 255, 255, 0.12);
    }

    .img-ilustrative {
        width: 60%;
        margin: 0 auto;
        border-radius: 24px;
        overflow: hidden;
        margin-bottom: 3%;
    }

    .spaccing {
        margin-top: 6%;
    }

    .contacts {
        color: white;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .contacts h5 {
        margin-top: 1%;
    }

    footer {
        background-color: #191919;
        width: 100%;
    }

    .ilustration {
        color: white;
    }

    @media (max-width: 575px) {
        .banner {
            height: auto;
            padding: 2rem 1rem;
            text-align: center;
        }

        .banner h1 {
            font-size: 2.5rem;
        }

        .banner p {
            margin-top: 1rem;
            font-size: 1.1rem;
        }

        .about {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
        }

        .packages .row .col {
            margin-bottom: 1rem;
        }

        .ilustration .row {
            flex-direction: column;
        }

        #column-text {
            padding: 1rem;
            text-align: center;
        }

        .media video {
            width: 100%;
        }

        .img-ilustrative {
            width: 100%;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .banner h1 {
            font-size: 3.5rem;
        }

        .banner p {
            font-size: 1.3rem;
        }

        .about {
            padding: 1.5rem;
            font-size: 1.4rem;
        }

        .media video {
            width: 90%;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .banner {
            padding-left: 3rem;
        }

        .banner h1 {
            font-size: 4.5rem;
        }

        .about {
            padding-left: 10%;
            padding-right: 10%;
            font-size: 1.8rem;
        }

        .media video {
            width: 80%;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {

        .banner h1 {
            font-size: 5rem;
        }

        .about {
            font-size: 2rem;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {

        .about {
            max-width: 1100px;
            margin: auto;
        }
    }

    @media (min-width: 1400px) {

        .banner {
            padding-left: 6rem;
        }

        .media video {
            max-width: 1000px;
        }

        .img-ilustrative {
            max-width: 1000px;
        }
    }
</style>

<body>
    <header>
        <section class="intro">
            <div class="banner">
                <h1><strong>Wesley Macedo</strong></h1>
                <p><strong>Modelador 3D e Render</strong></p>
            </div>
        </section>
    </header>
    <main>
        <section class="about">
            <h3>"Aos 30 anos, divido minha paixão pela família - Lidiane e o pequeno Abner - com a precisão da Arquitetura. Como modelador 3D e estudante de Urbanismo, utilizo SketchUp e o V-Ray para dar vida e realismo a espaços que ainda estão no papel."</h3>
        </section>
        <section class="packages">
            <h2 class="mt-5">PACOTES</h2>
            <section class="pack_1">
                <div class="d-flex justify-content-start align-items-center gap-3 me-4 mt-3">
                    <h3>Pacote - 01</h3>
                    <h5>5 cores (granitos e mármore)</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card justify-content-center text-center text-white card-pack">
                            <img class="img-fluid card-img-top" src="imagens/preto-via-lactea.jpg" alt="Preto Via Láctea">
                            <div class="card-body">
                                <h4>Preto Via Láctea</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card justify-content-center text-center text-white">
                            <img class="img-fluid card-img-top" src="imagens/preto-sao-gabriel.jpg" alt="Preto São Gabriel">
                            <div class="card-body">
                                <h4>Preto São Gabriel</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card justify-content-center text-center text-white">
                            <img class="img-fluid card-img-top" src="imagens/preto-sao-gabriel-fosco.jpg" alt="Preto São Gabriel Fosco">
                            <div class="card-body">
                                <h4>Preto São Gabriel Fosco</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pack-button mt-3 mb-4">
                    <button>R$10,00</button>
                </div>
            </section>
            <section class="pack_2">
                <div class="d-flex justify-content-start align-items-center gap-3 me-4 mt-3">
                    <h3>Pacote - 02</h3>
                    <h5>10 cores (granitos e mármore)</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card justify-content-center text-center text-white card-pack">
                            <img class="img-fluid card-img-top" src="imagens/preto-via-lactea.jpg" alt="Preto Via Láctea">
                            <div class="card-body">
                                <h4>Preto Via Láctea</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card justify-content-center text-center text-white">
                            <img class="img-fluid card-img-top" src="imagens/preto-sao-gabriel.jpg" alt="Preto São Gabriel">
                            <div class="card-body">
                                <h4>Preto São Gabriel</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card justify-content-center text-center text-white">
                            <img class="img-fluid card-img-top" src="imagens/preto-sao-gabriel-fosco.jpg" alt="Preto São Gabriel Fosco">
                            <div class="card-body">
                                <h4>Preto São Gabriel Fosco</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pack-button mt-3 mb-4">
                    <button>R$20,00</button>
                </div>
            </section>
            <section class="pack_3">
                <div class="d-flex justify-content-start align-items-center gap-3 me-4 mt-3">
                    <h3>Pacote - 03</h3>
                    <h5>5 cores (granitos e mármore)</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card justify-content-center text-center text-white card-pack">
                            <img class="img-fluid card-img-top" src="imagens/cinza-andorinha.jpg" alt="Cinza Andorinha">
                            <div class="card-body">
                                <h4>Cinza Andorinha</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card justify-content-center text-center text-white">
                            <img class="img-fluid card-img-top" src="imagens/branco-icarai.jpg" alt="Amarelo Icaraí">
                            <div class="card-body">
                                <h4>Amarelo Icaraí</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card justify-content-center text-center text-white">
                            <img class="img-fluid card-img-top" src="imagens/branco-pitaya.jpg" alt="Branco Pitaia">
                            <div class="card-body">
                                <h4>Branco Pitaia</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pack-button mt-3 mb-4">
                    <button>R$45,00</button>
                </div>
            </section>
        </section>
        <section class="ilustration mt-4">
            <h1 class="text-center mb-4">ILUSTRATIVO POR AMBIENTE</h1>
            <div class="ilustration-full">
                <img src="imagens/ilustrativa.jpg" alt="Imagem Ilustrativa">
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 mx-auto text-center" id="column-text">
                        <p>
                            O ambiente decorado com a cor da pedra selecionada mostrando
                            como ficará a pedra no local
                        </p>
                        <span>
                            OBS.: não é projeto, é apenas uma imagem ilustrativa; o cliente deverá mandar
                            as medidas detalhadas, cor selecionada, pedras e móveis, além de um esboço legível.
                        </span>
                        <div class="button-ilustration mt-3">
                            <button>R$50,00</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="media">
            <video class="mx-auto d-block" autoplay loop muted playsinline disablePictureInPicture controlslist="nodownload nofullscreen noremoteplayback">
                <source src="media/onça.mp4" type="video/mp4">
            </video>
            <div class="spaccing">
                <div class="img-ilustrative">
                    <img class="mx-auto d-block" src="imagens/ilustrativa2.png" alt="Segunda Imagem Ilustrativa">
                </div>
            </div>

        </section>
    </main>
    <footer>
        <div class="contacts">
            <h3>Contatos</h3>
            <a href="https://www.instagram.com/wesley_mgss?igsh=MTMyYjh0cmw1ZDJtNg%3D%3D"><i class="bi bi-instagram text-white me-3 fs-3"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61585247745680&rdid=jzlmaFrO2tGA4tJq&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1G9AM6Xh4z%2F#"><i class="bi bi-facebook text-white me-3 fs-3"></i></a>
            <a href="#"><i class="bi bi-twitter text-white me-3 fs-3"></i></a>
            <a href="#"><i class="bi bi-linkedin text-white fs-3 me-3"></i></a>
            <a href="#"><i class="bi bi-whatsapp text-white fs-3"></i></a>
            <h5>E-mail:</h5>
            <p>wmacedo765@gmail.com</p>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>