<h3>Fornecedor</h3>

{{ 'Texto de teste'  }}
<br>
<?= 'Texto de teste' ?>
<br>
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    // Para comentário de uma linha
    /*
    * Para comentário de multiplas linhas
    * */

    echo 'Texto de teste';
@endphp
