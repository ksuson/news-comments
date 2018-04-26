<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2018 Melis Technology (http://www.melistechnology.com)
 *
 */
namespace MelisCmsNewsComments\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class MelisCmsNewsCommentsTabController extends AbstractActionController
{
    /**
     * this method will get the MelisKey
     *
     */
    private function getMelisKey()
    {
        $melisKey = $this->params()->fromRoute('melisKey', $this->params()->fromQuery('melisKey'), null);

        return $melisKey;
    }
    /**
     * this method will get the meliscore tool
     *
     */
    private function getTool()
    {
        $toolSvc = $this->getServiceLocator()->get('MelisCoreTool');
        $toolSvc->setMelisToolKey('MelisCmsNewsComments', 'meliscmsnews_comments_tool');

        return $toolSvc;
    }


    public function tabContainerAction() : ViewModel
    {
        $melisKey = $this->params()->fromRoute('melisKey', '');
        $newsId = (int) $this->params()->fromQuery('newsId', '');

        $view           = new ViewModel();
        $view->melisKey = $melisKey;
        $view->newsId   = $newsId;

        return $view;
    }

    public function contentContainerAction() : ViewModel
    {
        $melisKey = $this->params()->fromRoute('melisKey', '');
        $newsId = (int) $this->params()->fromQuery('newsId', '');

        $view           = new ViewModel();
        $view->melisKey = $melisKey;
        $view->newsId   = $newsId;

        return $view;
    }

    public function commentsTableAction() : ViewModel
    {
        $tableName  = 'CommentsTable';   // Configured from app.tools.php
        $melisKey   = $this->getMelisKey();
        $columns    = $this->getTool()->getColumns();
die(print_r($columns));
        /** Adding the Actions Column to the Table **/
        $columns['actions'] = array(
            'text'  => $this->getTool()->getTranslation('tr_meliscmsnews_comments_table_col_action'),
            'width' => '10%',
        );

        $view                           = new ViewModel();
        $view->melisKey                 = $melisKey;
        $view->tableName                = $tableName;
        $view->tableColumns             = $columns;
        $view->getToolDataTableConfig   = $this->getTool()->getDataTableConfiguration('#'.$tableName, true, false, array('order' => '[[0, "desc"]]'));

        return $view;
    }

    /**
     * Renders comments table's limit filter
     * @return ViewModel
     */
    public function commentsFilterLimitAction() : ViewModel
    {
        return new ViewModel();
    }

    /**
     * Renders comments table's Refresh button
     * @return ViewModel
     */
    public function commentsFilterRefreshAction() : ViewModel
    {
        $view           = new ViewModel();
        $view->title    = $this->getTool()->getTranslation('tr_meliscms_common_refresh');

        return $view;
    }

    /**
     * Renders comments table's search filter
     * @return ViewModel
     */
    public function commentsFilterSearchAction() : ViewModel
    {
        return new ViewModel();
    }

    public function getCommentsAction() : JsonModel
    {
        $draw           = 0;
        $dataCount      = 0;
        $dataFiltered   = 0;
        $tableData      = [];


        return new JsonModel([
            'draw'              => (int) $draw,
            'recordsTotal'      => $dataCount,
            'recordsFiltered'   => $dataFiltered,
            'data'              => $tableData
        ]);
    }

    public function testAction()
    {
        echo "MelisCmsNewsComments ko yeah!";
        die;
    }

}