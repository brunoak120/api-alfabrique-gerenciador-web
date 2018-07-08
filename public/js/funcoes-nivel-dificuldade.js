//FUNCOES DE BUSCA DINAMICA
$('#botao_busca_dificuldades_usuarios').on('click', function () {
    var url = $(this).attr('href');
    var dificuldade_usuario = $('#busca_dificuldades_usuarios').val();
    preparaBusca(url, dificuldade_usuario);
});

$("#busca_dificuldades_usuarios").on('keyup', function (e) {
    if (e.keyCode == 13) {
        var url = $(this).attr('href');
        var dificuldade_usuario = $('#busca_dificuldades_usuarios').val();
        preparaBusca(url, dificuldade_usuario);
    }
});

$('body').on('click', '.pagination a', function(e) {
    e.preventDefault();

    var url = $(this).attr('href');
    var dificuldade_usuario = $('#busca_dificuldades_usuarios').val();
    preparaBusca(url, dificuldade_usuario);
});

function preparaBusca(url, dificuldade_usuario){
    buscarDificuldadeUsuario(url, dificuldade_usuario);
    window.history.pushState("", "", url);
}

function buscarDificuldadeUsuario(url, dificuldade_usuario) {
    $.ajax({
        url : url,
        data: {
            dificuldade_usuario: dificuldade_usuario
        }
    }).done(function (data) {
        $('#dificuldades_usuarios_renderiza').html(data);
        $('#busca_dificuldades_usuarios').val(dificuldade_usuario);
    }).fail(function (data) {
        console.log(data);
    });
}