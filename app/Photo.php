<?php

namespace App;
use Image;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
	protected $table = 'flyer_photos';

	protected $fillable = ['path', 'name', 'thumbnail_path'];

	protected $file;
 
	protected static function boot()
	{
		static::creating(function ($photo){
			return $photo->upload();
		});
	}

	public function flyer()
	{
		return $this->belongsTo('App\Flyer');
	}

	public static function fromFile(UploadedFile $file)
	{
		$photo = new static;

		$photo->file = $file;

		return $photo->fill([
				'name' => $photo->fileName(),
				'path' => $photo->filePath(),	
				'thumbnail_path' => $photo->thumbnailPath()
			]);
	}

	public function fileName()
	{
		$name = sha1(
				time() . $this->file->getClientOriginalName()
			);

		$extension = $this->file->getClientOriginalExtension();

		return "{$name}.{$extension}";
	}

	public function filePath()
	{
		return $this->baseDir() . '/' . $this->fileName();
	}

	public function thumbnailPath()
	{
		return $this->baseDir() . '/th-' . $this->fileName();
	}

	public function baseDir()
	{
		return 'flyers_uploads/photos';
	}

	public function upload()
	{
        $this->file->move($this->baseDir(), $this->fileName());

        $this->makeThubmnail();

        return $this;
	}

	public function makeThubmnail()
	{
		Image::make($this->filePath())
        	->fit(200)
        	->save($this->thumbnailPath());
	}
}
