<div class="page-title_all">
    <div class="row mb-2">
        <div class="col-md-3">
            <button class="btn btn-success btn-block">
                Nova Modalidade
            </button>
        </div>
    </div>

    <form action="/modalidades" method="GET">
        <div class="row">
            <div class="form-group col-md-10">
                <input type="search" name="term" id="term" placeholder="Buscar..." class="form-control">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Buscar</button>
            </div>
        </div>
    </form>

</div>

<div class="modalidades">
    <?php foreach ($modalidades as $key => $value) : ?>
        <div class="modalidade">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdztvS5qIuO_vj9DGr1bTbEkJkYVkAgX9V5STsuP9zJsXrYEN4&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="title">Nome: <strong><?= $value->nome; ?></strong></h5>
                    <h5 class="title">Mensalidade: <strong>R$ <?= $value->mensalidade; ?></strong></h5>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-warning btn-block">Editar</button>
                        </div>
                        <div class="col-md-6">

                            <button class="btn btn-danger btn-block">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>