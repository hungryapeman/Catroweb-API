<?php
/**
 * MediaFiles.
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
 * The version of the OpenAPI document: v1.0.37
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
 * Class representing the MediaFiles model.
 *
 * @author  OpenAPI Generator team
 */
class MediaFiles
{
  /**
   * @var OpenAPI\Server\Model\MediaFile[]|null
   * @SerializedName("media_files")
   * @Assert\All({
   *     @Assert\Type("OpenAPI\Server\Model\MediaFile")
   * })
   * @Type("array<OpenAPI\Server\Model\MediaFile>")
   */
  protected $media_files;

  /**
   * Amount of overall files of this query not limited by limit or offset.
   *
   * @var int|null
   * @SerializedName("total_results")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $total_results;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->media_files = isset($data['media_files']) ? $data['media_files'] : null;
    $this->total_results = isset($data['total_results']) ? $data['total_results'] : null;
  }

  /**
   * Gets media_files.
   *
   * @return OpenAPI\Server\Model\MediaFile[]|null
   */
  public function getMediaFiles()
  {
    return $this->media_files;
  }

  /**
   * Sets media_files.
   *
   * @param OpenAPI\Server\Model\MediaFile[]|null $media_files
   *
   * @return $this
   */
  public function setMediaFiles(array $media_files = null)
  {
    $this->media_files = $media_files;

    return $this;
  }

  /**
   * Gets total_results.
   *
   * @return int|null
   */
  public function getTotalResults()
  {
    return $this->total_results;
  }

  /**
   * Sets total_results.
   *
   * @param int|null $total_results Amount of overall files of this query not limited by limit or offset
   *
   * @return $this
   */
  public function setTotalResults(int $total_results = null)
  {
    $this->total_results = $total_results;

    return $this;
  }
}
