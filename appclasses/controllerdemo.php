<?php


class SampleController extends SlimRunController
{
    
    protected function step1_get()
    {
        return $this->template->loadTemplate('content/steptemplate.tpl', array('content'=>__METHOD__));
    }
    
    protected function step2_get()
    {
        return $this->template->loadTemplate('content/steptemplate.tpl', array('content'=>'I am Step TWO'));
    }
    
}