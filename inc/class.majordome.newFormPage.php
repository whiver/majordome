<?php
/*******************************************************************************
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2015 William Hiver
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 ******************************************************************************/
__('Create a new form');

class newFormPage extends page
{
	function __construct($view)
	{
    	parent::__construct($view, 'newForm', 'Create a new form');
    	global $core;
    	
    	// Add Formbuilder dependencies
    	$this->view->add_js(dcPage::getPF('/majordome/vendor/vendor.js'));
    	$this->view->add_js(dcPage::getPF('/majordome/js/formbuilder/dist/formbuilder.js'));
    	$this->view->add_css(dcPage::getPF('/majordome/vendor/vendor.css'));
    	$this->view->add_css(dcPage::getPF('/majordome/js/formbuilder/dist/formbuilder.css'));
		dcPage::cssLoad(dcPage::getPF('/majordome/js/formbuilder/dist/formbuilder.css'));
    	
    	// Run Formbuilder
    	$this->view->add_js(dcPage::getPF('/majordome/js/majordome.newform.js'));
	}
    
    public function content()
    {
        return '<h3>' . $this->title . '</h3>' .
          '<div id="newform-builder"></div>';
    }
}
