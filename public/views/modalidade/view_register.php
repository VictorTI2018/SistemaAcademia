<div class="page-title_form">
    <p class="page-subtitle_form">Nova Modalidade</p>
</div>
<div class="container">
    <form id="form_mod">
        <div class="row">
            <div class="col-md-7 form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome da modalidade..." class="form-control">
            </div>
            <div class="col-md-5">
                <label for="mensalidade">Mensalidade:</label>
                <input type="number" name="mensalidade" id="mensalidade" placeholder="R$" step="0.10" class="form-control">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-3 offset-md-3">
            <button class="btn btn-danger btn-block">Limpar</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success btn-block" onclick="registerMod()">Cadastrar</button>
        </div>
    </div>
</div>