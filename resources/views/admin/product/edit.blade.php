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
        <p class="h2">Chỉnh sửa</p>
        <a href="{{url('admin/product/list')}}" class="btn btn-primary">Hủy</a>
    </div>
    <form class="m-4" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tên</label>
            <input type="text" class="form-control" value="{{old('name', $product->name)}}" name="name" placeholder="Tên">
            @error('name')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="description" class="form-control" placeholder="Mô tả" >{{old('description', $product->description)}}</textarea>
            @error('description')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
          <label class="form-label">Hình ảnh</label> <br>
          <input type="file" name="image" accept="image/*" id="imageMain"/>
          <div class="preview-main-image mt-2"></div>
          @error('image')
              <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
              </small>
          @enderror
        </div>
        <img src="{{asset('assets/images/products/'.$product->image)}}" id="file" class="card-img-top" alt="" style="max-width: 200px">
        <input type="hidden" name="old_image" value="{{$product->image}}" />
        <div class="form-group">
          <label class="form-label">Ảnh liên quan</label> <br>
          <input type="file" name="images[]" accept="image/*" id="imageInput" multiple/>
          <div class="preview-images mt-2"></div> <!-- Đây là nơi để hiển thị trước các hình ảnh -->
          <div id="displayImageOld"></div> <!-- Đây là nơi để hiển thị trước các hình ảnh -->
          @error('images')
              <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
              </small>
          @enderror
        </div>
        <div class="form-group">
          <label>Kích cỡ</label> </br>
          @foreach($sizes as $size)
          <label class="m-2">{{$size->name}}
            <input type="checkbox" name="sizes[]" @if($product_sizes->contains('size_id', $size->id)) checked @endif value="{{$size->id}}"/>
          </label>
          @endforeach
          @error('sizes')
            <small class="form-text text-muted">
              <div style="color:red">{{$message}}</div>
            </small>
          @enderror
        </div>
        <div class="form-group">
          <label>Màu sắc</label> </br>
          @foreach($colors as $color)
          <label class="m-2">{{$color->name}}
            <input type="checkbox" name="colors[]" @if($product_colors->contains('color_id', $color->id)) checked @endif value="{{$color->id}}"/>
          </label>
          @endforeach
          @error('colors')
            <small class="form-text text-muted">
              <div style="color:red">{{$message}}</div>
            </small>
          @enderror
        </div>
        <div class="form-group">
            <label>Danh mục</label>
            <select class="form-control" name="category_id" >
                @foreach($getRecord_Category as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label>Giới tính</label>
          <select class="form-control" name="sex">
            <option value="0" {{ $product->sex == 0 ? 'selected' : '' }}>Nam</option>
            <option value="1" {{ $product->sex == 1 ? 'selected' : '' }}>Nữ</option>
          </select>
      </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="text" class="form-control" value="{{old('quantity', $product->quantity)}}" name="quantity" placeholder="Số lượng">
            @error('quantity')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="text" class="form-control" value="{{old('price', $product->price)}}" name="price" placeholder="Giá">
            @error('price')
              <small class="form-text text-muted">
                <div style="color:red">{{$message}}</div>
              </small>
            @enderror
        </div>
        <div class="form-group">
          <label>khuyễn mại</label>
          <input type="text" class="form-control" value="{{old('discount', $product->discount)}}" name="discount" placeholder="Khuyến mại">
          @error('discount')
            <small class="form-text text-muted">
              <div style="color:red">{{$message}}</div>
            </small>
          @enderror
        </div>
        <div class="form-group">
            <label>tình trạng</label>
            <select class="form-control" name="status">
                <option value="0" value="{{(old('email') == 0) ? 'selected' : ''}}">Active</option>
                <option value="1" value="{{(old('email') == 1) ? 'selected' : ''}}">Inactive</option>
            </select>
            <small class="form-text text-muted"></small>
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">Cập nhật</button>
      </form>
    
</div>

@endsection

@section('scripts')
<script>
  var productImages = {!! json_encode($product_images) !!};

  displayImage(productImages);
  function displayImage(images) {
    var displayImageOld = document.getElementById('displayImageOld');
    displayImageOld.innerHTML = ''; // Xóa bỏ tất cả các hình ảnh hiện tại trong container

    images.forEach(function(image) {
        var imgElement = document.createElement('img');
        imgElement.src = '/assets/images/products/' + image.url;
        imgElement.alt = 'Image';
        imgElement.classList.add('preview-image'); // Thêm một class cho ảnh (tuỳ chọn)
        displayImageOld.appendChild(imgElement); // Thêm ảnh vào container
    });
  }
  //Image main preview
  document.getElementById('imageMain').addEventListener('change', function(event) {
    $('#file').addClass('d-none')
    var previewContainer = document.querySelector('.preview-main-image');
    previewContainer.innerHTML = '';
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = function(e) {
        var imgElement = document.createElement('img');
        imgElement.src = e.target.result;
        imgElement.classList.add('preview-single-image');
        previewContainer.appendChild(imgElement); // Thêm ảnh vào container
    }

    reader.readAsDataURL(file);
  });

  //Images preview
  document.getElementById('imageInput').addEventListener('change', function(event) {
  $('#displayImageOld').addClass('d-none')
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