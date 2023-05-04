<tbody>
@php($i = 1)
@foreach($images as $image)
<tr id="row{{$image->id}}">
<td> {{ $i++}} </td>
<td> <img src="/storage/{{$image->url}}" style="width: 60px; height: 50px;"> </td>

<td>
    <a href="/about_images/edit/{{$image->id}}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
    <a href="javascript:void(0);" wire:click="destroy({{$image->id}})" class="btn btn-info sm" title="Delete Data">  <i class="fas fa-trash"></i> </a>    
</td>

</tr>
@endforeach

</tbody>
