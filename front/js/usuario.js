//Usuário - Início
    function editar_registro1(userid){
        //oculta botão
        document.getElementById("botao_editar1").style.display= "none";
        //apresentar botão salvar
        document.getElementById("botao_salvar1").style.display= "";
        //pega dados
        var nome = document.getElementById("valor_nome")

        //altera campo
        nome.innerHTML = "<input class='form_edi' type='text' id='nome_text" + "'value='" + nome.innerHTML+ "'>";
    }

    async function salvar_registro1(userid){
        var nome_valor = document.getElementById("nome_text").value;
        console.log(nome_valor);

        document.getElementById("valor_nome").innerHTML = nome_valor;

        var dadosForm= "userid=" + userid + "&nome=" + nome_valor;
        
        const dados = await fetch("editar.php", {
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: dadosForm
        });

        const resposta = await dados.json();
        console.log(resposta);

        if(!resposta['status']){
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
        }else{
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];

            removerMsgAlerta();
            //mostra botão editar
            document.getElementById("botao_editar1").style.display= "";
            //oculta botão salvar
            document.getElementById("botao_salvar1").style.display= "none";
        }
    }
//Usuário - Final

//CPF - Início
    function editar_registro2(userid){
        //oculta botão
        document.getElementById("botao_editar2").style.display= "none";
        //apresentar botão salvar
        document.getElementById("botao_salvar2").style.display= "";
        //pega dados
        var cpf = document.getElementById("valor_cpf")

        //altera campo
        cpf.innerHTML = "<input class='form_edi' type='text' id='cpf_text" + "'value='" + cpf.innerHTML+ "'>";
    }

    async function salvar_registro2(userid){
        var cpf_valor = document.getElementById("cpf_text").value;
        console.log(cpf_valor);

        document.getElementById("valor_cpf").innerHTML = cpf_valor;

        var dadosForm= "userid=" + userid + "&cpf=" + cpf_valor;
        
        const dados = await fetch("editar2.php", {
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: dadosForm
        });

        const resposta = await dados.json();
        console.log(resposta);
        if(!resposta['status']){
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
        }else{
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
            removerMsgAlerta();
            //mostra botão editar
            document.getElementById("botao_editar2").style.display= "";
            //oculta botão salvar
            document.getElementById("botao_salvar2").style.display= "none";
        }
    }
//CPF - Final

//Email - Início
function editar_registro3(userid){
    //oculta botão
    document.getElementById("botao_editar3").style.display= "none";
    //apresentar botão salvar
    document.getElementById("botao_salvar3").style.display= "";
    //pega dados
    var email = document.getElementById("valor_email")

    //altera campo
    email.innerHTML = "<input class='form_edi' type='text' id='email_text" + "'value='" + email.innerHTML+ "'>";
}

async function salvar_registro3(userid){
    var email_valor = document.getElementById("email_text").value;
    console.log(email_valor);

    document.getElementById("valor_email").innerHTML = email_valor;

    var dadosForm= "userid=" + userid + "&email=" + email_valor;
    
    const dados = await fetch("editar3.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: dadosForm
    });

    const resposta = await dados.json();
    console.log(resposta);
    if(!resposta['status']){
        document.getElementById("msgAlerta1").innerHTML = resposta['msg'];
    }else{
        document.getElementById("msgAlerta1").innerHTML = resposta['msg'];
        removerMsgAlerta();
        //mostra botão editar
        document.getElementById("botao_editar3").style.display= "";
        //oculta botão salvar
        document.getElementById("botao_salvar3").style.display= "none";
    }
}
//Email - Final

//Telefon - Início
function editar_registro4(userid){
    //oculta botão
    document.getElementById("botao_editar4").style.display= "none";
    //apresentar botão salvar
    document.getElementById("botao_salvar4").style.display= "";
    //pega dados
    var tel = document.getElementById("valor_tel")

    //altera campo
    tel.innerHTML = "<input class='form_edi' type='text' id='tel_text" + "'value='" + tel.innerHTML+ "'>";
}

async function salvar_registro4(userid){
    var tel_valor = document.getElementById("tel_text").value;
    console.log(tel_valor);

    document.getElementById("valor_tel").innerHTML = tel_valor;

    var dadosForm= "userid=" + userid + "&tel=" + tel_valor;
    
    const dados = await fetch("editar4.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: dadosForm
    });

    const resposta = await dados.json();
    console.log(resposta);
    if(!resposta['status']){
        document.getElementById("msgAlerta1").innerHTML = resposta['msg'];
    }else{
        document.getElementById("msgAlerta1").innerHTML = resposta['msg'];
        removerMsgAlerta();
        //mostra botão editar
        document.getElementById("botao_editar4").style.display= "";
        //oculta botão salvar
        document.getElementById("botao_salvar4").style.display= "none";
    }
}
//Email - Final





























function removerMsgAlerta(){
    setTimeout(function(){
        document.getElementById("msgAlerta").innerHTML = "";
        document.getElementById("msgAlerta1").innerHTML = "";
    }, 5000);
}