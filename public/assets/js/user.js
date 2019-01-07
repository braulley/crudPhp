window.onload = function () {

    var data_form = document.querySelector("#data_form");

    data_form.onsubmit = function (event) {
        event.preventDefault();

        var f = new FormData(data_form);

        xmlHttpPost('ajax/login',function () {

            success(function() { 
                var response = xhttp.responseText;

                if(response) {
                    var res = JSON.parse(response);
                    alert('Logado !!!');
                    console.log('res.id',res.id);
                    localStorage.setItem('id_user',res.id);
                    window.location.href = "http://localhost/php/public/list.php";
                }
                
                if(response == 'naoachado'){
                    alert('Erro ao logar, contate o adminsitrador');
                }

            });
        }, f);
    };

}