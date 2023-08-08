<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Speech;

class CustomClass extends \Google\Collection
{
  protected $collection_key = 'items';
  /**
   * @var string
   */
  public $customClassId;
  protected $itemsType = ClassItem::class;
  protected $itemsDataType = 'array';
  /**
   * @var string
   */
  public $kmsKeyName;
  /**
   * @var string
   */
  public $kmsKeyVersionName;
  /**
   * @var string
   */
  public $name;

  /**
   * @param string
   */
  public function setCustomClassId($customClassId)
  {
    $this->customClassId = $customClassId;
  }
  /**
   * @return string
   */
  public function getCustomClassId()
  {
    return $this->customClassId;
  }
  /**
   * @param ClassItem[]
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return ClassItem[]
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * @param string
   */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /**
   * @return string
   */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
  /**
   * @param string
   */
  public function setKmsKeyVersionName($kmsKeyVersionName)
  {
    $this->kmsKeyVersionName = $kmsKeyVersionName;
  }
  /**
   * @return string
   */
  public function getKmsKeyVersionName()
  {
    return $this->kmsKeyVersionName;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomClass::class, 'Google_Service_Speech_CustomClass');
