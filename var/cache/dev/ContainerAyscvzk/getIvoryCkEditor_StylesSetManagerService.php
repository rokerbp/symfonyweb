<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory_ck_editor.styles_set_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle\\Model\\StylesSetManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle\\Model\\StylesSetManager.php';

return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
