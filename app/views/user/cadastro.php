<h1>Crie sua conta !</h1>

<hr />
<div class="row">
    <div class="col-md-4">
        <form asp-action="Create">
            <div asp-validation-summary="ModelOnly" class="text-danger"></div>
            <div class="form-group">
                <label>Nome</label>
                <input type="test" id="user" name="nome" class="form-control" />
                <span asp-validation-for="Nome" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input asp-for="Email" class="form-control" />
                <span asp-validation-for="Email" class="text-danger"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Criar" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <a href="home">Voltar à página Inicial</a>
</div>
