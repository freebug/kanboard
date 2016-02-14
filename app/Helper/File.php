<?php

namespace Kanboard\Helper;

/**
 * File helpers
 *
 * @package helper
 * @author  Frederic Guillot
 */
class File extends \Kanboard\Core\Base
{
    /**
     * Get file icon
     *
     * @access public
     * @param  string   $filename   Filename
     * @return string               Font-Awesome-Icon-Name
     */
    public function icon($filename)
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        switch ($extension) {
            case 'jpeg':
            case 'jpg':
            case 'png':
            case 'gif':
                return 'fa-file-image-o';
            case 'xls':
            case 'xlsx':
                return 'fa-file-excel-o';
            case 'doc':
            case 'docx':
                return 'fa-file-word-o';
            case 'ppt':
            case 'pptx':
                return 'fa-file-powerpoint-o';
            case 'zip':
            case 'rar':
            case 'tar':
            case 'bz2':
            case 'xz':
            case 'gz':
                return 'fa-file-archive-o';
            case 'mp3':
                return 'fa-file-audio-o';
            case 'avi':
            case 'mov':
                return 'fa-file-video-o';
            case 'php':
            case 'html':
            case 'css':
                return 'fa-file-code-o';
            case 'pdf':
                return 'fa-file-pdf-o';
        }

        return 'fa-file-o';
    }
}
