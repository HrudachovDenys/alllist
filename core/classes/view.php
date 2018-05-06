<?php

class View
{
    private $templatePath = null;
    private $viewPath;
    private $data;
    
    public function __construct($view = null, $template = null)
    {   
        if($view != null)
        {
            $this->viewPath = VIEWS_PATH.DS.$view.'.php';
        }
        else
        {
            $this->viewPath = VIEWS_PATH.DS.app::getRouter()->getController().'.php';
        }
        
        if($template != null)
        {
            $this->templatePath = TEMPLATE_PATH.DS.$template.'.php';
        }
    }
    
    private function renderTemplate($data)
    {
        extract($data);
        
        ob_start();

        $this->renderDefault($data);
        
        $content = ob_get_clean();
        
        if(file_exists($this->templatePath))
        {
            require $this->templatePath;
        }
    }
    
    private function renderDefault($data)
    {
        extract($data);
        if(file_exists($this->viewPath))
        {
            require $this->viewPath;
        }
    }
    
    public function render($data=[])
    {
        if ($this->templatePath != null)
        {
            $this->renderTemplate($data);
        }
        else
        {
            $this->renderDefault($data);
        }
    }
}