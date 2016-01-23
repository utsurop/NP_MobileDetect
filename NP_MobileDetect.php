<?php

/*

* sun jan 23 2016 utsuro <utsuro.youyou@gmail.com> 0.1
- NP_MobileDetect for NucleusPlugin first release

*/

class NP_MobileDetect extends NucleusPlugin {
	private $mobileDetectVersion = '2.8.19';
	private $detect;

	public function getName()        { return 'MobileDetect'; }
	public function getAuthor()      { return 'utsuro'; }
	public function getVersion()     { return '0.1'; }
	public function getDescription() { return ''._NP_MOBILEDETECT_DESCRIPTION_.''; }
	public function getURL()         { return 'https://github.com/utsurop/NP_MobileDetect'; }

	public function supportsFeature($feature) { return in_array($feature, array('SqlTablePrefix', 'SqlApi')); }
	public function getMinNucleusVersion()    { return '350'; }
/*
	public function getEventList() {
		$event = array('PreItem');
		return $event;
	}
*/
	public function init() {
		// include language file for this plugin
		$language = str_replace(array('\\','/'), '', getLanguageName());
		$includeDir   = $this->getDirectory().'language/';
		$includeFile  = (is_file($includeDir.$language.'.inc')) ? $language : 'english';
		include_once($includeDir.$includeFile.'.inc');
		$this->language = $includeFile;

		// Mobile Detect
		require_once($this->getDirectory() . "Mobile-Detect-{$this->mobileDetectVersion}/Mobile_Detect.php");
		$this->detect = new Mobile_Detect;

	}

	public function doIf($key = '', $value = '') {
		if($key == '') {
			return $this->detect->isMobile();
		}
		elseif ($key == "mobile") {
			switch($value) {
				case 'isMobile':
					return $this->detect->isMobile();
				case 'isTablet':
					return $this->detect->isTablet();
				case 'isPhone':
					return $this->detect->isMobile() && !$this->detect->isTablet();
				default:
					return $this->detect->isMobile();
			}
		}
		elseif ($key == "extended") {
			if($value != '') {
				return $this->detect->is($value);
			}
		}

		return false;
	}

}
