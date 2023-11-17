<div class="modal fade text-left" id="show-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Topic : {{ $item->titre }} </h3>
                <h4>Adress : {{ $item->adresse }} | Email : {{ $item->email }}</h4>
                <p>Message :{{ $item->description }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>
