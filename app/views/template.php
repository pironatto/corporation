<!DOCTYPE html>
<html lang="pt-br">
<head>
    <base href="/corporation/" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corporation</title>
    <link rel="stylesheet" href="public\assets\css\bootstrap.min.css." />
    <link rel="stylesheet" href="public\assets\css\site.css"/>
    </head>    
<body>
    <header>
    <?php       
        if($nomeView != 'user/login' && $nomeView!= 'user/cadastro'){
            include('header.php');           
        }
        ?>

    </header>
    <div class="container">
        <main role="main" class="pb-3">
           <?php 
            $this->CarregarView($nomeView,$dadosModel);
           ?>
        </main>
    </div>

    <footer>
    <?php include('footer.php')?>
    </footer>
    <script src="~/public/assets/js/jquery.min.js"></script>
    <script src="~/public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="~/public/assets/js/site.js" asp-append-version="true"></script>
</body>
</html>
