function contar(){
    var ini = window.document.getElementById('ini');
    var pas = window.document.getElementById('pas');
    var fim = window.document.getElementById('fim');
    var res = window.document.getElementById('res');

    if (ini.value.length == 0 || pas.value.length == 0 || fim.value.length == 0){
        window.alert('[ERRO] faltam dados');
    }
    else {
        res.innerHTML = 'Contando: ';
        let i = Number(ini.value);
        let f = Number(fim.value);
        let p = Number(pas.value);

        if (i < f){
            for(let c = i; c <= f; c += p){
                res.innerHTML += `${c} \u{1F449} `;
            }
        }
        else{
            for(let c = i; c >= f; c -= p){
                res.innerHTML += `${c} \u{1F449}`;
            }
        }
        res.innerHTML += ` \u{1F3C1}`
    }
}
