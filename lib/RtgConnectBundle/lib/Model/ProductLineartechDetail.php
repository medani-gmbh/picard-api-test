<?php
/**
 * ProductLineartechDetail
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RtgConnector\RtgConnectBundle
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * RTG-Portal
 *
 * The RTG-Portal API is an interface for selected RTG-Shop customers.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: fabian.kaufmann@picard.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RtgConnector\RtgConnectBundle\Model;

use \ArrayAccess;
use \RtgConnector\RtgConnectBundle\ObjectSerializer;

/**
 * ProductLineartechDetail Class Doc Comment
 *
 * @category Class
 * @package  RtgConnector\RtgConnectBundle
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductLineartechDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductLineartechDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'productId' => 'int',
        'type' => 'int',
        'length' => 'int',
        'minLengthLeft' => 'int',
        'maxLengthLeft' => 'int',
        'lengthToHole' => 'int',
        'height' => 'int',
        'width' => 'int',
        'holeDiameter' => 'float',
        'thread' => 'int',
        'numberHoles' => 'int',
        'sketch' => 'string',
        'schemaFilter' => 'string',
        'weight' => 'float',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'deletedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'productId' => null,
        'type' => null,
        'length' => null,
        'minLengthLeft' => null,
        'maxLengthLeft' => null,
        'lengthToHole' => null,
        'height' => null,
        'width' => null,
        'holeDiameter' => 'float',
        'thread' => null,
        'numberHoles' => null,
        'sketch' => null,
        'schemaFilter' => null,
        'weight' => 'float',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'deletedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productId' => false,
		'type' => false,
		'length' => false,
		'minLengthLeft' => false,
		'maxLengthLeft' => false,
		'lengthToHole' => false,
		'height' => false,
		'width' => false,
		'holeDiameter' => false,
		'thread' => false,
		'numberHoles' => false,
		'sketch' => false,
		'schemaFilter' => false,
		'weight' => false,
		'createdAt' => false,
		'updatedAt' => true,
		'deletedAt' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'productId' => 'product_id',
        'type' => 'type',
        'length' => 'length',
        'minLengthLeft' => 'minLengthLeft',
        'maxLengthLeft' => 'maxLengthLeft',
        'lengthToHole' => 'lengthToHole',
        'height' => 'height',
        'width' => 'width',
        'holeDiameter' => 'holeDiameter',
        'thread' => 'thread',
        'numberHoles' => 'numberHoles',
        'sketch' => 'sketch',
        'schemaFilter' => 'schemaFilter',
        'weight' => 'weight',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'deletedAt' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productId' => 'setProductId',
        'type' => 'setType',
        'length' => 'setLength',
        'minLengthLeft' => 'setMinLengthLeft',
        'maxLengthLeft' => 'setMaxLengthLeft',
        'lengthToHole' => 'setLengthToHole',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'holeDiameter' => 'setHoleDiameter',
        'thread' => 'setThread',
        'numberHoles' => 'setNumberHoles',
        'sketch' => 'setSketch',
        'schemaFilter' => 'setSchemaFilter',
        'weight' => 'setWeight',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'deletedAt' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productId' => 'getProductId',
        'type' => 'getType',
        'length' => 'getLength',
        'minLengthLeft' => 'getMinLengthLeft',
        'maxLengthLeft' => 'getMaxLengthLeft',
        'lengthToHole' => 'getLengthToHole',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'holeDiameter' => 'getHoleDiameter',
        'thread' => 'getThread',
        'numberHoles' => 'getNumberHoles',
        'sketch' => 'getSketch',
        'schemaFilter' => 'getSchemaFilter',
        'weight' => 'getWeight',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'deletedAt' => 'getDeletedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('minLengthLeft', $data ?? [], null);
        $this->setIfExists('maxLengthLeft', $data ?? [], null);
        $this->setIfExists('lengthToHole', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('holeDiameter', $data ?? [], null);
        $this->setIfExists('thread', $data ?? [], null);
        $this->setIfExists('numberHoles', $data ?? [], null);
        $this->setIfExists('sketch', $data ?? [], null);
        $this->setIfExists('schemaFilter', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('deletedAt', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets productId
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int|null $productId productId
     *
     * @return self
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            throw new \InvalidArgumentException('non-nullable productId cannot be null');
        }
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets minLengthLeft
     *
     * @return int|null
     */
    public function getMinLengthLeft()
    {
        return $this->container['minLengthLeft'];
    }

    /**
     * Sets minLengthLeft
     *
     * @param int|null $minLengthLeft minLengthLeft
     *
     * @return self
     */
    public function setMinLengthLeft($minLengthLeft)
    {
        if (is_null($minLengthLeft)) {
            throw new \InvalidArgumentException('non-nullable minLengthLeft cannot be null');
        }
        $this->container['minLengthLeft'] = $minLengthLeft;

        return $this;
    }

    /**
     * Gets maxLengthLeft
     *
     * @return int|null
     */
    public function getMaxLengthLeft()
    {
        return $this->container['maxLengthLeft'];
    }

    /**
     * Sets maxLengthLeft
     *
     * @param int|null $maxLengthLeft maxLengthLeft
     *
     * @return self
     */
    public function setMaxLengthLeft($maxLengthLeft)
    {
        if (is_null($maxLengthLeft)) {
            throw new \InvalidArgumentException('non-nullable maxLengthLeft cannot be null');
        }
        $this->container['maxLengthLeft'] = $maxLengthLeft;

        return $this;
    }

    /**
     * Gets lengthToHole
     *
     * @return int|null
     */
    public function getLengthToHole()
    {
        return $this->container['lengthToHole'];
    }

    /**
     * Sets lengthToHole
     *
     * @param int|null $lengthToHole lengthToHole
     *
     * @return self
     */
    public function setLengthToHole($lengthToHole)
    {
        if (is_null($lengthToHole)) {
            throw new \InvalidArgumentException('non-nullable lengthToHole cannot be null');
        }
        $this->container['lengthToHole'] = $lengthToHole;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets holeDiameter
     *
     * @return float|null
     */
    public function getHoleDiameter()
    {
        return $this->container['holeDiameter'];
    }

    /**
     * Sets holeDiameter
     *
     * @param float|null $holeDiameter holeDiameter
     *
     * @return self
     */
    public function setHoleDiameter($holeDiameter)
    {
        if (is_null($holeDiameter)) {
            throw new \InvalidArgumentException('non-nullable holeDiameter cannot be null');
        }
        $this->container['holeDiameter'] = $holeDiameter;

        return $this;
    }

    /**
     * Gets thread
     *
     * @return int|null
     */
    public function getThread()
    {
        return $this->container['thread'];
    }

    /**
     * Sets thread
     *
     * @param int|null $thread thread
     *
     * @return self
     */
    public function setThread($thread)
    {
        if (is_null($thread)) {
            throw new \InvalidArgumentException('non-nullable thread cannot be null');
        }
        $this->container['thread'] = $thread;

        return $this;
    }

    /**
     * Gets numberHoles
     *
     * @return int|null
     */
    public function getNumberHoles()
    {
        return $this->container['numberHoles'];
    }

    /**
     * Sets numberHoles
     *
     * @param int|null $numberHoles numberHoles
     *
     * @return self
     */
    public function setNumberHoles($numberHoles)
    {
        if (is_null($numberHoles)) {
            throw new \InvalidArgumentException('non-nullable numberHoles cannot be null');
        }
        $this->container['numberHoles'] = $numberHoles;

        return $this;
    }

    /**
     * Gets sketch
     *
     * @return string|null
     */
    public function getSketch()
    {
        return $this->container['sketch'];
    }

    /**
     * Sets sketch
     *
     * @param string|null $sketch sketch
     *
     * @return self
     */
    public function setSketch($sketch)
    {
        if (is_null($sketch)) {
            throw new \InvalidArgumentException('non-nullable sketch cannot be null');
        }
        $this->container['sketch'] = $sketch;

        return $this;
    }

    /**
     * Gets schemaFilter
     *
     * @return string|null
     */
    public function getSchemaFilter()
    {
        return $this->container['schemaFilter'];
    }

    /**
     * Sets schemaFilter
     *
     * @param string|null $schemaFilter schemaFilter
     *
     * @return self
     */
    public function setSchemaFilter($schemaFilter)
    {
        if (is_null($schemaFilter)) {
            throw new \InvalidArgumentException('non-nullable schemaFilter cannot be null');
        }
        $this->container['schemaFilter'] = $schemaFilter;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'updatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets deletedAt
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
     * Sets deletedAt
     *
     * @param \DateTime|null $deletedAt deletedAt
     *
     * @return self
     */
    public function setDeletedAt($deletedAt)
    {
        if (is_null($deletedAt)) {
            array_push($this->openAPINullablesSetToNull, 'deletedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deletedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deletedAt'] = $deletedAt;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


