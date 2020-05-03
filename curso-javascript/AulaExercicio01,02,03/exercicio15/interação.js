function verifIdad(){
    var data = new Date();
    var ano = data.getFullYear();
    var fano = window.document.getElementById('txtano').value;
    var res = window.document.getElementById('res');
    if(Number(fano) == 0 || Number(fano) > ano){
        window.alert('[ERRO] - Verifique os dados e tente novamente.')
    }
    else{
        var fsex = document.getElementsByName('radSex');
        var idade = ano - Number(fano);
        var genero = '';
        var img = document.createElement('img');
        img.setAttribute('id', 'foto');
        if(fsex[0].checked){
            genero = 'um Homen';
            if(idade >=0 && idade <= 10){
                img.src = 'foto-bebe-m.png';
            }
            else if(idade < 21){
                img.src = 'foto-jovem-m.png';
            }
            else if(idade < 50){
                img.src = 'foto-adulto-m.png';
            }
            else if(idade > 50){
                img.src = 'foto-idoso-m.png';
            }
        }
        else if(fsex[1].checked) {
            genero = 'uma Mulher'
            if(idade >=0 && idade <= 10){
                img.src = 'foto-bebe-f.png';
            }
            else if(idade < 21){
                img.src = 'foto-jovem-f.png';
            }
            else if(idade < 50){
                img.src = 'foto-adulto-f.png';
            }
            else if(idade > 50){
                img.src = 'foto-idoso-f.png';
            }
        }
        res.style.textAlign = 'center';
        res.innerHTML = `Detectamos ${genero} de ${idade} anos.`;
        res.appendChild(img);

    }
}