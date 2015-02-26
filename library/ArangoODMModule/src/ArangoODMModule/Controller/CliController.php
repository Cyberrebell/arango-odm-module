<?php

namespace ArangoODMModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class CliController extends AbstractActionController
{
	protected $documentHandler;
	
	function generateDocumentsAction() {
		$directory = $this->params()->fromRoute('directory', false);
		$namespace = $this->params()->fromRoute('namespace', false);
		
		$documentHandler = $this->getDocumentHandler();
		$documentHandler->generateDocuments($directory, $namespace);
	}
	
	/**
	 * @return \ArangoODM\DocumentHandler
	 */
    protected function getDocumentHandler() {
    	if (!$this->documentHandler) {
    		$this->documentHandler = $this->getServiceLocator()->get('arango-document-handler');
    	}
    	return $this->documentHandler;
    }
}
