<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal"
data-bs-target="#deleteModal-{{ $author->id }}">
Delete
</button>
<!-- Modal -->
<div class="modal fade" id="deleteModal-{{ $author->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Delete Confirmation</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"
aria-label="Close"></button>
</div>
<div class="modal-body">Are you sure you want to delete this author?
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bsdismiss="modal">Close</button>
<form action="{{ route('authors.destroy', $author->id) }}"
method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
</div></div>
</div>
