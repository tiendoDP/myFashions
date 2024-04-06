<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                {{-- <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form style="margin: 8px 12px">
                    {{-- <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name" />
                    </div> --}}
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="fileInput" class="fileLabel">
                            <div><i class="fa-solid fa-camera"></i></div>
                        </label>
                        <input type="file" id="fileInput" class="fileInput" multiple />
                    </div>
                
                    <div class="imagePreview carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Các ảnh sẽ được thêm vào đây -->
                        </div>
                        <a class="carousel-control-prev d-none" href=".imagePreview" role="button" data-slide="prev">
                            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                            <span class="icon"><i class="fa-solid fa-angle-left"></i></span>
                        </a>
                        <a class="carousel-control-next d-none" href=".imagePreview" role="button" data-slide="next">
                            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                            <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                        </a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
