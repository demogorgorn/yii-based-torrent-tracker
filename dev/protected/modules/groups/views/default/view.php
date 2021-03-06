<?php
/* @var $this DefaultController */
/* @var $model Group */
?>
<?php
$this->renderPartial('_singleView', array(
                                         'model' => $model,
                                    ))
?>

<?php $this->widget('bootstrap.widgets.TbListView',
	array(
	     'id'                 => 'blogPostsListView',
	     'dataProvider'       => $postsProvider,
	     'itemView'           => 'application.modules.blogs.views.post._view',
	     'template'           => '{sorter} {items} {pager}',
	     'enableHistory'      => true,
	     'sortableAttributes' => array(
		     'ctime',
		     'commentsCount',
		     'rating',
             'lastCommentCtime'
	     ),
	));
?>