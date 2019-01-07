
window.onload = function () {

        var form_insert = document.querySelector("#form-insert");
    

        var id_user = localStorage.getItem('id_user');        

        form_insert.onsubmit = function (event) {
            event.preventDefault();

            var f = new FormData(form_insert);
            f.append('id_user', id_user);            
           
            xmlHttpPost('ajax/insertClient', function (){
    
                success(function(){
                    if(xhttp.responseText = "sucesso"){
                        window.location.href = "http://localhost/php/public/list.php";
                    }
                    console.log(xhttp.responseText);
                });
            },f );
    
            
        }
    }