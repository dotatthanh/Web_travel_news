<div class="card">
    <div class="card-body">

        <h4 class="card-title">Thông tin cơ bản</h4>
        <p class="card-title-desc">Điền tất cả thông tin bên dưới</p>
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name_vi">Tên danh mục (Tiếng Việt) <span class="text-danger">*</span></label>
                    <input id="name_vi" name="name_vi" type="text" class="form-control" placeholder="Tên danh mục (Tiếng Việt)" value="{{ old('name_vi', $data_edit->name_vi ?? '') }}">
                    {!! $errors->first('name_vi', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name_en">Tên danh mục (Tiếng Anh) <span class="text-danger">*</span></label>
                    <input id="name_en" name="name_en" type="text" class="form-control" placeholder="Tên danh mục (Tiếng Anh)" value="{{ old('name_en', $data_edit->name_en ?? '') }}">
                    {!! $errors->first('name_en', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name_ja">Tên danh mục (Tiếng Nhật) <span class="text-danger">*</span></label>
                    <input id="name_ja" name="name_ja" type="text" class="form-control" placeholder="Tên danh mục (Tiếng Nhật)" value="{{ old('name_ja', $data_edit->name_ja ?? '') }}">
                    {!! $errors->first('name_ja', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="type">Loại danh mục <span class="text-danger">*</span></label>
                    <select class="form-control select2" name="type">
                        <option value="">Chọn loại danh mục</option>
                        <option value="0" {{ isset($data_edit->type) && $data_edit->type == 0 ? 'selected' : '' }}>Tin tức ẩm thực</option>
                        <option value="1" {{ isset($data_edit->type) && $data_edit->type == 1 ? 'selected' : '' }}>Tin tức du lịch</option>
                    </select>
                    {!! $errors->first('type', '<span class="error">:message</span>') !!}
                </div>
            </div>

        </div>
        
        <div>
            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Lưu lại</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary waves-effect">Quay lại</a>
        </div>
    </div>
</div>