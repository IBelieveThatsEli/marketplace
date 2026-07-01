<?php

namespace App\Controllers;

class UploadController extends BaseController
{
    public function listingImage(string $year, string $filename)
    {
        if (! preg_match('/^\d{4}$/', $year) || basename($filename) !== $filename) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $path = WRITEPATH . 'uploads/listings/' . $year . '/' . $filename;

        if (! is_file($path)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $mimeType = mime_content_type($path) ?: 'application/octet-stream';

        if (! str_starts_with($mimeType, 'image/')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return $this->response
            ->setContentType($mimeType)
            ->setHeader('Cache-Control', 'public, max-age=31536000')
            ->setBody(file_get_contents($path));
    }
}
