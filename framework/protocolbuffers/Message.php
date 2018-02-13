<?php
namespace framework\protocolbuffers;

use framework\components\ToolsAbstract;
use service\Tools\Tools;

/**
 * Created by PhpStorm.
 * User: henryzhu
 * Date: 16-12-12
 * Time: 下午12:57
 * Email: henryzxj1989@gmail.com
 */
abstract class Message extends \ProtobufMessage
{
    public static function __callStatic($name, $arguments)
    {
//        ToolsAbstract::log(func_get_args());
    }

    /**
     * batch assign method
     *
     * @param array $params
     */
    public function setFrom(array $params)
    {
        $class = new \ReflectionClass(get_called_class());
        $fields = $this->fields();
        foreach ($params as $key => $value) {
            $pos = $class->getConstant($key);
            $type = $fields[$pos]['type'];
            $repeated = false;
            if (isset($fields[$pos]['repeated']) && $fields[$pos]['repeated'] === true) {
                $repeated = true;
            }
            if (is_int($type)) {
                if ($repeated === true) {
                    if (is_array($value)) {
                        foreach ($value as $_value) {
                            $this->append($pos, $_value);
                        }
                    } else {
                        $this->append($pos, $value);
                    }
                } else {
                    $this->set($pos, $value);
                }
            } else {
                if ($repeated === true) {
                    if (is_array($value)) {
                        foreach ($value as $_value) {
                            /** @var Message $fieldValue */
                            $fieldValue = new $type;
                            $fieldValue->setFrom($_value);
                            $this->append($pos, $fieldValue);
                        }
                    } else {
                        /** @var Message $fieldValue */
                        $fieldValue = new $type;
                        $fieldValue->setFrom($value);
                        $this->append($pos, $fieldValue);
                    }
                } else {
                    /** @var Message $fieldValue */
                    $fieldValue = new $type;
                    $fieldValue->setFrom($value);
                    $this->set($pos, $fieldValue);
                }
            }
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @param bool $onlySet
     * @return array
     */
    public function toArray($onlySet = true)
    {
        $arr = [];
        foreach ($this->fields() as $pos => $field) {
            $_field = $this->get($pos);
            if (is_array($_field)) {
                foreach ($_field as $__field) {
                    if ($__field instanceof \framework\protocolbuffers\Message) {
                        $arr[$field['name']][] = $__field->toArray($onlySet);
                    } else {
//                        ToolsAbstract::log('lost');
                    }
                }
            } else if ($_field instanceof \framework\protocolbuffers\Message) {
                $arr[$field['name']] = $_field->toArray($onlySet);
            } else {
                if (isset($_field) || (!isset($_field) && $onlySet === false)) {
                    $arr[$field['name']] = $_field;
                } else {
                    //ignore unset value
                }
            }
        }
        return $arr;
    }

    public abstract function fields();

}