<?php

namespace ArangoOdmModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class CliController extends AbstractActionController
{
    protected $documentManager;
    
    function generateDocumentsAction() {
        $directory = $this->params()->fromRoute('directory', false);
        $namespace = $this->params()->fromRoute('namespace', false);
        
        $documentManager = $this->getDocumentHandler();
        $documentManager->setDefaultNamespace($namespace);
        $documentManager->generateAllObjects($directory);
    }
    
    /**
     * @return \ArangoOdm\DocumentManager
     */
    protected function getDocumentManager() {
        if (!$this->documentManager) {
            $this->documentManager = $this->getServiceLocator()->get('arango-document-manager');
        }
        return $this->documentManager;
    }
}
