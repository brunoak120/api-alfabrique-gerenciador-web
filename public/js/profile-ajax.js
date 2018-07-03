$('#estado').change(function () {
    var uf = $(this).val();
    buscaCidadesAtualiza(uf);
});

$('#cep').blur(function () {
    var cep = $(this).val();
    $.get('/admin/profile/get-dados-cep/' + cep, function (resultado) {
        console.log(resultado);
        $('#logradouro').val(resultado.logradouro);
        $('#bairro').val(resultado.bairro);
        $('#estado option[value=' + resultado.estado_id + ']').attr('selected','selected');
        buscaCidadesAtualiza(resultado.estado_id);
        $('#cidade option[value=' + resultado.cidade_id + ']').attr('selected','selected');
    });
});

function atualizaCidades(resultado) {
    $('#cidade').empty();
    $.each(resultado, function (key, value) {
        $('#cidade').append('<option value="' + value.id + '">' + value.nome + '</option>');
    });
}

function buscaCidadesAtualiza(uf) {
    $.get('/admin/profile/get-cidades/' + uf, function (busca) {
        atualizaCidades(busca);
    });
}