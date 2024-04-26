@extends('admin.layouts.app')
@section('styles')
<style>
.preview-image {
    max-width: 100px; /* Đảm bảo hình ảnh không quá rộng */
    max-height: 100px; /* Đảm bảo hình ảnh không quá cao */
    margin-right: 10px; /* Khoảng cách giữa các hình ảnh */
}

.preview-single-image {
    max-width: 200px; /* Đảm bảo ảnh không quá rộng */
    max-height: 200px; /* Đảm bảo ảnh không quá cao */
}
</style>
@endsection


@section('content')

<div class="content-wrapper">
    <div class="p-3 d-flex justify-content-between align-items-center">
        <p class="h2">Add new Product</p>
        <a href="{{url('admin/product/list')}}" class="btn btn-primary">Back</a>
    </div>
    <form class="m-4" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Name">
            @error('name')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" placeholder="Description" >{{old('description')}}</textarea>
            @error('description')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
          <label class="form-label">Image Main</label> <br>
          <input type="file" name="image" accept="image/*" id="imageMain"/>
          <div class="preview-main-image mt-2"></div>
          @error('image')
              <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
              </small>
          @enderror
        </div>
        <div class="form-group">
          <label class="form-label">Images</label> <br>
          <input type="file" name="images[]" accept="image/*" id="imageInput" multiple/>
          <div class="preview-images mt-2"></div> <!-- Đây là nơi để hiển thị trước các hình ảnh -->
          @error('images')
              <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
              </small>
          @enderror
        </div>
        <div class="form-group">
          <label>Size</label> </br>
          @foreach($sizes as $size)
          <label class="m-2">{{$size->name}}
            <input type="checkbox" name="sizes[]" checked value="{{$size->id}}"/>
          </label>
          @endforeach
          @error('sizes')
            <small class="form-text text-muted">
              <div style="color:red">{{$message}}</div>
            </small>
          @enderror
        </div>
      
        <div class="form-group">
          <label>Color</label> </br>
          @foreach($colors as $color)
          <label class="m-2">{{$color->name}}
            <input type="checkbox" name="colors[]" checked value="{{$color->id}}"/>
          </label>
          @endforeach
          @error('colors')
            <small class="form-text text-muted">
              <div style="color:red">{{$message}}</div>
            </small>
          @enderror
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id" >
                @foreach($getRecord_Category as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
            @error('category_id')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
          <label>Sex</label>
          <select class="form-control" name="sex" >
            <option value="0">Male</option>
            <option value="1">Female</option>
          </select>
      </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" value="{{old('quantity')}}" name="quantity" placeholder="Quantity">
            @error('quantity')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" value="{{old('price')}}" name="price" placeholder="Price">
            @error('price')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
          <label>Discount</label>
          <input type="text" class="form-control" value="{{old('discount')}}" name="discount" placeholder="Discount">
          @error('discount')
            <small class="form-text text-muted">
              <div style="color:red">{{$message}}</div>
            </small>
          @enderror
      </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="0" value="{{(old('email') == 0) ? 'selected' : ''}}">Active</option>
                <option value="1" value="{{(old('email') == 1) ? 'selected' : ''}}">Inactive</option>
            </select>
            <small class="form-text text-muted"></small>
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
    
</div>

@endsection

@section('scripts')
  <script>
    //Image main preview
    document.getElementById('imageMain').addEventListener('change', function(event) {
    var previewContainer = document.querySelector('.preview-main-image');
    previewContainer.innerHTML = ''; // Xóa bỏ tất cả các ảnh hiện tại trong container

    var file = event.target.files[0]; // Chỉ lấy ảnh đầu tiên nếu người dùng chọn nhiều ảnh

    var reader = new FileReader();
    reader.onload = function(e) {
        var imgElement = document.createElement('img');
        imgElement.src = e.target.result;
        imgElement.classList.add('preview-single-image');
        previewContainer.appendChild(imgElement); // Thêm ảnh vào container
    }

    reader.readAsDataURL(file); // Đọc dữ liệu của file hình ảnh
});

    //Images preview
    document.getElementById('imageInput').addEventListener('change', function(event) {
    var previewContainer = document.querySelector('.preview-images');
    previewContainer.innerHTML = ''; // Xóa bỏ tất cả các hình ảnh hiện tại trong container

    var files = event.target.files;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function(e) {
            var imgElement = document.createElement('img');
            imgElement.src = e.target.result;
            imgElement.classList.add('preview-image');
            previewContainer.appendChild(imgElement); // Thêm hình ảnh vào container
        }

        reader.readAsDataURL(file); // Đọc dữ liệu của file hình ảnh
    }
});
</script>

@endsection