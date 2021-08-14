@extends('admin.layouts.master')
@section('title','Thêm trang mới')
@section('addcss')
    <style>
        input[type=file] {
            position: relative !important;
            opacity:  1 !important;
            border: none !important;
        }
    </style>
@endsection
@section('content')
    <section class="content">
        {{--     {{ Breadcrumbs::render('addpage') }} --}}
        <div class="clearfix"></div>
        <form method="POST" action="{{route('system_admin.products.store')}}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors->all())
                <div class="note note-danger"><p>Vui lòng điền đầy đủ thông tin</p></div>
            @else
                <div class="note note-success"><p>Bạn đang tạo trang mới</p></div>
            @endif
            <div class="row">
                <div class="col-md-9">
                    <div class="tabbable-custom">
                        <ul class="nav nav-tabs ">
                            <li class="nav-item">
                                <a href="#tab_detail" class="nav-link active show" data-toggle="tab">Chi tiết trang</a>
                            </li>
                        </ul><!-- end.nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab_detail">
                                <div class="form-group">
                                    <label for="title" class="control-label required">Tên sản phẩm</label>
                                    <input class="form-control" placeholder="Nhập tên sản phẩm" data-counter="120"
                                           name="title" type="text" id="title" value="{{ old('title') }}">
                                    @if ($errors->first('title'))
                                        <div class="error">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="title" class="control-label required">Ngày nhập</label>
                                    <input class="form-control" placeholder="Ngày nhập" data-counter="120"
                                           name="date" type="text" id="date" value="{{ old('date') }}"
                                           autocomplete="off">
                                    @if ($errors->first('date'))
                                        <div class="error">{{ $errors->first('date') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="title" class="control-label required">Giá tiền</label>
                                    <input class="form-control" placeholder="Nhập giá tiền" data-counter="120"
                                           name="price" type="text" value="{{ old('price') }}"
                                           autocomplete="off">
                                    @if ($errors->first('price'))
                                        <div class="error">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="link" class="control-label required">Số lượng</label>
                                    <input type="text" name="quantity" class="form-control" placeholder="Nhập số lượng" data-counter="120" value="{{ old('quantity') }}">
                                </div>
                            </div>
                        </div><!-- end.tab-content -->
                    </div>
                </div>
                <div class="col-md-3 right-sidebar">
                    <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                        <div class="widget-title">
                            <h4><span>Tạo thành viên</span></h4>
                        </div>
                        <div class="widget-body">
                            <div class="btn-set">
                                <button type="submit" name="submit" value="save" class="btn btn-info">
                                    <i class="fa fa-save"></i> Lưu
                                </button>
                                <button type="submit" name="submit" value="apply" class="btn btn-success">
                                    <i class="fa fa-check-circle"></i> Lưu và Sửa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="status" class="control-label required">Trạng thái</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="ui-select-wrapper">
                                <select class="form-control ui-select ui-select" id="status" name="status">
                                    <option value="1" selected="selected">Còn hàng</option>
                                    <option value="0">Hết hàng</option>
                                </select>
                                @if ($errors->first('status'))
                                    <div class="error">{{ $errors->first('status') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="image" class="control-label">Hình ảnh</label></h4>
                        </div>
                        <div class="widget-body">
                            <input type="file" name="img">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@stop
@section('addjs')
    <script src="vendor/laravel-filemanager/js/lfm.js"></script>
    <script type="text/javascript">
        $('#lfm').filemanager('image');
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        $('#date').datepicker({
            format: 'yyyy-mm-dd',
        });
        var i = 1;
        $(document).on('click', '.add_submedia', function () {
            i++;
            var x = i - 1;
            $('#button_add_'+x).css('display','none');
            $('#button_delete_'+x).css('display','none');
            $('div#tab_detail').append('<div class="form-group" id="form_group_'+i+'"> <label for=""  class="control-label required">Các bài viết đi kèm('+i+')</label><input type="text" name="subtitle[]" class="form-control"> <br> <label for=""  class="control-label required">Link bài viết</label> <input type="text" name="link[]" class="form-control" placeholder="Nhập tên trang"></div><button class="add_submedia" type="button" id="button_add_'+i+'"> + </button> <button type="button" class="delete_submedia" id="button_delete_'+i+'" data-icon="'+i+'">-</button> ');
        });
        $(document).on('click','.delete_submedia',function () {
            var  u = $(this).attr("data-icon")
            $('#button_delete_'+u).css('display','none');
            $('#form_group_'+u+'').remove();
        });
    </script>
@stop
