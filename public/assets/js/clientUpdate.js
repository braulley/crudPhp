
window.onload = function () {

    var form_update= document.querySelector("#form-update");


            

    form_update.onsubmit = function (event) {
        event.preventDefault();

        var formData = new FormData(form_update);
        console.log('sasasasa',formData);
        let d = new Date();
        formData.append('updated_at',d);
            
       
        xmlHttpPost('ajax/updateClient', function (){
            console.log(xhttp.responseText);
            success(function(){
                if(xhttp.responseText = "sucesso"){
                    alert('Atualizado !!!');
                    window.location.href = "http://localhost/php/public/list.php";
                }else {
                    alert('Nenhuma Alteração');
                }
                console.log(xhttp.responseText);
            });
        },formData );

        
    }
}
