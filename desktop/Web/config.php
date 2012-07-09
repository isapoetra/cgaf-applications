<?php if (! defined("CGAF"))	die("Restricted Access");
return array(
	'System'=> array(
			'DataPath'=> \CGAF::getInternalStorage('data',false)
		),
	'app'=> array(
			'id'=> '__cgaf',
			'mainasset'=> '_desktop',
			'shortname'=> 'CGAF',
			'internalstorage'=> \CGAF::getInternalStorage(null,false)
		),
	'js'=> array(
			'jQuery'=> array(
				'ui.enabled'=> true,
				'plugins'=> array(
					 'ShortScroll/jquery.jb.shortscroll.js',
					 'ShortScroll/jquery.jb.shortscroll.css'
				)
			)
		),
);
?>