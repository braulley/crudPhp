<!DOCTYPE <!DOCTYPE html>
<?php
    session_start();
    if(isset($_GET['user']) && ($_GET['user'] != '' ) && ($_GET['user'] != NULL )  ){
        $user  = json_decode($_GET['user']);
        var_dump($user);
    }
        

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

    <div class="container">
    <form id="form-update">
    <input type="text" style="display:none;"  class="form-control" name="name" aria-describedby="nameHelp" placeholder="Nome"
                     required 
                     value=<?php if($user->id) {echo $user->id ;} ?>>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <label for="exampleInputName">Nome</label>
                    <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Nome"
                     required 
                     value=<?php if($user->name) {echo $user->name ;} ?>>
                    <small id="nameHelp" class="form-text text-muted">Preeencha o nome completo.</small>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="exampleInputEmail">CPF ou CNPJ</label>
                    <input type="text" class="form-control" name="registerCode"  placeholder="CPF" 
                    required value= <?php if($user->name) {echo $user->registerCode ;}?> >
                </div>
            </div> 
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="exampleInputEmail">Idade</label>
                    <input type="number" class="form-control" name="age"  placeholder="Idade" 
                    required value=<?php if($user->age) {echo $user->age ;}  ?>>
                </div>
            </div>
            <div class="col-sm-3">            
                <div class="form-group">
                    <label for="inputState">Tipo de Pessoa</label>
                    <select name="kind_person" id="inputState" class="form-control" 
                    required 
                    value= <?php if($user->kind_person) {echo $user->kind_person ;} ?>>
                        <option selected></option>
                        <option value="pessoa_fisica">Pessoa Física</option>
                        <option value="pessoa_juridica">Pessoa Jurídica </option>
                    </select>
                </div>
            </div> 
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="exampleInputEmail">Ativo</label>
                    <input type="text" class="form-control" name="active"  placeholder="Ativo" 
                    required 
                    value= <?php if($user->active) {echo $user->active ;} ?>>
>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="exampleInputEmail">Cliente Desde:</label>
                    <input type="date" class="form-control" name="client_at"  placeholder="Cliente desde :" 
                    required
                    value= <?php  if($user->client_at) {echo $user->client_at ;}  ?>>
                </div>
            </div>  
            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Atualizar</button>                           
                </div>
            </div>                                         
        </div>
        </form>
    </div>   

    <script type="text/javascript" src="assets/js/clientUpdate.js"></script>
    <script type="text/javascript" src="assets/js/xhttp.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>