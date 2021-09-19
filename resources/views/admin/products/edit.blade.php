@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.products.update", [$product->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.product.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $product->title) }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_title">{{ trans('cruds.product.fields.ar_title') }}</label>
                <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" name="ar_title" id="ar_title" value="{{ old('ar_title', $product->ar_title) }}">
                @if($errors->has('ar_title'))
                    <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.product.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $product->description) }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_description">{{ trans('cruds.product.fields.ar_description') }}</label>
                <textarea class="form-control {{ $errors->has('ar_description') ? 'is-invalid' : '' }}" name="ar_description" id="ar_description">{{ old('ar_description', $product->ar_description) }}</textarea>
                @if($errors->has('ar_description'))
                    <span class="text-danger">{{ $errors->first('ar_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nutritional_information">{{ trans('cruds.product.fields.nutritional_information') }}</label>
                <textarea class="form-control {{ $errors->has('nutritional_information') ? 'is-invalid' : '' }}" name="nutritional_information" id="nutritional_information">{{ old('nutritional_information', $product->nutritional_information) }}</textarea>
                @if($errors->has('nutritional_information'))
                    <span class="text-danger">{{ $errors->first('nutritional_information') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.nutritional_information_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_nutritional_information">{{ trans('cruds.product.fields.ar_nutritional_information') }}</label>
                <textarea class="form-control {{ $errors->has('ar_nutritional_information') ? 'is-invalid' : '' }}" name="ar_nutritional_information" id="ar_nutritional_information">{{ old('ar_nutritional_information', $product->ar_nutritional_information) }}</textarea>
                @if($errors->has('ar_nutritional_information'))
                    <span class="text-danger">{{ $errors->first('ar_nutritional_information') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_nutritional_information_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_type">{{ trans('cruds.product.fields.product_type') }}</label>
                <input class="form-control {{ $errors->has('product_type') ? 'is-invalid' : '' }}" type="text" name="product_type" id="product_type" value="{{ old('product_type', $product->product_type) }}">
                @if($errors->has('product_type'))
                    <span class="text-danger">{{ $errors->first('product_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.product_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_product_type">{{ trans('cruds.product.fields.ar_product_type') }}</label>
                <input class="form-control {{ $errors->has('ar_product_type') ? 'is-invalid' : '' }}" type="text" name="ar_product_type" id="ar_product_type" value="{{ old('ar_product_type', $product->ar_product_type) }}">
                @if($errors->has('ar_product_type'))
                    <span class="text-danger">{{ $errors->first('ar_product_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_product_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diet_needs">{{ trans('cruds.product.fields.diet_needs') }}</label>
                <input class="form-control {{ $errors->has('diet_needs') ? 'is-invalid' : '' }}" type="text" name="diet_needs" id="diet_needs" value="{{ old('diet_needs', $product->diet_needs) }}">
                @if($errors->has('diet_needs'))
                    <span class="text-danger">{{ $errors->first('diet_needs') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.diet_needs_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_diet_needs">{{ trans('cruds.product.fields.ar_diet_needs') }}</label>
                <input class="form-control {{ $errors->has('ar_diet_needs') ? 'is-invalid' : '' }}" type="text" name="ar_diet_needs" id="ar_diet_needs" value="{{ old('ar_diet_needs', $product->ar_diet_needs) }}">
                @if($errors->has('ar_diet_needs'))
                    <span class="text-danger">{{ $errors->first('ar_diet_needs') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_diet_needs_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specialty">{{ trans('cruds.product.fields.specialty') }}</label>
                <input class="form-control {{ $errors->has('specialty') ? 'is-invalid' : '' }}" type="text" name="specialty" id="specialty" value="{{ old('specialty', $product->specialty) }}">
                @if($errors->has('specialty'))
                    <span class="text-danger">{{ $errors->first('specialty') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.specialty_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_specialty">{{ trans('cruds.product.fields.ar_specialty') }}</label>
                <input class="form-control {{ $errors->has('ar_specialty') ? 'is-invalid' : '' }}" type="text" name="ar_specialty" id="ar_specialty" value="{{ old('ar_specialty', $product->ar_specialty) }}">
                @if($errors->has('ar_specialty'))
                    <span class="text-danger">{{ $errors->first('ar_specialty') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_specialty_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="package_dimensions">{{ trans('cruds.product.fields.package_dimensions') }}</label>
                <input class="form-control {{ $errors->has('package_dimensions') ? 'is-invalid' : '' }}" type="text" name="package_dimensions" id="package_dimensions" value="{{ old('package_dimensions', $product->package_dimensions) }}">
                @if($errors->has('package_dimensions'))
                    <span class="text-danger">{{ $errors->first('package_dimensions') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.package_dimensions_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_package_dimensions">{{ trans('cruds.product.fields.ar_package_dimensions') }}</label>
                <input class="form-control {{ $errors->has('ar_package_dimensions') ? 'is-invalid' : '' }}" type="text" name="ar_package_dimensions" id="ar_package_dimensions" value="{{ old('ar_package_dimensions', $product->ar_package_dimensions) }}">
                @if($errors->has('ar_package_dimensions'))
                    <span class="text-danger">{{ $errors->first('ar_package_dimensions') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_package_dimensions_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="package_weight">{{ trans('cruds.product.fields.package_weight') }}</label>
                <input class="form-control {{ $errors->has('package_weight') ? 'is-invalid' : '' }}" type="text" name="package_weight" id="package_weight" value="{{ old('package_weight', $product->package_weight) }}">
                @if($errors->has('package_weight'))
                    <span class="text-danger">{{ $errors->first('package_weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.package_weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_package_weight">{{ trans('cruds.product.fields.ar_package_weight') }}</label>
                <input class="form-control {{ $errors->has('ar_package_weight') ? 'is-invalid' : '' }}" type="text" name="ar_package_weight" id="ar_package_weight" value="{{ old('ar_package_weight', $product->ar_package_weight) }}">
                @if($errors->has('ar_package_weight'))
                    <span class="text-danger">{{ $errors->first('ar_package_weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_package_weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="storage_requirements">{{ trans('cruds.product.fields.storage_requirements') }}</label>
                <input class="form-control {{ $errors->has('storage_requirements') ? 'is-invalid' : '' }}" type="text" name="storage_requirements" id="storage_requirements" value="{{ old('storage_requirements', $product->storage_requirements) }}">
                @if($errors->has('storage_requirements'))
                    <span class="text-danger">{{ $errors->first('storage_requirements') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.storage_requirements_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_storage_requirements">{{ trans('cruds.product.fields.ar_storage_requirements') }}</label>
                <input class="form-control {{ $errors->has('ar_storage_requirements') ? 'is-invalid' : '' }}" type="text" name="ar_storage_requirements" id="ar_storage_requirements" value="{{ old('ar_storage_requirements', $product->ar_storage_requirements) }}">
                @if($errors->has('ar_storage_requirements'))
                    <span class="text-danger">{{ $errors->first('ar_storage_requirements') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_storage_requirements_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="origin_country">{{ trans('cruds.product.fields.origin_country') }}</label>
                <input class="form-control {{ $errors->has('origin_country') ? 'is-invalid' : '' }}" type="text" name="origin_country" id="origin_country" value="{{ old('origin_country', $product->origin_country) }}">
                @if($errors->has('origin_country'))
                    <span class="text-danger">{{ $errors->first('origin_country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.origin_country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_origin_country">{{ trans('cruds.product.fields.ar_origin_country') }}</label>
                <input class="form-control {{ $errors->has('ar_origin_country') ? 'is-invalid' : '' }}" type="text" name="ar_origin_country" id="ar_origin_country" value="{{ old('ar_origin_country', $product->ar_origin_country) }}">
                @if($errors->has('ar_origin_country'))
                    <span class="text-danger">{{ $errors->first('ar_origin_country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ar_origin_country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.product.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $product->active || old('active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.product.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency">{{ trans('cruds.product.fields.currency') }}</label>
                <input class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" type="text" name="currency" id="currency" value="{{ old('currency', $product->currency) }}">
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo">{{ trans('cruds.product.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photos">{{ trans('cruds.product.fields.photos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photos') ? 'is-invalid' : '' }}" id="photos-dropzone">
                </div>
                @if($errors->has('photos'))
                    <span class="text-danger">{{ $errors->first('photos') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photos_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.product.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $product->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <span class="text-danger">{{ $errors->first('category') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($product) && $product->photo)
      var file = {!! json_encode($product->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedPhotosMap = {}
Dropzone.options.photosDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
      uploadedPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhotosMap[file.name]
      }
      $('form').find('input[name="photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($product) && $product->photos)
      var files = {!! json_encode($product->photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection