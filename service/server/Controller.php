<?php

namespace service\server;

use Yii;


abstract class Controller
{

    protected $_client;
    protected $_traceId;


    /**新增
     * @var \service\message\common\Header
     */
    protected $_header;

    /**新增
     * @var Request
     */
    private $_request;
    /**
     * @var bool
     */
    protected $_remote;
    /**
     *
     * @param \ProtocolBuffers\Message $data
     *
     * @return mixed
     */
    public abstract function run($data);

    /**修改
     * @return mixed
     */
    public function getTraceId()
    {
        return $this->_header->getTraceId();
    }

    /**新增
     * @param $header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->_header = $header;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isRemote()
    {
        return $this->_request->isRemote();
    }

    /**新增
     * @param $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->_request = $request;
        return $this;
    }
}
