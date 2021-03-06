@extends('admin.layouts.master')
@section('title', 'Thêm trang mới')
@section('addcss')
    <style>
        .border-tab-pane {
            border: 1px solid #ccc;
            padding: 15px;
            margin-top: 40px;
            position: relative;
        }

        .border-tab-pane a {
            position: absolute;
            top: -15px;
            right: -15px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            color: #ccc;
            background: #fff;
            border-radius: 50%;
        }

        input[type='file'] {
            display: block !important;
            position: relative !important;
            opacity: 1 !important;
            border: none !important;
        }
        input[type='file'].swal2-file{
            display: none !important;
        }
        .d-flex-add-food {
            display: flex;
            justify-content: flex-end;
        }

    </style>
@endsection
@section('content')
    <section class="content">
        {{-- {{ Breadcrumbs::render('addpage') }} --}}
        <div class="clearfix"></div>
        <form method="POST" action="{{ route('system_admin.foods.update', ['id' => $food->id]) }}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors->all())
                <div class="note note-danger">
                    <p>Vui lòng điền đầy đủ thông tin</p>
                </div>
            @else
                <div class="note note-success">
                    <p>Bạn đang tạo trang mới</p>
                </div>
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
                                    <label for="title" class="control-label required">Tên</label>
                                    <input class="form-control" placeholder="Nhập tên trang" data-counter="120" name="title"
                                        type="text" id="title" value="{{ $food->name }}">
                                    @if ($errors->first('title'))
                                        <div class="error">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select name="menu_id" class="form-control" id="">
                                        @foreach ($menus as $menu)
                                            <option value="{{ $menu->id }}"
                                                {{ $menu->id == $food->menu_id ? 'selected' : '' }}>{{ $menu->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>


                        </div><!-- end.tab-content -->
                    </div>
                </div>
                <div class="col-md-3 right-sidebar">
                    <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                        <div class="widget-title">
                            <h4><span>Tạo dịch vụ</span></h4>
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
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="image" class="control-label">Hình ảnh</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="image-box">
                                    @if ($food->image)
                                        <input id="thumbnail" type="hidden" name="thumbnail" value="{{ $food->image }}"
                                            class="image-data">
                                        <div class="preview-image-wrapper ">
                                            <img id="holder" class="preview_image" src="{{ $food->image }}" type="text"
                                                name="filepath" alt="preview image">
                                            <a class="btn_remove_image" title="Xoá ảnh">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    @else
                                        <input id="thumbnail" type="hidden" name="thumbnail" value="" class="image-data">
                                        <div class="preview-image-wrapper ">
                                            <img id="holder" class="preview_image" src="{{ asset('images/placeholder.png') }}"
                                                type="text" name="filepath" alt="preview image">
                                            <a class="btn_remove_image" title="Xoá ảnh">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    @endif

                                    <div class="image-box-actions">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Chọn hình ảnh
                                        </a>
                                    </div>
                                    @if ($errors->first('thumbnail'))
                                        <div class="error">{{ $errors->first('thumbnail') }}</div>
                                    @endif
                                </div>
                            </div>
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
        })
        $(document).ready(function() {
            let key = 0;
            $('.btn-add-food').on('click', function() {
                key += 1;
                $('.tab-content').append('<div class="tab-pane active show border-tab-pane div-' + key +
                    '" id="tab_detail"><a href="javascript:void(0)" class="btn-delete-food" key-button="' +
                    key +
                    '"><i class="fa fa-times"></i></a><div class="form-group"><label for="" class="control-label required">Tên Món</label> <input type="text" class="form-control" data-counter="120" name="name_sub_food[]"></div><div class="form-group"><label for="" class="control-label required">Ảnh Món</label><input type="file" class="form-control" data-counter="120" name="img_sub_food[]"></div><div class="form-group"><label for="" class="control-label required">Mô tả</label> <textarea class="form-control" name="description[]" rows="4"> </textarea></div></div>'
                );
            })

            $(document).on('click', '.btn-delete-food', function() {
                let dt = $(this).attr('key-button');
                $('.div-' + dt).remove();
            })


            $(document).ready(function() {
                $('.deleteImgSubFood').on('click', function() {
                    var post_id = $(this).attr('data-id');
                    destroy(post_id, '{{ route('admin.deleteImg') }}',
                        '{{ route('system_admin.foods.edit', ['id' => $food->id]) }}',
                        "Bạn muốn xóa ảnh này này!");
                });
            });
        })
    </script>
@stop
