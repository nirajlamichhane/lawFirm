<?php

namespace App\Http\Services;



use Illuminate\Support\Facades\Storage;

class FileService
{
    public static function storeImageFromRequest($image, $foldername = 'uploads')
    {
        if (!$image) return null;
        try {
            $uploadpath = strtolower('/' . $foldername . "/");
            $disk = Storage::disk('public');
            $file_extension = $image->getClientOriginalExtension();
            $filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $path = $uploadpath . substr(md5(mt_rand()), 0, 7) . $filename . "-" . time() . "." . $file_extension;
            $disk->put($path, file_get_contents($image->getRealPath()));
            return ['name' => $filename, 'url' => $disk->url($path)];
        } catch (\Throwable $th) {
            return null;
        }
    }
    public static function storeImageFromBase64($image, $foldername = 'uploads')
    {
        if (!$image) return null;
        try {
            $uploadpath = strtolower('/' . $foldername . "/");
            $imageInfo = explode(";base64,", $image);
            $file_extension = str_replace('data:image/', '', $imageInfo[0]);
            $disk = Storage::disk('public');
            $filename = substr(md5(mt_rand()), 0, 7);
            $path = $uploadpath . substr(md5(mt_rand()), 0, 7) . $filename . "-" . time() . "." . $file_extension;
            $disk->put($path, file_get_contents($image));
            return ['name' => $filename, 'url' => $disk->url($path)];
        } catch (\Throwable $th) {
            return null;
        }
    }
    public static function storeImageFromUrl($url, $foldername = 'uploads')
    {
        if (!$url) return null;
        try {
            $contents = file_get_contents($url);
            $name = substr(md5(mt_rand()), 0, 7);
            $path = url("/storage/$foldername/" . $name);
            Storage::put("public/$foldername/" . $name, $contents);
            return ['name' => $name, 'url' => $path];
        } catch (\Exception $e) {
            return null;
        }
    }
    public static function deleteFileFromUrl($url)
    {
        if (!$url || !str_contains($url, 'storage')) return;
        Storage::delete('public' . (explode('storage', $url)[1]));
    }
}
