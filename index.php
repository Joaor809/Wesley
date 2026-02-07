<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesley Macedo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
        font-size: 6rem;
        margin-top: 0.2%;
        font-family: "Merriweather", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-variation-settings:
            "wdth" 100;
    }

    .banner p {
        margin-top: 18rem;
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
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5);
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
    .ilustration span{
        font-size: 20px;
    }
    #column-text{
        padding: 50px;
    }
    .button-ilustration button{
        background: linear-gradient(135deg, #d6b15a, #b8933f, #8f6f2a);
        width: 8rem;
        height: 2.5rem;
        border: solid 2px black;
        border-radius: 20px;
        transition: transform 0.25s ease-in-out;
        color: black;
        font-weight: bold;
    }
    .button-ilustration button:hover{
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5);
    }
    .button-ilustration{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .packages{
        color: #bfc3c7;
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
            <h2 class="mt-4">PACOTES</h2>
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
                <div class="pack-button mt-3">
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
                <div class="pack-button mt-3">
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
                <div class="pack-button mt-3">
                    <button>R$45,00</button>
                </div>
            </section>
        </section>
        <section class="ilustration mt-4">
            <!--<h2>ILUSTRATIVO POR AMBIENTE</h2>
            <img src="imagens/ilustrativa.jpg" alt="Imagem Ilustrativa">
            <p>O ambiente decorado com a cor da pedra selecionada mostrando como ficará a pedra no local.</p>
            <span>OBS.: não é projeto, é apenas ilustrativo; serão enviadas as medidas detalhadas, a cor selecionada das pedras e dos móveis, além de um esboço legível.</span>-->
            <h1>ILUSTRATIVO POR AMBIENTE</h1>
            <div class="row">
                <div class="col-6" id="column-image">
                    <img src="imagens/ilustrativa.jpg" alt="Imagem Ilustrativa">
                </div>
                <div class="col" id="column-text">
                    <p>O ambiente decorado com a cor da pedra selecionada mostrando como ficará a pedra no local</p>
                    <span>OBS.: não é projeto, é apenas uma imagem ilustrativa; o cliente deverá mandar as medidas detalhadas, cor selecionada, pedras e móveis, além de um esboço legível.</span>
                    <div class="button-ilustration mt-2">
                        <button>R$50,00</button>
                    </div>
                </div>
            </div>
        </section>
        <section>

        </section>
    </main>
</body>

</html>