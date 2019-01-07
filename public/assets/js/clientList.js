
 function update (id) {
    
    xmlHttpPost('ajax/getClientById', function() {

        
        success(function (){
            var user = xhttp.responseText;

            console.log('user', user);
            window.location.href="http://localhost/php/public/update.php?user="+user;
            console.log(xhttp.responseText);
        });        
    }, id);
}

function _delete(id){
    

    xmlHttpPost('ajax/delete', function() {

        
        success(function (){
            var user = xhttp.responseText;

            console.log('user', user);
            //window.location.href="http://localhost/php/public/list.php";
            console.log(xhttp.responseText);
        });        
    },id );

}
window.onload = function () {

var div_user = document.querySelector("#div_user");
var new_button = document.querySelector("#new_button");
var update_button = document.querySelector("#update-button");

xmlHttpGet('ajax/getClient', function() {

    success(function() {
        console.log('saasas',xhttp);
        var users = JSON.parse(xhttp.responseText);
        users = JSON.parse(users);
        console.log(users);
        var table = `<table class='table table-stripped'>`;
        table+= `<thead><tr><td>Id</td><td>Nome</td><td
        >Cpf</td><td>Ativo</td><td></td> </tr></thead>`;
        table+= `<tbody>`;
                    
        users.forEach(element => {
            table+=`<tr>`;
            table+=`<td>${element.id}</td>`;
            table+=`<td>${element.name}</td>`;
            table+=`<td>${element.registerCode}</td>`;
            table+=`<td>${element.active}</td>`;
            table+=`<td><button type="button" onclick="update(${element.id})" class="btn btn-primary">Atualizar</button>
            <button type="button" onclick="_delete(${element.id})" class="btn btn-danger">Apagar</button>
            </td>
            `;
            table+=`</tr>`;                    
        });                 
        table+=`</tbody>`;
        table+=`</table>`;

        div_user.innerHTML = table;
    });

    error(function() {
        console.log('Erro no Servidor !!!');
    });


});

new_button.onclick = function(){
    window.location.href = "http://localhost/php/public/insert.php";
    alert('Cadastrado');
};

function update(id) {
    alert(11);
    xmlHttpPost('ajax/getClientById',function(){

        console.log(xhttp.responseText);
    }, id);
}


    /*var form_insert = document.querySelector("#form_insert");

    form_insert.onsubmit = function (event) {
        event.preventDefault();

        var f = new FormData(form_insert);

        xmlHttpPost('ajax/insertClient', function (){

            success(function(){
                if(xhttp.responseText = "sucesso"){
                    
                }
                console.log(xhttp.responseText);
            });
        }, f);

        
    }*/
}