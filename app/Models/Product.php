<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'products';

    protected $appends = [
        'photo',
        'photos',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'ar_title',
        'description',
        'ar_description',
        'nutritional_information',
        'ar_nutritional_information',
        'product_type',
        'ar_product_type',
        'diet_needs',
        'ar_diet_needs',
        'specialty',
        'ar_specialty',
        'package_dimensions',
        'ar_package_dimensions',
        'package_weight',
        'ar_package_weight',
        'storage_requirements',
        'ar_storage_requirements',
        'origin_country',
        'ar_origin_country',
        'price',
        'active',
        'currency',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getPhotosAttribute()
    {
        $files = $this->getMedia('photos');
        $files->each(function ($item) {
            $item->url = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview = $item->getUrl('preview');
        });

        return $files;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
