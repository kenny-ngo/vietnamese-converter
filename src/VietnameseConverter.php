<?php

namespace Pnlinh\VietnameseConverter;

class VietnameseConverter
{
    public static function make()
    {
        return new VnCharsetConversion();
    }
}
