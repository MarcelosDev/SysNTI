<?php
    include 'header.php';
?> 

<body id="login" class="d-flex">
    <div id="login" class="container">
        <div id="login" class="card">
            <img id="img-logo-redonda-login" src="./img/logo-nti.jpg" class="card-img-top" alt="NTI">
            <div class="card-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="input-group col-md-15">
                                <div class="input-group-text">
                                    <img id="icon-login" src="./icon/person-fill.svg" alt="icon-username">
                                </div>
                                <input class="form-control" type="text" name="user" id="user" autocomplete="off" maxlength="140" required="required" placeholder="Usuário:">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="input-group col-md-15">
                                <div class="input-group-text">
                                    <img id="icon-login" src="./icon/lock-fill.svg" alt="icon-password">
                                </div>
                                <input class="form-control" type="password" name="password" id="password" autocomplete="off" maxlength="140" required="required" placeholder="Senha:">
                            </div>
                        </div>
                    </div>
                    <br>
                    <label class="form-check">
                        <input id="checkbox-login" type="checkbox" class="form-check-input" name="fieldc643460936f0db" checked="">
                        <span class="form-check-label">Lembrar de mim</span>
                    </label>
                    <div class="row">
                        <div class="col">
                            <div id="login" class="form-group col-md-15">
                                <button type="submit" class="btn btn-outline-success w-100">ENTRAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>