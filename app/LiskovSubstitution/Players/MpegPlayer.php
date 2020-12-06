<?php


namespace LSP\Players;


use LSP\Contracts\StandardCodecConverter;
use LSP\StandardVideoPlayer;

class MpegPlayer extends StandardVideoPlayer implements StandardCodecConverter
{

    /**
     * @param $file
     *
     * @return mixed
     */
    public function convertToStandardCodec($file)
    {
        echo "Converting the file to Standard Codec";
        return $file;
    }

    /**
     * @param $file
     */
    public function play($file)
    {
        $file = $this->convertToStandardCodec($file);
        echo "MpegPlayer is Playing the file";
    }

}