<?php
/*************************************************************************************************
 * Copyright 2019 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************/

$mod_strings = array(
	'com_vtiger_workflow' => 'Workflows',
	'SINGLE_com_vtiger_workflow' => 'Workflow',
	'VTEmailTask' => 'Trimite Email',
	'VTEntityMethodTask' => 'Invoke Custom Function',
	'VTCreateTodoTask' => 'Create Todo',
	'VTCreateEventTask' => 'Create Event',
	'VTSMSTask' => 'SMS Task',
	'LBL_EDIT_TASK' => 'Edit Task',
	'LBL_EDIT_TASK_TITLE' => 'Edit an existing task or create a new one',
	'LBL_EDIT_WORKFLOW' => 'Edit Workflow',
	'LBL_EDIT_WORKFLOW_TITLE' => 'Edit an existing workflow or create a one',
	'LBL_FROM_TEMPLATE' => 'From Template',
	'LBL_NEW_WORKFLOW' => 'New Workflow',
	'LBL_NEW_TEMPLATE' => 'Save as Template',
	'LBL_CREATE_WORKFLOW_FOR' => 'Create a workflow for',
	'LBL_FOR_MODULE' => 'For Module',
	'LBL_CHOOSE_A_TEMPLATE' => 'Choose a template',
	'LBL_VALIDATION_MISSING_MANDATORY_FIELDS' => 'There are empty mandatory fields.',
	'LBL_VALIDATION_INVALID_DATE_RANGE' => 'Start date/time is greater than the end date/time',
	'LBL_ERROR_NO_WORKFLOW' => 'The workflow you requested does not exist',
	'LBL_ERROR_NO_TASK' => 'The task you requested does not exist',
	'LBL_ERROR_NOT_ADMIN' => 'You do not have access to this module as you are not an admin user',
	'LBL_CREATE_WORKFLOW' => 'Create workflow',
	'LBL_WORKFLOW_LIST' => 'Workflow List',
	'LBL_AVAILABLE_WORKLIST_LIST' => 'Available Workflows',
	'LBL_LOADING' => 'Loading...',
	'LBL_REEVALCONDITIONS' => 'Evaluate conditions on delayed execution',
	'LBL_VALIDATION_ERROR' => 'Validation Error',
	'LBL_SELECT_OPTION_DOTDOTDOT' => 'Select Option...',
	'LBL_WORKFLOW_NOTE_CRON_CONFIG' => 'NOTE: You should have Workflow cron script configured.',
	'LBL_NO_TEMPLATES' => 'No Templates',
	'LBL_SELECT' => 'Select',
	'LBL_SET_FIELD_VALUES' => 'Set Field Values',
	'LBL_ADD_FIELD' => 'Add Field',
	'LBL_USE_FIELD_VALUE_DASHDASH' => '-- Use Field Value --',
	'LBL_USE_FUNCTION_DASHDASH' => '-- Use Function --',
	'LBL_RAW_TEXT' => 'Raw Text',
	'LBL_FIELD' => 'Field',
	'LBL_EXPRESSION' => 'Expression',
	'LBL_SET_EXPRESSION' => 'Set Expression',
	'LBL_MANUAL' => 'System',
	'LBL_RECORD_ACCESS_CONTROL' => 'Record Access Control',
	'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL' => 'New Condition Group',
	'VTUpdateFieldsTask' => 'Update Fields',
	'LBL_ON_DELETE' => 'On Delete',
	'LBL_VALIDATION_DUPLICATE_FIELDNAMES' => 'Same field selected more than once.',
	'LBL_VALIDATION_INVALID_FIELD_VALUES' => 'Invalid field values',
	'LBL_CREATE_ENTITY_NOTE_ORDER_MATTERS' => 'Note: Expressions will be evaluated in the order of the field values provided.
											So make sure to provide value for a field before using it in expressions.',
	'LBL_CREATE_ENTITY_NOTE_BUSINESSMAPS' => 'Note: You can use a Field Business Map to map fields from one entity to the other, in that case the business map definitions will overwrite the ones defined here.',
	'LBL_SET_VALUE' => 'Set Value',
	'LBL_EMAIL_RECIPIENT' => 'Recipient',
	'LBL_EMAIL_CC' => 'CC',
	'LBL_EMAIL_BCC' => 'BCC',
	'LBL_EMAIL_SUBJECT' => 'Subject',
	'LBL_EMAIL_FROMNAME' => 'From Name',
	'LBL_EMAIL_FROMEMAIL' => 'From Email',
	'LBL_EMAIL_REPLYTO' => 'Reply To',
	'LBL_AttachmentInField' => 'Attachment In Field',
	'LBL_WORKFLOW_NOTE_EVENT_TASK_TIMEZONE' => 'Note: All the date, time and recurring information configured for the event,
													will be with respect to default time zone, configured in config.inc.php',
	'Select Meta Variables' => 'Select Meta Variables',
	'Current Date' => 'Current Date',
	'Current Time' => 'Current Time',
	'System Timezone' => 'System Timezone',
	'User Timezone' => 'User Timezone',
	'CRM Detail View URL' => 'CRM Detail View URL',
	'Portal Detail View URL' => 'Portal Detail View URL',
	'Site Url' => 'Site Url',
	'Portal Url' => 'Portal Url',
	'groupEmailList' => 'Group Email List',
	'Workflow' => 'Workflow',
	'VTCreateEntityTask' => 'Create Entity',
	'LBL_ENTITY_TYPE' => 'Entity Type',
	'LBL_SELECT_ENTITY_TYPE' => '-- Select Entity Type --',
	'Assigned User' => 'Assigned User',
	'LBL_NO_ENTITIES_FOUND' => 'No Entities Found to Create',
	'LBL_PARENT_OWNER' => 'Parent Record Owner',
	'LBL_SPECIAL_OPTIONS' => 'Special Options',
	'CBTagTask' => 'Add/Delete Tag',
	'Add Tag' => 'Add Tag',
	'Delete Tag' => 'Delete Tag',
	'Tags' => 'Tags',
	'ForAllUsers' => 'For All Users',
	'ForCurrentUser' => 'Only For Current User',
	'CBRelateSales' => 'Relate Product/Service',
	'Relate Product' => 'Relate Product',
	'Relate Service' => 'Relate Service',
	'Relate with AccountVendor' => 'Relate with Account/Vendor',
	'Relate with Contact' => 'Relate with Contact',
	'CBDeleteRelatedTask' => 'Delete Related Records',
	'CBAssignRelatedTask' => 'Assign Related Records',
	'CBSelectcbMap' => 'Select Business Rule',
	'ConvertInventoryModule' => 'Convert Inventory Module Records',
	'ConvertInventoryModuleMessage' => 'The field mappings is the default application mapping and can be adjusted using Field Mapping Business Rules.',
	'LBL_EVENTNAME' => 'Event Name',
	'LBL_DESCRIPTION' => 'Description',
	'LBL_STATUS' => 'Status',
	'LBL_TYPE' => 'Type',
	'LBL_START_TIME' => 'Start Time',
	'LBL_START_DATE' => 'Start Date',
	'LBL_END_TIME' => 'End Time',
	'LBL_END_DATE' => 'End Date',
	'LBL_SET_DATE' => 'Set Date',
	'LBL_AFTER' => 'After',
	'LBL_BEFORE' => 'Before',
	'LBL_DAYS' => 'days',
	'LBL_HELPDESK_SUPPORT_EMAILID' => 'Helpdesk Support Email-Id',
	'LBL_HELPDESK_SUPPORT_NAME' => 'Helpdesk Support Name',
	'LBL_ORGANIZATION_LOGO' => 'Company Logo',
	'LBL_RUN_WORKFLOW' => 'Run Workflow',
	'LBL_AT_TIME' => 'At Time',
	'LBL_HOURLY' => 'Hourly',
	'LBL_DAILY' => 'Daily',
	'LBL_WEEKLY' => 'Weekly',
	'LBL_ON_THESE_DAYS' => 'On these days',
	'LBL_MONTHLY_BY_DATE' => 'Monthly by Date',
	'LBL_MONTHLY_BY_WEEKDAY' => 'Monthly by Weekday',
	'LBL_YEARLY' => 'Yearly',
	'LBL_MINUTES_INTERVAL' => 'Minute Interval',
	'LBL_EVERY_MINUTEINTERVAL' => 'Every',
	'LBL_MINUTES' => 'minutes',
	'LBL_SPECIFIC_DATE' => 'On Specific Date',
	'LBL_CHOOSE_DATE' => 'Choose Date',
	'LBL_SELECT_MONTH_AND_DAY' => 'Select Month and Date',
	'LBL_SELECTED_DATES' => 'Selected Dates',
	'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Maximum limit exceeded',
	'LBL_NEXT_TRIGGER_TIME' => 'Next trigger time on',
	'LBL_MESSAGE' => 'Message',
	'UpdateInventoryProducts On Every Save' => 'Update Product Inventory',
	'Send Email to user when Notifyowner is True' => 'Send Email to user when Notifyowner is True',
	'Send Email to user when Portal User is True' => 'Send Email to user when Portal User is True',
	'Send Email to users on Potential creation' => 'Send Email to user on Opportunity creation',
	'Workflow for Contact Creation or Modification' => 'Send Email to Contact with Portal Login information',
	'Workflow for Ticket Created from Portal' => 'Workflow for Ticket Created from Portal',
	'Workflow for Ticket Updated from Portal' => 'Workflow for Ticket Updated from Portal',
	'Workflow for Ticket Change, not from the Portal' => 'Workflow for Ticket Change, not from the Portal',
	'Workflow for Events when Send Notification is True' => 'Workflow for Events when Send Notification is True',
	'Workflow for Calendar Todos when Send Notification is True' => 'Workflow for Calendar Todos when Send Notification is True',
	'Calculate or Update forecast amount' => 'Calculate or Update forecast amount',
	'LBL_METHOD_NAME' => 'Method Name',
	'NO_METHOD_AVAILABLE' => 'No method is available for this module.',
	'CBPushNotificationTask' => 'Push Notification',
	'pushnoturl' => 'Push Notification URL',
	'CBQuestionMViewFunction' => 'Update Materialized View',
	'LBL_WHERE_TO_SAVE' => 'Where to Save:',
	'LBL_WHAT_TO_ENCODE' => 'What to Encode',
	'Select Field to Save Encoded Value' => 'Select Field to Save Encoded Value',
	'Select Field to Encode' => 'Select Field to Encode',
	'Encoding Type' => 'Encoding Type',
	'Select Encoding Type' => 'Select Encoding Type',
	'Generate Image Code' => 'Generate Image Code',
	'Generate Image Code Workflow Task' => 'Generate Image Code Workflow Task',
	'GenerateImageCodeWorkflowTask' => 'Generate Image Code Workflow Task',
);
?>