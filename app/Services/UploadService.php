<?php 

namespace App\Services;

use Str;

class UploadService
{
	public function imageUpload($path)
	{
		$file = request()->file('file');
		$filename = Str::random(9).$file->getClientOriginalName();
		$file->move(public_path('uploads/img/'.$path),$filename);

		return $filename;
	}
	public function bannerUpload($path)
	{
		$file = request()->file('file');
		$filename = $file->getClientOriginalName();
		$file->move(public_path('img/bg'.$path),$filename);

		return $filename;
	}
	public function fotoGuru($path)
	{
		$file = request()->file('foto');
		$filename = $file->getClientOriginalName();
		$file->move(public_path('foto/guru/'.$path),$filename);

		return $filename;
	}
}