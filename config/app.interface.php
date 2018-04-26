<?php

return array(
    'plugins' => array(
        'meliscmsnews' => array(
            'interface' => array(
                'meliscmsnews' => array(
                    'interface' => array(
                        'meliscmsnews_page' => array(
                            'interface' => array(
                                'meliscmsnews_content' => array(
                                    'interface' => array(
                                        'meliscmsnews_content_tabs_comments' => array(
                                            'conf' => array(
                                                'id' => 'id_meliscmsnews_content_tabs_comments',
                                                'melisKey' => 'meliscmsnews_content_tabs_comments',
                                                'name' => 'tr_meliscmsnews_comments_module_name',
                                                'icon' => 'glyphicons comments',
                                            ),
                                            'forward' => array(
                                                'module' => 'MelisCmsNewsComments',
                                                'controller' => 'MelisCmsNewsCommentsTab',
                                                'action' => 'tab-container',
                                            ),
                                            'interface' => array(
                                                'meliscmsnews_comments_content_container' => array(
                                                    'conf' => array(
                                                        'id' => 'id_meliscmsnews_comments_content_container',
                                                        'melisKey' => 'meliscmsnews_comments_content_container',
                                                    ),
                                                    'forward' => array(
                                                        'module' => 'MelisCmsNewsComments',
                                                        'controller' => 'MelisCmsNewsCommentsTab',
                                                        'action' => 'content-container',
                                                    ),
                                                    'interface' => array(
                                                        'meliscmsnews_comments_table' => array(
                                                            'conf' => array(
                                                                'id' => 'id_meliscmsnews_comments_table',
                                                                'melisKey' => 'meliscmsnews_comments_table',
                                                                'name' => 'tr_meliscmsnews_comments_table',
                                                            ),
                                                            'forward' => array(
                                                                'module' => 'MelisCmsNewsComments',
                                                                'controller' => 'MelisCmsNewsCommentsTab',
                                                                'action' => 'comments-table',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);