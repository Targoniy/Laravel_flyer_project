<?php

namespace App;
use Image;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
	protected $table = 'flyer_photos';

	protected $fillable = ['path', 'name', 'thumbnail_path'];

	protected $baseDir = 'flyers_uploads/photos';

	// protected $path = 'flyers_uploads/photos';

	// protected $thumbnail_path = 'flyers_uploads/photos' . '/tn-';

	
	public function flyer()
	{
		return $this->belongsTo('App\Flyer');
	}

	public static function named($name)
	{
			return (new static)->saveAs($name);
	}

	protected function saveAs($name)
	{
		$this->name = sprintf("%s-%s", time(), $name);
		$this->path = sprintf("%s/%s", $this->baseDir, $this->name);
		$this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir, $this->name);

		return $this;
	}

	public function move(UploadedFile $file)
	{
        $file->move($this->baseDir, $this->name);

        $this->makeThubmnail();

        return $this;
	}

	public function makeThubmnail()
	{
		Image::make($this->path)
        	->fit(200)
        	->save($this->thumbnail_path);
	}
}
