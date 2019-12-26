<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- titulo da pagina   -->
    <title>KM Control</title>
    <!-- css e js  -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->

</head>

<body style="background-color:azure;">
    <div class="container">
        <!-- cabeçario  -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 shadow p-3 mb-5 bg-white rounded" style="background-color: #003666!important">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <img src="img/bandag-logo.png" width="50%" alt="">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 text-center ">
                        <h1 class="font-weight-lighter" style="color: #fff;">
                            KM Control
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- concorrencia  -->
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 shadow p-3 mb-5 bg-white rounded">
                <h2 class="text-center font-weight-lighter" style="color: #003666">Empresa Concorrente</h2>
                <hr />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">R$</span>
                    </div>
                    <input type="tel" id="pneunovoconcorrente" class="form-control" placeholder="Preço pneu novo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onKeyPress="return(moeda(this,'.',',',event))">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">R$</span>
                    </div>
                    <input type="tel" id="recapagemconcorrente" class="form-control" placeholder="Preço primeira recapagem" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onKeyPress="return(moeda(this,'.',',',event))">
                </div>
                <!-- linha divisoria  -->
                <hr />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">km</span>
                    </div>
                    <input type="tel" class="form-control" id="kmnovoconcorrente" placeholder="Km pneu novo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">km</span>
                    </div>
                    <input type="tel" class="form-control" id="kmrecapadoconcorrente" placeholder="Km primeira recapagem" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="row">
                    <div class="col-sm-7 col-md-7 col-lg-7">
                        <div class="alert alert-primary" id="resultadoconcorrente" role="alert">
                            Custo/Km (CPK)
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <div class="text-right">
                            <button type="button" class="btn btn-primary btn-lg" onclick="calculacpkconcorrente()" style="background-color:#003666 ">Calcular CPK</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- espaço entre os quadrante -->
            <div class="col-sm-0 col-md-2 col-lg-2"></div>
            <!-- bandag  -->
            <div class="col-sm-12 col-md-5 col-lg-5 shadow p-3 mb-5 bg-white rounded">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <img src="img/bandag-logo-azul.png" height="40px" alt="">
                </div>
                <hr />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">R$</span>
                    </div>
                    <input type="tel" class="form-control" id="pneunovobandag" placeholder="Preço pneu novo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onKeyPress="return(moeda(this,'.',',',event))">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">R$</span>
                    </div>
                    <input type="tel" class="form-control" id="recapagembandag" placeholder="Preço primeira recapagem" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onKeyPress="return(moeda(this,'.',',',event))">
                </div>
                <!-- linha divisoria  -->
                <hr />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">km</span>
                    </div>
                    <input type="tel" class="form-control" id="kmnovobandag" placeholder="Km pneu novo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">km</span>
                    </div>
                    <input type="tel" class="form-control" id="kmrecapadobandag" placeholder="Km primeira recapagem" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="row">
                    <div class="col-sm col-md-7 col-lg-7">
                        <div class="alert alert-primary" id="resultadobandag" role="alert">
                            Custo/Km (CPK)
                        </div>
                    </div>
                    <div class="col-sm col-md-5 col-lg-5">
                        <div class="text-right">
                            <button type="button" class="btn btn-primary btn-lg" onclick="calculacpkbandag()" style="background-color:#003666 ">Calcular CPK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- iniciando comparativos  -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 shadow p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-center font-weight-lighter text-center" style="color: #003666">Vamos comparar?</h2>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background-color:#003666; color:white">km</span>
                            </div>
                            <input type="tel" class="form-control" id="kmnomes" onChange="range()" placeholder="Quantos Km você roda no mês?" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 ">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label for="qtdmeses">
                                    <p class="h5 font-weight-light">Por quantos meses?</p>
                                </label>
                                <input type="range" class="custom-range" min="1" value="1" max="12" id="qtdmeses" onChange="range()">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                <p class="h4 font-weight-light" style="color:#003666" id="displaymeses">1 mes(es)</p>

                            </div>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="container shadow p-3 mb-5 bg-white rounded" style="background-color:rgba(195, 221, 249, 0.5)!important;">
                            <h3 class="text-center font-weight-lighter" style="color: #003666">Custo na concorrencia</h3>
                            <h2 class="text-center font-weight-light" id="custoconcorrente">R$: 0.00</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="container shadow p-3 mb-5 bg-white rounded" style="background-color:rgba(195, 221, 249, 0.5)!important;">
                            <h3 class="text-center font-weight-lighter " style="color: #003666">Custo na Bandag</h3>
                            <h2 class="text-center font-weight-light" id="custobandag">R$: 0.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <footer>
        <div class="text-center" style="background-color:  rgba(0, 123, 255, 0.25);">
            <p class="font-weight-light" style="color: #003666"> Powered by Leandro Silva © 2020 | All rights reserved.</p>

        </div>
    </footer>
</body>
<script src="js/calculo.js"></script>
</html>