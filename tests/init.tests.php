<?php
require_once 'class.Config.php';		
require_once 'class.Database.php';	
require_once 'class.MySQLDAO.php';	
require_once 'class.User.php';
require_once 'class.Owner.php';
require_once 'class.Tweet.php';
require_once 'class.Link.php';
require_once 'class.Instance.php';
require_once 'class.OwnerInstance.php';
require_once 'class.LongUrlAPIAccessor.php';
require_once 'class.FlickrAPIAccessor.php';	
require_once 'class.PluginHook.php';
require_once 'class.Crawler.php';		
require_once 'class.Utils.php';	

# crawler only
require_once 'class.Logger.php';		

# webapp only
require_once 'class.Follow.php';

require_once 'config.inc.php';
require_once($THINKTANK_CFG['smarty_path'].'Smarty.class.php');
require_once 'class.SmartyThinkTank.php';

// Include all the php files in the common/plugins/ directories.
$plugin_files = Utils::getPlugins($THINKTANK_CFG['source_root_path'].'common/plugins');
foreach ($plugin_files as $pf) {
	foreach(glob($THINKTANK_CFG['source_root_path'].'common/plugins/'.$pf."/*.php") as $includefile) {
		if ($includefile != $THINKTANK_CFG['source_root_path'].'common/plugins/'.$pf.'/twitterOAuth.php') {
			require_once($includefile);
		}
	}
}

?>