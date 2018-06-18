function removeCategoria(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/admin/categorias/delete",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Categoria removida com sucesso", "", "success").then(function (value) {
                location.reload();
            });
        } else {
            swal("Não foi possivel remover a categoria", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover a categoria", "", "error");
    })
}

/**
 * @description listener that gets action to remove a category
 */
$(document).on("click", ".removeCategoria", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover essa categoria?",
        text: "Cuidado! Quando deletado a categoria, todas as palavras relacionadas a ela também serão removidas!",
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
            removeCategoria(id);
        }
    });
});