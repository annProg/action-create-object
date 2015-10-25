<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2015 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(

  'Class:ActionCreateObject' => 'Object creation',
  'Class:ActionCreateObject+' => 'Action object creation',
  'Class:ActionCreateObject/Attribute:obj_class' => 'Object class',
  'Class:ActionCreateObject/Attribute:obj_class+' => 'Class of object to create',

  'Class:ActionCreateFromTemplate' => 'Object creation from template',
  'Class:ActionCreateFromTemplate+' => 'Action create object from template',
  'Class:ActionCreateFromTemplate/Attribute:mapped_fields_list' => 'Field mapping',
  'Class:ActionCreateFromTemplate/Attribute:mapped_fields_list+' => 'The field mapping object and template',

  'Class:MappedField' => 'Mapped Field',
  'Class:MappedField+' => 'Mapped Field (mapping to create an object from template)',
  'Class:MappedField/Attribute:action_id' => 'Action',
  'Class:MappedField/Attribute:action_id+' => 'Action create object from template',
  'Class:MappedField/Attribute:action_class' => 'Object class',
  'Class:MappedField/Attribute:action_class+' => 'Class of object to create',
  'Class:MappedField/Attribute:mapped_attcode' => 'Attribute',
  'Class:MappedField/Attribute:mapped_attcode+' => 'The attribute code of the object being created (name, team_id, etc.)',
  'Class:MappedField/Attribute:mapped_value' => 'Value',
  'Class:MappedField/Attribute:mapped_value+' => 'The value of an attribute, you can use the placeholders $this->att_code$',

));

