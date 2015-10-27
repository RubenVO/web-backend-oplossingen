<?php 
	class HTMLBuilder
	{

		protected $header;
		protected $body;
		protected $footer;

		public function __construct($header, $body, $footer)
		{
			$this->header = $header; 
			$this->body   = $body;
			$this->footer = $footer;
		}

		public function buildHeader()
		{
			$cssLinks = $this->makeCssLink("global.css");

			include "html/" . $this->header;
		}

		public function buildBody()
		{
			include "html/" . $this->body;
		}

		public function buildFooter()
		{
			$jsScripts = $this->makeJsLink("script.js");

			include "html/" . $this->footer;
		}

		public function makeCssLink($fileName)
		{
			return '<link rel="stylesheet" type="text/css" href="css/' . $fileName . '">';
		}

		public function makeJsLink($fileName)
		{
			return '<script src="js/' . $fileName . '"></script>';;
		}

	}
?>