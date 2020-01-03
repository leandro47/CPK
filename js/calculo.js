// variaveis globais 
var cpkconcorrente = 0;
var cpkbandag = 0;
var custocom = 0;
var custoban = 0;
var totaleconomizado = 0;
//  formata numero para numero com separacao de milhar
function separadormilhar1() {
    var numero = document.getElementById("kmnovobandag").value;
    if (numero == "") { document.getElementById("kmnovobandag").value = ""; }
    else {
        console.log(numero);
        numero = numero.replace(".", "");
        numero = numero.replace(",", ".");
        numero = parseFloat(numero);
        console.log(numero);
        numero = numero.toFixed(0).split('.');
        numero[0] = numero[0].split(/(?=(?:...)*$)/).join('.');
        // return numero.join('.');
        console.log(numero);
        document.getElementById("kmnovobandag").value = numero;
    }
}
function separadormilhar2() {
    var numero = document.getElementById("kmrecapadobandag").value;
    if (numero == "") { document.getElementById("kmrecapadobandag").value = ""; }
    else {
        console.log(numero);
        numero = numero.replace(".", "");
        numero = numero.replace(",", ".");
        numero = parseFloat(numero);
        console.log(numero);
        numero = numero.toFixed(0).split('.');
        numero[0] = numero[0].split(/(?=(?:...)*$)/).join('.');
        // return numero.join('.');
        console.log(numero);
        document.getElementById("kmrecapadobandag").value = numero;
    }
}
function separadormilhar3() {
    var numero = document.getElementById("kmrecapadoconcorrente").value;
    if (numero == "") { document.getElementById("kmrecapadoconcorrente").value = ""; }
    else {
        console.log(numero);
        numero = numero.replace(".", "");
        numero = numero.replace(",", ".");
        numero = parseFloat(numero);
        console.log(numero);
        numero = numero.toFixed(0).split('.');
        numero[0] = numero[0].split(/(?=(?:...)*$)/).join('.');
        // return numero.join('.');
        console.log(numero);
        document.getElementById("kmrecapadoconcorrente").value = numero;
    }
}
function separadormilhar4() {
    var numero = document.getElementById("kmnovoconcorrente").value;
    if (numero == "") { document.getElementById("kmnovoconcorrente").value = ""; }
    else {
        // console.log(numero);
        numero = numero.replace(".", "");
        numero = numero.replace(",", ".");
        numero = parseFloat(numero);
        console.log(numero);
        numero = numero.toFixed(0).split('.');
        numero[0] = numero[0].split(/(?=(?:...)*$)/).join('.');
        // return numero.join('.');
        console.log(numero);
        document.getElementById("kmnovoconcorrente").value = numero;
    }
}
function separadormilhar5() {
    var numero = document.getElementById("kmnomes").value;
    if (numero == "") {
        document.getElementById("kmnomes").value = "1";
    }
    else {
        console.log(numero);
        numero = numero.replace(".", "");
        numero = numero.replace(",", ".");
        numero = parseFloat(numero);
        console.log(numero);
        numero = numero.toFixed(0).split('.');
        numero[0] = numero[0].split(/(?=(?:...)*$)/).join('.');
        // return numero.join('.');
        console.log(numero);
        document.getElementById("kmnomes").value = numero;
    }
}
//  formata numero para real 
function numberToReal(numero) {
    var numero = numero.toFixed(2).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}
// exibi a div novamente
function mostrardiv() {
    var display = document.getElementById("divresultado").style.display;
    if (display == "none")
        document.getElementById("divresultado").style.display = 'block';
    else
        document.getElementById("divresultado").style.display = 'block';
}

