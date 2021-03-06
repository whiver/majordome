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

if (!defined('DC_RC_PATH')) { return; }

global $__autoload;
$__autoload['majordome'] = dirname(__FILE__).'/inc/lib.majordome.php';
$__autoload['majordomeDBHandler'] = dirname(__FILE__).'/inc/class.majordome.db.handler.php';
$__autoload['view'] = dirname(__FILE__).'/inc/class.majordome.view.php';
$__autoload['page'] = dirname(__FILE__).'/inc/class.majordome.page.php';
$__autoload['editPage'] = dirname(__FILE__).'/inc/class.majordome.editPage.php';
$__autoload['homePage'] = dirname(__FILE__).'/inc/class.majordome.homePage.php';
$__autoload['answerPage'] = dirname(__FILE__).'/inc/class.majordome.answerPage.php';

$__autoload['formView'] = dirname(__FILE__).'/inc/class.majordome.formView.php';
$__autoload['formField'] = dirname(__FILE__).'/inc/fields/class.majordome.formField.php';
$__autoload['formTextField'] = dirname(__FILE__).'/inc/fields/class.majordome.formTextField.php';
$__autoload['formCheckboxField'] = dirname(__FILE__).'/inc/fields/class.majordome.formCheckboxField.php';
$__autoload['formDateField'] = dirname(__FILE__).'/inc/fields/class.majordome.formDateField.php';
$__autoload['formTimeField'] = dirname(__FILE__).'/inc/fields/class.majordome.formTimeField.php';
$__autoload['formWebsiteField'] = dirname(__FILE__).'/inc/fields/class.majordome.formWebsiteField.php';
$__autoload['formTextareaField'] = dirname(__FILE__).'/inc/fields/class.majordome.formTextareaField.php';
$__autoload['formRadioField'] = dirname(__FILE__).'/inc/fields/class.majordome.formRadioField.php';
$__autoload['formDropdownField'] = dirname(__FILE__).'/inc/fields/class.majordome.formDropdownField.php';
$__autoload['formNumberField'] = dirname(__FILE__).'/inc/fields/class.majordome.formNumberField.php';
$__autoload['formMailField'] = dirname(__FILE__).'/inc/fields/class.majordome.formMailField.php';
$__autoload['formCaptchaField'] = dirname(__FILE__).'/inc/fields/class.majordome.formCaptchaField.php';
$__autoload['formSubmitField'] = dirname(__FILE__).'/inc/fields/class.majordome.formSubmitField.php';
$__autoload['formResetField'] = dirname(__FILE__).'/inc/fields/class.majordome.formResetField.php';

$__autoload['majordomeDataHandler'] = dirname(__FILE__).'/inc/lib.majordomeDataHandler.php';
$__autoload['internalHandler'] = dirname(__FILE__).'/inc/handlers/class.majordome.internalHandler.php';

// Register Majordome's public URLs
$core->url->register('majordome_view','form','^form/(.+)$',array('formView','handleURL'));

// Register Majordome's default data handlers
majordome::registerDataHandler('internalHandler');
