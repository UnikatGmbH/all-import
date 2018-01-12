<?php

namespace Unikat\AllImport\Http\Controllers;

class AssetsController extends Controller
{

    public function file($file)
    {
        $root = ALL_IMPORT_PATH . '/resources/assets/build';

        return $this->resolve($file, $root);
    }

    public function image($file)
    {
        $root = ALL_IMPORT_PATH . '/resources/assets/images';

        return $this->resolve($file, $root);
    }

    public function font($file)
    {
        $root = ALL_IMPORT_PATH . '/resources/assets/fonts';

        return $this->resolve($file, $root);
    }

    protected function resolve($file, $root)
    {
        $contents = file_get_contents($root . DIRECTORY_SEPARATOR . $file);
        $response = response($contents, 200, [
            'Content-Type' => $this->getFileContentType($file),
        ]);

        $secondsInYear = 60 * 60 * 24 * 365;
        $response->setSharedMaxAge($secondsInYear);
        $response->setMaxAge($secondsInYear);
        $response->setExpires(new \DateTime('+1 year'));

        return $response;
    }

    protected function getFileContentType($file)
    {
        $array = explode('.', $file);
        $ext = end($array);

        $contentTypes = [
            'css' => 'text/css',
            'js' => 'text/javascript',
            'svg' => 'image/svg+xml',
            'map' => 'text/css',
            'woff' => 'application/x-font-woff',
            'woff2' => 'application/x-font-woff2'
        ];

        return $contentTypes[$ext];
    }
}