<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

/**
 *
 */
trait File
{
    protected $file;
    protected $folder;
    protected $prefixName;

    protected function getExtension()
    {
        return $this->file->getClientOriginalExtension();
    }

    protected function getFileName()
    {
        return $this->prefixName . '-' . time() . '.' . $this->getExtension();
    }

    protected function setPrefixName($prefixName)
    {
        $this->prefixName = $prefixName;
    }

    public function saveFile($prefixName)
    {
        $this->setPrefixName($prefixName);
        $path = $this->file->storeAs($this->prefixName, $this->getFileName());

        return $this->prefixName . '/' .$this->getFileName();
    }

    public function updateFile($prefixName)
    {
        $this->setPrefixName($prefixName);
        $path = $this->file->storeAs($this->prefixName, $this->getFileName());
    }

    public function deleteFile($photo)
    {
        Storage::delete($photo);
    }
}
