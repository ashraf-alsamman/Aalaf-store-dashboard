@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.product.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <td>
                            {{ $product->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.title') }}
                        </th>
                        <td>
                            {{ $product->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_title') }}
                        </th>
                        <td>
                            {{ $product->ar_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.description') }}
                        </th>
                        <td>
                            {{ $product->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_description') }}
                        </th>
                        <td>
                            {{ $product->ar_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.nutritional_information') }}
                        </th>
                        <td>
                            {{ $product->nutritional_information }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_nutritional_information') }}
                        </th>
                        <td>
                            {{ $product->ar_nutritional_information }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_type') }}
                        </th>
                        <td>
                            {{ $product->product_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_product_type') }}
                        </th>
                        <td>
                            {{ $product->ar_product_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.diet_needs') }}
                        </th>
                        <td>
                            {{ $product->diet_needs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_diet_needs') }}
                        </th>
                        <td>
                            {{ $product->ar_diet_needs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.specialty') }}
                        </th>
                        <td>
                            {{ $product->specialty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_specialty') }}
                        </th>
                        <td>
                            {{ $product->ar_specialty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.package_dimensions') }}
                        </th>
                        <td>
                            {{ $product->package_dimensions }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_package_dimensions') }}
                        </th>
                        <td>
                            {{ $product->ar_package_dimensions }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.package_weight') }}
                        </th>
                        <td>
                            {{ $product->package_weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_package_weight') }}
                        </th>
                        <td>
                            {{ $product->ar_package_weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.storage_requirements') }}
                        </th>
                        <td>
                            {{ $product->storage_requirements }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_storage_requirements') }}
                        </th>
                        <td>
                            {{ $product->ar_storage_requirements }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.origin_country') }}
                        </th>
                        <td>
                            {{ $product->origin_country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ar_origin_country') }}
                        </th>
                        <td>
                            {{ $product->ar_origin_country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <td>
                            {{ $product->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $product->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.currency') }}
                        </th>
                        <td>
                            {{ $product->currency }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo') }}
                        </th>
                        <td>
                            @if($product->photo)
                                <a href="{{ $product->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $product->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photos') }}
                        </th>
                        <td>
                            @foreach($product->photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.category') }}
                        </th>
                        <td>
                            {{ $product->category->title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection