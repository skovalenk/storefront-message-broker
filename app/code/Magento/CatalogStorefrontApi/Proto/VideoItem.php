<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.VideoItem</code>
 */
class VideoItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string video_provider = 1;</code>
     */
    protected $video_provider = '';
    /**
     * Generated from protobuf field <code>string video_url = 2;</code>
     */
    protected $video_url = '';
    /**
     * Generated from protobuf field <code>string video_title = 3;</code>
     */
    protected $video_title = '';
    /**
     * Generated from protobuf field <code>string video_description = 4;</code>
     */
    protected $video_description = '';
    /**
     * Generated from protobuf field <code>string video_metadata = 5;</code>
     */
    protected $video_metadata = '';
    /**
     * Generated from protobuf field <code>string media_type = 6;</code>
     */
    protected $media_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $video_provider
     *     @type string $video_url
     *     @type string $video_title
     *     @type string $video_description
     *     @type string $video_metadata
     *     @type string $media_type
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string video_provider = 1;</code>
     * @return string
     */
    public function getVideoProvider()
    {
        return $this->video_provider;
    }

    /**
     * Generated from protobuf field <code>string video_provider = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoProvider($var)
    {
        GPBUtil::checkString($var, true);
        $this->video_provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string video_url = 2;</code>
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->video_url;
    }

    /**
     * Generated from protobuf field <code>string video_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->video_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string video_title = 3;</code>
     * @return string
     */
    public function getVideoTitle()
    {
        return $this->video_title;
    }

    /**
     * Generated from protobuf field <code>string video_title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoTitle($var)
    {
        GPBUtil::checkString($var, true);
        $this->video_title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string video_description = 4;</code>
     * @return string
     */
    public function getVideoDescription()
    {
        return $this->video_description;
    }

    /**
     * Generated from protobuf field <code>string video_description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoDescription($var)
    {
        GPBUtil::checkString($var, true);
        $this->video_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string video_metadata = 5;</code>
     * @return string
     */
    public function getVideoMetadata()
    {
        return $this->video_metadata;
    }

    /**
     * Generated from protobuf field <code>string video_metadata = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoMetadata($var)
    {
        GPBUtil::checkString($var, true);
        $this->video_metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string media_type = 6;</code>
     * @return string
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Generated from protobuf field <code>string media_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMediaType($var)
    {
        GPBUtil::checkString($var, true);
        $this->media_type = $var;

        return $this;
    }
}
