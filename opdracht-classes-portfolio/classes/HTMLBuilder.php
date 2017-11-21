<?php

    class HTMLBuilder {
        
        protected $header;
		protected $body;
		protected $footer;
	
		public function __construct($header, $body, $footer)
		{
			$this->header =	$header;
			$this->body = $body;
			$this->footer =	$footer;
			
			$this->buildHeader();
			$this->buildBody();
			$this->buildFooter();
		}
        
        function buildHeader() {
            echo '<head>
                <meta charset="UTF-8">
                <title>Document</title>
                <link rel="stylesheet" href="css/global.css">
            </head>';
            include 'html/' . $this->header . '.partial.php';
        }
        
        function buildBody() {
            include 'html/' . $this->body . '.partial.php';
        }
        
        function buildFooter() {
            include 'html/' . $this->footer . '.partial.php';
            echo '<script src="js/script.js"></script>';
        }
        
    }

?>