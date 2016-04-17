<?php

namespace ArangoOdmModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class CliController extends AbstractActionController
{
    protected $documentManager;
    
    function generateDocumentsAction() {
        $config = $this->getServiceLocator()->get('Config');
        if (array_key_exists('arango-odm', $config) && array_key_exists('namespace-map', $config['arango-odm'])) {
            $documentManager = $this->getDocumentManager();
            $documentManager->generateAllDocuments($config['arango-odm']['namespace-map']);
            echo 'Successfull generated documents!' . PHP_EOL;
        } else {
            throw new \Exception('Missing arango-odm["namespace-map"] configuration!');
        }
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
