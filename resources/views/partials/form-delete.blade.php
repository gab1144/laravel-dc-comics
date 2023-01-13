<form
    onsubmit="return confirm('Confermi l\'eliminazione di: {{$title}}')"
    class="d-inline" action="{{route('comics.destroy', $id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger " title="delete"><i class="fa-solid fa-trash"></i></button>
</form>
