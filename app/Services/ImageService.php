<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService
{
    protected UploadedFile $file;
    /**
     * Store a file locally and update the model's file attribute.
     *
     * @param Model $model
     * @param string $file_attribute
     * @param string $file_name
     * @param UploadedFile $file
     * @return bool
     */
    public function storeLocal(Model $model, string $file_attribute, string $file_name, UploadedFile $file)
    {
        $modelName = class_basename($model);

        $userPath = Str::slug(auth()->user()->slug, '-');
        $imagePath = strtolower($modelName) . '_images/' . $userPath;
        $fileName = Str::slug($file_name, '-') . '.' . $file->extension();
        $imageUrl = Storage::disk('public')->putFileAs($imagePath, $file, $fileName);

        return $model->update([$file_attribute => $imageUrl]);
    }

    /**
     * Update a file locally and update the model's file attribute.
     *
     * @param Model $model
     * @param string $file_attribute
     * @param string $file_name
     * @param UploadedFile $file
     * @return bool
     */
    public function updateLocal(Model $model, string $file_attribute, string $file_name, UploadedFile $file)
    {
        Storage::disk('public')->delete($model->$file_attribute);
        return $this->storeLocal($model, $file_attribute, $file_name, $file);
    }

    public function deleteLocal(Model $model, $file_attribute)
    {
        return Storage::disk('public')->delete($model->$file_attribute);
    }
}
