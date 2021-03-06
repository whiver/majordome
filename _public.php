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

global $core;

// Register new specific Majordome's template tags
$core->tpl->addValue('FormName', array('formView','formName'));
$core->tpl->addValue('FormDescription', array('formView','formDescription'));
$core->tpl->addValue('FormURL', array('formView','formURL'));
$core->tpl->addValue('FormItemLabel', array('formView','formItemLabel'));
$core->tpl->addValue('FormItemField', array('formView','formItemField'));
$core->tpl->addValue('FormItemDescription', array('formView','formItemDescription'));
$core->tpl->addValue('FormItemId', array('formView','formItemId'));
$core->tpl->addValue('FormItemType', array('formView','formItemType'));
$core->tpl->addValue('FormErrorMsg', array('formView','formErrorMsg'));
$core->tpl->addValue('FormSuccessMsg', array('formView','formSuccessMsg'));

$core->tpl->addBlock('FormItems', array('formView','formItems'));
$core->tpl->addBlock('FormItemIf', array('formView','formItemIf'));