// função que pega quantidade de pneus e caminhões e multiplica
function multiplicapneus() {
    var quantidadepneus = document.getElementById("qtdpneus").value;
    var quantidadecaminhoes = document.getElementById("qtdveiculos").value;
    var totalpneus = quantidadecaminhoes * quantidadepneus;

    var custobandag1 = totalpneus * custoban;
    var custocom1 = totalpneus * custocom;

    if (custocom1 > custobandag1) {
        //Nesse caso a bandag é mais barato
        totaleconomizado = custocom1 - custobandag1;
        totaleconomizado = arredonda(totaleconomizado, 2)
        totaleconomizado = numberToReal(totaleconomizado);
        mostrardiv();
        document.getElementById("vlrtotal").innerHTML = totaleconomizado;
        document.getElementById("mesestotal").innerHTML = document.getElementById("qtdmeses").value;
        document.getElementById("empresaeconomica").innerHTML = "Bandag"

    }
    else if (custobandag1 > custocom1) {
        //nesse caso a concorrencia é mais barato
        totaleconomizado = custobandag1 - custocom1;
        totaleconomizado = arredonda(totaleconomizado, 2)
        totaleconomizado = numberToReal(totaleconomizado);
        mostrardiv();
        document.getElementById("vlrtotal").innerHTML = totaleconomizado;
        document.getElementById("mesestotal").innerHTML = document.getElementById("qtdmeses").value;
        document.getElementById("empresaeconomica").innerHTML = "Concorrência"
    }
    else {
        document.getElementById("vlrtotal").innerHTML = "R$ 0,00";
        document.getElementById("mesestotal").innerHTML = document.getElementById("qtdmeses").value;
        document.getElementById("empresaeconomica").innerHTML = "em ambas empresas"
    }
    custobandag1 = arredonda(custobandag1, 2);
    custocom1 = arredonda(custocom1, 2);
    custobandag1 = numberToReal(custobandag1);
    custocom1 = numberToReal(custocom1);

    document.getElementById("custoconcorrente1").innerHTML = custocom1;
    document.getElementById("custobandag1").innerHTML = custobandag1;
};

// função altera valor meses
function range() {
    separadormilhar5()
    var qtdmeses = document.getElementById("qtdmeses").value;
    document.getElementById("displaymeses").innerHTML = qtdmeses + " mes(es)";
    kmnomes = document.getElementById("kmnomes").value;
    kmnomes = kmnomes.replace(".", "");
    kmnomes = kmnomes.replace(",", ".");
    kmnomes = parseFloat(kmnomes);

    if (kmnomes == "1") {
        Swal.fire({
            title: 'Ops!',
            text: 'Você precisa me dizer o quanto você roda no mês primeiro',
            icon: 'error',
            confirmButtonText: 'Vou cuidar disso!'
        })
    }
    else {
        var totalrodado = kmnomes * qtdmeses;
        var custoconcorrente = totalrodado * cpkconcorrente;
        custoconcorrente = arredonda(custoconcorrente, 2);
        custocom = custoconcorrente;
        custoconcorrente1 = numberToReal(custoconcorrente);
        document.getElementById("custoconcorrente").innerHTML = custoconcorrente1;

        var custobandag = totalrodado * cpkbandag;
        custobandag = arredonda(custobandag, 2);
        custoban = custobandag;
        custobandag1 = numberToReal(custobandag);
        document.getElementById("custobandag").innerHTML = custobandag1;
        multiplicapneus();

        if (custobandag > custoconcorrente) {

            var vlreconomia = custobandag - custoconcorrente;
            vlreconomia = arredonda(vlreconomia, 2);
            vlreconomia = numberToReal(vlreconomia);
            Swal.fire({
                title: 'Esta vendo?',
                text: 'Você economizará por pneu ' + vlreconomia + ' em ' + qtdmeses + ' mes(es) comprando na Concorrência',
                icon: 'success',
                confirmButtonText: 'Ótimo!'
            })
        }
        else if (custoconcorrente > custobandag) {
            var vlreconomia = custoconcorrente - custobandag;
            vlreconomia = arredonda(vlreconomia, 2);
            vlreconomia = numberToReal(vlreconomia);
            Swal.fire({
                title: 'Esta vendo?',
                text: 'Você economizará por pneu ' + vlreconomia + ' em ' + qtdmeses + ' mes(es) comprando na Bandag.',
                icon: 'success',
                confirmButtonText: 'Ótimo!'
            })
        }
        else {
            Swal.fire({
                title: 'De acordo com meus calculos!',
                text: 'As duas empresas estão com o mesmo nivel de custo/beneficio',
                icon: 'info',
                confirmButtonText: 'ok'
            })
        }
    }
}

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
        cpkconcorrente = cpk;
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
        cpkbandag = cpk;
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