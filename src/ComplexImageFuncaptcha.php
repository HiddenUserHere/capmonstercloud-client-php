<?php

namespace ZennoLab\CapMonsterCloud;


class ComplexImageFuncaptchaRequest extends ComplexImageRequest
{
    public $_class = 'funcaptcha';
    public function __construct(
        array $metadata,
        array $imageUrls = [],
        array $imagesBase64 = [],
        string $userAgent = null,
        string $websiteURL = null
    )
    {
        parent::__construct($this->_class, $metadata, $imageUrls, $imagesBase64, $userAgent, $websiteURL);
    }
}
