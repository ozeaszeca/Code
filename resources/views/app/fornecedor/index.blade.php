<h3>Fornecedor</h3>

@php
//php puro aqui	
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
	<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
	<h3>Existem varios fornecedores cadastrados</h3>
@else
	<h3>Ainda não existem fornecedores cadastrados</h3>
@endif

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
	Fornecedor inativo!
@endif
<br>
<!-- se o retorno da condicao for false -->
@unless($fornecedores[0]['status'] == 'S')
	Fornecedor inativo
@endunless
<br>

<!-- Verifica se existe essa variavel e se está se definida -->
@isset($fornecedores)
	CNPJ : {{ $fornecedores[0]['cnpj'] ?? 'dado não foi preenchido' }}
	<!-- ?? o operador condicional default
	$variavel testada não tiver definita (isset)
	ou
	$variavel testada possuir o valor null
	  -->
@endisset
<br>
@empty($fornecedores[0]['cnpj'])
	$fornecedores[0]['cnpj'] está vazia!	
@endempty
