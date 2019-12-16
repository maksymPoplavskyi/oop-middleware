<?php

class Scan
{

    private $arr = [];

    public function scanner($folder)
    {
        $files = scandir($folder . '/');
        $result = [];
        foreach ($files as $key => $file) {
            if ($file === '.' || $file === '..') {
                continue;
            } else {
                $dir = $folder . $file . '/';

                if (is_dir($dir)) {
                    $result[$file] = $this->scanner($dir);

                } else {
                    $result[$file] = $file;
                }
            }
        }

        return $result;
    }
}
