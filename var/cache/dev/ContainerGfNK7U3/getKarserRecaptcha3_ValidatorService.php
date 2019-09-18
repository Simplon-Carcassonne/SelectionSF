<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'karser_recaptcha3.validator' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/karser/karser-recaptcha3-bundle/Validator/Constraints/Recaptcha3Validator.php';
include_once $this->targetDirs[3].'/vendor/google/recaptcha/src/ReCaptcha/ReCaptcha.php';
include_once $this->targetDirs[3].'/vendor/google/recaptcha/src/ReCaptcha/RequestMethod.php';
include_once $this->targetDirs[3].'/vendor/google/recaptcha/src/ReCaptcha/RequestMethod/CurlPost.php';
include_once $this->targetDirs[3].'/vendor/karser/karser-recaptcha3-bundle/Services/IpResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/karser/karser-recaptcha3-bundle/Services/IpResolver.php';

$a = new \ReCaptcha\ReCaptcha('6Lc4d6IUAAAAAEhnfy71lHxf5sDL6I7_sC2Q_pmy', new \ReCaptcha\RequestMethod\CurlPost());
$a->setScoreThreshold(0.5);

return $this->privates['karser_recaptcha3.validator'] = new \Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator($a, true, new \Karser\Recaptcha3Bundle\Services\IpResolver(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));
