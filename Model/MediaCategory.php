<?php
/**
 * MediaCategory.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.39
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the MediaCategory model.
 *
 * @author  OpenAPI Generator team
 */
class MediaCategory
{
  /**
   * ID of the category.
   *
   * @var int|null
   * @SerializedName("id")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $id;

  /**
   * Name of the category.
   *
   * @var string|null
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * Shows how important a category is (0 is the least priority).
   *
   * @var int|null
   * @SerializedName("priority")
   * @Assert\Type("int")
   * @Type("int")
   * @Assert\GreaterThanOrEqual(0)
   */
  protected $priority;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->priority = isset($data['priority']) ? $data['priority'] : null;
  }

  /**
   * Gets id.
   *
   * @return int|null
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param int|null $id ID of the category
   *
   * @return $this
   */
  public function setId(int $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets name.
   *
   * @return string|null
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @param string|null $name Name of the category
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets priority.
   *
   * @return int|null
   */
  public function getPriority()
  {
    return $this->priority;
  }

  /**
   * Sets priority.
   *
   * @param int|null $priority Shows how important a category is (0 is the least priority)
   *
   * @return $this
   */
  public function setPriority(int $priority = null)
  {
    $this->priority = $priority;

    return $this;
  }
}
