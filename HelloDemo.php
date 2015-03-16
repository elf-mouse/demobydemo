<?php
require_once('config.php');

/**
 * 自动创建前端Demo骨架
 *
 * @author Elf-mousE
 * @website http://elf-mouse.me/
 * @since 2013.12.09
 */
class HelloDemo
{
	public $now = '';
	public $mainCss = '';
	public $mainJs = '';
	public $html = '';
	public $css = '';
	public $js = '';

	function __construct($unit = 0) {
		$year  = date('Y');
		$month = date('m');
		$day   = date('d');
		$hour  = date('H');

		$today = $year . $month . $day;

		switch ($unit) {
			case 1:
				$now = ($hour >= 1 && $hour <= 12) ? $today . '_AM' : $today . '_PM';
				break;
			case 2:
				$now = $today . '_' . $hour;
				break;
			default:
				$now = $today;
				break;
		}

		$mainCss = $now . '/css/main.css';
		$mainJs  = $now . '/js/main.js';

		if (!is_dir($now)) {
			mkdir($now);
			mkdir($now . '/css');
			mkdir($now . '/img');
			mkdir($now . '/js');

			file_put_contents($mainCss, '*,*:before,*:after{box-sizing:border-box;}*{margin:0;padding:0;}');
			file_put_contents($mainJs, 'console.log("Hello Demo");');
		}

		$q = isset($_GET['q']) && is_string($_GET['q']) ? $_GET['q'] : 'index';

		$tplHtml = $now . '/' . $q . '.html';
		$tplCss  = $now . '/css/' . $q . '.css';
		$tplJs   = $now . '/js/' . $q . '.js';

		if (!is_file($tplHtml)) {
			file_put_contents($tplHtml, 'Hello ' . $q . ' Demo');
		}
		if (!is_file($tplCss)) {
			file_put_contents($tplCss, '/* ' . $q . ' */');
		}
		if (!is_file($tplJs)) {
			file_put_contents($tplJs, '// ' . $q);
		}

		$this->now = $now;
		$this->mainCss = $mainCss;
		$this->mainJs = $mainJs;
		$this->html = $tplHtml;
		$this->css = $tplCss;
		$this->js = $tplJs;
	}
}
