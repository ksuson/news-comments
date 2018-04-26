<?php

return array(
    'plugins' => array(
        'MelisCmsNewsComments' => array(
            'tools' => array(
                'meliscmsnews_comments_tool' => array(
                    'table' => array(
                        'target' => '#CommentsTable',
                        'ajaxUrl' => '/melis/MelisCmsNewsComments/MelisCmsNewsCommentsTab/getComments',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => array(
                            'left' => array(
                                'news-list-news-filter-limit' => array(
                                    'module' => 'MelisCmsNewsComments',
                                    'controller' => 'MelisCmsNewsCommentsTab',
                                    'action' => 'render-news-list-content-filter-limit'
                                ),
                                'news-list-news-filter-site' => array(
                                    'module' => 'MelisCmsNews',
                                    'controller' => 'MelisCmsNewsList',
                                    'action' => 'render-news-list-content-filter-site'
                                ),
                            ),
                        
                            'center' => array(
                                'news-list-news-filter-search' => array(
                                    'module' => 'MelisCmsNews',
                                    'controller' => 'MelisCmsNewsList',
                                    'action' => 'render-news-list-content-filter-search'
                                ),
                            ),
                        
                            'right' => array(
                                'news-list-news-filter-refresh' => array(
                                    'module' => 'MelisCmsNews',
                                    'controller' => 'MelisCmsNewsList',
                                    'action' => 'render-news-list-content-filter-refresh'
                                ),
                            ),
                        ),
                        
                        'columns' => array(
                            'ncom_id' => array(
                                'text' => 'tr_meliscmsnews_comments_table_col_id',
                                'css' => array('width' => '1%', 'padding-right' => '0'),
                                'sortable' => true,
                            ),
                            'ncom_status' => array(
                                'text' => 'tr_meliscmsnews_comments_table_col_status',
                                'css' => array('width' => '1%', 'padding-right' => '0'),
                                'sortable' => true,
                            ),
                            'ncom_default_name' => array(
                                'text' => 'tr_meliscmsnews_comments_table_col_author',
                                'css' => array('width' => '10%', 'padding-right' => '0'),
                                'sortable' => true,
                            ),
                            'ncom_comment_text' => array(
                                'text' => 'tr_meliscmsnews_comments_table_col_comment_txt',
                                'css' => array('width' => '68%', 'padding-right' => '0'),
                                'sortable' => true,
                            ),
                            'ncom_date_creation' => array(
                                'text' => 'tr_meliscmsnews_comments_table_col_date_posted',
                                'css' => array('width' => '10%', 'padding-right' => '0'),
                                'sortable' => true,
                            ),
                        ),
                        
                        'searchables' => array(),
                        'actionButtons' => array(
//                            'edit' => array(
//                                'module' => 'MelisCmsNewsComments',
//                                'controller' => 'MelisCmsNewsCommentsTab',
//                                'action' => '',
//                            ),
//                            'delete' => array(
//                                'module' => 'MelisNewsletter',
//                                'controller' => 'MelisNewsletterTool',
//                                'action' => 'tool-subscribers-table-action-delete',
//                            ),
                        ),                        
                    ),
                ),
            ),
        ),
    ),
);
