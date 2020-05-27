const registerMod = () => {
    const model = $("#form_mod").serializeObject()
    if (model.nome && model.mensalidade) {
        ajaxPost('/modalidade/index.php?action=criar_mod', model)
            .then((res) => {
                if (res.status) {
                    alert("Modalidade cadastrada com sucesso...")
                    window.location.href = '/modalidades'
                } else if (res.validator && !res.status) {
                    alert("Este modalidade já existe!")
                }
            })
            .catch((err) => {
                console.log(err)
            })
    } else {
        alert("Por favor preencha todos os dados!")
    }
}

const removerMod = (id) => {
    if (confirm("Deseja apagar essa modalidade ?")) {
        ajaxGet(`/modalidade/index.php?action=remover_mod&id=${id}`)
            .then((res) => {
                if (res.status) {
                    window.location.reload()
                }
            }).catch((err) => {
                console.log(err)
            })
    }
}