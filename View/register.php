<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>FlexForce Gym</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .input-group-addon {
            cursor: pointer;
        }

        hr {
            border: 0;
            height: 3px;
            background-color: #000000; /* Cor de destaque preto */
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar justify-content-center py-0">
    <img src="./Images/logo1.jpg" width="256" height="128" alt="Logo da academia">
</div>
<hr>
<div class="container col-6 py-2">
    <h1 class="text-center">Painel de Login</h1>
    <form method="POST">
        <div class="form-group py-2">
            <label for="name">Nome completo:</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="dob">Data de Nascimento:</label>
            <input type="date" class="form-control" id="dob">
        </div>
        <div class="form-group">
            <label for="role">Cargo:</label>
            <select class="form-control" id="role">
                <option value="1">Instrutor</option>
                <option value="2">Recepcionista</option>
                <option value="3">Gerente</option>
                <option value="4">Limpeza</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password">
                <div class="input-group-append">
                    <span class="input-group-text input-group-addon" onclick="togglePasswordVisibility()">
                        <i id="togglePasswordIcon" class="fa fa-eye" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
        <p>Já possui registro? <a href="login.php">Clique aqui</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<footer class="footer fixed-bottom text-right">
    <div class="container">
        <span class="text-muted">© 2024 FlexForce Gym. Todos os direitos reservados.</span>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var togglePasswordIcon = document.getElementById("togglePasswordIcon");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordIcon.className = "fa fa-eye-slash";
        } else {
            passwordInput.type = "password";
            togglePasswordIcon.className = "fa fa-eye";
        }
    }
</script>
</body>
</html>
