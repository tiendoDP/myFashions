@extends('client.layouts.app')

@section('styles')
    
@endsection

@section('content')
<section style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0 p-4" style="background-color: white; border-radius: 8px;">
            <h3 class="text-center">Change Password *</h3>
            <form id="formChangePassword" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-2">
                  <label for="oldPassword" class="form-label">Old password *</label>
                  <input type="password" name="oldPassword" class="form-control rounded" id="oldPassword">
                  @error('oldPassword')
                    <small class="form-text text-muted">
                        <div style="color:red">{{$message}}</div>
                    </small>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="newPassword" class="form-label">New Password *</label>
                  <input type="password" name="newPassword" class="form-control rounded" id="newPassword">
                  @error('newPassword')
                    <small class="form-text text-muted">
                        <div style="color:red">{{$message}}</div>
                    </small>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="repeatPassword" class="form-label">Repeat Password</label>
                    <input type="password" name="repeatPassword" class="form-control rounded" id="repeatPassword">
                    @error('repeatPassword')
                    <small class="form-text text-muted">
                        <div style="color:red">{{$message}}</div>
                    </small>
                    @enderror
                </div>
                
                <button type="button" id="submitButton" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </section> 
@endsection


@section('scripts')

<script>
    $(document).ready(function() {
        $('#submitButton').on('click', function() {
            const confirmed = confirm("Are you sure you want to change password?");
            if (confirmed) {
                $('#formChangePassword').submit();
            }
        });
    })
    
</script>

@endsection