@extends('master-admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <h1 style="color: red" class="card-header">ADD PRODUCT</h1>
            <div class="card-body">
                <form action="{!! route('addproduct') !!}"  method="post" data-parsley-validate="">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label for="typeproduct_id">typeproduct_id</label>
                        <input id="typeproduct_id" type="text" name="typeproduct_id" data-parsley-trigger="change" required="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="ten"> Tên </label>
                        <input id="ten" type="text" name="ten" data-parsley-trigger="change" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gia"> Giá </label>
                        <input id="gia" type="text" name="gia" data-parsley-trigger="change" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="moTa"> Mô tả </label>
                        <input id="moTa" type="text" name="moTa" data-parsley-trigger="change" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="linkAnh"> Link Ảnh </label>
                        <input id="linkAnh" type="text" name="linkAnh" data-parsley-trigger="change" required="" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-right">
                                <button style="border-radius: 200px; width: 200px" type="submit" class="btn btn-space btn-primary">Submit</button>
                            </p>
                        </div>
                </form>
                        <div style="float: right;" class="col-6">
                            <button style="border-radius: 200px" type="button" onclick="reload()" class="btn btn-space btn-secondary">Cancel</button>
                            <script>
                                function reload(){
                                    location.reload();
                                }
                            </script>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
