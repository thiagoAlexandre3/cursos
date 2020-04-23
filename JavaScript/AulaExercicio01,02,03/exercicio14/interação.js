function carregar(){
    var msg = window.document.getElementById('msg');
    var img = window.document.getElementById('imagem');
    var data = new Date();
    var agora = data.getHours();
    msg.innerHTML = `Agora são ${agora} hora.`;

    if(agora >=0 && agora < 12){
        img.src = 'manha.png';
        document.body.style.background = '#e2cd9f';
    }

    else if(agora >= 12 && agora<19){
        img.src = 'tarde.png';
        document.body.style.background = '#b9846f';
    }
    
    else{
        img.src = 'noite.png';
        document.body.style.background = '#515154';
    }
}

