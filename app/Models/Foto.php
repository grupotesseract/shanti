<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Foto
 * @package App\Models
 * @version March 30, 2018, 9:05 pm BRT
 *
 * @property string image_name
 * @property string image_path
 * @property string image_extension
 * @property integer owner_id
 * @property string owner_type
 */
class Foto extends Model
{
    use SoftDeletes;

    public $table = 'fotos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'image_name',
        'image_path',
        'image_extension',
        'cloudinary_id',
        'owner_id',
        'owner_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image_name' => 'string',
        'image_path' => 'string',
        'image_extension' => 'string',
        'owner_id' => 'integer',
        'owner_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Binding Model Events.
     */
    public static function boot()
    {
        parent::boot();

        /** Binding the delete model event to destroy the filesystem archive **/
        static::deleted(function ($photo) {
            if (\File::exists($photo->fullPath)) {
                \File::delete($photo->fullPath);
            }
        });
    }

    /**
     * Relação polimorfica para que uma foto
     * possa pertencer a um mais de 1 tipo de entidade.
     */
    public function owner()
    {
        return $this->morphTo();
    }

    /**********************
     * Acessors / Mutators
     ************************/

    /**
     * Definindo um acessor para a URL da foto.
     */
    public function getURLAttribute()
    {
        return url('/uploads/'.$this->image_name.'.'.$this->image_extension);
    }

    /**
     * Definindo um acessor para o fullpath da foto.
     */
    public function getFullPathAttribute()
    {
        return $this->image_path.$this->image_name.'.'.$this->image_extension;
    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho maximo que irão aparecer 800 x 450
     */
    public function getURLCloudinaryAttribute()
    {
        return "//res.cloudinary.com/".env('CLOUDINARY_CLOUD_NAME')."/image/upload/c_scale,g_center,h_450,w_800/$this->cloudinary_id.jpg";
    }

    
}
