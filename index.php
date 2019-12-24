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
    <script src="sweetalert2.all.min.js"></script>

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

    </div>
    <footer>
        <div class="text-center" style="background-color:  rgba(0, 123, 255, 0.25);">
            <p class="font-weight-light" style="color: #003666"> Powered by Leandro Silva © 2020 | All rights reserved.</p>

        </div>
    </footer>
</body>
<script language="javascript">
    // função calcular cpk concorrente

    function calculacpkconcorrente() {
        var pneunovoconcorrente = document.getElementById('pneunovoconcorrente').value;
        var recapagemconcorrente = document.getElementById('recapagemconcorrente').value;
        var kmnovoconcorrente = document.getElementById('kmnovoconcorrente').value;
        var kmrecapadoconcorrente = document.getElementById('kmrecapadoconcorrente').value;
        if (pneunovoconcorrente == "" || recapagemconcorrente == "" || kmnovoconcorrente == "" || kmrecapadoconcorrente == "") {
            Swal.fire({
                title: 'Ops!',
                text: 'Você precisaria preencher todos os campos para prosseguirmos ;D',
                icon: 'error',
                confirmButtonText: 'Vou cuidar disso!'
            })
        } else {
            pneunovoconcorrente = pneunovoconcorrente.replace(".", "");
            pneunovoconcorrente = pneunovoconcorrente.replace(",", ".");
            pneunovoconcorrente = parseFloat(pneunovoconcorrente);
            //console.log(pneunovoconcorrente);
            recapagemconcorrente = recapagemconcorrente.replace(".", "");
            recapagemconcorrente = recapagemconcorrente.replace(",", ".");
            recapagemconcorrente = parseFloat(recapagemconcorrente);
            // console.log(recapagemconcorrente);
            kmnovoconcorrente = kmnovoconcorrente.replace(".", "");
            kmnovoconcorrente = kmnovoconcorrente.replace(",", ".");
            kmnovoconcorrente = parseFloat(kmnovoconcorrente);
            //console.log(kmnovoconcorrente);
            kmrecapadoconcorrente = kmrecapadoconcorrente.replace(".", "");
            kmrecapadoconcorrente = kmrecapadoconcorrente.replace(",", ".");
            kmrecapadoconcorrente = parseFloat(kmrecapadoconcorrente);
            //console.log(kmrecapadoconcorrente);

            var totalpago = pneunovoconcorrente + recapagemconcorrente;
            // console.log(totalpago);
            var totalrodado = kmnovoconcorrente + kmrecapadoconcorrente;
            var cpk = totalpago / totalrodado;
            cpk = arredonda(cpk, 5);

            document.getElementById("resultadoconcorrente").innerHTML = "R$ " + cpk;

            var custo = 1 / cpk;
            custo = arredonda(custo, 0);
            Swal.fire({
                title: 'Olha só!',
                text: 'Você precisaria rodar ' + custo + ' km para custar R$1,00 cada pneu',
                icon: 'info',
                confirmButtonText: 'Entendi!'
            })

        }
    }

    function calculacpkbandag() {
        var pneunovobandag = document.getElementById('pneunovobandag').value;
        var recapagembandag = document.getElementById('recapagembandag').value;
        var kmnovobandag = document.getElementById('kmnovobandag').value;
        var kmrecapadobandag = document.getElementById('kmrecapadobandag').value;
        if (pneunovobandag == "" || recapagembandag == "" || kmnovobandag == "" || kmrecapadobandag == "") {
            Swal.fire({
                title: 'Ops!',
                text: 'Você precisaria preencher todos os campos para prosseguirmos ;D',
                icon: 'error',
                confirmButtonText: 'Vou cuidar disso!'
            })
        } else {
            pneunovobandag = pneunovobandag.replace(".", "");
            pneunovobandag = pneunovobandag.replace(",", ".");
            pneunovobandag = parseFloat(pneunovobandag);
            //console.log(pneunovoconcorrente);

            recapagembandag = recapagembandag.replace(".", "");
            recapagembandag = recapagembandag.replace(",", ".");
            recapagembandag = parseFloat(recapagembandag);
            // console.log(recapagemconcorrente);

            kmnovobandag = kmnovobandag.replace(".", "");
            kmnovobandag = kmnovobandag.replace(",", ".");
            kmnovobandag = parseFloat(kmnovobandag);
            //console.log(kmnovoconcorrente);

            kmrecapadobandag = kmrecapadobandag.replace(".", "");
            kmrecapadobandag = kmrecapadobandag.replace(",", ".");
            kmrecapadobandag = parseFloat(kmrecapadobandag);
            //console.log(kmrecapadoconcorrente);

            var totalpago = pneunovobandag + recapagembandag;
            // console.log(totalpago);
            var totalrodado = kmnovobandag + kmrecapadobandag;
            var cpk = totalpago / totalrodado;
            cpk = arredonda(cpk, 5);
            document.getElementById("resultadobandag").innerHTML = "R$ " + cpk;
            var custo = 1 / cpk;
            custo = arredonda(custo, 0);
            Swal.fire({
                title: 'Olha só!',
                text: 'Você precisaria rodar ' + custo + ' km para custar R$1,00 cada pneu',
                icon: 'info',
                confirmButtonText: 'Entendi!'
            })


        }
    }

    // função que arredonda valores cpk 
    function arredonda(numero, casasDecimais) {
        casasDecimais = typeof casasDecimais !== 'undefined' ? casasDecimais : 2;
        return +(Math.floor(numero + ('e+' + casasDecimais)) + ('e-' + casasDecimais));
    };

    // função mascara de valores monetario
    function moeda(a, e, r, t) {
        let n = "",
            h = j = 0,
            u = tamanho2 = 0,
            l = ajd2 = "",
            o = window.Event ? t.which : t.keyCode;
        if (13 == o || 8 == o)
            return !0;
        if (n = String.fromCharCode(o),
            -1 == "0123456789".indexOf(n))
            return !1;
        for (u = a.value.length,
            h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
        for (l = ""; h < u; h++)
            -
            1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
        if (l += n,
            0 == (u = l.length) && (a.value = ""),
            1 == u && (a.value = "0" + r + "0" + l),
            2 == u && (a.value = "0" + r + l),
            u > 2) {
            for (ajd2 = "",
                j = 0,
                h = u - 3; h >= 0; h--)
                3 == j && (ajd2 += e,
                    j = 0),
                ajd2 += l.charAt(h),
                j++;
            for (a.value = "",
                tamanho2 = ajd2.length,
                h = tamanho2 - 1; h >= 0; h--)
                a.value += ajd2.charAt(h);
            a.value += r + l.substr(u - 2, u)
        }
        return !1


    }
</script>

</html>