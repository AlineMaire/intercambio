<b>Arquivos cadastrados</b>
<br><br>

<ul>
@forelse($pedido->files as $file)
<li><a href="/files/{{$file->id}}">{{ $file->original_name ?? '' }} 
</a></li>
@empty
<li>Não há nenhum cadastrado</li>
@endforelse