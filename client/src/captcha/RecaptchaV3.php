<?php

namespace Zennolab\CapMonsterCloud\Client\Captcha;

use Zennolab\CapMonsterCloud\Client\CaptchaRequest;



class RecaptchaV3Request extends CaptchaRequest {

    public function __construct(string $websiteURL, string $websiteKey, float $minScore=null, string $pageAction=null) {
        $options = [
            "websiteURL" => $websiteURL, 
            "websiteKey" => $websiteKey,
            "minScore" => $minScore,
            "pageAction" => $pageAction
        ];
        CaptchaRequest::__construct("RecaptchaV3TaskProxyless", $options);
    }

}