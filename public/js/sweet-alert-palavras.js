function removePalavra(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/admin/palavras/delete",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Palavra removida com sucesso", "", "success").then(function (value) {
                location.reload();
            });
        } else {
            swal("Não foi possivel remover a palavra", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover a palavra", "", "error");
    })
}

/**
 * @description listener that gets action to remove a category
 */
$(document).on("click", ".removePalavra", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover essa palavra?",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Cancelar",
                visible: true,
                value: false
            },
            confirm: {
                text: "Confirmar",
                visible: true,
                value: true
            }
        }
    }).then(function (value) {
        if (value) {
            removePalavra(id);
        }
    });
});