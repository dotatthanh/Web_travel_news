<div class="card">
    <div class="card-body">

        <h4 class="card-title">Thông tin cơ bản</h4>
        <p class="card-title-desc">Điền tất cả thông tin bên dưới</p>

        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title_vi">Tiêu đề (Tiếng Việt) <span class="text-danger">*</span></label>
                    <input id="title_vi" name="title_vi" type="text" class="form-control" placeholder="Tiêu đề (Tiếng Việt)" value="{{ old('title_vi', $data_edit->title_vi ?? '') }}">
                    {!! $errors->first('title_vi', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title_en">Tiêu đề (Tiếng Anh) <span class="text-danger">*</span></label>
                    <input id="title_en" name="title_en" type="text" class="form-control" placeholder="Tiêu đề (Tiếng Anh)" value="{{ old('title_en', $data_edit->title_en ?? '') }}">
                    {!! $errors->first('title_en', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title_ja">Tiêu đề (Tiếng Nhật) <span class="text-danger">*</span></label>
                    <input id="title_ja" name="title_ja" type="text" class="form-control" placeholder="Tiêu đề (Tiếng Nhật)" value="{{ old('title_ja', $data_edit->title_ja ?? '') }}">
                    {!! $errors->first('title_ja', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="category_id">Danh mục <span class="text-danger">*</span></label>
                    <select class="form-control select2" name="category_id">
                        <option value="">Chọn danh mục</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ isset($data_edit->category_id) && $data_edit->category_id == $category->id ? 'selected' : '' }}>{{ $category->name_vi }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('category_id', '<span class="error">:message</span>') !!}
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="image">Ảnh đại diện</label>
                    <input id="image" name="image" type="file" class="form-control">
                    {!! $errors->first('image', '<span class="error">:message</span>') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">Tóm tắt (Tiếng Việt)</h4>

        <textarea id="summary_vi" class="summernote mb-2" name="summary_vi">{{ isset($data_edit->summary_vi) ? $data_edit->summary_vi : '' }}</textarea>
        {!! $errors->first('summary_vi', '<span class="error">:message</span>') !!}
    </div>

</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">Tóm tắt (Tiếng Anh)</h4>

        <textarea id="summary_en" class="summernote mb-2" name="summary_en">{{ isset($data_edit->summary_en) ? $data_edit->summary_en : '' }}</textarea>
        {!! $errors->first('summary_en', '<span class="error">:message</span>') !!}
    </div>

</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">Tóm tắt (Tiếng Nhật)</h4>

        <textarea id="summary_ja" class="summernote mb-2" name="summary_ja">{{ isset($data_edit->summary_ja) ? $data_edit->summary_ja : '' }}</textarea>
        {!! $errors->first('summary_ja', '<span class="error">:message</span>') !!}
    </div>

</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">Mô tả (Tiếng Việt)</h4>

        <textarea id="content_vi" class="summernote mb-2" name="content_vi">{{ isset($data_edit->content_vi) ? $data_edit->content_vi : '' }}</textarea>
        {!! $errors->first('content_vi', '<span class="error">:message</span>') !!}
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">Mô tả (Tiếng Anh)</h4>

        <textarea id="content_en" class="summernote mb-2" name="content_en">{{ isset($data_edit->content_en) ? $data_edit->content_en : '' }}</textarea>
        {!! $errors->first('content_en', '<span class="error">:message</span>') !!}
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">Mô tả (Tiếng Nhật)</h4>

        <textarea id="content_ja" class="summernote mb-2" name="content_ja">{{ isset($data_edit->content_ja) ? $data_edit->content_ja : '' }}</textarea>
        {!! $errors->first('content_ja', '<span class="error">:message</span>') !!}

        <div class="mt-3">
            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Lưu lại</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary waves-effect">Quay lại</a>
        </div>
    </div>
</div>